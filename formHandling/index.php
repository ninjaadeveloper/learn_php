<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <!-- method="GET"  -->
    <form action="data.php" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name"> <br>
        <label for="name">Age</label>
        <input type="number" name="age"> <br>
        <label for="gender">Gender</label> <br>
        <label for="male">Male</label>
        <input type="radio" name="gender" value="male">
        <label for="female">Female</label>
        <input type="radio" name="gender" value="female"> <br>
        <label for="courses">Courses</label> <br>
        <label for="html">HTML</label>
        <input type="checkbox" name="course[]" value="HTML">
        <label for="css">CSS</label>
        <input type="checkbox" name="course[]" value="CSS">
        <label for="js">JS</label>
        <input type="checkbox" name="course[]" value="JS"> <br>
        <input type="submit">
    </form>
</body>

</html>