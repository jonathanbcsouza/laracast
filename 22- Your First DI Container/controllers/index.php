<?php

$users = App::get('database')->selectAll('users');

require 'views/index.php';
