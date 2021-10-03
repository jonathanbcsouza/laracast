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
<header>
    <?php require '../nav.php'; ?>

    <h4>Syntax 1 - See the code</h4>
    <ul>
        <?php
        foreach ($names as $names) {
            echo "<li>$names</li>";}
        ?>
    </ul>
    <h3>Syntax 2 - See the code</h3>
    <ul>
        <?php foreach ($names2 as $names2) : ?>
            <li><?= $names2; ?></li>
        <?php endforeach; ?>
    </ul>
</header>
</body>
</html>