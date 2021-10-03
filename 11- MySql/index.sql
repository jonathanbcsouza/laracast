/*
MYSQL INSTALLATION PROCESS:

    In your terminal:

    1- mysql: To check SQL.
    2- brew search mysql: To check your SQL if you used brew to install PHP.
    3- brew install mysql: You may need to do to fetch that.
    4- mysql -uroot: to login into the database
    5- mysql -uroot <password>: to login into the database that you already have.

    Video Tutorial: https://laracasts.com/series/php-for-beginners/episodes/11

Note: the commented tables below are what is expected to be shown on your terminal.

SQL commands to be run:
*/

SHOW databases
/*  +--------------------+
    | Database           |
    +--------------------+
    | information_schema |
    | mysql              |
    | myFirstDB          |
    | performance_schema |
    | sys                |
    +--------------------+
*/

CREATE database myFirstDB;
USE myFirstDB;
CREATE TABLE topics (DESCRIPTION TEXT, completed BOOLEAN);
SHOW TABLES;
/*  +----------------------+
    | Tables_in_myFirstDB  |
    +----------------------+
    | topics               |
    +----------------------+
*/

DESCRIBE topics;
/*  +-------------+------------+------+-----+---------+-------+
    | Field       | Type       | Null | Key | Default | Extra |
    +-------------+------------+------+-----+---------+-------+
    | description | text       | YES  |     | NULL    |       |
    | completed   | tinyint(1) | YES  |     | NULL    |       |
    +-------------+------------+------+-----+---------+-------+
*/

DROP TABLE topics;
CREATE TABLE topics (DESCRIPTION TEXT NOT NULL, completed BOOLEAN NOT NULL);
DESCRIBE topics;
/*  +-------------+------------+------+-----+---------+-------+
    | Field       | Type       | Null | Key | Default | Extra |
    +-------------+------------+------+-----+---------+-------+
    | description | text       | NO   |     | NULL    |       |
    | completed   | tinyint(1) | NO   |     | NULL    |       |
    +-------------+------------+------+-----+---------+-------+
*/

CREATE TABLE topics (id INTEGER PRIMARY KEY AUTO_INCREMENT, DESCRIPTION TEXT NOT NULL, completed BOOLEAN NOT NULL);
SHOW TABLES;
/*  +---------------------+
    | Tables_in_myFirstDB |
    +---------------------+
    | topics              |
    +---------------------+
*/

DESCRIBE topics;
/*  +-------------+------------+------+-----+---------+----------------+
    | Field       | Type       | Null | Key | Default | Extra          |
    +-------------+------------+------+-----+---------+----------------+
    | id          | int        | NO   | PRI | NULL    | auto_increment |
    | description | text       | NO   |     | NULL    |                |
    | completed   | tinyint(1) | NO   |     | NULL    |                |
    +-------------+------------+------+-----+---------+----------------+
 */

INSERT INTO topics (DESCRIPTION, completed) VALUES('Go to the store', false);
INSERT INTO topics (INTO, completed) VALUES('I am the second one!', false);
SELECT * FROM topics;
/*  +----+----------------------+-----------+
    | id | description          | completed |
    +----+----------------------+-----------+
    |  1 | Go to the store      |         0 |
    |  2 | I am the second one! |         0 |
    +----+----------------------+-----------+
 */

 /*
SUGGESTED MANAGEMENT APPS: 

    - Sequel Pro - https://www.sequelpro.com/
    - Queries - https://www.araelium.com/querious
    - Navicat - https://www.navicat.com/en/

If you get these errors:
<ERROR 2002 (HY000): Can't connect to local MySQL server through socket '/tmp/mysql.sock' (2)>
Access denied for user 'root'@'localhost' (using password: NO)

This article that helped to fix a configuration issue I had with SequelPro connection:
https://stackoverflow.com/a/49970533/8339144

---

If you have a crash/error when you try to connect with your database:

I found here this:
https://github.com/sequelpro/sequelpro/issues/3236

Which lead me to:
https://sequelpro.com/test-builds
*/