<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



🔥 LaraMaster - Custom Laravel Blog (From Scratch)
A fully custom-built Laravel blog application with authentication, post management, and authorization—implemented without Laravel Breeze, using pure Laravel fundamentals.

✨ Key Features
 Custom Authentication System (Register, Login, Logout, Sessions)
 Post CRUD (Create, Read, Update, Delete) with validation
 User Authorization (Policies & Middleware)
 Guest & User Access Control
 Flash Messages (Success, Error, Warning, Info) Responsive UI (Tailwind CSS)
 Database Seeding (Fake posts & users for testing)

🛠 Tech Stack
Backend: Laravel 10+ (Custom Auth, Policies, MVC)

Frontend: Blade Templating + Tailwind CSS + JS

Database: SQLite

Security: CSRF Protection, Form Validation, Password Hashing

⚙️ Setup & Installation
1. Clone the repo & install dependencies
bash
git clone https://github.com/gyamficodes/LaraMaster.git
cd LaraMaster
composer install
npm install && npm run build
2. Set up environment & database
bash
cp .env.example .env
php artisan key:generate
Configure .env with your database (SQLite/MySQL)

3. Run migrations & seed dummy data
bash
php artisan migrate --seed
4. Start the development server
bash
php artisan serve
Access: http://localhost:8000

👤 Default Test Users
🔹 Admin → admin@example.com | Password: password
🔹 Regular User → user@example.com | Password: password
