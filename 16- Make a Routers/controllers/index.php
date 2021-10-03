<?php

$tasksFromLocalDB = $app['MY_FIRST_DB']->selectAll('tasks');

require 'views/index.php';
