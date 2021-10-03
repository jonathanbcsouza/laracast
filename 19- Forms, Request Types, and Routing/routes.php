<?php

$router->get('', 'controllers/index.sql');
$router->get('about',' controllers/about.php');
$router->get('about/culture', 'controllers/about-culture.php');
$router->post('names', 'controllers/add-name.php');
