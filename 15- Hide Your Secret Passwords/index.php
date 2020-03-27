<?php

require 'bootstrap.php';

$tasksFromLocalDB = $query->selectAll('topics');


require 'index.view.php';
