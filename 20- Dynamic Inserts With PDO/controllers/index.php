<?php

$users = $app['database']->selectAll('users');

require 'views/index.php';
