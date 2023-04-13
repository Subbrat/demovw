<?php
include('./../includes/dbconn.php');
// Add column to table 'inst_accs'
if (isset($_POST['submit'])) {
    $column_name = $_POST['column_name'];
    // Check if column already exists
    $query = "SHOW COLUMNS FROM inst_accs LIKE '$column_name'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "";
    } else {
        $query = "ALTER TABLE inst_accs ADD COLUMN `$column_name` VARCHAR(255) NOT NULL DEFAULT ''";
        $result = mysqli_query($conn, $query);
    }
}
// Delete column from table 'inst_accs'
if (isset($_POST['delete'])) {
    $column_name = $_POST['column_name'];
    $query = "ALTER TABLE inst_accs DROP COLUMN `$column_name`";
    $result = mysqli_query($conn, $query);
}
// Fetch all columns from table 'inst_accs'
$query = "SHOW COLUMNS FROM inst_accs";
$result = mysqli_query($conn, $query);
// Organize columns by type
$alpha_cols = array();
$num_cols = array();
while ($row = mysqli_fetch_array($result)) {
    if (preg_match('/^[a-zA-Z]/', $row['Field'])) {
        array_push($alpha_cols, $row['Field']);
    } elseif (preg_match('/^[0-9]/', $row['Field'])) {
        array_push($num_cols, $row['Field']);
    }
}
?>
<!-- Add column form -->
<form method="POST">
    <label for="column_name">Enter Column Name:</label>
    <input type="text" autofocus name="column_name" required>
    <button type="submit" name="submit">Add Column</button>
</form>
<!-- List all columns with delete button -->
<h2>Columns</h2>
<h3>Dept</h3>
<ul>
    <?php foreach ($alpha_cols as $col) { ?>
    <li>
        <?php echo $col; ?>
        <form method="POST">
            <input type="hidden" name="column_name" value="<?php echo $col; ?>">
            <button type="submit" name="delete">Delete</button>
        </form>
    </li>
    <?php } ?>
</ul>
<h3>Batch</h3>
<ul>
    <?php foreach ($num_cols as $col) { ?>
    <li>
        <?php echo $col; ?>
        <form method="POST">
            <input type="hidden" name="column_name" value="<?php echo $col; ?>">
            <button type="submit" name="delete">Delete</button>
        </form>
    </li>
    <?php } ?>
</ul>
<style>
/* ul li {
    list-style: none;
} */
</style>
<?php mysqli_close($conn); ?>