<?php

$person = [
    'Name:' => 'Jonathan',
    'Nationality:' => 'Brazil',
    'Skills:' => 'PHP',
];
$person['Hobbies:'] =  'Music Production';

$instruments = [
    'Guitar',
    'Piano'
];
$instruments[] = 'Bass1';
$instruments[] = 'Bass2';
unset($instruments[3]);

require 'index.view.php';

echo '<pre>';
var_dump($person);
var_dump($instruments);
echo '</pre>';

var_dump($person);
echo  nl2br("\n");
echo  nl2br("\n");
var_dump($instruments);

die();
var_dump($instruments);
var_dump($instruments);
var_dump($instruments);
var_dump($instruments);
var_dump($instruments);
var_dump($instruments);

