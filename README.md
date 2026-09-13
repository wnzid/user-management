<div align="center">

# PHP User Management

**A compact object-oriented authentication example with roles and PDO.**

`PHP` · `MySQL` · `PDO` · `Sessions`

</div>

This learning project demonstrates registration, sign-in, sign-out, role-aware user models, and a protected dashboard. It separates core contracts, domain models, authentication services, database configuration, and public routes.

## Concepts covered

- Abstract base classes, interfaces, namespaces, and traits
- PSR-style class autoloading
- Prepared PDO statements
- Password hashing and verification
- PHP session authentication
- Admin and regular-user role models

## Run locally

1. Start Apache and MySQL through XAMPP, WAMP, MAMP, or an equivalent stack.
2. Create a MySQL database named `user_db`.
3. Add a `users` table with `id`, `name`, `email`, `password`, and `role` columns; make `email` unique.
4. Review the local connection values in `config/db.php`.
5. Serve the repository with `public/` as the document root.

Using PHP's built-in server:

```bash
php -S localhost:8000 -t public
```

Open `http://localhost:8000`.

## Structure

```text
APP/core/       Abstract user, authentication contract, logging trait
APP/models/     Admin and regular-user models
APP/services/   Database-backed authentication service
config/db.php   Local PDO connection
public/         Registration, login, dashboard, logout, and styles
autoload.php    Namespace-to-file loader
```

## Security scope

This is not production-ready. Role selection is accepted from the registration form, model login methods are illustrative, CSRF protection is absent, and database settings are hard-coded. Do not expose it publicly without correcting those boundaries and reviewing session/cookie behavior.

## License

No license is currently declared. All rights are reserved by default.
