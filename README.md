# Larevel 8 with Vue.js 2 CRUD Single Page Application


Easy Way to Set Up Vue Js in Laravel 8

## Installation

1-Clone the repository
```
git clone https://github.com/aymensmida/Laravel-8-Vue-Js-Crud-App.git
```

2- cd into the folder with this command:
```
cd Laravel-8-Vue-Js-Crud-App
```

3- composer install
```
composer install
```

4-Then create a environment file using this command:
```
cp .env.example .env
```

5- generate key
```
php artisan key:generate
``` 


Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

6-Then create a database named `library` and then do a database migration using this command:
```
php artisan migrate
```
7- install packages
```
npm install
``` 
## Run server

8-Run server using this command:
```
php artisan serve
```
```
npm run watch
```

Then go to `http://localhost:8000/` from your browser and see the app.

## Technologies Used

- PHP Laravel Framework
- Vue.js  
- Bootstrap v4.6

