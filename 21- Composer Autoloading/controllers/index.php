<?php

$data = $app['database']->selectAll('users');

require 'views/index.view.php';
