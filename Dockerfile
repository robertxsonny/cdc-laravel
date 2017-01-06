FROM nimmis/apache-php5

# Bundle app source

COPY sites-available/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY . /var/www