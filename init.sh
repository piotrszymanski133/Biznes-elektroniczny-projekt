#!/bin/bash

kubectl --namespace="biznes-elektroniczny" cp ~/studenci/2/BEProjekt/prestashop.sql biznes-db-7d46b58f4d-rm2v9:/tmp/prestashop.sql

kubectl --namespace="biznes-elektroniczny" cp ~/studenci/2/BEProjekt/pod-script.sh biznes-db-7d46b58f4d-rm2v9:/tmp/pod-script.sh

kubectl --namespace="biznes-elektroniczny" exec --stdin --tty biznes-db-7d46b58f4d-rm2v9 -- /tmp/pod-script.sh 