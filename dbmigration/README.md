# Set Permission for the public resource 

sudo chmod -R 777 bootstrap/cache storage

# Create an environment files for application 

cp .env.example .env

# Set application key for this app 

php artisan key:generate

# all set now run your application 

php artisan serve   Or  ( you can run dirctly from php path )





