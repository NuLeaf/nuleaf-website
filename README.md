# NuLEAF Technology Website
This repository includes all files needed to run the website locally. Refer to our [Wiki page](https://github.com/NuLeaf/nuleaf-website/wiki) for more detail.

To begin, please follow the steps below. You may also choose to instead install the [Laravel Homestead Virtual Machine](https://laravel.com/docs/5.2/homestead) which will include everything you need to get started without actually installing anything else on your machine. Everything below does not apply if you choose to use Homestead.


## WAMP/MAMP/LAMP Installation
WAMP/MAMP/LAMP stands for Windows/Mac/Linux Apache MySQL and PHP. This is a full stack solution to hosting a website.

Please visit the official website to install to appropriate version for your 
- [WAMP](http://www.wampserver.com/en/)
- [MAMP](https://www.mamp.info/en/)
- [LAMP](https://help.ubuntu.com/community/ApacheMySQLPHP)


## Laravel Installation
Laravel is the framework we are using for our website. You can find installation instructions at the [Laravel Official Site](https://laravel.com/docs/5.2/installation)

Please note the dependencies listed in their instructions. Many errors are due to missing PHP extensions.


## Starting the server
Run the command below to clone this repo. It will be cloned to your current directory.
```
git clone https://github.com/NuLeaf/nuleaf-website.git
```

Move into the new directory and create some folders.
```
mkdir bootstrap/cache storage storage/logs storage/framework storage/framework/views storage/framework/sessions
```

Modify permissions. www-data is the group used by apache2 on Linux, if you're on MacOSX then you will use _www instead.
```
sudo chown -R (your_username):www-data storage bootstrap/cache
```

Install dependencies
```
composer install
```

You will then need to properly set the configuration file ".env". There is an example file ".env.example" that you may follow. Use this command to generate an application key.
```
php artisan key:generate
```

Once you have the right configurations, set up your database.
```
mysql -u (username) -p      // Type in your password when prompted. Will need root permissions.
> CREATE DATABASE (your_database_name)   // This name should be the same has your DB_DATABASE in your .env file
```

Once your database is correctly configured (you may have to mess with config/app.php and config/database.php) run the following command to populate your database. You may get an error, in which case you most likely have a Mac and you need to configure config/database.php to point to your socket file.
```
php artisan migrate
```

Once the migration is finished, start your development server.
```
php artisan serve --port=8888
```

Point your web browser to [localhost:8888](localhost:8888). You may google Apache2 site configurations if you want to customize your local domain name.
