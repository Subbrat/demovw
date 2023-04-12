<?php
include './../includes/dbconn.php';
include_once('./../includes/inc.php');
// Fetch data from batches table
$batches_query = "SELECT * FROM batches";
$batches_result = mysqli_query($conn, $batches_query);

// Fetch data from departments table
$departments_query = "SELECT * FROM departments";
$departments_result = mysqli_query($conn, $departments_query);

// Add values to the name field of the batches table
if (isset($_POST['add_batch'])) {
    $batch_name = $_POST['batch_name'];

    // Check if batch name already exists
    $check_query = "SELECT COUNT(*) FROM batches WHERE name = '$batch_name'";
    $check_result = mysqli_query($conn, $check_query);
    $check_count = mysqli_fetch_array($check_result)[0];

    if ($check_count > 0) {
        // Batch name already exists, show error message
        echo "<p>Error: Batch name already exists.</p>";
    } else {
        // Batch name does not exist, insert into database
        $insert_query = "INSERT INTO batches (name) VALUES ('$batch_name')";
        mysqli_query($conn, $insert_query);

        // Redirect to same page to refresh batch list
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}


// Add values to the name field of the departments table
if (isset($_POST['add_department'])) {
    $dept_name = $_POST['dept_name'];

    // Check if department name already exists
    $check_query = "SELECT COUNT(*) FROM departments WHERE name = '$dept_name'";
    $check_result = mysqli_query($conn, $check_query);
    $check_count = mysqli_fetch_array($check_result)[0];

    if ($check_count > 0) {
        // Department name already exists, show error message
        echo "<p>Error: Department name already exists.</p>";
    } else {
        // Department name does not exist, insert into database
        $insert_query = "INSERT INTO departments (name) VALUES ('$dept_name')";
        mysqli_query($conn, $insert_query);

        // Redirect to same page to refresh department list
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}


// Delete an element from batches table
if (isset($_POST['delete_batch'])) {
    $batch_id = $_POST['batch_id'];
    $delete_batch_query = "DELETE FROM batches WHERE id=$batch_id";
    mysqli_query($conn, $delete_batch_query);
    header("Location: " . $_SERVER['PHP_SELF']);
}

// Delete an element from departments table
if (isset($_POST['delete_dept'])) {
    $dept_id = $_POST['dept_id'];
    $delete_dept_query = "DELETE FROM departments WHERE id=$dept_id";
    mysqli_query($conn, $delete_dept_query);
    header("Location: " . $_SERVER['PHP_SELF']);
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
            <th>Action</th>
        </tr>
        <?php
        while ($batch_row = mysqli_fetch_assoc($batches_result)) {
        ?>
        <tr>
            <td><?php echo $batch_row['id']; ?></td>
            <td><?php echo $batch_row['name']; ?></td>
            <td>
                <form method="POST">
                    <input type="hidden" name="batch_id" value="<?php echo $batch_row['id']; ?>">
                    <input type="submit" name="delete_batch" value="Delete">
                </form>
            </td>
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
            <th>Action</th>
        </tr>
        <?php
        while ($dept_row = mysqli_fetch_assoc($departments_result)) {
        ?>
        <tr>
            <td><?php echo $dept_row['id']; ?></td>
            <td><?php echo $dept_row['name']; ?></td>
            <td>
                <form method="POST">
                    <input type="hidden" name="dept_id" value="<?php echo $dept_row['id']; ?>">
                    <input type="submit" name="delete_dept" value="Delete">
                </form>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>

    <h2>Add Batch</h2>
    <form method="POST">
        <label for="batch_name">Batch Name:</label>
        <input type="text" autofocus name="batch_name" id="batch_name">
        <input type="submit" name="add_batch" value="Add">
    </form>

    <h2>Add Department</h2>
    <form method="POST">
        <label for="dept_name">Department Name:</label>
        <input type="text" autofocus name="dept_name" id="dept_name">
        <input type="submit" name="add_department" value="Add">
    </form>