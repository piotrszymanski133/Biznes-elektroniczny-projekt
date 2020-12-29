FROM php:7.2-apache

RUN apt-get update -y && \
    apt-get upgrade -y
	
RUN	apt-get install -y git

RUN docker-php-ext-install mysqli 
	
RUN mkdir /home/prestashop

WORKDIR /home/prestashop

RUN	git clone -b production --single-branch https://github.com/Quetzonarch/BEProjekt.git

RUN	cp -ar /home/prestashop/BEProjekt/prestashop /var/www/html/
	
RUN chmod -R 777 /var/www/html/prestashop 

RUN apt-get install nano

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN mkdir /etc/apache2/ssl/

RUN a2enmod ssl && \
	a2enmod rewrite

COPY 000-default.conf /etc/apache2/sites-enabled/000-default.conf

COPY prestashop.key /etc/apache2/ssl/prestashop.key

COPY prestashop.crt /etc/apache2/ssl/prestashop.crt

RUN docker-php-ext-install pdo pdo_mysql

RUN  apt-get install -y libicu-dev \ 
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl

	