# Laravel Pierre-Antoine Baizeau


Bienvenue sur un projet réalisé en __Laravel__ , celui-ci n'a pas eu d'attention porté sur le visuel et à été réalisé à l'aide de faker pour generer des articles et catégories. 
__Veuillez suivre les indication en dessous de l'explication pour mettre en route le projet.__

### Naviguer entre les différentes catégories

Vous pouvez naviguer entre les catégories et les affichers.

<img src="https://user-images.githubusercontent.com/70761069/114284906-7de42980-9a53-11eb-8c5b-a8d17e71e264.png" width="700">


### Sur une catégorie

Vous pouvez voir le nom et l'image de la catégorie, retourner sur toutes les catégories et voir les differents articles de la catégorie.

<img src="https://user-images.githubusercontent.com/70761069/114284976-f2b76380-9a53-11eb-8c5c-5226bad97186.png" width="700">


### Sur un article

Vous pouvez voir le nom, l'image, la description de l'article et le nombre encore disponible, retourner sur toutes les catégories.

<img src="https://user-images.githubusercontent.com/70761069/114285044-5f326280-9a54-11eb-89d0-9fc114eb2134.png" width="700">


----------------



## Comment mettre en route le projet 

Pour mettre en route le projet il vous faudra réaliser quelques manipulations, celle ci sont présente si dessous 

- assurez vous que votre version de php est superieur a la 7.4
- il faut que vous ayez installer composer en entrant "composer install" dans le terminal a la racine de votre projet
- il faut que vous ayez installer npm en entrant "npm install" dans le terminal a la racine de votre projet
- créer une copie de votre fichier .env en entrant "cp .env.example .env" dans le terminal (assurer vous que les bonne données sont rentre entre les lignes 10 et 15, si ce ne sont pas les bonnes le liens entre votre base de donnée et le projet ne se fera pas)
- générer une clé de cryptage en entrant " php artisan key:generate" dans le terminal
- migrer votre base données avec "php artisan migrate" dans le terminal
- 
- enfin lancer le projet pour qu'il s'affiche dans votre navigateur en rentrant "php artisan serve" dans votre terminal puis en cliquant sur le lien mis a votre disposition dans le termial qui est http://127.0.0.1:8000 si vous n'avez pas deja lancé un site via php artisan. Si c'est le cas changé le dernier chiffre comme tel http://127.0.0.1:8001, ou avec un chiffre superieur.

Vous pouvez des a present profiter du projet.


------------------


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
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
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
