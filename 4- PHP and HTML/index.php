<!--
Instructions:
1- Deploy this page by executing "PHP -S localhost:8888" in your terminal.
2- You will need to be in root level of this folder.
3- Add ?name=YOURNAME to your address bar.
E.g : http://localhost:8000/4-%20PHP%20and%20HTML?name=Jonathan
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>My Document</title>
    <style>
        h1 {
            background: black;
            padding: 2em;
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
<?php require '../nav.php'; ?>
<header>
    <h1>
        <?php
        $name = $_GET['name'];
        echo "Hello, World! I am $name!";
        ?>
    </h1>
    <h1>
        <?php echo "Hello Again! I am " . $_GET['name'] . '.';?>
    </h1>
    <h1>
        <?= "Sorry but, I am still " . $_GET['name'] . '.';?>
    </h1>
    <h1>
        <?= "Sorry mate, I am a function made by " . htmlspecialchars($_GET['name']) . " which returns a Html Entities."; ?>
    </h1>
</header>
</body>
</html>