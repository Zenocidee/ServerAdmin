FROM php:7.4.15-apache
COPY . /var/www/html/
RUN chown -R $USER:www-data /var/www
RUN chmod -R a+r /var/www
COPY ./php.ini-development /usr/local/etc/php/php.ini-development
COPY ./php.ini-production /usr/local/etc/php/php.ini-production
RUN docker-php-ext-install mysqli
