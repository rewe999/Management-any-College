# Management any College

The project was made as a thesis for the school Collegium Witelona in Legnica.

This apllication is used to manage the organizational structure of the university, where you can add employees, sections (teaching, organizational, scientific) , contact only with existing employees through a contact form and add news on the website.

In addition to the standard user view, the application has an administrator panel for full management of the
organization.

In addition to this, automated tests are written to check the correct operation of the application

## Installation
### 1. Create `.env` file based on `.env.example`:
```
copy .env.example .env
```

### 2. Fetch dependencies:
```shell script
composer install
```

### 3. Generate application key:
```shell script
 php artisan key:generate
```

### 4. Run migrations:
```shell script
 php artisan migrate
```

## Author:
- [Patryk Zym](https://github.com/rewe999/)
