# Readly

**Readly** is a web application for managing a library of books, where users can browse, view book details, and book a book to borrow. It includes an admin dashboard for managing books, user authentication, and a booking system for borrowing books.

## Features

- **User Authentication**: Users can register, login, and logout.
- **Browse Books**: Users can view details of each book in the library.
- **Book Borrowing**: Authenticated users can borrow books, with the borrowing date and due date managed.
- **Admin Dashboard**: Admin users can add, edit, and delete books from the library collection.
- **Book Search**: Users can easily search for books within the library.

## Requirements

- PHP >= 8.1
- Composer
- Laravel >= 11
- MySQL or SQLite database

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/yourusername/readly.git
    cd readly
    ```

2. Install the required dependencies using Composer:

    ```bash
    composer install
    ```

3. Copy the `.env.example` file to `.env` and update your database credentials:

    ```bash
    cp .env.example .env
    ```

    Then, open the `.env` file and set your database connection settings:

    ```plaintext
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=readly
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5. Run the migrations to create the necessary tables:

    ```bash
    php artisan migrate
    ```

6. (Optional) Seed the database with sample data:

    ```bash
    php artisan db:seed
    ```

7. Start the Laravel development server:

    ```bash
    php artisan serve
    ```

    The application will now be running at [http://localhost:8000](http://localhost:8000).

## Usage

- **User Registration & Login**:
    - Go to `/register` to create a new account.
    - Go to `/login` to log in with your credentials.

- **Browse and Book Books**:
    - After logging in, go to `/books` to view a list of books.
    - Click on any book to view its details and book it.

- **Admin Dashboard**:
    - Admin users can access the dashboard at `/admin` to manage books.
    - Create, edit, or delete books as necessary.

## Routes

- `/` - Home Page (Displays a welcome message and the latest books).
- `/login` - User login page.
- `/register` - User registration page.
- `/books` - List of all books.
- `/book/{id}` - Book details page.
- `/admin` - Admin dashboard page.
- `/admin/create` - Admin page to add a new book.
- `/admin/edit/{id}` - Admin page to edit a book.
- `/admin/destroy/{id}` - Admin page to delete a book.

## Middleware

- **Admin Middleware**: Ensures only admin users can access the admin routes.
- **Auth Middleware**: Ensures only authenticated users can book a book.

## Technologies Used

- **Laravel**: PHP framework for building the web application.
- **Tailwind CSS**: Utility-first CSS framework used for styling.
- **PostgreSQL**: Database management system for storing user and book data.

## License

This project is open-source and available under the [MIT License](LICENSE).
