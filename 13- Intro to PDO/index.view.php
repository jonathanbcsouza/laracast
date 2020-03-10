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
    <h3>Using public class - IF/Else method 1:</h3>
    <ul>
        <?php foreach ($tasks as $newTask) : ?>
            <li>
                <?php if ($newTask->completed) : ?>
                    <strike>
                    <?php endif; ?>

                    <?= $newTask->description; ?>

                    <?php if ($newTask->completed) : ?>
                    </strike>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <h3>Using public class - IF/Else method 2:</h3>
    <ul>
        <?php foreach ($tasks as $newTask) : ?>
            <li>
                <?php if ($newTask->completed) : ?>

                    <strike><?= $newTask->description; ?></strike>

                <?php else : ?>

                    <?= $newTask->description; ?>

                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>