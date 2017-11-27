<p align="center"><img src="https://media.licdn.com/media/AAEAAQAAAAAAAAg7AAAAJDM3MzNmZTY1LTdmODEtNDJkNC1iNzlkLTFkODMyNjBhZmQ0MA.png"></p>
<p align="center">
<a href="https://travis-ci.org/bStreamORG/bTech"><img src="https://travis-ci.org/bStreamORG/bTech.svg?branch=master" alt="Build Status"></a>
<a href="https://scrutinizer-ci.com/g/bStreamORG/bTech/?branch=master"><img src="https://scrutinizer-ci.com/g/bStreamORG/bTech/badges/quality-score.png?b=master" alt="Scrutinizer Code Quality"></a>
</p>
    
# bTech :books:

Web educational service with articles, tasks and collections of articles, tools and videos

## Requirements

- PHP >= [7.1.*]
- Laravel >= [5.5.*]
- Composer >= [1.2.1]
- Node.js >= [6.11.*]
- Npm >= [3.10.*]

## Installation

Follow the guide:

1. `git clone https://github.com/bStreamORG/bTech.git`
2. `update the .env file along with database connection`
3. `composer install && composer update`
4. `npm install`
5. `Add permissions for directories storage and bootstrap/cache:`
    ```sh
    sudo chmod 777 -R storage/
    sudo chmod 777 -R bootstrap/cache
    ```
6. `php artisan migrate`
7. `php artisan db:seed`


## Run PHP Dev Server
```
php artisan serve
```

## Run Node Engine

Compile assets one time.
```
npm run dev
```
**OR**
or if you would like to compile assets on runtime then copy paste following command in terminal 

`npm run watch`
