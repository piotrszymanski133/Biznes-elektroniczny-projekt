FROM php:7.2-apache

RUN apt-get update -y && \
    apt-get upgrade -y && \
	apt-get install -y git && \
	docker-php-ext-install mysqli && \
	apt-get install -y libicu-dev && \ 
	docker-php-ext-configure intl && \
	docker-php-ext-install intl && \
	docker-php-ext-install pdo pdo_mysql
	
RUN mkdir /home/prestashop

WORKDIR /home/prestashop

RUN	git clone -b production --single-branch https://github.com/Quetzonarch/BEProjekt.git && \
	cp -ar /home/prestashop/BEProjekt/prestashop /var/www/html/ && \
	chmod -R 755 /var/www/html/prestashop && \
	chown -R www-data:www-data /var/www/html/prestashop 

RUN mkdir /etc/apache2/ssl/ && \
	a2enmod ssl && \
	a2enmod rewrite

COPY 000-default.conf /etc/apache2/sites-enabled/000-default.conf

COPY prestashop.key /etc/apache2/ssl/prestashop.key

COPY prestashop.crt /etc/apache2/ssl/prestashop.crt

RUN apt-get install -y nano

RUN apt-get install -y libzip-dev && \
	docker-php-ext-configure zip --with-libzip && \
	docker-php-ext-install zip

	