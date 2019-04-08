<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Ikitas Company Profile
## Setting Database
#### Buat database
buat database dengan nama <b>photo_db</b>, format <b>utf8_unicode_ci</b>
#### Setting file .env sebagai berikut
DB_CONNECTION=mysql <br>
DB_HOST=127.0.0.1 <br>
DB_PORT=3306 <br>
DB_DATABASE=photo_db <br>
DB_USERNAME=root <br>
DB_PASSWORD= <br>

#### Login Default
Email : ikitas@gmail.com
Password : ikitas

#### Mengaktifkan storage
php artisan storage:link


#### Menjalankan Aplikasi
buka file lalu ketik perinta "php artisan serve" ,  tanpa tanda petik
