<?php

$data = $app['query']->selectAll('tasks');

require 'views/index.view.php';
