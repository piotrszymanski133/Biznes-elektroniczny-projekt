#!/bin/bash

DB="db_2"
USER="user_2"
PASSWORD="matibob333"
DB_ROOT_PASSWORD="dev"

mysql -p$DB_ROOT_PASSWORD -e "CREATE DATABASE IF NOT EXISTS ${DB};" 
mysql -p$DB_ROOT_PASSWORD -e "CREATE USER IF NOT EXISTS '${USER}'@'%' IDENTIFIED BY '${PASSWORD}';" 
mysql -p$DB_ROOT_PASSWORD -e "GRANT ALL PRIVILEGES ON ${DB}.* TO '${USER}'@'%';" 
mysql -p$DB_ROOT_PASSWORD -e "FLUSH PRIVILEGES;" 
mysql -u $USER -p$PASSWORD $DB < /tmp/prestashop.sql
