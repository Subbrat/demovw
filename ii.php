<?php
include 'dbconn.php';

// Fetch data from batches table
$batches_query = "SELECT * FROM batches";
$batches_result = mysqli_query($conn, $batches_query);

// Fetch data from departments table
$departments_query = "SELECT * FROM departments";
$departments_result = mysqli_query($conn, $departments_query);

// Add values to the name field of the batches table
if (isset($_POST['add_batch'])) {
    $batch_name = $_POST['batch_name'];
    $add_batch_query = "INSERT INTO batches (name) VALUES ('$batch_name')";
    mysqli_query($conn, $add_batch_query);
}

// Add values to the name field of the departments table
if (isset($_POST['add_department'])) {
    $dept_name = $_POST['dept_name'];
    $add_dept_query = "INSERT INTO departments (name) VALUES ('$dept_name')";
    mysqli_query($conn, $add_dept_query);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Fetch Data from Two Tables</title>
</head>

<body>
    <h1>Batches</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <?php
        while ($batch_row = mysqli_fetch_assoc($batches_result)) {
        ?>
        <tr>
            <td><?php echo $batch_row['id']; ?></td>
            <td><?php echo $batch_row['name']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>

    <h1>Departments</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <?php
        while ($dept_row = mysqli_fetch_assoc($departments_result)) {
        ?>
        <tr>
            <td><?php echo $dept_row['id']; ?></td>
            <td><?php echo $dept_row['name']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>

    <h2>Add Batch</h2>
    <form method="POST">
        <input type="text" name="batch_name" placeholder="Batch Name">
        <input type="submit" name="add_batch" value="Add">
    </form>

    <h2>Add Department</h2>
    <form method="POST">
        <input type="text" name="dept_name" placeholder="Department Name">
        <input type="submit" name="add_department" value="Add">
    </form>
</body>

</html>