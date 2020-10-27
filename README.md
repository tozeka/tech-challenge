### First of all

This challenge should be fun. Really. Be free to let your DNA and knowledge here. 

After your pull request when you finish your code we gonna have a meeting to discuss your decisions. Let's grow up together.

You'll work on a backend to support a movie gallery web application. This application should allow its users to view and manage movies, actors, and genres, as well as generate some reports 
to compare and rank actors. 

To get you started, you'll find an already developed an: `/api/genres` -- *feel free to use as an inspiration, as it is also inspired our current practices*.

### Starting

`$ cp .env.example .env`

`$ php artisan key:generate`

`$ cp database/database.sqlite.example database/database.sqlite`

`$ php artisan migrate`

`$ php artisan db:seed`

`$ php artisan serve`

### Issues

To complete this challenge, you should implement these following issues:

##### EDD-00001 Create movie CRUD

```ts
{
    name,
    year,
    synopsis,
    runtime, // minutes
    released_at,
    cost // int
}

```
##### EDD-00002 Create actor CRUD

```ts
{
    name,
    bio,
    born_at
}
```

##### EDD-00003 View Actor's movie appearances

As a user, I want to get a list of movies that a given Actor starred on. 
_Remember that: An actor could star more than one role in the same movie_

##### EDD-00005 Select one of the following

1. View Actor's favorite genre.

As a user, I want to get the favorite genre of a given Actor.
Business Rule: the favorite genre is the one with the most appearances.
   
2. View Actor's number of Movies in Genres

As a user, I want to get the number of movies by genre on an actor profile page.

3. View Actors in a Genre
   
As a user, I want to get a list of actors for a given Genre ordered by movie actor appearances (according the actor rules starred in a movie).

_Eddie Murphy starred at last **five** roles on The Nutty Professor, **so he appeared five times**: https://pt.wikipedia.org/wiki/The_Nutty_Professor_(1996)_

### Unit tests

Unit tests and feature tests are desirable.

### API Client

You are free to use any API client to test your code. Insomina.json is placed into the root folder with `/api/genres` routes in order to help you. 

### Installation

Fork this repository into your GitHub workspace and work from there.

### Submitting

You should submit the Fork link.

Thx.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
