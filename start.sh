#!/bin/bash

# Run migrations and seeders
php artisan config:cache
php artisan route:cache
php artisan migrate --force --seed

# Start the server
php artisan serve --host=0.0.0.0 --port=$PORT
