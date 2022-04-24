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

I have not had the oppurunity to use Laravel/Lumen before, so I wanted to try using them for this project. I started with laravel, but was unable to get it installed on my machine due to some issue with wsl I was unable to fix in a timely manner, so I moved onto Lumen. I got it installed and running on my machine much quicker, and began devlopment of the web app. I started by creating the database with PHP artisan and created seeders to input the required information. I then began on the front end by making a basic webpage. I added an simple ajax call, and updated the webpage to use the call to get the required info. I then prettified the webpage. Finally I added the backend database restful api.

While I have done all of the tasks required in the past, I had not done them in/with larevel and lumen. I therefor found it more difficult then I had expected. However, I now having learnt how they work I would be able to do it much quicker. I found the database integration with laravel very easy to use and database calls extreamly clean and clear. I also really like the routeing that lumen uses, I again found it eaxtreamly easy to use and it makes the code much easyer to read and understand. Overall I really enjoyed making the backend with lumen, once I figured out how it works it made things a lot easier to devlop. For the front end I did not utilize lumen as much, and that was probably my biggest mistake. I relied mostly on my knowledge of bootstrap, which while it allowed me to develop the site quicker this time, it takes longer overall and is less moduler and readable then if I have created different views and templates for the fdifferent aspects of the site.

## Deploy and Run
Add git repo to your xampp folder at C:\xampp\htdocs

Open xampp control panel and click start on the apache module

run the command `php artisan migrate --seed` to create and seed the database,
or `php artisan migrate:refresh --seed` to reset the database to default later on

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


