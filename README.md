<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Setup This Laravel Project on Local Environment

In this tutorial i asume that you are on a Mac or Linux OS based system, but you can follow these steps on Windows OS as well.


## 1. Clone GitHub repo for this project locally.

Find a location on your computer where you want to store the project. In my case I like all my projects to be a folder called sites/, so that is where I run the following command, which will pull the project from github and create a copy of it on my local computer at the sites directory inside another folder called “projectName”. You can change the name of this folder it creates, by changing the last part of the code snippet below to match the name you want your folder to be called.

- git clone https://github.com/Molinart-Designs/SonoraSoft.git projectName

## 2. cd into your project

- cd projectName

## 3. Install Composer Dependencies

- composer install

## 4. Install NPM Dependencies

- npm install

## 5. Create a copy of your .env file

.env files are not generally committed to source control for security reasons. But there is a .env.example which is a template of the .env file that the project expects us to have. So we will make a copy of the .env.example file and create a .env file that we can start to fill out to do things like database configuration in the next few steps.

- cp .env.example .env

This will create a copy of the .env.example file in your project and name the copy simply .env.

## 6. Generate an app encryption key

Laravel requires you to have an app encryption key which is generally randomly generated and stored in your .env file. The app will use this encryption key to encode various elements of your application from cookies to password hashes and more.

- php artisan key:generate

## 7. Create an empty database for our application

Create an empty database for your project using the database tools you prefer 

## 8. In the .env file, add database information to allow Laravel to connect to the database

In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created. This will allow us to run migrations and seed the database in the next step.

## 9. Migrate the database

- php artisan migrate

## 10. Seed the database
After the migrations are complete and you have the database structure required, then you can seed the database (which means add dummy data to it).

- php artisan db:seed




### That's all you need to get started, now here are the credentials for the default users.

- Admin

User: admin@molinart.net

Password: Secret2021

- Registered User

User: user@molinart.net

Password: Secret2021


### Feel free to register new users in the application.


### Online Site
- **[Molinart.net](https://molinart.net)**

### Development

This is a Test for SonoraSoft and was developed by Emilio Molina


### Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

### License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
