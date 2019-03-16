# ContestEase

ContestEase is a internal contest system developed mainly for fresh cup.

## Installation

Here is detailed step about deploying ContestEase:

1. You need to have a server and installed [PHP](http://php.net/downloads.php) and [Composer](https://getcomposer.org);

1. Clone ContestEase to your website folder;

1. Change your website root to `public` folder and then, if there is a `open_basedir` restriction, remove it;

1. Now run the following commands at the root folder of ContestEase;

```
composer install
```

> Notice: you may find this step(or others) fails with message like "func() has been disabled for security reasons", it means you need to remove restrictions on those functions, basically Laravel and Composer require proc_open and proc_get_status to work properly.

1. Almost done, you still got to modify a few folders and give them permission to write;

```
chmod -R 775 storage/
chmod -R 775 bootstrap/
```

1. OK, right now we still need to configure environment, a typical `.env` just like the `.env.example`, you simply need to type the following codes;

```
cp .env.example .env
vim .env
```

1. Now, we need to configure the database, thankfully Laravel have migration already;

```
php artisan migrate
```

1. ContestEase's up-and-running, enjoy!
