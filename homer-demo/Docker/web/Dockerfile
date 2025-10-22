FROM php:8.4-apache
RUN apt-get update && apt-get install -y libpq-dev git \
    && docker-php-ext-install pgsql pdo_pgsql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*
COPY homer-web-v2-pgsql/ /var/www/html/
EXPOSE 80
