<?php

$tasksFromLocalDB = $app['database']->selectAll('topics');

require 'views/index.php';
