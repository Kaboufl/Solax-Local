<p align="center">
<a href="https://laravel.com" target="_blank">
<img src="https://www.solaxpower.fr/wp-content/uploads/2023/02/SOLAX.png" height="250" alt="Laravel Logo">
</a>
</p>

<!--
<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
-->

## About this Application

When I had photovoltaic panels installed at my place, I was delighted to generate my own energy. The kit, along with the inverter, came from the **Solax Power** brand, which additionally offers a Wi-Fi dongle allowing real-time monitoring of the production through their servers and applications.

### So why bother making this application ?

I tried their app for a moment, i founded the interface quite clunky and unrefined regarding my standards, and i even found out later that the data was uploaded to some servers in china. As a junior laravel developper, recreating the app would be a good challenge to practice skills and have a deeper undestanding around Laravel's designs patterns.

### Why Laravel ?

[Laravel](https://laravel.com) is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

## How to gather the Solar Production Data ?

This was the hard part of the project. After extensive research on the internet, i found this [GitHub Repository](https://github.com/nazar-pc/solax-local-api-docs), where someone reverse-engineered the solax Cloud API. The Wi-Fi dongle serves as an autonomous HTTP server, which with the right request, responds some JSON data about the real-time production who gets parsed into an Eloquent Model, making the data writable to a database, who will store the production data over time. 

### How is the data stored over time ?

We have an artisan command scheduled to run every 5 minutes to store production data, so the table *production_datas* becomes our production data set.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
