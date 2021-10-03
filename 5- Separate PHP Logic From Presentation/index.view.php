<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>My Document</title>
    <style>
        h1 {
            background: black;
            padding: 20vh;
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
<?php require '../nav.php'; ?>
    <header>
        <h1>
            <?= $greeting; ?>
        </h1>
        <h1>
            <?= $sentence; ?>
        </h1>
    </header>
</body>
</html>