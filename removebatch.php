<?php
include "dbconn.php";

if (isset($_POST["delete_batch"])) {
    $batch_id = $_POST["batch_id"];
    $sql = "DELETE FROM batches WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $batch_id);
    $stmt->execute();
    $stmt->close();
}

$sql = "SELECT * FROM batches";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>";
        echo "<form method='post'>";
        echo "<input type='hidden' name='batch_id' value='" . $row["id"] . "'>";
        echo "<button type='submit' name='delete_batch'>Delete</button>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No batches found.";
}

$conn->close();