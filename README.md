# Vegan XP: Laravel Project For the Vegan Hacktivists

<div style="position:relative;width:fit-content;height:fit-content;">
    <a style="position:absolute;top:20px;right:1rem;opacity:0.8;" href="https://clipchamp.com/watch/JzkVygBD7ho?utm_source=embed&utm_medium=embed&utm_campaign=watch">
        <img loading="lazy" style="height:22px;" src="https://clipchamp.com/e.svg" alt="Made with Clipchamp" />
    </a>
    <iframe allow="autoplay;" allowfullscreen style="border:none" src="https://clipchamp.com/watch/JzkVygBD7ho/embed" width="640" height="360"></iframe>
</div>

## Description: 

This is a project that I built in order to learn Laravel and the PHP backend programming language in order to understand the tooling of the [Vegan Hacktivist](https://veganhacktivists.org/) organization. This project is supposed to be a mock of what the organization is currently working on: a platform where vegans can compete with each other in a friendly manner in terms of animal rights activism.

Users can register/login into their accounts and complete Vegan activist actions in order to gain XP and play their part in helping the Animal Rights Movement. Users accumulate XP and can claim special rewards in exchange of the XP. Users can update their profile information with ease and can see who dominates the leaderboard in terms of XP. 

The rewards availability autoupdates the more you spend your XP. When you don't have enough XP for other rewards after purchasing a different on, the rest of the rewards update availiblity status automatically with the help of Livewire's `wire:poll` function for avoiding page refresh.

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

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=yourDatabaseName
DB_USERNAME=yourDatabaseUsername
DB_PASSWORD='yourPassword'

Run database migrations:

### `php artisan migrate`

Make sure you have MySQL installed in your environment, have a database created, and make sure it is running with this command (if not already):

### `sudo service mysql start`

Run the application in developer mode:

### `php artisan serve`

Compile assets:

### `npm run dev`

