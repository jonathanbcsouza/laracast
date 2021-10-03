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
            color: white;
        }
    </style>
</head>
<body>
<?php require '../nav.php'; ?>
<p>Array 1 - Adding new key and value</p>
<ul>
    <?php foreach ($person as $key => $value) : ?>
        <li>
            <strong> <?= $key; ?> </strong>
            <?= $value; ?>
        </li>
    <?php endforeach; ?>
</ul>
<p>Array 2 - Adding new value</p>
<ul>
    <?php foreach ($instruments as $item) : ?>
        <li>
            <?= $item; ?>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>