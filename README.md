**Template and Styling**

This repository holds the code for Symfony 4 and Webpack.

[Demo Site](https://damp-citadel-56736.herokuapp.com/)

To get it working on your environment, Please follow these steps.:

**Download Composer dependencies**

Make sure you have [Composer installed](https://getcomposer.org/download/)
and then run:

```bash
git clone git@github.com:boonkuaeb/template-style.git 
cd template-style
php -d memory_limit=-1 composer.phar install
```

Open your terminal, go to the source code directory and run `mv` command to create `.env` file.
```bash
cp .env.dist .env
``` 

**Build your Assets**
Please make sure you already have installed NodeJs on your environment.
To build your assets, install the dependencies with yarn and then
run encore:

```bash
yarn install
yarn run encore dev --watch
```

**Start the built-in web server**

You can use Nginx or Apache, but the built-in web server works
great:

```bash
php bin/console server:run
```

Now check out the site at `http://localhost:8000`.
