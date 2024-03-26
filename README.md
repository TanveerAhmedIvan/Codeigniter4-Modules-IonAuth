# CodeIgniter 4 Application Starter With MODULES Implemented (HMVC) AND Ion-Auth added with extention example

This is a basic CodeIgniter 4 Application with modules implemented.
HMVC Routing is implemented.

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.


## What is IonAuth?

by [Ben Edmunds](http://benedmunds.com)

Simple and lightweight authentication for your CodeIgniter apps.

Note, this version is meant to be used with CodeIgniter 4 and is not backwards compatible with previous versions.  The database is backwards compatible though for those migrating from previous versions.

## Installation & updates

`composer create-project tanveerahmedivan/codeigniter4-modules-ionauth` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.


### Relational DB Setup
Then use the migration file (in Database/Migrations/).
```
$ php spark migrate -n IonAuth
```
Don't forget to set Config\Migrations:enabled to true.

You can also use the seeds file to insert default datas:
Windows :
```
$ php spark db:seed IonAuth\Database\Seeds\IonAuthSeeder
```
Linux :
```
$ php spark db:seed IonAuth\\Database\\Seeds\\IonAuthSeeder
```

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!
## Remove `public/` and index.php from url
Copy `.htaccess.example` to `.htaccess` and enjoy.


## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> The end of life date for PHP 7.4 was November 28, 2022.
> The end of life date for PHP 8.0 was November 26, 2023.
> If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> The end of life date for PHP 8.1 will be November 25, 2024.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
