# Important:
# Setup Laravel(OS Windows, Mac, Linux)/{
  #   Install PHP
  #   Install composer
  #   Install Xammp/Lammp/ My sql, ...
  #   }
# Creare a database with name rsm
# Open the .env file and replace it with the below code:
    # DB_CONNECTION=mysql
    # DB_HOST=127.0.0.1
    # DB_PORT=3306
    # DB_DATABASE=rsm
    # DB_USERNAME=root
    # DB_PASSWORD=
# Restart the server
# $ php artisan migrate
# if it need {
  # make the vitul host or move the file to htdoc folder
  # $ composer require "laravelcollective/html":"^5.6.0"
  # $ composer require unisharp/laravel-ckeditor
  # $ php artisan vendor:publish --tag=ckeditor
  # $ php artisan serve
# }
