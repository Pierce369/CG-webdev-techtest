# CG-webdev-techtest
Web development technincal test for creative guild
Created by Pierce Baker

## Web Stack Chosen
* Bootstrap
* MySQL
* PHP
* XAMPP
* Lumen
* PHP artisan

I have not had the oppurunity to use Laravel/Lumen before, so I wanted to try using them for this project. I started with laravel, but was unable to get it installed on my machine due to some issue with wsl I was unable to fix in a timely manner, so I moved onto Lumen. I got it installed and running on my machine, and began devlopment of the web app. I started by creating the database with PHP artisan and created seeders to input the required information.

## Running
Add git repo to your xampp folder at C:\xampp\htdocs

Open xampp control panel and click start on the apache module

run the command `php artisan migrate --seed` to create and seed the database,
or `php artisan migrate:refresh --seed` to reset the database to default

open http://localhost/CG-webdev-techtest/public/ in your browswe


## Resources:
* https://lumen.laravel.com/docs/9.x/installation
* https://laravel.com/docs/5.8/migrations
* https://loige.co/developing-a-web-application-with-lumen-and-mysql/
* https://www.dorusomcutean.com/api-how-to-create-lumen-basic-api/
* https://laravel.com/docs/9.x/queries
* https://www.tutorialspoint.com/laravel/laravel_ajax.htm


