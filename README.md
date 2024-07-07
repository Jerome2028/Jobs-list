Clone your project<br><br>
Go to the folder application using cd command on your cmd or terminal<br><br>
Run composer install on your cmd or terminal<br><br>
Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt <br>Windows or cp .env.example .env if using terminal, Ubuntu<br><br>
Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and <br>password (DB_PASSWORD) field correspond to your configuration.
Run php artisan key:generate<br><br>
Run php artisan migrate<br><br>
Run php artisan migrate:fresh --seed<br><br>
Run php artisan serve<br><br>

you may try to login user:pass <br> 
admin@gmail.com:admins  to edit the jobs listing
