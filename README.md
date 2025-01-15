
# E-Commerce Website

## Overview

This project is a simple e-commerce website designed for a clothing company. It includes basic features such as user management, product catalog, order management, payments, and product reviews. The backend is built using Laravel 11, and the website provides an easy-to-use platform for customers to browse, purchase, and review products.

## Features

- **User Authentication:** User registration, login, and profile management for both customers and admins.
- **Product Catalog:** Browse products by categories, view product details, and add products to the cart.
- **Shopping Cart:** Add items to the cart, modify quantities, and proceed to checkout.
- **Order Management:** Place orders, track order status, and manage payment.
- **Payments:** Integration of a basic payment system (payment method can be adjusted based on preference).
- **Product Reviews:** Users can review products by rating and leaving comments.

## Installation

Follow the steps below to install and set up the project locally:

### Prerequisites

- PHP >= 8.3
- Composer
- Laravel 11
- MySQL
- Node.js (for front-end assets)

### 1. Clone the repository

```bash
git clone https://github.com/Suvo-32/zylo-backend.git
cd zylo-backend
```

### 2. Install dependencies

Run the following command to install all PHP dependencies:

```bash
composer install
```

### 3. Set up the environment file

Copy the `.env.example` file to `.env` and update your database credentials.

```bash
cp .env.example .env
```

Set the following variables in `.env`:

- `DB_CONNECTION=mysql`
- `DB_HOST=127.0.0.1`
- `DB_PORT=3306`
- `DB_DATABASE=your_database`
- `DB_USERNAME=your_username`
- `DB_PASSWORD=your_password`

### 4. Generate the application key

```bash
php artisan key:generate
```

### 5. Migrate the database

Run the migrations to set up the database schema.

```bash
php artisan migrate
```

### 6. Seed the database (optional)

To seed the database with sample data (e.g., products, categories), run:

```bash
php artisan db:seed
```

### 7. Serve the application

Start the Laravel development server:

```bash
php artisan serve
```

The application will be available at `http://127.0.0.1:8000`.

### 9. Set up mail (optional)

If you want to send emails (e.g., for order confirmations, password resets), configure the mail settings in the `.env` file.

## API Documentation

### 1. User Authentication

- **POST /api/register:** Register a new user.
- **POST /api/login:** Log in and receive an authentication token.
- **GET /api/logout:** Log out and invalidate the token.

### 2. Products

- **GET /api/products:** Get a list of products.
- **GET /api/products/{id}:** Get product details by ID.

### 3. Orders

- **POST /api/orders:** Place an order.
- **GET /api/orders:** Get a list of orders for the authenticated user.
- **GET /api/orders/{id}:** Get the details of a specific order.

### 4. Payments

- **POST /api/payments:** Create a payment for an order.

### 5. Reviews

- **POST /api/reviews:** Add a review for a product.
- **GET /api/reviews/{product_id}:** Get reviews for a product.

## Directory Structure

- `app/`: Contains all the application logic, including controllers, models, and services.
- `database/`: Contains the database migrations and seeders.
- `public/`: Contains publicly accessible files such as images and JavaScript.
- `resources/`: Contains front-end views, assets, and translations.
- `routes/`: Contains all route definitions.

## Testing

You can run tests using PHPUnit:

```bash
php artisan test
```
