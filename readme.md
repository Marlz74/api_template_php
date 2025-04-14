# API Template

A clean and extendable PHP API project structure using the MVC pattern and Swagger for documentation.

## 📁 Project Structure

```
api_template/
├── composer.json         # Composer dependencies
├── public/               # Public-facing directory (entry point: index.php)
├── src/                  # Application source code
│   ├── Controller/       # Controllers
│   ├── Models/           # Models
│   ├── Middleware/       # Middleware
│   └── Libraries/        # Core and helper classes
├── docs/                 # Swagger UI and API docs
├── vendor/               # Composer-installed packages
└── readme.md             # This file
└── dev.php               # Development routing script
```

---

## 🚀 Getting Started

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/api_template.git
cd api_template
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Setup Virtual Host or Start Built-in PHP Server

To start the development server, run the following command:

```bash
composer dev
```

This will start the server and use `dev.php` for custom routing (for development purposes). Ensure your `index.php` is the entry point.

---

## 📖 API Documentation

Swagger documentation is available:

- Navigate to: `http://localhost:8000/docs/index.html`
- Ensure `swagger.json` is updated with your latest API annotations


---

## ✨ Features

- 🔒 Basic routing and sanitization
- 📦 PSR-4 autoloading via Composer
- 📚 Swagger (OpenAPI) support for API docs
- 🧩 MVC pattern for organized development
- 🧰 Middleware support for custom logic
- 🧪 Easy to extend for tests and authentication

---

## 🧠 How Routing Works

- URL format: `/controller/method/param1/param2`
- Controller class and method names are sanitized for security
- Method is constructed based on HTTP verb and camelCase, e.g.:
  - `GET /user/login` ➜ `getLogin()`
  - `POST /user/register` ➜ `postRegister()`

---

## 🛠 Environment Requirements

- PHP 8.0+
- Composer
- Apache/Nginx or PHP built-in server

---

## 🧑‍💻 Author

**Utibe Patrick (SD)**\
Backend Developer

---

## 📜 License

MIT License. Feel free to use and modify.
```

### Key Updates:
- **Renamed** the routing script from `router.php` to `dev.php` to indicate that it's for development.
- **Updated** the command in the "Getting Started" section to reflect the `composer dev` script for running the development server.

Now, running `composer dev` will serve the application using your custom `dev.php` file in the development environment.