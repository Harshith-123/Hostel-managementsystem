# Hostel Management System

A DBMS mini project designed to manage and simplify hostel administration tasks such as student registration, room allocation, fee management, user login, and report generation. The system helps reduce manual record-keeping by storing hostel-related information in a structured database.

## Project Overview

The Hostel Management System is developed to support hostel staff and administrators in managing daily hostel operations efficiently. It allows users to maintain student records, assign rooms based on availability, track fee payments, and generate useful reports related to hostel occupancy and finance.

This project mainly demonstrates important DBMS concepts such as database design, table creation, relationships, CRUD operations, data retrieval, and report generation.

## Features

- Student registration and record management
- Room allocation based on availability
- Fee payment tracking
- Hostel occupancy management
- Report generation for students, rooms, and payments
- Secure login for authorized users
- Add, update, view, and delete hostel records

## Technologies Used

- DBMS: MySQL
- Query Language: SQL
- Frontend: HTML, CSS, JavaScript
- Backend: PHP
- Server: XAMPP / Apache
- Database Tool: phpMyAdmin
- Code Editor: Visual Studio Code

## DBMS Concepts Used

- Database creation
- Table creation
- Primary keys and foreign keys
- Relationships between tables
- CRUD operations
- SQL queries
- Data insertion, deletion, updating, and retrieval
- Report generation using database records

## Project Modules

### 1. Student Management

This module is used to add and manage student details such as name, contact information, room details, and other hostel-related information.

### 2. Room Management

This module helps administrators assign rooms to students and check room availability.

### 3. Fee Management

This module is used to track hostel fee payments and maintain payment records.

### 4. User Management

This module provides login-based access for authorized users such as administrators or hostel staff.

### 5. Reports

This module helps generate reports related to student details, room occupancy, and fee records.

## Database Setup

1. Open XAMPP Control Panel.
2. Start Apache and MySQL.
3. Open your browser and go to:

```text
http://localhost/phpmyadmin
````

4. Create a new database:

```sql
CREATE DATABASE hostel_db;
```

5. Import the SQL file provided in the project folder.

If your SQL file has a different database name, use the same name mentioned in that file.

## Installation and Setup

### 1. Clone the Repository

```bash
git clone https://github.com/Harshith-123/Hostel-managementsystem.git
```

### 2. Move the Project Folder

Move the project folder into the XAMPP `htdocs` directory.

Example:

```text
C:\xampp\htdocs\Hostel-managementsystem
```

### 3. Start XAMPP Services

Open XAMPP and start:

```text
Apache
MySQL
```

### 4. Import the Database

Open phpMyAdmin:

```text
http://localhost/phpmyadmin
```

Create the database and import the `.sql` file from the project.

### 5. Configure Database Connection

Open the database connection file in the project.

Common file names may include:

```text
db.php
config.php
connection.php
```

Update the database details if required:

```php
$host = "localhost";
$user = "root";
$password = "";
$database = "hostel_db";
```

### 6. Run the Project

Open your browser and go to:

```text
http://localhost/Hostel-managementsystem
```

## Usage

1. Open the application in the browser.
2. Login using the provided credentials, if available.
3. Use the dashboard to manage hostel records.
4. Add student details.
5. Allocate rooms.
6. Track fee payments.
7. Generate reports.
8. Logout after completing the work.

## Folder Structure

```text
Hostel-managementsystem/
│
├── css/
├── js/
├── images/
├── database/
├── includes/
├── admin/
├── index.php
├── login.php
├── db.php
└── README.md
```

Note: The actual folder structure may vary depending on the project files.

## Future Enhancements

* Add student login portal
* Add online fee payment integration
* Add email or SMS notifications
* Add room availability dashboard
* Add advanced search and filter options
* Improve user interface design
* Add backup and restore database option

## Project Purpose

This project was developed as a DBMS mini project to understand how database systems are used in real-world applications. It focuses on managing hostel records using MySQL and performing database operations through a simple application interface.

## License

This project is created for educational purposes only.

You are free to use, modify, and learn from this project for academic and personal learning purposes. Commercial use is not permitted without permission.

## Author

Harshith Basavaraju

GitHub: [https://github.com/Harshith-123](https://github.com/Harshith-123)

```

