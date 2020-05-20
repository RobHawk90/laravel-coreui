#!/bin/bash

confirm() {
    echo -n "$1 (Y/n) "
    read -r input
    if [ "$input" != "n" ]
    then
        return 0
    fi
    return 1
}

# start
if confirm 'Install back-end dependencies?'
then
    composer update
    composer install
fi

composer dump-autoload

php artisan route:clear
php artisan cache:clear

php artisan storage:link

if confirm 'Execute migrations and seeders?'
then
    php artisan migrate --seed
fi

if confirm '(Re)generate application key?'
then
    php artisan key:generate
fi

if confirm 'Install front-end dependencies?'
then
    npm install
    npm run dev
fi
