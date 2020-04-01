<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>

<h1>Submit your Name</h1>

<form method="POST" action="/names">
    <input name="name" placeholder="User" ></input>
    <input name="age" placeholder="Age"></input>
    <button type="submit">Submit</button>
</form>
<br>
<hr>
<h3>My Local Database Visualization</h3>
<table>
    <tr>
        <th>User</th>
        <th>Age</th>
    </tr>
    <?php foreach ($users as $user) : ?>
        <tr>
            <td> <?= $user->name; ?>
            </td>
            <td> <?= $user->age; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<br>

<?php require 'partials/footer.php' ?>