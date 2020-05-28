# Laravel CoreUI

## Install & Deploy

### 1. Download

Execute the following commands on your terminal to download this project:

-   `cd DIRETORIO_ONDE_IRA_BAIXAR_O_PROJETO`
-   `git clone https://github.com/RobHawk90/laravel-coreui.git`

### 2. Configuration

The root folder contains a `.env.example` file.
You can create the required `.env` file from the `.env.example` in the same folder with `cp .env.example .env`.
Change the following `.env` variables:

-   Database (required)
    -   `DB_DATABASE` - database name
    -   `DB_USERNAME` - user name for connecting to db
    -   `DB_PASSWORD` - the user password (not empty)
-   Super Admin (required) - an auto created user for the first login
    -   `SUPER_USER_NAME` - e.g.: Admin
    -   `SUPER_USER_EMAIL` - e.g.: admin@email.com
    -   `SUPER_USER_PASSWORD` - e.g.: 1S3nh@S3gur@
-   Your Operational System's user (recommended) - it fixes file permissions issues that you eventually struggle with
    -   `SYS_USER`
    -   `SYS_UID` - tip: type `id` on your terminal
-   E-Mail Server (recommended) - you can use [Mailtrap](https://mailtrap.io/) for dev!
    -   `MAIL_USERNAME` - found at Mailtrap account panel
    -   `MAIL_PASSWORD` - found at Mailtrap account panel
    -   `MAIL_FROM_ADDRESS` - e.g.: notifications@email.
-   The application (optional)
    -   `APP_NAME` - the name of your application
    -   `APP_PORT` - the port of web container: 80 as default
    -   `APP_URL` - the application address: http://localhost as default
-   ##### When in production
    -   `APP_ENV` - change it to `production`
    -   `APP_DEBUG` - change it to `false`

### 3. Building the playground

-   Use `make start` to download the images and start all containers with Docker
-   Use `make deploy` to start the step-to-step instalation of the application
    -   Install back-end dependencies? (Y/n)
    -   Execute migrations and seeders? (Y/n)
    -   (Re)generate application key? (Y/n)
    -   Install front-end dependencies? (Y/n)
