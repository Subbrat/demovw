<?php
include "dbconn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dept_name = $_POST["dept_name"];

    $sql = "INSERT INTO departments (name) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $dept_name);

    if ($stmt->execute()) {
        echo "dept added successfully!";
    } else {
        echo "Error adding batch: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
include "removedept.php"
?>
<h1>hehe</h1>
<form method="post">
    <input type="text" name="dept_name" required>
    <input type="submit" value="Add dept">
</form>