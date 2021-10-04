<?php

$query = require 'bootstrap.php';

$data = $query->selectAll('tasks');

require 'index.view.php';
