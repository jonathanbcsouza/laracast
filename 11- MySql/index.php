<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>My Document</title>
    <style>
        * {
            background-color: black;
            color: white;
        }
        li{
            margin: 10px;
        }
        code {
            color: burlywood;
        }
        a{
            color: darkseagreen;
        }
        a:hover{
            color: lightgreen;
        }
    </style>
</head>
<body>
<?php require '../nav.php'; ?>

<h4>MYSQL Installation:</h4>
<p>In your terminal:</p>
<ul>
    <li><code>mysql</code>: To check SQL.</li>
    <li><code>brew search mysql</code>: To check your SQL if you used brew to install PHP.</li>
    <li><code>brew install mysql</code>: You may need to do to fetch that.</li>
    <li><code>mysql -uroot</code>: to login into the database</li>
    <li><code>mysql -uroot <password></code>: to login into the database that you already have.</li>
</ul>
<h4>SQL commands and expected outputs:</h4>
<pre>
    <code>SHOW databases</code>;
        +--------------------+
        | Database           |
        +--------------------+
        | information_schema |
        | mysql              |
        | myFirstDB          |
        | performance_schema |
        | sys                |
        +--------------------+
    <code>
    CREATE database myFirstDB;
    USE myFirstDB;
    CREATE TABLE topics (DESCRIPTION TEXT, completed BOOLEAN);
    SHOW TABLES;
    </code>
        +----------------------+
        | Tables_in_myFirstDB  |
        +----------------------+
        | topics               |
        +----------------------+
    <code>
    DESCRIBE topics;
    </code>
        +-------------+------------+------+-----+---------+-------+
        | Field       | Type       | Null | Key | Default | Extra |
        +-------------+------------+------+-----+---------+-------+
        | description | text       | YES  |     | NULL    |       |
        | completed   | tinyint(1) | YES  |     | NULL    |       |
        +-------------+------------+------+-----+---------+-------+
    <code>
    DROP TABLE topics;
    CREATE TABLE topics (DESCRIPTION TEXT NOT NULL, completed BOOLEAN NOT NULL);
    DESCRIBE topics;
    </code>
        +-------------+------------+------+-----+---------+-------+
        | Field       | Type       | Null | Key | Default | Extra |
        +-------------+------------+------+-----+---------+-------+
        | description | text       | NO   |     | NULL    |       |
        | completed   | tinyint(1) | NO   |     | NULL    |       |
        +-------------+------------+------+-----+---------+-------+
    <code>
    CREATE TABLE topics (id INTEGER PRIMARY KEY AUTO_INCREMENT, DESCRIPTION TEXT NOT NULL, completed BOOLEAN NOT NULL);
    SHOW TABLES;
    </code>
        +---------------------+
        | Tables_in_myFirstDB |
        +---------------------+
        | topics              |
        +---------------------+
    <code>
    DESCRIBE topics;
    </code>
        +-------------+------------+------+-----+---------+----------------+
        | Field       | Type       | Null | Key | Default | Extra          |
        +-------------+------------+------+-----+---------+----------------+
        | id          | int        | NO   | PRI | NULL    | auto_increment |
        | description | text       | NO   |     | NULL    |                |
        | completed   | tinyint(1) | NO   |     | NULL    |                |
        +-------------+------------+------+-----+---------+----------------+
    <code>
    INSERT INTO topics (DESCRIPTION, completed) VALUES('Go to the store', false);
    INSERT INTO topics (INTO, completed) VALUES('I am the second one!', false);
    SELECT * FROM topics;
    </code>
        +----+----------------------+-----------+
        | id | description          | completed |
        +----+----------------------+-----------+
        |  1 | Go to the store      |         0 |
        |  2 | I am the second one! |         0 |
        +----+----------------------+-----------+
</pre>
<h4>Management Apps Suggested in this lesson:</h4>
<table>
    <tr>
        <td>Sequel Pro:</td>
        <td><a href="https://www.sequelpro.com/">https://www.sequelpro.com/</a></td>
    </tr>
    <tr>
        <td>Queries:</td>
        <td><a href="https://www.sequelpro.com/">https://www.araelium.com/querious</a></td>
    </tr>
    <tr>
        <td>Navicat:</td>
        <td><a href="https://www.sequelpro.com/">https://www.navicat.com/en/</a></td>
    </tr>
</table>
<h4>If you get these errors:</h4>
<code>ERROR 2002 (HY000): Can't connect to local MySQL server through socket '/tmp/mysql.sock' (2)
    Access denied for user 'root'@'localhost' (using password: NO)</code>
<p>
    <a href="https://stackoverflow.com/a/49970533/8339144">This</a> article helped me to fix the connection issue I had with SequelPro.
</p>
<p>If you have a crash/error when you try to connect with your database, read these links:<br>
    <a href="https://github.com/sequelpro/sequelpro/issues/3236"> https://github.com/sequelpro/sequelpro/issues/3236</a>
    <br> <a href="https://sequelpro.com/test-builds">https://sequelpro.com/test-builds</a>.
</p>
</body>
</html>