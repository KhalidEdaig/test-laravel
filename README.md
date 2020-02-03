# Laravel-6-test-CRUD

les outils necessaire :
node.js
php 7+
xampp
composer
laravel
les etapes de ce test est :
1.telecharger projet
2.dans C:\xampp\htdocs\ creer un projet testbackend
$ composer create-project --prefer-dist laravel/laravel testbackend
3.ouvrir le projet dans un ide
4.copie les fichier de projet telecharger
5.configurer le fichier .env
pour MySQL
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=testbackend
DB_USERNAME=root
DB_PASSWORD=password
6.creation data base dans MySQL:
name : testbackend
$ php artisan serve
$ php artisan migrate
$ composer dump-autoload
$ php artisan db:seed
$ php artisan storage:link
