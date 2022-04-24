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

I have not had the oppurunity to use Laravel/Lumen before, so I wanted to try using them for this project. I started with laravel, but was unable to get it installed on my machine due to some issue with wsl I was unable to fix in a timely manner, so I moved onto Lumen. I got it installed and running on my machine much quicker, and began devlopment of the web app. I started by creating the database with PHP artisan and created seeders to input the required information. I then began on the front end by making a basic webpage. I added an ajax call, and updated the webpage to use the call to get the required info. I then prettified the webpage. Finally I added the backend database restful api.

While I have done all of the tasks required in the past, I had not done them in/with larevel and lumen. I therefor found it more difficult then I had expected. However, I learnt a lot about how they work, and enjoyed a lot of the niceties that the framework created.

## Running
Add git repo to your xampp folder at C:\xampp\htdocs

Open xampp control panel and click start on the apache module

run the command `php artisan migrate --seed` to create and seed the database,
or `php artisan migrate:refresh --seed` to reset the database to default

open http://localhost/CG-webdev-techtest/public/ in your browswe

## Backend API
To test the backend API I used postman.

Get all Profiles: `http://localhost/CG-webdev-techtest/public/api/profile`
Get selected Profile: `http://localhost/CG-webdev-techtest/public/api/profile/1`

(must include headers in postman: 
Content-Type : application/json
Accept  : application/json)

Post new profile: `http://localhost/CG-webdev-techtest/public/api/profile`
Patch exisisting profile: `http://localhost/CG-webdev-techtest/public/api/profile/1`
Delete exisitng profile: `http://localhost/CG-webdev-techtest/public/api/profile/1`


## Resources:
* https://lumen.laravel.com/docs/9.x/installation
* https://laravel.com/docs/5.8/migrations
* https://loige.co/developing-a-web-application-with-lumen-and-mysql/
* https://www.dorusomcutean.com/api-how-to-create-lumen-basic-api/
* https://laravel.com/docs/9.x/queries
* https://www.tutorialspoint.com/laravel/laravel_ajax.htm


