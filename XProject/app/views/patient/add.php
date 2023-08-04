<!DOCTYPE html>
<html>
<head>
    <title>Add New Employees</title>
</head>
<body>
    <h2>Add New Employees</h2>
    <form action="process_add_employee.php" method="POST">
        <label for="full_name">Name</label>
        <input type="text" id="full_name" name="full_name" required><br>

        <label for="address">Address</label>
        <input type="text" id="address" name="address" required><br>


        <input type="submit" value="Add New Employee">
    </form>
</body>
</html>
