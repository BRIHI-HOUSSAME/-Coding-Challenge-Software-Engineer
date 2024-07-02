Sure, here is the complete code for the README file:

```markdown
# Coding Challenge - Junior Software Engineer - Backend (PHP)

## Project Overview

This project is a backend system for managing products and categories. It includes both a CLI and a web interface to create, update, delete, and view products and categories. The project follows best practices and design patterns to ensure code quality, readability, and maintainability.

## Table of Contents

- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
  - [CLI Commands](#cli-commands)
  - [Web Interface](#web-interface)
- [Testing](#testing)
- [Folder Structure](#folder-structure)
- [Contributing](#contributing)
- [Contact](#contact)

## Technologies Used

- Laravel
- Vue.js
- PHP
- MySQL
- PHPUnit

## Installation

1. **Clone the Repository:**

    ```bash
    git clone https://github.com/your-repo/backend-coding-challenge.git
    cd backend-coding-challenge
    ```

2. **Install Dependencies:**

    ```bash
    composer install
    npm install
    ```

3. **Create and Configure `.env` File:**

    ```bash
    cp .env.example .env
    ```

    Update the `.env` file with your database credentials and other configurations.

4. **Generate Application Key:**

    ```bash
    php artisan key:generate
    ```

5. **Run Migrations:**

    ```bash
    php artisan migrate
    ```

6. **Serve the Application:**

    ```bash
    php artisan serve
    ```

## Usage

### CLI Commands

- **Create a Category:**

    ```bash
    php artisan category:create {name} {parent_id}
    ```

- **Delete a Category:**

    ```bash
    php artisan category:delete {id}
    ```

- **Create a Product:**

    ```bash
    php artisan product:create {name} {description} {price} {image} {category_ids}
    ```

- **Delete a Product:**

    ```bash
    php artisan product:delete {id}
    ```

### Web Interface

- **Create a Product:**
  - Navigate to `/products/create` to create a new product.

- **Browse Products:**
  - Navigate to `/products` to view a paginated list of products.
  - Use sorting and filtering options to organize the list.

## Testing

- **Run Feature Tests:**

    ```bash
    php artisan test
    ```

## Folder Structure

```
app/
├── Console/
│   ├── Commands/
│   │   ├── CreateCategoryCommand.php
│   │   ├── DeleteCategoryCommand.php
│   │   ├── CreateProductCommand.php
│   │   └── DeleteProductCommand.php
├── Http/
│   ├── Controllers/
│   │   ├── ProductController.php
│   │   └── CategoryController.php
├── Models/
│   ├── Product.php
│   └── Category.php
├── Repositories/
│   ├── Interfaces/
│   │   ├── ProductRepositoryInterface.php
│   │   └── CategoryRepositoryInterface.php
│   ├── ProductRepository.php
│   └── CategoryRepository.php
├── Services/
│   ├── ProductService.php
│   └── CategoryService.php
config/
database/
public/
resources/
routes/
tests/
├── Feature/
│   ├── ProductTest.php
│   └── CategoryTest.php
```

## Contributing

1. **Fork the Repository:**

    ```bash
    git clone https://github.com/your-repo/backend-coding-challenge.git
    ```

2. **Create a New Branch:**

    ```bash
    git checkout -b feature/your-feature
    ```

3. **Make Your Changes:**

4. **Commit Your Changes:**

    ```bash
    git commit -m "Add your feature"
    ```

5. **Push to the Branch:**

    ```bash
    git push origin feature/your-feature
    ```

6. **Open a Pull Request.**

## Contact

For any questions, please contact us at [tech-challenge@youcan.shop](mailto:tech-challenge@youcan.shop).
```

This README file provides a comprehensive guide on how to set up, use, and contribute to the project. Make sure to replace the placeholders like `https://github.com/your-repo/backend-coding-challenge.git` with your actual repository URL.
