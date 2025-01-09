# Web Application for Medical Practice Management

This project is designed for the efficient management of a medical practice. It features a web application that allows users (doctors, medical staff, and pharmacists) to manage patients, prescriptions, appointments, and pharmacy inventories. The application leverages **React.js** for the frontend, **Symfony 6** with **API Platform** for the backend, and implements **JWT** for secure authentication.

## Features

- **Patient Management**: Manage patient information, including personal details and medical history.
- **Prescription Management**: Handle prescriptions issued by doctors, with options to update, view, and manage medications.
- **Appointment Management**: Schedule, track, and manage patient appointments with doctors or specialists.
- **Pharmacy Management**: Manage pharmacy inventory, including medication stock levels, distribution, and orders.
- **Secure Authentication**: User authentication with JWT (JSON Web Tokens) for secure login and access control.
- **CRUD Operations**: Full Create, Read, Update, Delete functionality for all major entities.

## Technologies

- **Frontend**: React.js
- **Backend**: Symfony 6
- **API**: API Platform
- **Security**: JWT (JSON Web Tokens)

## Functionalities

### CRUD Operations

- **Patients**: Create, read, update, and delete patient records.
- **Prescriptions**: Manage prescriptions linked to patients, including medication, dosage, and treatment duration.
- **Appointments**: Schedule and manage patient appointments with doctors, including time and location.
- **Pharmacy Inventory**: Keep track of medications in the pharmacy, including stock levels and dispensing.

### User Authentication

- **JWT Authentication**: Secure user login and session management using JWT, ensuring that only authorized users can access specific features and resources.

### API and Data Modeling

- **API Platform Integration**: Utilizes API Platform to expose a set of RESTful endpoints for all resources (patients, prescriptions, appointments, pharmacy items).
- **Entity Modeling**: Proper entity relationships and data structures to ensure smooth data flow and system consistency.

## Installation

### Prerequisites

- **Node.js** (version 14 or higher)
- **PHP** (version 8.0 or higher)
- **Composer** (PHP dependency manager)
- **MySQL Database** 

### Backend Setup (Symfony + API Platform)


     ```bash
     # Clone the repository
     git clone https://github.com/achrafalfitouri/Cabinet-medical-back.git
     cd Cabinet-medical-back

     # Install project dependencies
     composer install

     # Create the database
     php bin/console doctrine:database:create

     # Run database migrations to set up the schema
     php bin/console doctrine:migrations:migrate

     # Start the Symfony development server
     symfony server:start
### For Frontend Setup visit the following url : 
https://github.com/travolta11/Cabinet_medical_front
