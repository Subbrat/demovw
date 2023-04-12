<?php
// Include the database connection file
include './../includes/dbconn.php';

// Check if a new column name is submitted
if (isset($_POST['add_column']) && !empty($_POST['column_name'])) {
    // Sanitize the column name input
    $column_name = mysqli_real_escape_string($conn, $_POST['column_name']);

    // Check if the column name already exists
    $check_column_query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='inst_accs' AND COLUMN_NAME='$column_name'";
    $check_column_result = mysqli_query($conn, $check_column_query);
    if (mysqli_num_rows($check_column_result) == 0) {
        // Add the new column to the table
        // $add_column_query = "ALTER TABLE inst_accs ADD COLUMN $column_name VARCHAR(255)";
        $add_column_query = "ALTER TABLE inst_accs ADD `$column_name` VARCHAR(255)";

        mysqli_query($conn, $add_column_query) or die(mysqli_error($conn));
    }
}

// Check if a column name is submitted for deletion
if (isset($_POST['delete_column']) && !empty($_POST['column_name'])) {
    // Sanitize the column name input
    $column_name = mysqli_real_escape_string($conn, $_POST['delete_column']);

    // Check if the column name exists and delete it if it does
    $check_column_query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='inst_accs' AND COLUMN_NAME='$column_name'";
    $check_column_result = mysqli_query($conn, $check_column_query);
    if (mysqli_num_rows($check_column_result) > 0) {
        $delete_column_query = "ALTER TABLE inst_accs DROP COLUMN $column_name";
        mysqli_query($conn, $delete_column_query) or die(mysqli_error($conn));
    }
}


// Get the list of columns in the table
$columns_query = "SHOW COLUMNS FROM inst_accs";
$columns_result = mysqli_query($conn, $columns_query) or die(mysqli_error($conn));
$columns = array();
while ($column = mysqli_fetch_assoc($columns_result)) {
    $columns[] = $column['Field'];
}
?>

<!-- Display the list of columns and the form to add/delete columns -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <ul>
        <?php foreach ($columns as $column) : ?>
        <li><?php echo $column; ?> <button type="submit" name="delete_column"
                value="<?php echo $column; ?>">Delete</button></li>
        <?php endforeach; ?>
    </ul>
    <input type="text" name="column_name" placeholder="New column name">
    <button type="submit" name="add_column" value="Add column">Add column</button>
</form>