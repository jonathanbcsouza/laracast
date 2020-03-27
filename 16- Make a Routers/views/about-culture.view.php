<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>My Document</title>
</head>

<body>
    <p>This is the <strong> <?php echo basename($_SERVER['PHP_SELF']); ?></strong> page
    </p>
    <h1>Our culture at <?=$website; ?></h1>
</body>

</html>