<?php

$router->define([
    '' => 'controllers/index.sql',
    'about' => 'controllers/about.php',
    'about/culture' => 'controllers/about-culture.php',
    'contact' => 'controllers/contact.php'
]);
