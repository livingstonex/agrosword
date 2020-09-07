## AgroSword

Agrosword source code

## STEPS TO INSTALL THIS PROJECT
Install REPO:
1. clone repo
2. install composer
3. cd into project directory
4. run: composer install
5. run: npm install
6. Create a new .env file from the .env.example file running this command: cp .env.example .env
7. Generate an app encryption key: php artisan key:generate
8. Create a new Database and fill in the information to the .env file.
9. Migrate the database by running: php artisan migrate
