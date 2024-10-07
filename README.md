<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
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

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# test
Initialized empty Git repository in C:/Users/lionsgeek/Desktop/laravel/relations/.git/
[master (root-commit) 671bbd5] first commit
 72 files changed, 13020 insertions(+)
 create mode 100644 .editorconfig
 create mode 100644 .env.example
 create mode 100644 .gitattributes
 create mode 100644 .gitignore
 create mode 100644 README.md
 create mode 100644 app/Http/Controllers/CommentController.php
 create mode 100644 app/Http/Controllers/Controller.php
 create mode 100644 app/Http/Controllers/HomeController.php
 create mode 100644 app/Http/Controllers/PostController.php
 create mode 100644 app/Models/Comment.php
 create mode 100644 app/Models/Post.php
 create mode 100644 app/Models/User.php
 create mode 100644 app/Providers/AppServiceProvider.php
 create mode 100644 artisan
 create mode 100644 bootstrap/app.php
 create mode 100644 bootstrap/cache/.gitignore
 create mode 100644 bootstrap/providers.php
 create mode 100644 composer.json
 create mode 100644 composer.lock
 create mode 100644 config/app.php
 create mode 100644 config/auth.php
 create mode 100644 config/cache.php
 create mode 100644 config/database.php
 create mode 100644 config/filesystems.php
 create mode 100644 config/logging.php
 create mode 100644 config/mail.php
 create mode 100644 config/queue.php
 create mode 100644 config/services.php
 create mode 100644 config/session.php
 create mode 100644 database/.gitignore
 create mode 100644 database/factories/UserFactory.php
 create mode 100644 database/migrations/0001_01_01_000000_create_users_table.php
 create mode 100644 database/migrations/0001_01_01_000001_create_cache_table.php
 create mode 100644 database/migrations/0001_01_01_000002_create_jobs_table.php
 create mode 100644 database/migrations/2024_10_07_140616_create_posts_table.php
 create mode 100644 database/migrations/2024_10_07_141637_create_comments_table.php
 create mode 100644 database/seeders/DatabaseSeeder.php
 create mode 100644 package-lock.json
 create mode 100644 package.json
 create mode 100644 phpunit.xml
 create mode 100644 postcss.config.js
 create mode 100644 public/.htaccess
 create mode 100644 public/favicon.ico
 create mode 100644 public/index.php
 create mode 100644 public/robots.txt
 create mode 100644 resources/css/app.css
 create mode 100644 resources/js/app.js
 create mode 100644 resources/js/bootstrap.js
 create mode 100644 resources/sass/_variables.scss
 create mode 100644 resources/sass/app.scss
 create mode 100644 resources/views/home/home.blade.php
 create mode 100644 resources/views/layouts/flash.blade.php
 create mode 100644 resources/views/layouts/index.blade.php
 create mode 100644 resources/views/layouts/sidebar.blade.php
 create mode 100644 resources/views/school/school.blade.php
 create mode 100644 routes/console.php
 create mode 100644 routes/web.php
 create mode 100644 storage/app/.gitignore
 create mode 100644 storage/app/private/.gitignore
 create mode 100644 storage/app/public/.gitignore
 create mode 100644 storage/framework/.gitignore
 create mode 100644 storage/framework/cache/.gitignore
 create mode 100644 storage/framework/cache/data/.gitignore
 create mode 100644 storage/framework/sessions/.gitignore
 create mode 100644 storage/framework/testing/.gitignore
 create mode 100644 storage/framework/views/.gitignore
 create mode 100644 storage/logs/.gitignore
 create mode 100644 tailwind.config.js
 create mode 100644 tests/Feature/ExampleTest.php
 create mode 100644 tests/TestCase.php
 create mode 100644 tests/Unit/ExampleTest.php
 create mode 100644 vite.config.js
# test
