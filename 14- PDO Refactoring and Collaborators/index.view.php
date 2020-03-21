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

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <h3>My Local Database Output Visualization</h3>
    <table>
        <tr>
            <th>id</th>
            <th>description</th>
            <th>completed</th>
        </tr>
        <?php foreach ($tasksFromLocalDB as $task) : ?>
            <tr>
                <td> <?= $task->id; ?>
                </td>
                <td> <?= $task->description; ?>
                </td>
                <td> <?= $task->completed; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <h3>Method to strikethrough completed tasks</h3>
    <ul>
        <?php foreach ($tasksFromLocalDB as $newTask) : ?>
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