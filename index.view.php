<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>My Document</title>
    <style>
        * {
            background: black;
            color: white;
        }
        ul {
            padding: 2em;
            color: white;
        }
        li{
            margin: 0 0 1px 0;
            list-style: none;
            color: white;
        }
        a:link {
            color: white;
        }
        a:visited {
            color: darkseagreen;
        }
        a:hover {
            color: hotpink;
        }
    </style>
</head>
<body>
<h1>Menu</h1>
<ul>
    <?php if (!empty($routes)) : ?>
        <?php foreach ($routes as $key) : ?>
            <li>
                <a href='/<?php echo $key; ?>'>
                    <?php echo $key; ?>
                </a>
            </li> <br>
        <?php endforeach; ?>
    <?php endif; ?>
</ul>
</body>
</html>