<?php
include 'config.php';
?>
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
    <h1>Users</h1>
    <table border="1">
        <thead>
            <th>S.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </thead>
        <tbody>

            <?php
            $query  = "SELECT * FROM tbl_user";

            $result =  mysqli_query($con, $query);
            $num = 1;
            while ($row = mysqli_fetch_assoc($result)) {  ?>
                <!-- while ($row = mysqli_fetch_row($result)) {     -->
                <tr>
                    <td><?php echo $num; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td>
                        <a href="edit.php?userId=<?php echo $row['id']; ?>">Edit</a> |
                        <a href="deleteData.php?userId=<?php echo $row['id']; ?>">Delete</a> 
                    </td>
                </tr>

            <?php
                $num++;
            }
            ?>
        </tbody>
    </table>

</body>

</html>