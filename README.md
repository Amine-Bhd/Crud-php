# Movie Manager

A streamlined web application for managing your movie collection. Built with PHP and MySQL, featuring a clean, modern interface with a dark theme.

## Features

- User authentication system
- Movie database management (add/edit/delete)
- Responsive dark-mode UI
- Simple session handling
- Clean movie listing with filtering options

## Tech Stack

- PHP (Backend)
- MySQL (Database)
- Custom CSS for styling
- Vanilla JavaScript
- Modern dark UI inspired by Tailwind design principles

## Setup

1. Clone this repo to your local machine
```bash
git clone https://github.com/yourusername/movie-manager.git
```

2. Set up your MySQL database:
```bash
mysql -u root -p < code.sql
```

3. Configure your database connection in `config.php`:
```php
$host = "localhost";
$dbname = "movies_db";
$username = "your_username";
$password = "your_password";
```

4. Start your local PHP server:
```bash
php -S localhost:8000
```

5. Visit `http://localhost:8000/login.php` in your browser

## Project Structure

```
movie-manager/
│
├── config.php         # Database configuration
├── login.php         # User login interface
├── register.php      # New user registration
├── movies.php        # Main movie management interface
├── logout.php        # Session termination
├── style.css         # Styling and theme
└── code.sql          # Database schema
```

## Contributing

1. Fork the repo
2. Create your feature branch (`git checkout -b feature/awesome-feature`)
3. Commit your changes (`git commit -m 'Add some awesome feature'`)
4. Push to the branch (`git push origin feature/awesome-feature`)
5. Open a Pull Request

## TODO

- [ ] Add movie poster upload functionality
- [ ] Implement search and filter features
- [ ] Add user roles and permissions
- [ ] Implement password hashing
- [ ] Add movie rating system

## Security Note

This is a basic implementation. For production use, please:
- Implement proper password hashing
- Add input sanitization
- Use prepared statements for queries
- Add CSRF protection
- Enable proper session security
