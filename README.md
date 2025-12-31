# Laravel Initial Run – Blade Template Mastering

A single-page Laravel application demonstrating **Blade template mastering** with a clean, fluid, and responsive UI design.

This project is themed around **game development with Godot** and focuses on frontend structure and best practices inside a Laravel environment, without relying on external CSS or JavaScript frameworks.

---

## Features

- Blade layout inheritance using a master layout  
- Reusable partials (header and footer)  
- Single-page structure  
- Clean, modern, and responsive CSS design  
- Client-side JavaScript for basic reactivity  
- Proper Laravel asset management (CSS & JS from `public/`)  
- Simple and maintainable folder structure  

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

It is suitable for academic submission, learning reference, or as a starter template for simple Laravel-based frontend projects.

---

## How to Run

### 1. Clone the repository
```bash
git clone https://github.com/yourusername/laravel-blade-mastering.git
cd laravel-blade-mastering
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

## Notes

- All CSS and JavaScript assets are loaded from the `public/` directory using Laravel's `asset()` helper.
- The application is intentionally kept framework-free on the frontend to clearly demonstrate core concepts.
- The single-page layout highlights Blade's layout inheritance and partial reuse.

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
