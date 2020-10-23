from selenium import webdriver as wd
from urllib.parse import unquote
from urllib.parse import quote
import urllib.request
import pandas as pd
from bs4 import BeautifulSoup as bs
import requests as rq
import re
import time
import os

def generate_dataframe_from_lists(lists: list, column_names: list):
    data = dict(zip(column_names, lists))
    return pd.DataFrame (data, columns=column_names)

######################################
# POBIERANIE LINKÓW I NAZW KATEGORII #
######################################

url = "https://desenio.pl/pl/plakaty"
categories_id = []
categories = []
urls = []
response = rq.get(url)
if response.status_code == 200:
    html_doc = response.text
    #print(html_doc)
    soup = bs(html_doc, 'html.parser')
    scripts = soup.find_all('script')
    #print(scripts)
    for script in scripts:
        try:
            title = ""
            url = ""
            is_title = False
            is_url = False
            for line in script.string.split('\n'):
                if "'title':" in line:
                    title = line.strip()
                    #print('\n' + line.strip())
                    is_title = True

                if "'url': '/pl/plakaty/" in line and not "rozmiary" in line:
                    url = line.strip()
                    #print(line.strip())
                    is_url = True

                if is_url and is_title:
                    #print(title)
                    categories.append(re.search("'title': '(.*)'", title).group(1))
                    urls.append(re.search("'url': '(.*)'", url).group(1))
                    is_title = False
                    is_url = False

        except AttributeError:
            continue

for i in range (len(categories)):
    categories_id.append(i)

##########################################################
# POBIERANIE LINKÓW I ID PRODUKTÓW ZGODNIE Z KATEGORIAMI #
##########################################################
product_category_id = []
product_id = []
product_url = []
for i in range(len(urls)):
    if i < len(urls)-1:            # jeśli ostatni to nie porównuj z kolejnym
        if urls[i] in urls[i+1]: # jeśli zawiera się w kolejnym to jest to nadkategoria i z niej nie pobieramy
            continue

    url = "https://desenio.pl" + urls[i]
    print(url)
    driver = wd.Chrome('chromedriver.exe')
    driver.get(url)
    try:                           #idk czy moze tak być
        #while True:
        for j in range(0):
            button = driver.find_element_by_id('more_of_it')
            button.click()
            time.sleep(1)           #być moze da sie lepiej
    except:
        pass

    soup = bs(driver.page_source, 'html.parser')
    products = soup.find_all(class_="PT_Wrapper product quickview pointer relative loading-bg eachGTM")
    for product in products:
        product_category_id.append(i)
        product_id.append(product.get("data-artnr"))
        product_url.append(product.a.get("href"))
        #print(str(i) + ", " + product.get("data-artnr") + ": " + product.a.get("href"))
    driver.close()
    print(len(product_url))
    #break                   #!!!!WYKOMENTOWAĆ (break tylko pod debug)
data = generate_dataframe_from_lists([product_id, product_category_id, product_url],
                                         ["PRODUCT_ID", "CATEGORY_ID",
                                          "URL"])
data.to_csv("products_URLS.csv", index=False)
########################################
# POBIERANIE DANYCH O KAZDYM PRODUKCIE #
########################################
product_title = []
product_description = []
product_sizes = []
product_prices = []
product_image = []
csv_part_size = 200
csv_part_path = 'csv_parts\\'
try:
    os.mkdir(csv_part_path)
except FileExistsError:
    pass

for i in range(len(product_url)):
    if divmod(i, csv_part_size)[1] == 0 and i != 0:
        print(product_id[i-csv_part_size:i])
        data = generate_dataframe_from_lists([product_id[i-csv_part_size:i],
                                              product_category_id[i-csv_part_size:i],
                                    product_title, product_description,
                                    product_sizes, product_prices,
                                    product_image],
                                   ["PRODUCT_ID", "CATEGORY_ID",
                                    "TITLE", "DESCRIPTION",
                                    "SIZES", "PRICES",
                                    "IMAGE"])
        data.to_csv(csv_part_path + "products" + str(divmod(i+1, csv_part_size)[0]) + ".csv", index=False)
        product_title = []
        product_description = []
        product_sizes = []
        product_prices = []
        product_image = []

    url = product_url[i]
    print("scrap: ", url)
    response = rq.get(url)
    if response.status_code == 200:
        html_doc = response.text
        # print(html_doc)
        soup = bs(html_doc, 'html.parser')

        #poberz tytuł
        title = soup.find(class_="medium-large-text weight-medium half-spacing-top").contents[0]
        #print(title)

        #pobierz opis
        desc_medium = soup.find(class_="medium-tiny-text spacing-top uppercase inline-block").contents
        desc_upper = soup.find(class_="uppercase medium-tiny-text raleway").contents
        if len(desc_upper) == 0: desc_upper.append("")
        desc_tiny = soup.find(class_="tiny-text block spacing-top").contents
        desc = desc_medium[0] + ";" + desc_upper[0] + ";" + desc_tiny[0]
        desc = desc.replace("\n", "").replace("\t", "")

        #print(product_description[-1])

        #pobierz rozmiary i ceny
        sizes = ""
        prices = ""
        prices_sizes_script = soup.find(text=re.compile("'size': '(.*cm)'"))
        for line in prices_sizes_script.string.split('\n'):
            if "'size':" in line:
                sizes += re.search("'size': '(.*cm)'", str(line)).group(1)
                sizes += ';'
            if "defaultPrice = " in line:
                prices += re.search("defaultPrice = '(.*)'", str(line)).group(1)
                prices += ';'
        sizes = sizes[:-1]
        prices = prices[:-1]
        #print(sizes, prices)

        #pobierz obrazy
        try:
            os.mkdir('images')
        except FileExistsError:
            pass
        try:
            image_src = "https://desenio.pl" + soup.find(class_="noFramePoster image-shadow")['src']
            image_src = re.search("(.*)\?", image_src).group(0)
            image_src = quote(image_src[:-1])
            file_name = re.search("zoom/(.*\.jpg)", image_src).group(1)
            image_src = "https://desenio.pl/bilder/artiklar/zoom/" + file_name
            file_path = 'images\\' + file_name
            print("image_src: ", image_src, "\nfile_path: ", file_path)
            urllib.request.urlretrieve(image_src, file_path)

            product_title.append(title)
            product_description.append(desc)
            product_sizes.append(sizes)
            product_prices.append(prices)
            product_image.append(file_name)
        except:
            print('error')
            product_title.append("ERROR")
            product_description.append("ERROR")
            product_sizes.append("ERROR")
            product_prices.append("ERROR")
            product_image.append("ERROR")

    else:
        print(url, " ", response.status_code)
        product_title.append("ERROR")
        product_description.append("ERROR")
        product_sizes.append("ERROR")
        product_prices.append("ERROR")
        product_image.append("ERROR")


df_categories = generate_dataframe_from_lists([categories_id, categories, urls],
                                              ["CATEGORY_ID", "TITLE", "URL"])
df_categories.to_csv("categories.csv", index=False)

# df_products = generate_dataframe_from_lists([product_id, product_category_id,
#                                     product_title, product_description,
#                                     product_sizes, product_prices,
#                                     product_image],
#                                    ["PRODUCT_ID", "CATEGORY_ID",
#                                     "TITLE", "DESCRIPTION",
#                                     "SIZES", "PRICES",
#                                     "IMAGE"])
# df_products.to_csv("products.csv", index=False)
