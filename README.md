<!-- ## AdminLTE4 in laravel-11
<p align="center"><a href="#" target="_blank"><img src="ready-made-admin-lte-10.png" width="800" alt="Laravel-10 AdminLTE"></a></p>

## Light-Dark Mode Using Bootstrap

<p align="center"><a href="#" target="_blank"><img src="light-dark-mode.png" width="800" alt="Bootstrap AdminLTE in LAravel"></a></p> -->


## About This Projects

This project was developed with Laravel version 11. It uses Admin LTE4 with Fortify installation. Users don’t need to worry about assets or folder paths for the admin side. The project includes user authentication, login, password recovery, user CRUD, and delete permission for administrators. Don't forget to give a star to this repository! ⭐.

<!-- [![GitHub stars](https://img.shields.io/github/stars/ZalaNihir/adminlte-laravel10.svg?style=social&label=Star)](https://github.com/ZalaNihir/adminlte-laravel10)
[![GitHub forks](https://img.shields.io/github/forks/ZalaNihir/adminlte-laravel10.svg?style=social&label=Fork)](https://github.com/ZalaNihir/adminlte-laravel10)
[![GitHub watchers](https://img.shields.io/github/watchers/ZalaNihir/adminlte-laravel10.svg?style=social&label=Watch)](https://github.com/ZalaNihir/adminlte-laravel10) -->
<!-- [![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT) -->



## Installation & usage
- For Install you have to clone this repo or you can fire this command as well.

```php
git clone https://github.com/omarxlima/users-app
```

- Go into folder

```php
cd users-app
```

- After the installation you have to update the vendor folder you can update the vendor folder using this command.

```php
composer update
```

- After the updation you have to create the ```.env``` file via this command.
```php
cp .env.example .env
```


- Now you have to generate the product key.

```php
php artisan key:generate
```

- Now migrate the tables & seed the database.

```php
php artisan migrate --seed
```

- Now you have to just serve your project.

```php
php artisan serve
```
- 
Now run the frontend dependencies.

```php
npm install
```
```php
npm run dev
```

<!-- ## Using docker - sail
- For Install you have to clone this repo or you can fire this command as well. -->

<!-- - This is the updated code of admin.

To get the access of admin side there is credentials bellow

- Admin

email: ```testadmin@gmail.com```
password: ```p$ssw#rd```

- User

email: ```testuser@gmail.com```
password: ```p$ssw#rd```

- Vendor

email: ```testvendor@gmail.com```
password: ```p$ssw#rd```


# Update

- Added the Light/Dark mode in profile section at top nav.

- Added the Category module.

- Added the Subcategory module.

- Added the product module which has basic detail & takes multiple images.

- Added the Role Module.

- Added the permission Module.

- Added the collection Module for PDFs.

- Added the Country, State & City seeder with the relationship

- if you want to use the admin side but you have no idea about components & how here things work. so that you just have to create a file & put your code.

- I added the functionality to compress the image size & convert it into webp format in the ```ProductController```.

# Toast

- Added the toastr which has 4 classes success, info, warning & error. you can use it own it.

```php
<x-admin>
    {{ 'Put your blade code here' }}
</x-admin>
```

- For the page title use a section method Like this.

```php
    @section('title')
        {{'Your Titlte'}}
    @endsection
```

# Alerts

- I added the alerts. You just have to call like this.

```php
->with('success', 'Success message');
->with('danger', 'danger message');
->with('info', 'info message');
->with('dark', 'dark message');
->with('warning', 'warning message');
->with('light', 'light message');
```

## Security Vulnerabilities

If you discover a security vulnerability within this project, please send an e-mail to Nihir Zala via [testnihir@gmail.com](mailto:testnihir@gmail.com). All security vulnerabilities will be promptly addressed.If you find any issue or bug you can mail me. -->

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
