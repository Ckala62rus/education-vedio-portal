FROM php:8.1-fpm

RUN docker-php-ext-install pdo pdo_mysql

RUN apt-get update \
 && apt-get install -y --no-install-recommends \
    supervisor

RUN apt-get update && apt-get install -y gnupg2
RUN curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add -
RUN curl https://packages.microsoft.com/config/ubuntu/20.04/prod.list > /etc/apt/sources.list.d/mssql-release.list
RUN apt-get update
RUN ACCEPT_EULA=Y apt-get -y --no-install-recommends install msodbcsql17 unixodbc-dev
RUN pecl install sqlsrv
RUN pecl install pdo_sqlsrv
RUN docker-php-ext-enable sqlsrv pdo_sqlsrv

RUN apt-get install -y \
    curl \
    bash \
    nano \
    $PHPIZE_DEPS \
    libxml2-dev \
    libpq-dev \
    mc \
    libzip-dev \
    cron

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer


RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    intl \
    opcache \
    soap \
    sockets \
    pdo \
    pdo_pgsql \
    pgsql \
    exif \
    zip


# Setup GD extension without alpine
RUN apt-get update && \
apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev && \
docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ && \
docker-php-ext-install gd

RUN mkdir -p "/etc/supervisor/logs"

COPY docker/supervisor/supervisord.conf /etc/supervisor/supervisord.conf

CMD ["/usr/bin/supervisord", "-n", "-c",  "/etc/supervisor/supervisord.conf"]
