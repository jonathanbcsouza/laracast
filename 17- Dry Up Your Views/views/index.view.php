<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>
    <h3>My Local Database Output Visualization</h3>
    <table>
        <tr>
            <th>id</th>
            <th>description</th>
            <th>completed</th>
        </tr>
        <?php foreach ($tasksFromLocalDB as $task) : ?>
            <tr>
                <td>
                    <?= $task->id; ?>
                </td>
                <td>
                    <?= $task->description; ?>
                </td>
                <td>
                    <?= $task->is_completed; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <h3>Method to strikethrough completed tasks</h3>
    <ul>
        <?php foreach ($tasksFromLocalDB as $newTask) : ?>
            <li>
                <?php if ($newTask->is_completed) : ?>

                    <s><?= $newTask->description; ?></s>

                <?php else : ?>

                    <?= $newTask->description; ?>

                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?php require 'partials/footer.php' ?>