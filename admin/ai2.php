<?php
// Include database connection file
include './../includes/dbconn.php';

// Initialize variables
$name = "";
$inst_accs = array();

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["name"];
    $inst_accs = isset($_POST["inst_accs"]) ? $_POST["inst_accs"] : array();

    // Insert data into 'inst_cat' table
    $sql = "INSERT INTO inst_cat (name) VALUES ('$name')";
    if (!mysqli_query($conn, $sql)) {
        die("Error inserting data into database: " . mysqli_error($conn));
    }
    $inst_cat_id = mysqli_insert_id($conn);

    // Update 'inst_accs' table
    foreach ($inst_accs as $acc) {
        $sql = "UPDATE inst_accs SET checked=1, inst_cat_id=$inst_cat_id WHERE id=$acc";
        if (!mysqli_query($conn, $sql)) {
            die("Error updating data in database: " . mysqli_error($conn));
        }
    }
}

// Retrieve data from 'inst_accs' table
$sql = "SELECT id, name FROM inst_accs";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error retrieving data from database: " . mysqli_error($conn));
}
?>

<form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?php echo $name; ?>" required>

    <label for="inst_accs">Accounts:</label>
    <?php
    // Display checkboxes for each row in 'inst_accs' table
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $name = $row["name"];
        $checked = in_array($id, $inst_accs) ? "checked" : "";
        echo '<div>';
        echo "<input type='checkbox' name='inst_accs[]' value='$id' id='acc_$id' $checked>";
        echo "<label for='acc_$id'>$name</label>";
        echo '</div>';
    }
    ?>

    <button type="submit">Submit</button>
</form>