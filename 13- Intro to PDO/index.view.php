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
    <h3>Rendering local database - method 1:</h3>
    <ul>
        <?php foreach ($data as $task) : ?>
            <li>
                <?php if ($task->is_completed) : ?>
                    <s>
                    <?php endif; ?>

                    <?= $task->description; ?>

                    <?php if ($task->is_completed) : ?>
                    </s>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <h3>Rendering local database - method 2:</h3>
    <ul>
        <?php foreach ($data as $task) : ?>
            <li>
                <?php if ($task->is_completed) : ?>

                    <s><?= $task->description; ?></s>

                <?php else : ?>

                    <?= $task->description; ?>

                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>