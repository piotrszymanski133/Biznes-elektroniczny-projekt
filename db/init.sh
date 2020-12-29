#!/bin/bash

DB="db_2"
USER="user_2"
PASSWORD="matibob333"

sleep 5

mysql -p$MYSQL_ROOT_PASSWORD -e "CREATE DATABASE IF NOT EXISTS ${DB};"
mysql -p$MYSQL_ROOT_PASSWORD -e "CREATE USER IF NOT EXISTS ${USER}@localhost IDENTIFIED BY '${PASSWORD}';"
mysql -p$MYSQL_ROOT_PASSWORD -e "GRANT ALL PRIVILEGES ON ${DB}.* TO '${USER}'@'localhost';"
mysql -p$MYSQL_ROOT_PASSWORD -e "FLUSH PRIVILEGES;"

git clone -b database --single-branch https://github.com/Quetzonarch/BEProjekt.git
mysql -u $USER -p$PASSWORD $DB < ./BEProjekt/prestashop.sql