<?php
include "dbconn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $batch_name = $_POST["batch_name"];

    $sql = "INSERT INTO batches (name) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $batch_name);

    if ($stmt->execute()) {
        echo "Batch added successfully!";
    } else {
        echo "Error adding batch: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
<h1>hehe</h1>
<form method="post">
    <input type="text" name="batch_name" required>
    <input type="submit" value="Add Batch">
</form>