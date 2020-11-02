<?php
try {
    // creating webservice access
    $webService = new PrestaShopWebservice('http://localhost/prestashop', '3NQ2U2EV9AACDHRBCQ4GSTN9I8YRD481', false);
 
    // call to retrieve all customers
    $xml = $webService->get(['resource' => 'customers']);
} catch (PrestaShopWebserviceException $ex) {
    // Shows a message related to the error
    echo 'Other error: <br />' . $ex->getMessage();
}
