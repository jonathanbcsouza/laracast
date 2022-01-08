<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    * {
        background: black;
        color: white;
    }

    h3 {
        color: orange;
    }

    hr {
        border-color: #fed8b1;
    }

    table {
        border-collapse: collapse;
        table-layout: auto;
        width: 100%;
        column-width: auto;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        white-space: nowrap;
        "

    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<body>

    <h3>All Users</h3>

    <table>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>created_at</th>
            <th>password</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td>
                    <?= $user->name; ?>
                </td>
                <td>
                    <?= $user->email; ?>
                </td>
                <td>
                    <?= $user->created_at; ?>
                </td>
                <td>
                    <?= $user->password; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <hr>
    <h3>Add A New User</h3>

    <form method="POST" , action="/users">
        {{ csrf_field() }}
        <p>
            <input type="text" , name="name" , placeholder="Name" , required>
        </p>
        <p>
            <input type="email" , name="email" , placeholder="Email Address" , required>
        </p>
        <p>
            <input type="password" , name="password" , placeholder="Password" , required>
        </p>
        <p>
            <button type="submit">Add User</button>
        </p>
    </form>
</body>

</html>