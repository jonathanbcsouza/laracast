<?php

$app = [];

$app['config'] = require 'config.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
