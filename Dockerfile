# base image
FROM php:5.6-apache

# FOR DEV
RUN apt-get update
RUN apt-get install -y vim

# get source
RUN apt-get install -y git

WORKDIR /var/www/apps
RUN git clone https://github.com/maeno-c/test-codeigniter
WORKDIR /var/www/apps/test-codeigniter

# TEMP
RUN git checkout docker-test


# Change DocumentRoot

ENV APACHE_DOCUMENT_ROOT /var/www/apps/test-codeigniter
ENV APACHE_LOG_DIR /var/log/apache2
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN sed -i "s/AllowOverride None/AllowOverride All/g" /etc/apache2/apache2.conf

EXPOSE 8000:80

