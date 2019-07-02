# How to install composer 

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"


# Composer install globaly

sudo mv composer.phar /usr/local/bin/composer


# Set permission on public folder 

chmod -R 777 bootstrap/cache storage
sudo chmod -R 777 bootstrap/cache storage

# generate environment file 

cp .env.example .env

# key generate 

php artisan key:generate

# all set now start development and enjoy codding 

php artisan serve
