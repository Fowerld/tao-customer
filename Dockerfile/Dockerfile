FROM php:7.0.28

RUN apt-get -qq update && \
    apt-get install -y --allow-unauthenticated git ssh curl libpq-dev libmemcached-dev zlib1g-dev \
    libcurl4-openssl-dev libicu-dev libxml2-dev && \
    pecl install && \
    docker-php-ext-enable && \
    docker-php-ext-install intl curl zip pdo pdo_mysql mbstring && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer \
  | php -- --install-dir=/usr/local/bin --filename=composer

COPY config/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

WORKDIR /var/www
