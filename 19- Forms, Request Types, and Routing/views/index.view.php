<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>

<h1>Submit your Name</h1>

<form method="POST" action="/names">
    <input name="name"></input>
    <button type="submit">Submit</button>
</form>



<?php require 'partials/footer.php' ?>