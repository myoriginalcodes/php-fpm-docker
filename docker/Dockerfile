#
#--------------------------------------------------------------------------
# Image Setup
#--------------------------------------------------------------------------
#

FROM php:8.3.2-fpm-alpine

#
#--------------------------------------------------------------------------
# Software's Installation
#--------------------------------------------------------------------------
#
# Installing common packages
#

RUN set -eux; \
    # Install the PHP pdo_mysql extention
    docker-php-ext-install pdo_mysql;

#
#--------------------------------------------------------------------------
# Composer Installation
#--------------------------------------------------------------------------
#
# Installing latest composer from https://getcomposer.org/
#

ENV COMPOSER_HOME /composer
ENV PATH ./vendor/bin:/composer/vendor/bin:$PATH
ENV COMPOSER_ALLOW_SUPERUSER 1
RUN curl -s https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer

#
#--------------------------------------------------------------------------
# NodeJS and NPM Installations
#--------------------------------------------------------------------------
#
# Installing from official repositories
#

RUN apk update; \
    apk add \
        nodejs \
        npm