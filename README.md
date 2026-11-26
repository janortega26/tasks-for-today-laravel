# Tasks For Today Management System

## Project Overview

The Tasks For Today Management System is a Laravel-based web application that allows users to manage daily tasks through a simple and secure interface.

The system provides task creation, modification, archiving, and status tracking functionalities while implementing authentication using Laravel Breeze. It also includes an automated email notification feature that is triggered when a task's status changes from **pending** to **done**.

This project was developed as part of **IT0049 - Web System Technologies (TSA4)**.

---

## Features

### Public Pages
- Welcome Page
- Tasks Page
- About Page
- Profile View Page

### Authentication
- User Registration
- User Login
- User Logout
- Protected Task Management Routes

### Task Management
- Create New Task
- Edit Existing Task
- Archive Tasks (Soft Delete)
- View Task Status
- Task Validation

### Email Notification
- Automatically generates an email notification when a task status changes from **pending** to **done**
- Prevents duplicate notifications when a task is already marked as **done**
- Uses Laravel Log Mail Driver for safe testing and verification

---

## Technologies Used

- Laravel 12
- Laravel Breeze
- PHP 8.2+
- MySQL
- Blade Templates
- Tailwind CSS
- Vite

---

## Installation Guide

### 1. Clone the Repository

```bash
git clone <repository-url>
```

```bash
cd tasks-for-today
```

### 2. Install Dependencies

```bash
composer install
```

```bash
npm install
```

### 3. Configure Environment

Copy the environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Update the database configuration in `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tasks_for_today
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Configure Mail

```env
MAIL_MAILER=log
MAIL_FROM_ADDRESS=test@example.com
MAIL_FROM_NAME="Tasks For Today"
```

### 5. Run Database Migrations

```bash
php artisan migrate
```

### 6. Build Frontend Assets

```bash
npm run build
```

### 7. Start the Application

```bash
php artisan serve
```

Visit:

```text
http://127.0.0.1:8000
```

---

## User Guide

### Register

Navigate to:

```text
/register
```

Create a user account.

### Login

Navigate to:

```text
/login
```

Login using the registered account.

### Create Task

1. Login
2. Go to Tasks
3. Click "Create New Task"
4. Complete the form
5. Save

### Edit Task

1. Open Tasks
2. Click Edit
3. Modify task information
4. Update

### Archive Task

1. Open Tasks
2. Click Delete
3. Confirm

Archived tasks are hidden from the task list but remain stored in the database.

---

## Email Notification Testing

To verify the email notification functionality:

1. Create a task with status **pending**
2. Edit the task
3. Change status to **done**
4. Save changes

Open:

```text
storage/logs/laravel.log
```

Verify that a notification entry appears with the subject:

```text
Task Completed Notification
```

Updating an already completed task will not generate another notification.

---

## Database Structure

### Tasks Table

Fields:

- id
- title
- description
- status
- task_date
- is_archived
- created_at
- updated_at

### Users Table

Managed through Laravel Breeze authentication.

---

## Course Information

**Course:** IT0049 – Web System Technologies

**Project:** TSA4 – Tasks For Today Management System: Full CRUD, Authentication, and Email Notifications

**Framework:** Laravel
