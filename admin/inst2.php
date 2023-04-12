<?php
include './../includes/dbconn.php'; // Assuming this includes the database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission
    $name = $_POST['name'];

    // Insert name into inst_reg table
    $insert_query = "INSERT INTO inst_reg (name) VALUES ('$name')";
    mysqli_query($conn, $insert_query);

    // Update inst_accs table based on checked checkboxes
    $checkboxes = $_POST['inst_accs'];
    $update_query = "UPDATE inst_accs SET ";
    foreach ($checkboxes as $column_name) {
        $update_query .= "$column_name = 1, ";
    }
    $update_query = rtrim($update_query, ', '); // Remove the last comma and space
    mysqli_query($conn, $update_query);
}
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name"><br>
    <?php
    // Fetch column names from inst_accs table
    $query = "SHOW COLUMNS FROM inst_accs";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $column_name = $row['Field'];
        echo "<input type='checkbox' name='inst_accs[]' value='$column_name'>$column_name<br>";
    }
    ?>
    <input type="submit" value="Submit">
</form>