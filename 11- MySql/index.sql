/*
MYSQL INSTALLATION PROCESS:

        In your terminal:
        
        mysql: To check SQL.
        brew search mysql: To check your SQL if you used brew to install PHP.
        brew install mysql: You may need to do to fetch that.
        mysql -uroot: to login into the database
        mysql -uroot: to login into the database if you have a password.

SQL COMMANDS;
 */

show databases;
        /* Output
        +--------------------+
        | Database           |
        +--------------------+
        | information_schema |
        | mysql              |
        | myTodo             |
        | performance_schema |
        | sys                |
        +--------------------+ */

create database myTodo;
use myTodo;
create table todos (description text, completed boolean);

show tables;
        /* Output
        +------------------+
        | Tables_in_mytodo |
        +------------------+
        | todos            |
        +------------------+
        1 row in set (0.01 sec) */

describe todos;
        /* Output
        +-------------+------------+------+-----+---------+-------+
        | Field       | Type       | Null | Key | Default | Extra |
        +-------------+------------+------+-----+---------+-------+
        | description | text       | YES  |     | NULL    |       |
        | completed   | tinyint(1) | YES  |     | NULL    |       |
        +-------------+------------+------+-----+---------+-------+
        2 rows in set (0.01 sec) */

drop table todos;
        /* Output
        Query OK, 0 rows affected (0.01 sec) */

create table todos (description text NOT NULL, completed boolean NOT NULL);
        /* Output
        Query OK, 0 rows affected (0.01 sec) */

describe todos;
        /* Output
        +-------------+------------+------+-----+---------+-------+
        | Field       | Type       | Null | Key | Default | Extra |
        +-------------+------------+------+-----+---------+-------+
        | description | text       | NO   |     | NULL    |       |
        | completed   | tinyint(1) | NO   |     | NULL    |       |
        +-------------+------------+------+-----+---------+-------+
        2 rows in set (0.00 sec) */

create table todos (id integer PRIMARY KEY AUTO_INCREMENT, description text NOT NULL, completed boolean NOT NULL);
        /* Output
        Query OK, 0 rows affected (0.01 sec) */

show tables;    
        /* Output
        +------------------+
        | Tables_in_mytodo |
        +------------------+
        | todos            |
        +------------------+
        1 row in set (0.00 sec) */

describe todos;
        /* Output
        +-------------+------------+------+-----+---------+----------------+
        | Field       | Type       | Null | Key | Default | Extra          |
        +-------------+------------+------+-----+---------+----------------+
        | id          | int        | NO   | PRI | NULL    | auto_increment |
        | description | text       | NO   |     | NULL    |                |
        | completed   | tinyint(1) | NO   |     | NULL    |                |
        +-------------+------------+------+-----+---------+----------------+
        3 rows in set (0.00 sec) */

insert into todos (description, completed) values('Go to the store', false);
insert into todo (description, completed) values('I am the second one!', false);

select * from todos;

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

        Useful article that helped to fix a configuration issue I had::
        https://medium.com/@devontem/solved-cant-connect-to-local-mysql-server-through-socket-tmp-mysql-sock-2-f52c9c546f7 */
