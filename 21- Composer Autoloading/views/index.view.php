<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>

<h3>Current Data:</h3>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
    </tr>
    <?php foreach ($data as $user) : ?>
        <tr>
            <td>
                <?= $user->id; ?>
            </td>
            <td>
                <?= $user->name; ?>
            </td>
            <td>
                <?= $user->age; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<hr>
<h3>Submit your name:</h3>
<form method="POST" action="/names">
    <label>
        <input placeholder="name" name="name">
    </label>
    <label>
        <input placeholder="age" name="age">
    </label>
    <button type="submit">Submit</button>
</form>

<?php require 'partials/footer.php' ?>