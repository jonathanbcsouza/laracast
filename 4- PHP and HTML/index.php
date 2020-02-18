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
    <header>
        <h1>
            <?php
            $name = $_GET['name'];
            echo "Hello, World! I am $name";
            ?>
        </h1>
        <h1>
            <?php echo "Hello Again! I am " . $_GET['name'];?>
        </h1>
        <h1>
            <?= "Sorry but, I am still " . $_GET['name'];?>
        </h1>
        <h1>
            <?= "Sorry mate, I am a function made by " . htmlspecialchars($_GET['name']) . "which returns a Html Entities"; ?>
        </h1>
    </header>
</body>

</html>