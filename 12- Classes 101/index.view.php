<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>My Document</title>
    <style>
        ul {
            background: black;
            padding: 20px;
            color: white;
        }
        li{
            margin: 10px;
        }
    </style>
</head>

<body>
<h3>Using Public Classes</h3>
<h4>Example 1:</h4>
<ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->completed) : ?>
                <s>
            <?php endif; ?>
                <?= $task->description; ?>
            <?php if ($task->completed) : ?>
                </s>
        <?php endif; ?>
        </li>
    <?php endforeach; ?>
    <?php ?>
</ul>
<h4>Example 2:</h4>
<ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->completed) : ?>
                <s><?= $task->description; ?></s>
            <?php else : ?>
                <?= $task->description; ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>
</body>

</html>