from selenium import webdriver
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.common.keys import Keys
import random
import time

# Otwieranie przeglądarki i sklepu
driver = webdriver.Firefox()
driver.get("http://localhost:20002/prestashop")

# Przejście do zakładania konta
driver.find_element_by_xpath("//div[@class='user-info']").click()
driver.find_element_by_xpath("//div[@class='no-account']").click()

# Wpisywanie danych i założenie konta
driver.find_element_by_xpath("//input[@name='id_gender' and @value='1']").click()
driver.find_element_by_xpath("//input[@name='firstname']").send_keys("Jan")
driver.find_element_by_xpath("//input[@name='lastname']").send_keys("Kowalski")
driver.find_element_by_xpath("//input[@name='email']").send_keys("jankowalski425@poczta.pl")
driver.find_element_by_xpath("//input[@name='password']").send_keys("123456")
driver.find_element_by_xpath("//input[@name='birthday']").send_keys("1970-01-01")
driver.find_element_by_xpath("//input[@name='psgdpr']").click()
driver.find_element_by_xpath("//button[@class='btn btn-primary form-control-submit float-xs-right']").click()

wait = WebDriverWait(driver, 10)

for i in range(2):
    time.sleep(1)
    # Wejście w kategorie plakaty
    if i == 0:
        wait.until(EC.element_to_be_clickable((By.ID, "category-22")))
        driver.find_element_by_id("category-22").click()
    else:
        time.sleep(1)
        wait.until(EC.element_to_be_clickable((By.ID, "category-48")))
        driver.find_element_by_id("category-48").click()

    numbers = random.sample(range(0, 11), 5)
    for j in range(0, 5):
        # Losowanie produktu
        while (True):
            try:
                products = driver.find_elements_by_css_selector("a[class='thumbnail product-thumbnail']")
                products[numbers[j]].click()
                break
            except:
                pass

        # Losowanie ilości i dodawanie do koszyka
        wait.until(EC.presence_of_element_located((By.XPATH, "//select[@id='group_1']")))
        driver.find_element_by_xpath("//select[@id='group_1']").click()
        sizes = driver.find_elements_by_tag_name('option')
        option = random.randint(0, len(sizes) - 1)
        sizes[option].click()
        amount = random.randint(0, 5)
        for k in range(amount):
            wait.until(EC.element_to_be_clickable(
                (By.XPATH, "//button [@class='btn btn-touchspin js-touchspin bootstrap-touchspin-up']")))
            driver.find_element_by_xpath(
                "//button [@class='btn btn-touchspin js-touchspin bootstrap-touchspin-up']").click()

        wait.until(EC.element_to_be_clickable((By.CSS_SELECTOR, "div[class='add']")))
        add_button = driver.find_element_by_css_selector("div[class='add']").click()
        while (True):
            try:
                driver.find_element_by_css_selector("button[class='btn btn-secondary']").click()
                break
            except:
                pass

        # Przejscie na kolejna strone
        driver.back()
        if i == 0:
            driver.find_element_by_xpath("//a[@class='next js-search-link']").click()
        else:
            if j == 1:
                driver.find_element_by_xpath("//a[@class='next js-search-link']").click()

# Przejscie do koszyka
driver.find_element_by_css_selector("div[class='header']").click()

# Usuniecie losowej przesylki
products = driver.find_elements_by_css_selector("a[class='remove-from-cart']")
delete_product = products[random.randint(0, len(products) - 1)]
delete_product.click()

# Uzupelnienie danych do przesylki
driver.find_element_by_css_selector("a[class='btn btn-primary']").click()
driver.find_element_by_xpath("//input[@name='address1']").send_keys("ul. Jesienna 7")
driver.find_element_by_xpath("//input[@name='postcode']").send_keys("82-200")
driver.find_element_by_xpath("//input[@name='city']").send_keys("Malbork")
driver.find_element_by_xpath("//button[@name='confirm-addresses']").click()

# Losowanie przewoznika
delivery = random.randint(0, 1)
deliveries = driver.find_elements_by_css_selector("div[class='col-xs-3'")
deliveries[delivery].click()
# wait.until(EC.element_to_be_clickable((By.XPATH, "//input[@id='delivery_option_" + str(delivery) + "']")))
# driver.find_element_by_xpath("//input[@id='delivery_option_" + str(delivery) + "']").click()
driver.find_element_by_xpath("//button[@name='confirmDeliveryOption']").click()

# Wybranie platnosci i zamowienie
driver.find_element_by_xpath("//input[@id='payment-option-2']").click()
driver.find_element_by_xpath("//input[@id='conditions_to_approve[terms-and-conditions]']").click()
driver.find_element_by_xpath("//button[@class='btn btn-primary center-block']").click()

# Sprawdzenie statusu zamowienia
wait.until(EC.element_to_be_clickable((By.XPATH, "//span[@class='hidden-sm-down']")))
driver.find_element_by_xpath("//span[@class='hidden-sm-down']").click()
wait.until(EC.element_to_be_clickable((By.XPATH,"//a[@id='history-link']")))
driver.find_element_by_xpath("//a[@id='history-link']").click()
# wejscie w szczegoly
driver.find_element_by_css_selector("a[data-link-action='view-order-details'").click()