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
    <h1>Task for the Day</h1>

    <ul>
        <li>
            <strong>Name: </strong>
            <?= ucwords($task['title']); ?>
        </li>
        <li>
            <strong>Due: </strong>
            <?= ucwords($task['due']); ?>
        </li>
        <li>
            <strong>Personal Responsible: </strong>
            <?= ucwords($task['assigned_to']); ?>
        </li>
        <li>
            <strong>Status: </strong>
            <?= ucwords($task['completed']) ? 'Complete' : 'Incomplete'; ?>
        </li>
        <li>
            <strong>Status: </strong>
            <?= ucwords($task['completed2']) ? 'Complete' : 'Incomplete'; ?>
        </li>
    </ul>
</body>

</html>