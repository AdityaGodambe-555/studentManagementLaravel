# Student Management System

A simple Student Management System built with Laravel Framework and MySQL. This application allows users to manage student records, including adding, editing, and deleting student information.

## Technologies Used

- Laravel
- PHP
- MySQL
- HTML
- CSS (with Tailwind CSS for styling)

## Features

- Add new student records
- Edit existing student details
- Delete student records
- View all student data in a table format

## Database Structure

The Student Management System uses a MySQL database named **students** with the following tables:

### Tables

#### students
This table stores information about each student.

**Fields:**
- `sname` (varchar): Name of the student.
- `sclass` (varchar): Class and division of the student (e.g., '10/A').
- `rollno` (int): Roll number assigned to the student.
- `id` (int, PRIMARY KEY): Unique identifier for each record (auto-increment).

## Usage

- **Add Student**: Navigate to the "Add Student" page to input new student details.
- **View Students**: The main page displays a table of all students with options to edit or delete each record.
- **Edit Student**: Click the "Edit" button next to a student’s name to modify their details.
- **Delete Student**: Click the "Delete" button to remove a student record.

