# Blogger - A Laravel Blogging Platform

[![Laravel](https://img.shields.io/badge/Laravel-11.x-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-blue.svg)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0+-orange.svg)](https://mysql.com)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.x-purple.svg)](https://getbootstrap.com)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

A modern, feature-rich blogging platform built with Laravel 11, featuring multi-user authentication, blog management, and an attractive responsive UI.

## ✨ Features

### 🎯 Core Features
- **Multi-User Authentication System**
  - User registration and login
  - Admin panel with separate authentication
  - Role-based access control

- **Blog Management**
  - Create, edit, and delete blog posts
  - Rich text content with image uploads
  - SEO-friendly URLs with slugs
  - Category-based organization

- **Content Organization**
  - Category management system
  - Blog filtering by categories
  - Search functionality across blog posts
  - Related posts suggestions

- **User Experience**
  - Responsive design with Bootstrap 5
  - Modern and attractive UI
  - Image gallery support
  - Comment system (structure in place)

### 🔧 Technical Features
- **Laravel 11** with modern PHP 8.2+ features
- **MySQL Database** with proper relationships
- **Bootstrap 5** for responsive design
- **Vite** for asset compilation
- **File upload** handling with unique naming
- **Eloquent ORM** with proper model relationships

## 🛠️ Tech Stack

### Backend
- **PHP 8.2+** - Modern PHP with type hints
- **Laravel 11** - Latest Laravel framework
- **MySQL** - Relational database
- **Eloquent ORM** - Database abstraction layer

### Frontend
- **Bootstrap 5** - CSS framework for responsive design
- **Blade Templates** - Laravel's templating engine
- **JavaScript/jQuery** - Interactive functionality
- **Vite** - Modern build tool

### Development Tools
- **Composer** - PHP dependency management
- **Artisan** - Laravel command-line interface
- **PHPUnit** - Testing framework

## 📋 Prerequisites

Before you begin, ensure you have the following installed:
- **PHP 8.2** or higher
- **Composer** (latest version)
- **MySQL 8.0** or higher
- **Node.js** and **npm** (for Vite)
- **Web server** (Apache/Nginx) or use Laravel's built-in server

## 🚀 Installation

### 1. Clone the Repository
```bash
git clone <repository-url>
cd Blogger
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Node.js Dependencies
```bash
npm install
```

### 4. Environment Configuration
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 5. Database Setup
```bash
# Configure your database in .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blogger_db
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Run migrations
php artisan migrate

# (Optional) Seed with sample data
php artisan db:seed
```

### 6. File Permissions
```bash
# Set proper permissions for storage and cache
chmod -R 775 storage bootstrap/cache
```

### 7. Build Assets
```bash
# Development
npm run dev

# Production
npm run build
```

### 8. Start the Application
```bash
# Using Laravel's built-in server
php artisan serve

# Or configure your web server to point to the public directory
```

## 📁 Project Structure

```
Blogger/
├── app/
│   ├── Http/Controllers/
│   │   ├── admin/           # Admin controllers
│   │   ├── BlogController.php
│   │   ├── CategoryController.php
│   │   ├── DashboardController.php
│   │   └── LoginController.php
│   ├── Models/
│   │   ├── Blog.php
│   │   ├── Category.php
│   │   └── User.php
│   └── Providers/
├── database/
│   └── migrations/          # Database migrations
├── resources/
│   ├── views/
│   │   ├── admin/          # Admin panel views
│   │   ├── account/        # User account views
│   │   ├── layouts/        # Layout templates
│   │   └── *.blade.php     # Main views
│   ├── css/
│   └── js/
├── routes/
│   └── web.php             # Web routes
├── public/
│   ├── uploads/            # Uploaded images
│   ├── assets/             # Compiled assets
│   └── admin_assets/       # Admin panel assets
└── storage/                # Application storage
```

## 🎮 Usage

### For Users
1. **Browse Blogs**: Visit the homepage to see all published blogs
2. **Register/Login**: Create an account or login to access user features
3. **View Blog Details**: Click on any blog to read the full content
4. **Search Blogs**: Use the search functionality to find specific content
5. **Filter by Category**: Browse blogs by categories

### For Administrators
1. **Admin Login**: Access admin panel at `/admin`
2. **Dashboard**: View overview of blogs, categories, and users
3. **Blog Management**: Create, edit, and delete blog posts
4. **Category Management**: Manage blog categories
5. **User Management**: View registered users

## 🔐 Authentication

The application features a dual authentication system:

### User Authentication
- **Registration**: Users can create accounts
- **Login**: Standard user login
- **Dashboard**: Personal user dashboard

### Admin Authentication
- **Separate Login**: Admin-specific login at `/admin`
- **Protected Routes**: Admin-only access to management features
- **User Management**: View and manage user accounts

## 🗄️ Database Schema

### Main Tables
- **users** - User accounts and authentication
- **blog** - Blog posts with content and metadata
- **categories** - Blog categories for organization

### Key Relationships
- Blogs belong to categories
- Categories have many blogs
- Users can create multiple blogs

## 🎨 Customization

### Styling
- Modify Bootstrap classes in Blade templates
- Custom CSS in `resources/css/app.css`
- Admin panel styling in `public/admin_assets/`

### Functionality
- Add new features by extending controllers
- Modify models for additional fields
- Create new routes in `routes/web.php`

## 🧪 Testing

```bash
# Run PHPUnit tests
php artisan test

# Run tests with coverage
php artisan test --coverage
```

## 📦 Deployment

### Production Setup
1. Set `APP_ENV=production` in `.env`
2. Run `npm run build` for production assets
3. Configure your web server (Apache/Nginx)
4. Set proper file permissions
5. Configure database for production

### Environment Variables
```env
APP_NAME=Blogger
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_production_db
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgments

- **Laravel Team** for the amazing framework
- **Bootstrap Team** for the responsive CSS framework
- **Colorlib** for the beautiful theme design

## 📞 Support

If you encounter any issues or have questions:

1. Check the [Laravel Documentation](https://laravel.com/docs)
2. Review the code comments and structure
3. Create an issue in the repository
4. Contact the development team

---

**Happy Blogging! 🚀**
