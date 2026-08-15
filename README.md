# Product CRUD Application

A full-featured Product CRUD (Create, Read, Update, Delete) web application built with **Laravel 11** and **Vite**. This application allows users to manage products with image uploads, utilizing Laravel's elegant routing and Eloquent ORM.

## 🚀 Features

- **Create Products** - Add new products with name and image uploads
- **Read Products** - View all products with pagination (5 products per page)
- **Update Products** - Edit existing product information
- **Delete Products** - Remove products from the database
- **Image Management** - Upload and store product images
- **Pagination** - Browse products across multiple pages
- **Validation** - Server-side validation for product data and images
- **Responsive Design** - Clean and user-friendly interface

## 🛠️ Tech Stack

- **Backend**: [Laravel 11](https://laravel.com/) - PHP web application framework
- **Frontend Build Tool**: [Vite](https://vitejs.dev/) - Next generation frontend tooling
- **Database**: SQLite (by default, configurable to other databases)
- **ORM**: [Eloquent](https://laravel.com/docs/eloquent)
- **JavaScript**: Vanilla JS with Axios for HTTP requests

## 📋 Requirements

- **PHP**: ^8.2 or higher
- **Composer**: Latest version
- **Node.js**: 16+ (for Vite)
- **NPM**: 8+ or Yarn

## 🏗️ Project Structure

```
app/
├── Http/
│   └── Controllers/
│       └── ProductController.php    # Main product controller
└── Models/
    └── Product.php                  # Product model

database/
├── migrations/
│   └── 2024_03_31_083137_create_products_table.php
└── seeders/

resources/
├── css/
│   └── app.css
├── js/
│   └── app.js
└── views/
    └── product/                     # Product views

routes/
└── web.php                          # Web routes

public/
└── images/                          # Product image storage
```

## ⚡ Quick Start

### 1. Clone the Repository
```bash
git clone https://github.com/yourusername/product-crud.git
cd product-crud
```

### 2. Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 3. Environment Setup
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Database Setup
```bash
# Run migrations
php artisan migrate

# (Optional) Seed the database
php artisan db:seed
```

### 5. Build Frontend Assets
```bash
# Development mode with hot reload
npm run dev

# Production build
npm run build
```

### 6. Start the Development Server
```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

## 📚 API Routes

| Method | Route | Action | Description |
|--------|-------|--------|-------------|
| GET | `/product` | index | List all products |
| GET | `/product/create` | create | Show create form |
| POST | `/product` | store | Store new product |
| GET | `/product/{id}` | show | View product details |
| GET | `/product/{id}/edit` | edit | Show edit form |
| PUT | `/product/{id}` | update | Update product |
| DELETE | `/product/{id}` | destroy | Delete product |

## 🗂️ Database Schema

### Products Table
```sql
CREATE TABLE products (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

## ✅ Validation Rules

- **Name**: Required, string
- **Image**: Required, must be an image file (JPEG, PNG, JPG, GIF), max size 2MB

## 📦 Dependencies

### Backend
- `laravel/framework`: ^11.0 - Web framework
- `laravel/tinker`: ^2.9 - REPL for Laravel

### Frontend
- `laravel-vite-plugin`: ^1.0 - Vite plugin for Laravel
- `vite`: ^5.0 - Frontend build tool
- `axios`: ^1.6.4 - HTTP client

### Development
- `phpunit/phpunit`: ^10.5 - Testing framework
- `laravel/sail`: ^1.26 - Docker environment
- `laravel/pint`: ^1.13 - Code formatter
- `fakerphp/faker`: ^1.23 - Fake data generator

## 🧪 Testing

Run the test suite:
```bash
php artisan test
```

Run specific test:
```bash
php artisan test tests/Feature/ProductTest.php
```

## 📝 Code Formatting

Format your code with Pint:
```bash
./vendor/bin/pint
```

## 🐳 Running with Docker

If you have Laravel Sail configured:
```bash
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
./vendor/bin/sail npm run dev
```

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the LICENSE file for details.

## 💡 Tips

- Images are stored in `public/images/` directory
- Pagination is set to 5 products per page (configurable in `ProductController`)
- Use `.env` file to configure database connection
- For production deployment, run `npm run build` to optimize assets

## 📞 Support

If you encounter any issues or have questions, please open an issue on GitHub.

## 🙏 Acknowledgments

- Built with [Laravel](https://laravel.com/)
- Frontend built with [Vite](https://vitejs.dev/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
