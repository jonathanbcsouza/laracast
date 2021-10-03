<?php

require 'bootstrap.php';

$tasksFromLocalDB = $query->selectAll('tasks');

require 'index.view.php';
