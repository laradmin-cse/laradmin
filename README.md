# Introduction to Laradmin

_Get started using Laradmin in minutes._

## Welcome

Bootstrap and Laravel Concepts applied to make an UI Dashboard. Simpler, Modular and Clean Architecture. Alwasy usign Up To Date versions of **node.js**, **composer**, **laravel** and **bootstrap**

## Getting Started

If you do not have **php**, **composer** and **laravel** installed, run online command

### Mac

```bash
/bin/bash -c "$(curl -fsSL https://php.new/install/mac/8.4)"
```

### Windows

```bash
# Run as administrator...

Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
```

### Linux

```bash
$ /bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"
```

Now start using Laradmin, clone this repository and copy .env.example as .env

```bash
$ git clone https://github.com/laradmin-cse/laradmin
```

```bash
$ cd laradmin
```

```bash
$ cp .env.example .env
```

#### Create **database.sqlite** file inside database folder

```bash
$ touch database/database.sqlite
```

```bash
$ composer install

$ php artisan key:generate

$ php artisan migrate

$ npm install && npm run dev

$ php artisan serve

Open the link in the terminal or http://localhost:8000 in your browser
```

## Contributions are Welcome!

### How To Contribute

[Read Here](https://www.freecodecamp.org/news/how-to-contribute-to-open-source-handbook/)
