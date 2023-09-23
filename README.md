# Vegan XP: Laravel Project For the Vegan Hacktivists

[![Video Screenshot](/public/vegan-xp-screenshot.png)](https://clipchamp.com/watch/JzkVygBD7ho)<sup>Click to Play Video</sup>


## Description: 

This project was developed to learn Laravel and the PHP backend programming language, providing insights into the tooling used by the [Vegan Hacktivist](https://veganhacktivists.org/) organization. It serves as a simulation of the organization's ongoing work—a platform where vegans can engage in friendly competition related to animal rights activism.

Users can register and log into their accounts to complete vegan activist actions, earning XP while contributing to the Animal Rights Movement. As users accumulate XP, they can exchange it for special rewards. The platform also allows users to easily update their profile information and view the XP leaderboard.

Reward availability automatically updates as users spend their XP. When a user lacks sufficient XP for certain rewards after claiming others, Livewire's `wire:poll` function ensures the availability status of remaining rewards is updated without requiring a page refresh.

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

