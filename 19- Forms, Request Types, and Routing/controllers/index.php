<?php

$data = $app['database']->selectAll('tasks');

require 'views/index.view.php';
