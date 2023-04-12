<?php
include './../includes/dbconn.php'; // assuming dbconn.php contains the database connection code

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $batch_availability = isset($_POST['batch_availability']) ? 1 : 0; // checkbox values are sent as "on" if checked
    $dept_availability = isset($_POST['dept_availability']) ? 1 : 0;

    // Check if the name already exists
    $sql = "SELECT * FROM inst_cat WHERE name='$name'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "Error inserting data: Instrument name already exists";
    } else {
        // Insert data into the database
        $sql = "INSERT INTO inst_cat (name, batch_availability, dept_availability) VALUES ('$name', $batch_availability, $dept_availability)";
        if ($conn->query($sql) === TRUE) {
            // Redirect to the same page
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Error inserting data: " . $conn->error;
        }
    }
}

if (isset($_GET['success'])) {
    echo "Data inserted successfully";
}
?>

<form method="POST" autocomplete="off">
    <label for="name">Instrument Name:</label>
    <input type="text" name="name" required>
    <br>
    <label for="batch_availability">Batch Availability:</label>
    <?php
    // Fetch checkbox options from the "batches" table
    $sql = "SELECT name FROM batches";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $batch_name = $row['name'];
            echo "<input type='checkbox' name='batch_availability[]' value='$batch_name'> $batch_name <br>";
        }
    } else {
        echo "No batches found";
    }
    ?>
    <label for="dept_availability">Department Availability:</label>
    <?php
    // Fetch checkbox options from the "departments" table
    $sql = "SELECT name FROM departments";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $dept_name = $row['name'];
            echo "<input type='checkbox' name='dept_availability[]' value='$dept_name'> $dept_name <br>";
        }
    } else {
        echo "No departments found";
    }
    ?>
    <input type="submit" value="Submit">
</form>