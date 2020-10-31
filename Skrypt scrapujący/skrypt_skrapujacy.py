from selenium import webdriver as wd
from unidecode import unidecode
from urllib.parse import unquote
from urllib.parse import quote
import urllib.request
import pandas as pd
from bs4 import BeautifulSoup as bs
import requests as rq
import re
import time
import os
import random

def generate_dataframe_from_lists(lists: list, column_names: list):
    data = dict(zip(column_names, lists))
    return pd.DataFrame (data, columns=column_names)

scrap_max_sub_c_number = 5
scrap_p_number_per_category = 30


##################################################
# POBIERANIE WIĘKSZOŚCI INFORMACJI O KATEGORIACH #
##################################################
# (aby uzyskać pozostałą część należy wejść w podstronę kategorii, czego tutaj nie robimy)

# DANE KATEGORII
c_id, c_active, c_name, c_parent, c_root, c_desc, c_meta_title, c_meta_keywords, c_meta_desc, c_url_rewritten, \
c_img_url = ([] for _ in range(11))

desenio_c_url = []
url = 'https://desenio.pl'

response = rq.get(url)
if response.status_code == 200:
    html_doc = response.text
    soup = bs(html_doc, 'html.parser')
    scripts = soup.find_all('script')
    for script in scripts:
        # wyciąganie odpowiednich wartości dla kategorii i podkategorii ze znaczników <script>
        script_id = re.search("'id': '(.*)',", str(script)).group(1) if re.search("'id': '(.*)',", str(script)) \
                                                                        is not None else ""
        script_parent = re.search("'parent': '(.*)',", str(script)).group(1) if re.search("'parent': '(.*)',", str(script)) \
                                                                        is not None else ""
        script_title = re.search("'title': '(.*)',", str(script)).group(1) if re.search("'title': '(.*)',", str(script)) \
                                                                        is not None else ""
        script_url = url + re.search("'url': '(.*)',", str(script)).group(1) if re.search("'url': '(.*)',", str(script)) \
                                                                        is not None else ""
        script_hasChildren = re.search("'hasChildren': '(.*)'", str(script)).group(1) if re.search("'hasChildren': '(.*)'", str(script)) \
                                                                        is not None else ""


        # sprawdzamy czy dana pozycja jest kategorią / podkategorią, która nas interesuje; jesli tak: dodajemy do list
        if(script_id != "" and script_parent == "" and script_hasChildren != "0" and script_title != "Galerie obrazów") \
            or (script_parent in c_id):             # Galerie obrazów, choć pasują do wymagań, nie umożliwiają zakupu produktów

            if len(c_name) > 0 \
            and script_parent != ""  \
                and c_name[c_id.index(script_parent)] != "Rozmiary" \
                    and c_parent.count(script_parent) >= scrap_max_sub_c_number:
                        continue  # jeśli nie są rozmiarami i rodzic ma już max_sub dzieci nie wykonuj dalej petli i przejdz dalej
            c_id.append(script_id)
            c_active.append(1)
            c_name.append(script_title)
            c_parent.append(script_parent if script_parent != "" else "Strona główna")   # nwm czy dla script_parent == "" dać "Home" !!!!
            c_root.append(0)
            c_url_rewritten.append(re.search("(?s:.*)/(.*)", script_url).group(1))
            c_img_url.append("")

            print(script_id, script_parent, script_title, script_url, script_hasChildren)

            desenio_c_url.append(script_url)
            # c_desc nie dodano - należy dodano przy scrapowaniu pojedynczych kategorii
            # c_meta_desc - to samo ^
            # c_meta_keywords - to samo ^

##########################################################
# POBIERANIE LINKÓW I ID PRODUKTÓW ZGODNIE Z KATEGORIAMI #
##########################################################
# (być może da sie bez drivera - chyba byłoby szybciej)
pass

# DANE PRODUKTÓW
p_id, p_active, p_name, p_categories, p_price_tax_excluded, p_tax_rules_id, p_wholesale_price, p_on_sale,\
p_discount_amount, p_discount_percent, p_discount_from, p_discount_to, p_reference, p_supplier_ref, p_supplier, p_manufacturer,\
p_ean13, p_upc, p_ecotax, p_width, p_height, p_depth, p_weight, p_delivery_time_in_stock, p_delivery_time_out_stock, \
p_quantity, p_min_quantity, p_low_stock_lvl, p_send_email_quantity, p_visibility, p_shipping_cost, p_unity, p_unit_price, \
p_summary, p_desc, p_tags, p_meta_title, p_meta_keywords, p_meta_desc, p_url_rewritten, p_text_in_stock, \
p_text_backorder, p_avail_order, p_avail_date, p_creation_date, p_show_price, p_img_urls, p_img_alttexts, \
p_img_delete, p_feature, p_avail_online_only, p_condition, p_customizable, p_uploadable_files, p_text_fields, \
p_out_action, p_virtual, p_file_url, p_nr_dl, p_exp_date, p_nr_of_days, p_shop_id_name, p_adv_stock_mgmt, \
p_dep_on_stock, p_warehouse, p_acessories = ([] for _ in range(66)) # ogarnąć które całe puste, wtedy podstawiać po prostu pustą xd

desenio_p_url = []

driver = wd.Chrome('chromedriver.exe')
driver.get("data:,")
main_window = driver.current_window_handle
for url in desenio_c_url:
    # sterownik chrome, aby móc kliknąć przycisk rozwinięcia strony
    driver.execute_script("window.open('');")
    driver.switch_to.window(driver.window_handles[1])
    driver.get(url)
    # klikaj dopóki dotrzesz do końca strony
    try:                           #idk czy moze tak być
        #while True:
        for j in range(int(round(scrap_p_number_per_category/37, 0))):
            button = driver.find_element_by_id('more_of_it')
            button.click()
            time.sleep(1)           #być moze da sie lepiej
    except:
        pass

    # pobierz dokument html
    soup = bs(driver.page_source, 'html.parser')
    driver.close()
    driver.switch_to.window(main_window)
    # wyciągnij metadane i opis kategorii
    c_meta_title.append(soup.find("meta", {"property": "og:title"})["content"])
    c_meta_desc.append(soup.find("meta", {"name": "description"})["content"])
    c_meta_keywords.append(soup.find("meta", {"name": "keywords"})["content"])
    c_desc.append(soup.find('div', {"class": "text"}).contents[0])
    print(c_meta_title[-1], c_meta_desc[-1], c_meta_keywords[-1], c_desc[-1])

    # wyciągnij dane produktów dostępne na stronie kategorii (id, kategorie, url do strony produktu, cena bez podatku)
    products = soup.find_all(class_="PT_Wrapper product quickview pointer relative loading-bg eachGTM")
    for product, i in zip(products, range(scrap_p_number_per_category)): # dla każdego produktu(gdy np. jest ich mało) lub do wybranej liczby produktów
        id = product.get("data-artnr")
        if id in p_id:
            n = p_id.index(id)
            p_categories[n] +="," + c_name[desenio_c_url.index(url)]
        else:
            p_id.append(id)
            p_categories.append(c_name[desenio_c_url.index(url)])
            desenio_p_url.append(product.a.get("href"))
            p_price_tax_excluded.append(round(float(product.get("data-price")) / 1.23, 2))
    #break   # do wykomentowania po debugu
driver.close()
# list_c = [c_id, c_active, c_name, c_parent, c_root, c_desc, c_meta_title, c_meta_keywords, c_meta_desc, c_url_rewritten, c_img_url]
# list_c_headers = ["Category ID", "Active (0/1)", "Name *", "Parent category", "Root category (0/1)", "Description", "Meta title", "Meta keywords", "Meta description", "URL rewritten", "Image URL"]
# df_c = generate_dataframe_from_lists(list_c, list_c_headers)
# df_c.to_csv("categories.csv")


########################################
# POBIERANIE DANYCH O KAZDYM PRODUKCIE #
########################################

#DANE KOMBINACJI
comb_p_id, comb_p_reference, comb_attribute, comb_value, comb_supplier_ref, comb_ref, comb_ean13, comb_upc, comb_wholesale_price, \
comb_price_impact, comb_ecotax, comb_quantity, comb_min_quantity, comb_low_stock_lvl, comb_send_email_quantity, comb_weight_impact, comb_default, \
comb_avail_date, comb_img_postion, comb_img_urls, comb_img_alttexts, comb_shop_id_name, comb_adv_stock_mgmt, \
comb_dep_on_stock, comb_warehouse = ([] for _ in range(25))

# tworzenie katalogu na pofragmentowanego CSV z danymi o produktach
csv_part_size = 200
csv_part_path = 'csv_parts\\'
try: os.mkdir(csv_part_path)
except FileExistsError: pass

# tworzenie katalogu na zdjęcia produktów
img_catalog_path = "images\\"
try: os.mkdir(img_catalog_path)
except FileExistsError: pass

# przejscie po stronie każdego produktu i wyciągnięcie interesujących nas informacji
for url in desenio_p_url:
    response = rq.get(url)
    if response.status_code == 200:
        html_doc = response.text
        soup = bs(html_doc, 'html.parser')
        n = desenio_p_url.index(url)

        #p_id
        p_active.append(1)
        p_name.append(soup.find(class_="medium-large-text weight-medium half-spacing-top").contents[0])
        #p_categories
        #p_price_tax_excluded
        p_tax_rules_id.append(1)
        p_wholesale_price.append("")
        p_on_sale.append("")
        p_discount_amount.append("")
        p_discount_percent.append("")
        p_discount_from.append("")
        p_discount_to.append("")
        p_reference.append(p_id[n])
        p_supplier_ref.append("")             # SUPPLIER??
        p_supplier.append("")                 # SUPPLIER??
        p_manufacturer.append("")             # MANUFACTURER??
        p_ean13.append("")
        p_upc.append("")
        p_ecotax.append(0)      # ?
        desenio_p_desc = next(iter(soup.find(class_="tiny-text block spacing-top").contents), "")
        p_width.append(round(float(re.search("Wymiary: (\d+)x",  desenio_p_desc + "Wymiary: 13x18").group(1))/100, 2))          # stałe? zmienne?
        p_height.append(round(float(re.search("Wymiary: \d+x(\d+)", desenio_p_desc + "Wymiary: 13x18").group(1))/100, 2))        #
        p_depth.append(round(float(re.search("Głębokość: (\d+)", desenio_p_desc + "Głębokość: 21 mm").group(1))/1000, 3))       #
        p_weight.append(round(float(re.search("Masa: (\d+,?\d+?) kg",desenio_p_desc + "Masa: 0,18 kg").group(1).replace(",", ".")), 3))       #
        p_delivery_time_in_stock.append(next(iter(soup.find(class_="changeableDelivery").contents), ""))
        p_delivery_time_out_stock.append(next(iter(soup.find(class_="changeableDelivery").contents), ""))
        p_quantity.append(100)       # bedzie działać?
        p_min_quantity.append(1)
        p_low_stock_lvl.append(0)
        p_send_email_quantity.append(0)
        p_visibility.append("both")
        p_shipping_cost.append("")
        p_unity.append("")
        p_unit_price.append("")
        p_summary.append((next(iter(soup.find(class_="medium-tiny-text spacing-top uppercase inline-block").contents), "") +
                         next(iter(soup.find(class_="uppercase medium-tiny-text raleway").contents), "")).replace("\n", "").replace("\t", ""))
        p_desc.append(next(iter(soup.find(class_="tiny-text block spacing-top").contents), "").replace("\n", "").replace("\n", ""))
        p_tags.append(p_categories[desenio_p_url.index(url)])
        p_meta_title.append(soup.find("meta", {"property": "og:title"})["content"])
        p_meta_keywords.append(soup.find("meta", {"name": "keywords"})["content"])
        p_meta_desc.append(soup.find("meta", {"name": "description"})["content"])
        p_url_rewritten.append(re.search("(?s:.*)/(.*)", unidecode(url)).group(1).lower().replace(" ", "-"))
        p_text_in_stock.append(next(iter(soup.find(id="inStock").contents[-2]), "W Magazynie.").replace("\n", ""))
        p_text_backorder.append(next(iter(soup.find(id="outOfStock").contents), "Obecnie zaopatrzenie. Możliwość zamówienia.").replace("\n", "").replace("\t",""))
        p_avail_order.append(1 if soup.find(id="outOfStock")["class"] == "hidden" else 0)
        p_avail_date.append("")
        p_creation_date.append("")
        p_show_price.append(1)
        p_img_urls.append("http://localhost/images/" + re.search("(?s:.*)/(.*)\?", soup.find(class_="noFramePoster image-shadow")['src']).group(1))
        p_img_alttexts.append(soup.find(class_="noFramePoster image-shadow")['alt'])
        p_img_delete.append(1)
        p_feature.append("")
        p_avail_online_only.append(0)
        p_condition.append("new")
        p_customizable.append(0)
        p_uploadable_files.append(0)
        p_text_fields.append(0)
        p_out_action.append(0)
        p_virtual.append(0)
        p_file_url.append("")
        p_nr_dl.append("")
        p_exp_date.append("")
        p_nr_of_days.append("")
        p_shop_id_name.append(0)
        p_adv_stock_mgmt.append(0)
        p_dep_on_stock.append(0)
        p_warehouse.append(0)
        p_acessories.append("")

        # pobieranie zdjęcia
        try:
            image_src = re.search("(.*)\?", "https://desenio.pl" + soup.find(class_="noFramePoster image-shadow")['src']).group(1)
            file_name = re.search("(?s:.*)/(.*)", image_src).group(1)
            file_path = img_catalog_path + file_name
            urllib.request.urlretrieve(image_src, file_path)
            print("image_src: ", image_src, "\nfile_path: ", file_path)
        except:
            print(p_id[n] + " ERROR: can't download image")
            p_id[n] = "ERROR"

        # tworzenie kombinacji

            # wartość rozmiaru, (supplier_ref zalezny od rozmiaru?), wplyw na cene, ilość tego typu
            # wpływ na wagę, czy domyślna kombinacja?,

            # wyciąganie rozmiarów i odpowiadających im cen
        sizes, prices = [], []
        prices_sizes_script = soup.find(text=re.compile("'size': '(.*m)"))
        for line in prices_sizes_script.string.split('\n'):
            if "'size':" in line:
                sizes.append(re.search("'size': '(.*(?s:.*)m)", str(line)).group(1))
            if "defaultPrice = " in line:
                prices.append(re.search("defaultPrice = '(.*)'", str(line)).group(1))
        sizes.sort(key=lambda x: re.search("\d+", x).group(0))
        prices.sort(key=lambda x: int(x))

        # tworzenie każdej możliwej kombinacji
        for i in range(len(sizes)):
            comb_p_id.append(p_id[n])
            comb_p_reference.append(p_reference[n])
            comb_attribute.append("Rozmiar:select:0")
            comb_value.append(sizes[i] + ":0")              #
            comb_supplier_ref.append(p_supplier_ref[n] + "-" + sizes[i].replace(" ", "-")) #
            comb_ref.append(comb_supplier_ref[-1])
            comb_ean13.append(p_ean13[n])
            comb_upc.append(p_upc[n])
            comb_wholesale_price.append(p_wholesale_price[n])
            comb_price_impact.append(round(float(prices[i]) / 1.23 - p_price_tax_excluded[n], 2))   #
            comb_ecotax.append(p_ecotax[n])
            comb_quantity.append(p_quantity[n])             # idk jaką wartość
            comb_min_quantity.append(p_min_quantity[n])
            comb_low_stock_lvl.append(p_low_stock_lvl[n])
            comb_send_email_quantity.append(p_send_email_quantity[n])
            comb_weight_impact.append(round(i*0.1, 2))                # tu tez nwm
            comb_default.append(1 if i == 0 else 0)         #
            comb_avail_date.append(p_avail_date[n])
            comb_img_postion.append(i)                     # idk jaką wartość tutaj
            comb_img_urls.append(p_img_urls[n])
            comb_img_alttexts.append(p_img_alttexts[n])
            comb_shop_id_name.append(p_shop_id_name[n])
            comb_adv_stock_mgmt.append(p_adv_stock_mgmt[n])
            comb_dep_on_stock.append(p_dep_on_stock[n])
            comb_warehouse.append(p_warehouse[n])
    print(p_id[n], p_name[n], p_categories[n])
# tworzenie plików CSV
list_c = [c_id, c_active, c_name, c_parent, c_root, c_desc, c_meta_title, c_meta_keywords, c_meta_desc, c_url_rewritten, c_img_url]
list_p = [p_id, p_active, p_name, p_categories, p_price_tax_excluded, p_tax_rules_id, p_wholesale_price, p_on_sale, p_discount_amount, p_discount_percent, p_discount_from, p_discount_to, p_reference, p_supplier_ref, p_supplier, p_manufacturer, p_ean13, p_upc, p_ecotax, p_width, p_height, p_depth, p_weight, p_delivery_time_in_stock, p_delivery_time_out_stock, p_quantity, p_min_quantity, p_low_stock_lvl, p_send_email_quantity, p_visibility, p_shipping_cost, p_unity, p_unit_price, p_summary, p_desc, p_tags, p_meta_title, p_meta_keywords, p_meta_desc, p_url_rewritten, p_text_in_stock, p_text_backorder, p_avail_order, p_avail_date, p_creation_date, p_show_price, p_img_urls, p_img_alttexts, p_img_delete, p_feature, p_avail_online_only, p_condition, p_customizable, p_uploadable_files, p_text_fields, p_out_action, p_virtual, p_file_url, p_nr_dl, p_exp_date, p_nr_of_days, p_shop_id_name, p_adv_stock_mgmt, p_dep_on_stock, p_warehouse, p_acessories]
list_comb = [comb_p_id, comb_p_reference, comb_attribute, comb_value, comb_supplier_ref, comb_ref, comb_ean13, comb_upc, comb_wholesale_price, comb_price_impact, comb_ecotax, comb_quantity, comb_min_quantity, comb_low_stock_lvl, comb_send_email_quantity, comb_weight_impact, comb_default, comb_avail_date, comb_img_postion, comb_img_urls, comb_img_alttexts, comb_shop_id_name, comb_adv_stock_mgmt, comb_dep_on_stock, comb_warehouse]

headers_c = ["Category ID", "Active (0/1)", "Name *", "Parent category", "Root category (0/1)", "Description", "Meta title", "Meta keywords", "Meta description", "URL rewritten", "Image URL"]
headers_p = ["Product ID", "Active (0/1)", "Name *", "Categories (x,y,z...)", "Price tax excluded", "Tax rules ID", "Wholesale price", "On sale (0/1)", "Discount amount", "Discount percent", "Discount from (yyyy-mm-dd)", "Discount to (yyyy-mm-dd)", "Reference #", "Supplier reference #", "Supplier", "Manufacturer", "EAN13", "UPC", "Ecotax", "Width", "Height", "Depth", "Weight", "Delivery time of in-stock products", "Delivery time of out-of-stock products with allowed orders", "Quantity", "Minimal quantity", "Low stock level", "Send me an email when the quantity is under this level", "Visibility", "Additional shipping cost", "Unity", "Unit price", "Summary", "Description", "Tags (x,y,z...)", "Meta title", "Meta keywords", "Meta description", "URL rewritten", "Text when in stock", "Text when backorder allowed", "Available for order (0 = No, 1 = Yes)", "Product available date", "Product creation date", "Show price (0 = No, 1 = Yes)", "Image URLs (x,y,z...)", "Image alt texts (x,y,z...)", "Delete existing images (0 = No, 1 = Yes)", "Feature(Name:Value:Position)", "Available online only (0 = No, 1 = Yes)", "Condition", "Customizable (0 = No, 1 = Yes)", "Uploadable files (0 = No, 1 = Yes)", "Text fields (0 = No, 1 = Yes)", "Out of stock action", "Virtual product", "File URL", "Number of allowed downloads", "Expiration date", "Number of days", "ID / Name of shop", "Advanced stock management", "Depends On Stock", "Warehouse", "Acessories  (x,y,z...)"]
headers_comb = ["Product ID*", "Product Reference", "Attribute (Name:Type:Position)*", "Value (Value:Position)*", "Supplier reference", "Reference", "EAN13", "UPC", "Wholesale price", "Impact on price", "Ecotax", "Quantity", "Minimal quantity", "Low stock level", "Send email when quantity is below this level", "Impact on weight", "Default (0 = No, 1 = Yes)", "Combination available date", "Image position", "Image URLs (x,y,z...)", "Image alt texts (x,y,z...)", "ID / Name of shop", "Advanced Stock Managment", "Depends on stock", "Warehouse"]

df_c = generate_dataframe_from_lists(list_c, headers_c)
df_p = generate_dataframe_from_lists(list_p, headers_p)
df_comb = generate_dataframe_from_lists(list_comb, headers_comb)

df_c.to_csv("categories.csv", index=False, sep=";")
df_p.to_csv("products.csv", index=False, sep=";")
df_comb.to_csv("combinations.csv", index=False, sep=";")
