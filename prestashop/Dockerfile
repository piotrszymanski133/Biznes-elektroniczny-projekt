FROM php:7.4-apache

RUN apt-get update -y && \
    apt-get upgrade -y
	
RUN	apt-get install -y git
	
RUN mkdir /home/prestashop

WORKDIR /home/prestashop

RUN	git clone -b production --single-branch https://github.com/Quetzonarch/BEProjekt.git

RUN	cp -ar /home/prestashop/BEProjekt/prestashop /var/www/html/
	
RUN chmod -R 777 /var/www/html/prestashop 
	