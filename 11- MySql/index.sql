/*
MYSQL INSTALLATION PROCESS:

        In your terminal:
        
        mysql: To check SQL.
        brew search mysql: To check your SQL if you used brew to install PHP.
        brew install mysql: You may need to do to fetch that.
        mysql -uroot: to login into the database
        mysql -uroot <password>: to login into the database that you already have.
        
SQL COMMANDS;
 */

show databases;
        /* Output
        +--------------------+
        | Database           |
        +--------------------+
        | information_schema |
        | mysql              |
        | myFirstDB             |
        | performance_schema |
        | sys                |
        +--------------------+ */

CREATE DATABASE myFirstDB;
USE myFirstDB;
CREATE TABLE topics (DESCRIPTION TEXT, completed BOOLEAN);

show tables;
        /* Output
        +------------------+
        | Tables_in_myFirstDB |
        +------------------+
        | topics            |
        +------------------+
        1 row in set (0.01 sec) */

describe topics;
        /* Output
        +-------------+------------+------+-----+---------+-------+
        | Field       | Type       | Null | Key | Default | Extra |
        +-------------+------------+------+-----+---------+-------+
        | description | text       | YES  |     | NULL    |       |
        | completed   | tinyint(1) | YES  |     | NULL    |       |
        +-------------+------------+------+-----+---------+-------+
        2 rows in set (0.01 sec) */

DROP TABLE topics;
        /* Output
        Query OK, 0 rows affected (0.01 sec) */

CREATE TABLE topics (DESCRIPTION TEXT NOT NULL, completed BOOLEAN NOT NULL);
        /* Output
        Query OK, 0 rows affected (0.01 sec) */

describe topics;
        /* Output
        +-------------+------------+------+-----+---------+-------+
        | Field       | Type       | Null | Key | Default | Extra |
        +-------------+------------+------+-----+---------+-------+
        | description | text       | NO   |     | NULL    |       |
        | completed   | tinyint(1) | NO   |     | NULL    |       |
        +-------------+------------+------+-----+---------+-------+
        2 rows in set (0.00 sec) */

CREATE TABLE topics (id INTEGER PRIMARY KEY AUTO_INCREMENT, DESCRIPTION TEXT NOT NULL, completed BOOLEAN NOT NULL);
        /* Output
        Query OK, 0 rows affected (0.01 sec) */

show tables;    
        /* Output
        +------------------+
        | Tables_in_myFirstDB |
        +------------------+
        | topics            |
        +------------------+
        1 row in set (0.00 sec) */

describe topics;
        /* Output
        +-------------+------------+------+-----+---------+----------------+
        | Field       | Type       | Null | Key | Default | Extra          |
        +-------------+------------+------+-----+---------+----------------+
        | id          | int        | NO   | PRI | NULL    | auto_increment |
        | description | text       | NO   |     | NULL    |                |
        | completed   | tinyint(1) | NO   |     | NULL    |                |
        +-------------+------------+------+-----+---------+----------------+
        3 rows in set (0.00 sec) */

INSERT INTO topics (DESCRIPTION, completed) VALUES('Go to the store', false);
INSERT INTO topics (INTO, completed) VALUES('I am the second one!', false);

SELECT * FROM topics;

        /* Output
        +----+----------------------+-----------+
        | id | description          | completed |
        +----+----------------------+-----------+
        |  1 | Go to the store      |         0 |
        |  2 | I am the second one! |         0 |
        +----+----------------------+-----------+
        2 rows in set (0.00 sec)

SUGGESTED MANAGEMENT APPS: 

        - Sequel Pro - https://www.sequelpro.com/
        - Queries - https://www.araelium.com/querious
        - Navicat - https://www.navicat.com/en/

If you get those errors:
<ERROR 2002 (HY000): Can't connect to local MySQL server through socket '/tmp/mysql.sock' (2)>
Access denied for user 'root'@'localhost' (using password: NO)

That article that helped to fix a configuration issue I had with Sequel Pro connection:
https://stackoverflow.com/a/49970533/8339144

--- 

If you have a crash/error when you try to connect with your database:

I found here this:
https://github.com/sequelpro/sequelpro/issues/3236

Which lead me to:
https://sequelpro.com/test-builds
 */