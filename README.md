## Soil Connect - Sample Code Project

### About:

- [Larvel 9.x](https://laravel.com/docs/9.x)
- [TailwindCSS](https://tailwindcss.com/)
- [Alpine.js](https://alpinejs.org/)


### How to use:

Exectue the following command:

```
comoser install
npm install
cp .env.example .env
```

Set up database server and edit .env file:

Update database section to preferred database:

Example MySQL
```
DB_CONNECTION=mysql
DB_HOST={host_ip}
DB_PORT=3306
DB_DATABASE={database name}
DB_USERNAME={database username}
DB_PASSWORD={database password}
```

Example SQLite
```
DB_CONNECTION=mysql
DB_HOST={host_ip}
DB_PORT=3306
DB_DATABASE={database name}
DB_USERNAME={database username}
DB_PASSWORD={database password}
```

Build and run local server:

``` 
npm run build
php artisan migrate
php artisan serve
```
