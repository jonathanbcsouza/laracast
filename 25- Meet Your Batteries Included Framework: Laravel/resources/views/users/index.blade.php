<!DOCTYPE html>
<html lang="en">
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

<body>
    <h1>My Local Database Visualization</h1>
    <table>
        <tr>
            <th>User</th>
            <th>Age</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td> {{ $user->name}}
            </td>
            <td> {{ $user->email}}
            </td>
        </tr>
        @endforeach
    </table>
    <hr>

    <h3>Submit a new name</h3>

    <form method="POST" action="/users">
        {{csrf_field()}}
        <p><input type="text" name="name" placeholder="Name" required></input></p>
        <p> <input type="email" name="email" placeholder="Email Address" required></input></p>
        <p> <input type="password" name="password" placeholder="Password" required></input></p>
        <button type="submit">Submit</button>
    </form>
    <br>
</body>
<hr>

<div id="footer">
    <h3>The footer</h3>
    <p>Full code available at:
        <a href="https://github.com/jonathanbcsouza/laracast">https://github.com/jonathanbcsouza/laracast</a>
        <br>Course episode:
        <a href="https://laracasts.com/series/php-for-beginners/episodes/25">https://laracasts.com/series/php-for-beginners/episodes/24</a>
    </p>
</div>

</html>