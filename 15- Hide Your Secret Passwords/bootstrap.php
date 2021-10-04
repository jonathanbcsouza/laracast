<?php

$config = require 'config.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

return new MyQueryBuilder(
    MyConnection::make($config['database'])
);

