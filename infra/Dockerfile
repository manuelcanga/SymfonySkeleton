FROM php:8.1.3-cli

RUN apt-get update \
    &&  apt-get install -y --no-install-recommends \
        locales apt-utils git vim net-tools libicu-dev g++ libpng-dev libxml2-dev libzip-dev libonig-dev libxslt-dev unzip libpq-dev wget \
        apt-transport-https lsb-release ca-certificates

RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen  \
    &&  echo "es_ES.UTF-8 UTF-8" >> /etc/locale.gen \
    &&  locale-gen

RUN curl -sS https://getcomposer.org/installer | php -- \
    &&  mv composer.phar /usr/local/bin/composer

RUN curl -sS https://get.symfony.com/cli/installer | bash \
    &&  mv /root/.symfony/bin/symfony /usr/local/bin

RUN docker-php-ext-configure \
            intl \
    &&  docker-php-ext-install \
            pdo pdo_mysql pdo_pgsql opcache intl zip calendar dom mbstring gd xsl ctype iconv

RUN pecl install apcu && docker-php-ext-enable apcu
RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN echo 'alias my_app="php /var/www/html/bin/console"' >> ~/.bashrc

RUN git config --global user.email "php@manuelcanga.dev" \
    &&  git config --global user.name "Manuel Canga"

CMD tail -f /dev/null

WORKDIR /var/www/html/
