<?php

// Creating arrays
$person = [
    'Name:' => 'Jonathan',
    'Nationality:' => 'Brazil',
    'Skills:' => 'PHP',
];
$person['Hobbies:'] =  'Music Production';

$instruments = [
    'Guitar',
    'Piano',
    'Bass',
    'Drums'
];

//Deleting an array element
unset($instruments[3]);

//Adding new instruments
$instruments[] = 'Violin';
$instruments[] = 'Harp';

require 'index.view.php';

echo "Using a var_dump():";

echo '<pre>';
var_dump($person);
var_dump($instruments);
echo '</pre>';

echo 'Using var_dump():';

var_dump($person);
echo  nl2br("\n");
echo  nl2br("\n");
var_dump($instruments);

die();
var_dump($instruments);

//For comparison only
var_dump($instruments);
var_dump($instruments);

