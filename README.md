<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>




## Laravel with Multi-Auth (Admin and Front-end)
- create users 
- create roles and permissions
- assign roles and permissions to user

## Admin url 
- /admin/login
## front user url
- /login

## front user can view post list, read and post comments



## How to run the code
- git clone https://github.com/Ravikumar-4142/blog-task-techdocklabs.git
- cd blog-task-techdocklabs
- cp .env.example `.env`
- open .env and update DB_DATABASE (database details)
- run : `composer install`
- run : `php artisan key:generate`
- run : `php artisan migrate:fresh --seed`
- run : `php artisan serve`

- Best of luck 


## Credentials
- #### Admin
- email: admin@admin.com
- password : password
- #### Writer
- email: writer@writer.com
- password: password
