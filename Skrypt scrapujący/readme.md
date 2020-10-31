# Skrypt scrapujący.
Nie testowałem tego na swojej maszynie, jednakże na dockerze działało. xD <br>
Kolejność importu nie powinna robić różnicy, aczkolwiek *categories* -> *products* -> *combinations* imo jest ok. <br>
Folder *images* warto wrzucić do folderu prestashop zanim zaczniemy importować produkty. 

## WAŻNE!!
Pliki generowałem z myślą o dockerze, gdyż tak mogłem zdecydowanie przyspieszyć i ułatwić sobie pracę. Z tego też powodu kolumny *"Image alt texts"* w pliku *combinations.csv*
oraz *"Image URLs"* w pliku *products.csv* mogą zawierać nieprawidłowe linki. Jeśli się nie mylę nasz sklep znajduje się pod adresem localhost/prestashop, dlatego może być wymagane 
podmienienie łańcuchów "http://localhost/images/" na "http://localhost/prestashop/images/". Zamiana wszystkich wystąpień nie powinna spowodować problemów z resztą kolumn.

#### Jeżeli macie z czymś problem to informujcie.
