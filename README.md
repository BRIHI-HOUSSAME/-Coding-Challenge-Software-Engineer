
# Coding Challenge - Junior Software Engineer - Backend (PHP)

## Project Overview

This project is a backend system for managing products and categories. It includes both a CLI and a web interface to create, update, delete, and view products and categories. The project follows best practices and design patterns to ensure code quality, readability, and maintainability.



## Technologies Used

- Laravel
- Vue.js
- PHP
- MySQL
- PHPUnit


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



## Contact

For any questions, please contact me at brihihossam@gmail.com

>>>>>>> b683f060732c651d591fba801da443a6e8593287
