FROM adalessa/laravel-container

# Bundle app source

ENV http_proxy http://mitrais.wsus:3128

RUN    apt-get update \
    && apt-get -yq install libpq-dev \
        postgresql-client-common \
        postgresql-client \
	vim \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql

RUN chmod 777 -R /var/www/html

WORKDIR /var/www/html