### Before Run

- `composer install`
- `npm install`

### Database setting

- `touch database/database.sqlite`
- set up the `.env` for database connection like below :
```
just using this environment for database setting

DB_CONNECTION=sqlite
#DB_HOST=127.0.0.1
#DB_PORT=3306
#DB_DATABASE=laravel
#DB_USERNAME=root
#DB_PASSWORD=

everything commented but don't DB_CONNECTION, set the DB_CONNECTION=sqlite
```
- `php artisan migrate --seed`

### How to run
- `php artisan serve`

