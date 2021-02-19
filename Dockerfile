FROM php:7.4-apache

EXPOSE 80

Run apt-get update
RUN apt-get install nano

RUN chown -R www-data: /var/www
RUN chmod o-x /var/www
RUN chmod o-w /var/www

COPY index.php /var/www/html/

RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
RUN apachectl restart

CMD ["/usr/sbin/apache2ctl","-D","FOREGROUND"]
