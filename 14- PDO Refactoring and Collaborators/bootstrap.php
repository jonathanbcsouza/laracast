<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';

$query = new QueryBuilder(
    Connection::make()
);

