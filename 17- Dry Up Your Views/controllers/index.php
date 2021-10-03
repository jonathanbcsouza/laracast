<?php

$tasksFromLocalDB = $app['database']->selectAll('tasks');

require 'views/index.php';
