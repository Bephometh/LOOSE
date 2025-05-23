# Do not edit this! If you want to change the php version, please edit them on
# docker-compose.yml!
ARG PHPVER="8.3"
# Change the image version if you want to test it on other php version.
# versions are listed on https://hub.docker.com/_/php?tab=tags
# always use the *-apache tags. It have apache to serve the thing.
FROM php:$PHPVER-apache

# Install required for developments setups.
RUN apt-get update && apt-get install -y --fix-missing \
    apt-utils \
    gnupg \
    ${PHPIZE_DEPS}

RUN apt-get update && apt-get install -y \
    libzip-dev \
    libssl-dev \
    libicu-dev \
    libonig-dev

# Installing required extensions for the PHP.
RUN docker-php-ext-install pdo pdo_mysql mysqli zip intl mbstring

## GD SUPPORT
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libwebp-dev \
    libxpm-dev

RUN docker-php-ext-configure gd \
    --with-webp=/usr/include/ \
    --with-jpeg=/usr/include/ \
    --with-xpm=/usr/include/ \
    --with-freetype=/usr/include/

RUN docker-php-ext-install gd

RUN docker-php-ext-enable gd


ENV APACHE_DOCUMENT_ROOT /var/www/html/public
## Enable this if you run CI3!
# ENV APACHE_DOCUMENT_ROOT /var/www/html/httpdocs
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Add rewrite engine for APACHE
RUN a2enmod rewrite headers

# Create a non-root user
RUN groupadd --system --gid 1000 app
RUN useradd --system --uid 1000 --shell /bin/bash --groups sudo,app gabri

# Run as the User.
USER gabri
