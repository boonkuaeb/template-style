**Template and Styling**

This repository holds the code for Symfony 4 and Webpack.

[Demo Site](https://damp-citadel-56736.herokuapp.com/)

To get it working on your environment, Please follow these steps.:

**Download Composer dependencies**

Make sure you have [Composer installed](https://getcomposer.org/download/)
and then run:
Open your terminal
Clone a source code from my repository
```bash
git clone git@github.com:boonkuaeb/template-style.git 
```
Go to source code directory
```bash
cd template-style
```
Install all dependencies by `composer.phar` 
```bash
php -d memory_limit=-1 composer.phar install
```
Run `cp` command to create `.env` file.
```bash
cp .env.dist .env
``` 

**Build Assets**

Please make sure you already have installed NodeJs on your environment.
To build a assets, install the dependencies with `yarn install` and then
run `yarn build` to generate CSS and JS files to `public/build` folder:

```bash
yarn install
yarn build
```

**Start the built-in web server**

Use the built-in web server that come with Symfony 


```bash
php bin/console server:run
```

To check the site by open browser and type url `http://localhost:8000`.


