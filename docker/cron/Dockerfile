FROM php:8.1-fpm

RUN apt-get update && apt-get upgrade -y \
    && apt-get update && apt-get install -y gnupg2 \
    && curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - \
    && curl https://packages.microsoft.com/config/ubuntu/20.04/prod.list > /etc/apt/sources.list.d/mssql-release.list \
    && apt-get update \
    && ACCEPT_EULA=Y apt-get -y --no-install-recommends install msodbcsql17 unixodbc-dev  \
    && pecl install sqlsrv \
    && pecl install pdo_sqlsrv \
    && docker-php-ext-enable sqlsrv pdo_sqlsrv

RUN apt-get update
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

# Cron
#RUN echo "* * * * * echo 123 >> /var/www/cron.log 2>&1" >> /etc/crontab
#RUN echo "* * * * * cd /var/www && php /var/www/artisan schedule:run >> 2>&1" >> /etc/crontab
#RUN echo "* * * * * (cd /var/www/ && php artisan schedule:run >> /var/www/cron.log 2>&1)" >> /etc/crontab
RUN echo "* * * * * (cd /var/www/ && php artisan schedule:run 2>&1)" >> /etc/crontab

# Run the command on container startup
RUN touch /var/www/cron.log
RUN crontab /etc/crontab
CMD ["cron", "-f"]
