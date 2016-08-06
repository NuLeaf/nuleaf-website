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

Move into the new directory and make sure the directory permissions are set as per the Laravel Installation Guide. Then run:
```
composer install
```

You will then need to properly set the configuration file ".env". There is an example file ".env.example" that you may follow. Please contact Tuan at this point to obtain the right configurations.

Once you have the right configurations, set up your database and run:
```
php artisan migrate
```

Point your web browser to [localhost](localhost) and access the public folder from your web browser. You may google Apache2 site configurations if you want to customize your local domain name.
