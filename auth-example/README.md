# Set Permission for the public resource 

sudo chmod -R 777 bootstrap/cache storage

# Create an environment files for application 

cp .env.example .env

# Set application key for this app 

php artisan key:generate

# all set now run your application 

php artisan serve   Or  ( you can run dirctly from php path )

## Database migration 

php artisan migrate

## create migration project table using make migration 

php artisan make:migration create_projects_table

## againe migrate new table which is we have recent created

php artisan migrate









