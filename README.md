## The Laracast PHP Practitioner Course - [Laracast Course Link](https://laracasts.com/series/php-for-beginners)

This repository has my solutions for the above online course.
The purpose of this repository is to provide a guideline for the exercises if you get stuck throughout the course.
I have also created some additional implementations comparing with the course to make the UI more understable.

- One folder per each course episode.

- Alternative solution for some the exercises, [example](/4-%20PHP%20and%20HTML/index.php).

- Each folder ready for visualization.

<hr>

## Running and visualising locally:

#### Folders 1 to 10

1. #### Clone this repository

```
git clone https://github.com/jonathanbcsouza/laracast.git
```

2. #### Go to the root of the desired folder, example:

```
cd 8-\ Booleans
```

3. #### Within the exercise folder, run the server:

```
PHP -S localhost:8888 (or the desired port)
```

<hr>

#### Folders 11 to 20

1. #### Create your local database

   Create your own local database.
   Laracast's lessons available at [this link](https://laracasts.com/series/php-for-beginners/episodes/11) video and as per [this](/11-%20MySql/index.sql) code example.

2. #### Run MySQL server

```
mysql.server start
```

3. #### Run MySQL on your terminal if you wish
```
mysql -u root
```

4. #### Go to the root of the desired folder

```
cd 22-\ Your\ First\ DI\ Container
```

5. #### Run the server:

```
PHP -S localhost:8888 (or the desired port)
```

<hr>

#### Folders 21 to 25

1. #### Go to the root of the desired folder

```
cd 24- Switch to Namespaces
```

2. #### Install composer as per this link:

   https://getcomposer.org/download/

3. #### Install dependencies

```
composer dump-autoload
```

![composer dump-autoload](https://media.giphy.com/media/Ib6i1vCy6I7IggiQbD/giphy.gif)

[This](https://laracasts.com/series/php-for-beginners/episodes/21) is the related lesson.

_Composer is an application-level package manager for PHP.
It allows you to download and managing dependencies for your project.
The vendor folder will be generated when you run the Composer in the root of your project folder. When you execute the step 3, this folder will be downloaded into your work directory._

4. #### Run the server:

```
PHP -S localhost:8888 (or the desired port)
```

<hr>
## Thanks:

<br>
Special thanks to @JeffreyWay.
