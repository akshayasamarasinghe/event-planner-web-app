# PHP MySQL Authentication Project

This project is a simple PHP application with user registration and login functionality using MySQL. It includes password hashing for secure authentication.

## Requirements

- MAMP (or XAMPP/LAMP)
- PHP 7.x or higher
- MySQL

## Setup Instructions

### 1. Clone the Repository
```bash

First, navigate to the cd /Applications/MAMP/htdocs or relevant server htdocs folder and then

git clone https://github.com/akshayasamarasinghe/event-planner-web-app.git
cd event-planner-web-app

--------------------------------------------------------------------------------

2. Configure XAMPP/MAMP

Open XAMPP/MAMP and start Apache and MySQL servers.
Open phpMyAdmin (http://localhost/phpmyadmin).
Create a new database called event-planner-app-db.
3. Import Database Schema
In phpMyAdmin, go to the event-planner-app-db database.
Run the following SQL script to create the users table:

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

--------------------------------------------------------------------------------

4. Configure Database Connection

(only if there any changes in this fields)
Open config/database.php.
Update the following lines if your XAMPP/MAMP credentials differ:

$host = 'localhost';
$db = 'event-planner-app-db';
$user = 'root'; // Default MAMP username
$pass = 'root'; // Default MAMP password

--------------------------------------------------------------------------------

5. Run the Application

In XAMPP/MAMP, click Open WebStart page.

Go to http://localhost:8888/event-planner-web-app/public/register.php to register a new user.
Login at http://localhost:8888/event-planner-web-app/public/login.php.
