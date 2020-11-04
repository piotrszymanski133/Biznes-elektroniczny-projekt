import requests
from requests.auth import HTTPBasicAuth


xml_file = """prestashop/post.xml"""

with open(xml_file) as xml:
    r = requests.post(url='https://localhost/prestashop/api/products/', data = xml, verify=False,  auth=HTTPBasicAuth('3NQ2U2EV9AACDHRBCQ4GSTN9I8YRD481', ''))

print (r)


#print(requests.get(url='https://localhost/prestashop/api/products/?output_format=JSON', verify=False,  auth=HTTPBasicAuth('3NQ2U2EV9AACDHRBCQ4GSTN9I8YRD481', '')).content)

#print(requests.post(url='https://localhost/prestashop/api/products/', data = document, verify=False,  auth=HTTPBasicAuth('3NQ2U2EV9AACDHRBCQ4GSTN9I8YRD481', '')))

#requests.delete(url='https://localhost/prestashop/api/products/12', data = myobj, verify=False,  auth=HTTPBasicAuth('3NQ2U2EV9AACDHRBCQ4GSTN9I8YRD481', ''))

print(requests.get(url='https://localhost/prestashop/api/products/?output_format=JSON', verify=False,  auth=HTTPBasicAuth('3NQ2U2EV9AACDHRBCQ4GSTN9I8YRD481', '')).content)