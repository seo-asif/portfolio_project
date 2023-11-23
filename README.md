# Laravel Portfolio Project

This repository contains the source code for my personal portfolio project built using the Laravel framework. This project showcases my skills, projects, and experiences as a developer.

## Getting Started

Follow these instructions to get a copy of the project up and running on your local machine.

### Prerequisites

Make sure you have the following software installed on your machine:

- PHP (>= 7.3)
- Composer
- Laravel
- Node.js
- npm

### Installing

1. **Clone the repository:**

```bash
   git clone git@github.com:seo-asif/portfolio_project.git
```
 

Navigate to the project directory:

```bash
cd portfolio_project
```

Install PHP dependencies:

```bash
Copy code
composer install
```

Install Node.js dependencies:

```bash
npm install
```
Copy the .env.example file and rename it to .env:

```bash
cp .env.example .env
```

Generate an application key:
```bash
php artisan key:generate
```

Configure your database settings in the .env file.

Run database migrations:

```bash
php artisan migrate
```
Compile assets:

```bash
npm run dev
```

Start the development server:

```bash
php artisan serve
```
The application should now be running at http://localhost:8000.


## Built With Laravel - The PHP framework for web artisans.
Bootstrap - Front-end framework.
Vue.js - JavaScript framework for building user interfaces.
License
This project is licensed under the MIT License - see the LICENSE file for details.

## Acknowledgments
Hat tip to anyone whose code was used.
Inspiration. etc.
Feel free to explore the code and use it as a reference for your own projects. If you have any questions or suggestions, please create an issue or reach out to me directly.