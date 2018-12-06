### BiswaJora

[Setup a Laravel Project Cloned from Github.com](https://goo.gl/AJcJRq)

```
git clone https://github.com/Rajan-sust/CSE-Database-Project
cd CSE-Database-Project
composer install
npm install
cp .env.example .env
php artisan key:generate
```

After completing above steps,you have to edit the .env file

```
php artisan migrate
```
