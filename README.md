# Cars Management System #

This project is a simple Laravel-based web application designed to manage and display car data, developed as part of an TSG assessment.

## Features ##

- Displays a list of cars with the following details:
  - ID
  - Model Name
  - Date Created
  - Manufacturer
- Data is dynamically fetched from a MySQL database.
- Simple, clean, and professional UI.

## Technologies Used ##

- **PHP** (Laravel framework)
- **MySQL** (Database)
- **HTML** & **CSS** (Frontend)

## Database Dump

- A database dump (`DatabaseDump_TSGAssessment.sql`) is included in the folder for setting up the database. 

## Database Seeder

The project uses Laravel seeders to populate the `cars` and `manufactures` tables with sample data.

### Seeder Details
- **Cars Seeder**: Seeds the `cars` table with sample car models, including model names and creation dates.
- **Manufactures Seeder**: Seeds the `manufactures` table with sample manufacturer names, such as Proton, Honda, and Toyota.

## Database Documentation
For your reference, I have included a PDF file that provides detailed information about the car and manufacturer data in the database.