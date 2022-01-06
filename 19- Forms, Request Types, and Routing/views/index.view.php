<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>

<h1>Current Data:</h1>

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

<br>
<form method="POST" action="names">
    <label>
        <input placeholder="name" name="name">
        <input placeholder="age" name="age">

    </label>
    <button type="submit">Submit</button>
</form>

<?php require 'partials/footer.php' ?>