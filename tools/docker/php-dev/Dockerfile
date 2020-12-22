FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
    unzip \
    wget \
    git \
    zsh

WORKDIR /code

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

RUN pecl channel-update pecl.php.net
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
RUN docker-php-ext-install bcmath

RUN apt-get install -y libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql

ARG USER_ID
ARG GROUP_ID

# RUN groupadd -f --gid $GROUP_ID user
# RUN adduser --disabled-password --gecos '' --uid $USER_ID --gid $GROUP_ID user
# USER user

EXPOSE 9000
