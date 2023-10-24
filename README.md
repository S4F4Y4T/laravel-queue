
# LARAVEL QUEUE

LARAVEL QUEUE is a web app which fetch user data from api and add them to database

## Prerequisite

- PHP
- Mysql

## Run Locally

Clone the project

```bash
  git clone https://github.com/S4F4Y4T/laravel-queue
```

- Update .env file to modify credentials for your mysql database and App Info

Go to the project directory

```bash
  cd laravel-queue
```
Run Database Migration

```bash
  php artisan migrate
```

Start The Project

```bash
  php artisan serve
```

Start The Queue Worker

```bash
  php artisan queue:work
```

visit route to add to queue

```bash
   http://127.0.0.1:8000/queue
```

Check your `logs` table for user mails


