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
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


# Laravel Project Name
-assignmentproject

## Table of Contents
-Create a basic task management system using PHP and Laravel to manage tasks with CRUD (Create,
Read, Update, Delete) functionality.
1. Task Model:
- Create a Task model with the following attributes:
- Title
- Description
- Due Date

2. Database Migration and Seeder:
- Set up a migration for the Task model to create a tasks table in the database.
- Create a seeder to populate the tasks table with some sample data.

3. Task Controller:
- Generate a controller to handle the CRUD operations for tasks.

4. Task Views:
- Create views for:
- Listing all tasks
- Showing a single task
- Creating a new task
- Editing an existing task

5. Task Routes:
- Define routes to handle the CRUD operations using the controller.

6. Task Validation:
- Implement validation for task creation and updating (e.g., required fields, date format).

7. Task Deletion:
- Implement the ability to delete tasks.

8. Styling (Optional):
- Add some basic styling to make the task management system visually appealing (you can use
Bootstrap or any other CSS framework).


### Installation

- [PHP](https://www.php.net/) (>= 7.x)
- [Laravel](https://laravel.com/docs/8.x/installation)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/)


## Getting Started

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/your-project.git

2. Clone the project into xampp\htdocs path.

3. Install PHP dependencies:
Check installation of php, laravel, composer and mysql is done.

4. Navigate to the project directory:
Open Command Prompt and then open the project for e.g- D:\xampp\htdocs\assignmentproject>

5. Configure your database connection into .env file

6. Generate the application key:
php artisan key:generate

7. Run database migrations:
php artisan migrate

8. Seed the database
php artisan db:seed

9. Run the development server:
php artisan serve
Your application will be available at http://localhost:8000/tasks.


## Usage
It is a Simple Task Management System with a CRUD Operation in laravel where you can Add, Edit, View and Delete the tasks. The Task Management system includes Title, Description and Due Date for any added task in the system.

## Folder Structure
The above laravel project is developed in MVC Architecture.

## Features
- The main feature in the application is a user can make change any task with editing or deleting a task added in the system.
- It has a search feature in the system for searching any specific task
- The Task management system listing has been set a pagination which can overcome on loading all tasks on a single time and can be seen in pagination mode.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Replace placeholders like "Laravel AssignmentProject," "Pranav2734," and "AssignmentProject" with the actual details of your project. This template covers essential sections, but feel free to add more sections or tailor it to your project's specific needs.



