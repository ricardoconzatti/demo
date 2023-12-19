FROM ubuntu:latest

RUN apt-get update && \
    DEBIAN_FRONTEND="noninteractive" apt-get install -y apache2 php mysql-server php-mysql && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

RUN rm /var/www/html/index.html

COPY ./thumbs/ /var/www/html/

RUN service mysql start && mysql < /var/www/html/setup.sql

RUN rm /var/www/html/setup.sql

EXPOSE 80

CMD service mysql start && /usr/sbin/apache2ctl -D FOREGROUND
