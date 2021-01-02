#!/bin/bash

DB="db_2"
USER="user_2"
PASSWORD="matibob333"
DB_ROOT_PASSWORD="dev"

kubectl --namespace="biznes-elektroniczny" cp ~/studenci/2/BEProjekt/prestashop.sql biznes-db-7d46b58f4d-rm2v9:/tmp/prestashop.sql

kubectl --namespace="biznes-elektroniczny" exec --stdin --tty biznes-db-7d46b58f4d-rm2v9 -- mysql -p$DB_ROOT_PASSWORD -e "CREATE DATABASE IF NOT EXISTS ${DB};" 
kubectl --namespace="biznes-elektroniczny" exec --stdin --tty biznes-db-7d46b58f4d-rm2v9 -- mysql -p$DB_ROOT_PASSWORD -e "CREATE USER IF NOT EXISTS ${USER}@localhost IDENTIFIED BY '${PASSWORD}';" 
kubectl --namespace="biznes-elektroniczny" exec --stdin --tty biznes-db-7d46b58f4d-rm2v9 -- mysql -p$DB_ROOT_PASSWORD -e "GRANT ALL PRIVILEGES ON ${DB}.* TO '${USER}'@'localhost';" 
kubectl --namespace="biznes-elektroniczny" exec --stdin --tty biznes-db-7d46b58f4d-rm2v9 -- mysql -p$DB_ROOT_PASSWORD -e "FLUSH PRIVILEGES;" 
kubectl --namespace="biznes-elektroniczny" exec --stdin --tty biznes-db-7d46b58f4d-rm2v9 -- mysql -u $USER -p$PASSWORD $DB < /tmp/prestashop.sql 
