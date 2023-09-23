# Vegan XP: Laravel Project For the Vegan Hacktivists

[![Video Screenshot](/public/vegan-xp-screenshot.png)](https://clipchamp.com/watch/JzkVygBD7ho)

## Description: 

This is a project that I built in order to learn Laravel and the PHP backend programming language in order to understand the tooling of the [Vegan Hacktivist](https://veganhacktivists.org/) organization. This project is supposed to be a mock of what the organization is currently working on: a platform where vegans can compete with each other in a friendly manner in terms of animal rights activism.

Users can register/login into their accounts and complete Vegan activist actions in order to gain XP and play their part in helping the Animal Rights Movement. Users accumulate XP and can claim special rewards in exchange of the XP. Users can update their profile information with ease and can see who dominates the leaderboard in terms of XP. 

The rewards availability autoupdates the more you spend your XP. When you don't have enough XP for other rewards after purchasing a different one, the rest of the rewards update availiblity status automatically with the help of Livewire's `wire:poll` function for avoiding page refresh.

## Tools Used: 

* [PHP](https://www.php.net/)
* [Laravel](https://laravel.com/)
* [MySQL](https://www.mysql.com/)
* [Eloquent](https://laravel.com/docs/10.x/eloquent)
* [Livewire](https://laravel-livewire.com/)
* [TailwindCSS](https://tailwindcss.com/docs/installation)

## Getting Started
After cloning the repository, install all dependencies by executing `npm install` within the top level project directory. 

The following command will execute all pending migrations and create the necessary database tables defined in your migration files. Make sure your database configuration in the .env file is correctly set up before running migrations.

Configure your database connection in the .env file:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=yourDatabaseName
DB_USERNAME=yourDatabaseUsername
DB_PASSWORD='yourPassword'
```

Run database migrations:

### `php artisan migrate`

Make sure you have MySQL installed in your environment, have a database created, and make sure it is running with this command (if not already):

### `sudo service mysql start`

Run the application in developer mode:

### `php artisan serve`

Compile assets:

### `npm run dev`

