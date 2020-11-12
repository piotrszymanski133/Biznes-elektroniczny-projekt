sudo rm -rf /var/www/html/prestashop
sudo cp -ar ~/Dokumenty/BEProjekt/prestashop /var/www/html/prestashop
sudo chmod -R 775 /var/www/html/prestashop
sudo chown -R apache:apache /var/www/html/prestashop
mysql -u root -p prestashop < ~/Dokumenty/BEProjekt/prestashop.sql
