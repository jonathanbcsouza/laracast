<?php

function ageVerification($age)
{
    $limit = 21;
    echo ($age <= $limit) ? 'Sorry, you do not meet the minimum age criteria. Please wait for ' . ($limit - $age) . ' years.' : 'Enjoy your party!';
    echo  nl2br("\n");
    echo  nl2br("\n");
};

?>

<style>
    body {
        background-color: black;
        color: blanchedalmond;
    }
</style>