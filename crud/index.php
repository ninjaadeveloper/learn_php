<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>CRUD</h1>
    <h2>Create User</h2>
    <form action="createData.php" method="POST">
        <label for="name"> Name:
            <input type="text" name="name">
        </label> <br>
        <label for="email"> Email:
            <input type="email" name="email">
        </label> <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>