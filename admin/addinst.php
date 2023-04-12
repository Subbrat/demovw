<?php
include './../includes/dbconn.php'; // assuming dbconn.php contains the database connection code

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $dept_availability = array();
    $batch_availability = array();

    // Fetch column names from the "inst_accs" table
    $sql = "SHOW COLUMNS FROM inst_accs";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $col_name = $row['Field'];
            if (preg_match("/^[A-Za-z]/", $col_name)) { // Check if the column name starts with a letter
                $dept_availability[$col_name] = isset($_POST[$col_name]) ? 1 : 0;
            } elseif (preg_match("/^[0-9]/", $col_name)) { // Check if the column name starts with a number
                $batch_availability[$col_name] = isset($_POST[$col_name]) ? 1 : 0;
            }
        }
    } else {
        echo "No columns found";
    }

    // Check if the name already exists
    $sql = "SELECT * FROM inst_cat WHERE name='$name'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "Error inserting data: Instrument name already exists";
    } else {
        // Insert data into the database
        $sql = "INSERT INTO inst_cat (name";
        foreach ($batch_availability as $col_name => $value) {
            $sql .= ", `$col_name`";
        }
        foreach ($dept_availability as $col_name => $value) {
            $sql .= ", `$col_name`";
        }
        $sql .= ") VALUES ('$name'";
        foreach ($batch_availability as $value) {
            $sql .= ", $value";
        }
        foreach ($dept_availability as $value) {
            $sql .= ", $value";
        }
        $sql .= ")";
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
    <label for="dept_availability">Department Availability:</label>
    <?php
    // Fetch checkbox options from the "inst_accs" table
    $sql = "SELECT column_name FROM information_schema.columns WHERE table_name='inst_accs' AND column_name LIKE 'dept_%' ORDER BY column_name";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $dept_name = $row['column_name'];
            echo "<input type='checkbox' name='dept_availability[]' value='$dept_name'> " . ucfirst(str_replace('_', ' ', $dept_name)) . " <br>";
        }
    } else {
        echo "No departments found";
    }
    ?>
    <label for="batch_availability">Batch Availability:</label>
    <?php
    // Fetch checkbox options from the "inst_accs" table
    $sql = "SELECT column_name FROM information_schema.columns WHERE table_name='inst_accs' AND column_name LIKE 'batch_%' ORDER BY ABS(column_name)";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $batch_name = $row['column_name'];
            echo "<input type='checkbox' name='batch_availability[]' value='$batch_name'> " . ucfirst(str_replace('_', ' ', $batch_name)) . " <br>";
        }
    } else {
        echo "No batches found";
    }
    ?>
    <input type="submit" value="Submit">
</form>