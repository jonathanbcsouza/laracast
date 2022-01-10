## The Laracast PHP Practitioner Course - [Laracast Course Link](https://laracasts.com/series/php-for-beginners)

This repository has the solutions for the above online course.
The purpose here is to provide a guideline for the exercises if you get stuck within the lesson's code.
I have implemented some HTML to render data from the local database on the browser.

Contents:

- One folder per course episode.

- Alternative solutions for some exercises, [example](/4-%20PHP%20and%20HTML/index.php).

- Database visualizations for all related exercises.

<hr>

## Running and visualising locally:

1. Clone this repository

```
git clone https://github.com/jonathanbcsouza/laracast.git
```

#### Folders 1 to 10

1. Within the root folder, run the server:

```
PHP -S localhost:8888 (or the desired port)
```

2. Open your browser and use the menu to navigate

<hr>

#### Folders 12 to 15

1. Create your local database
   Laracast's lessons available on [this](https://laracasts.com/series/php-for-beginners/episodes/11).
   You can also refer to [this](/11-%20MySql/index.sql) example that outlines all the necessary SQL commands.
   <br>
2. Run your MySQL server

```
mysql.server start
```

3. Run MySQL on your terminal if you wish

```
mysql -u root
```

4. Within the root folder, run the server:

```
PHP -S localhost:8888 (or the desired port)
```

5. Open your browser and use the menu to navigate

<hr>

#### Folders 21 to 24

1. Install composer:
   https://getcomposer.org/download/

2. Considering that you have already created a local database with MYSQL, in your terminal, go to the desired folder

```
cd 24- Switch to Namespaces
```

3. Generate the list of all classes that need to be included in the project

```
composer dump-autoload
```

![composer dump-autoload](https://media.giphy.com/media/Ib6i1vCy6I7IggiQbD/giphy.gif)

[This](https://laracasts.com/series/php-for-beginners/episodes/21) is the related lesson.

_Composer is an application-level package manager for PHP.
It allows you to download and managing dependencies for your project.
The vendor folder will be generated when you run the Composer in the root of your project folder. When you execute the step 3, this folder will be downloaded into your work directory._

4. Run the server in the same folder you are. (not the root of this repo)

```
PHP -S localhost:8888 (or the desired port)
```

#### Folders 25

1. Download composer https://getcomposer.org/download/ and install it if you have not yet.
2. Considering that you have already created a local database with MYSQL, in your terminal, go to the folder 25

```
cd 25-\ Meet\ Your\ Batteries\ Included\ Framework:\ Laravel
```

3. Rename .env.example file to .env and fill the database information.
4. Run composer install or php composer.phar install
5. Run php artisan key:generate
6. Run php artisan migrate
7. Run php artisan serve

<hr>
## Thanks:
Special thanks to @JeffreyWay.
