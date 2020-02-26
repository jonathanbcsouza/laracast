<?php

function ageVerification($age)
{
    $limit = 21;
    echo ($age <= $limit) ? 'Sorry, you gotta wait for more ' . ($limit - $age) . ' years' : 'Enjoy your party!';
    echo  nl2br("\n");
    echo  nl2br("\n");
};

?>

<style type="text/css">
    body {
        background-color: black;
        color: blanchedalmond;
    }
</style>