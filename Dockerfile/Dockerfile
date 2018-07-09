FROM php:7.2.7-apache-stretch

COPY config/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

WORKDIR /var/www
