<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>My Document</title>
    <style>
        ul {
            background: black;
            padding: 2em;
            color: white;}
    </style>
</head>
<body>
<?php require '../nav.php'; ?>

<h1>Task for the Day</h1>
<ul>
    <li>
        <strong>Name: </strong>
        <?= ucwords($task['title']); ?>
    </li>
    <li>
        <strong>Due: </strong>
        <?= ucwords($task['due']); ?>
    </li>
    <li>
        <strong>Responsible: </strong>
        <?= ucwords($task['assigned_to']); ?>
    </li>
    <li>
        <strong>Status:</strong>
        <?php if ($task['completed']) : ?>
            <span class="icon">&#9989</span>
        <?php else : ?>
            <span class="icon">&#10060</span>
        <?php endif; ?>
    </li>
    <li>
        <strong>Status 2:</strong>
        <?= $task['completed2'] ? '&#9989' : '&#10060' ; ?>
    </li>
    <li>
        <strong>Status 3:</strong>
        <?php if (! $task['completed3']){
            echo '&#9989';
        } else {
            echo '&#10060';
        }
        ?>
    </li>
</ul>
</body>

</html>