HEAD
# Laravel Initial Run – GameDev in Godot Engine

A single-page Laravel application demonstrating **Blade template mastering** with a clean, fluid, and responsive UI design themed around **game development with Godot**.

This project focuses on frontend structure and best practices inside a Laravel environment, without relying on external CSS or JavaScript frameworks.

---

## Features

- Blade layout inheritance using a master layout  
- Reusable partials (header and footer)  
- Single-page structure with interactive sections
- Clean, modern, and responsive CSS design  
- Client-side JavaScript for basic reactivity and interactivity
- Proper Laravel asset management (CSS & JS from `public/`)  
- Simple and maintainable folder structure  
- Interactive learning roadmap with completion tracking

---

## Technologies Used

- Laravel  
- Blade Templating Engine  
- HTML5  
- CSS3 (custom, framework-free)  
- Vanilla JavaScript  

---

## Project Structure
```text
resources/
└── views/
    ├── layouts/
    │   └── app.blade.php
    ├── partials/
    │   ├── header.blade.php
    │   └── footer.blade.php
    └── welcome.blade.php

public/
├── css/
│   └── style.css
└── js/
    └── app.js
```

---

## Purpose

This project was created to demonstrate:

- Understanding of Laravel Blade templating
- Clean separation of layout and content
- Reusable UI components
- Frontend design and responsiveness within Laravel
- Interactive single-page application structure

It is suitable for academic submission, learning reference, or as a starter template for simple Laravel-based frontend projects.

---

## How to Run

### 1. Clone the repository
```bash
git clone https://github.com/yourusername/Laravel-Initial-Run-GameDev-in-Godot-Engine.git
cd Laravel-Initial-Run-GameDev-in-Godot-Engine
```

### 2. Install dependencies
```bash
composer install
```

### 3. Set up environment
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Start the development server
```bash
php artisan serve
```

### 5. Open your browser and visit
```
http://127.0.0.1:8000
```

---

## Application Features

### Navigation
- **Home**: Main landing page with interactive buttons
- **About**: Information about the project

### Interactive Sections
- **Explore Engine**: Learn about Godot Engine features
- **Dev Tools**: Discover development tools for game creation
- **Learning Roadmap**: Track your progress through game development concepts
  - Learn GDScript
  - Master Nodes & Scenes
  - Build First Game

---

## Notes

- All CSS and JavaScript assets are loaded from the `public/` directory using Laravel's `asset()` helper.
- The application is intentionally kept framework-free on the frontend to clearly demonstrate core concepts.
- The single-page layout highlights Blade's layout inheritance and partial reuse.
- Interactive elements use vanilla JavaScript for enhanced user experience.

---

## License

This project is licensed under the [Apache License 2.0](LICENSE).
```
Copyright 2025 [Your Name]

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
```

---

**Built for learning, clarity, and maintainability.**
=======
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

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
54ecd42 (Laravel Initial Run GameDev in Godot Engine)
