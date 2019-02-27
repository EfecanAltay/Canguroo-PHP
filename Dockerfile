#Dockerfile
FROM php:5.5-apache

RUN php artisan serv
RUN mongod

ADD . /var/www
ADD ./public /var/www/html