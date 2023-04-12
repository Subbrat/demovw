<?php
include "dbconn.php";

if (isset($_POST["delete_department"])) {
    $department_id = $_POST["department_id"];
    $sql = "DELETE FROM departments WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $department_id);
    $stmt->execute();
    $stmt->close();
}

$sql = "SELECT * FROM departments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>";
        echo "<form method='post'>";
        echo "<input type='hidden' name='department_id' value='" . $row["id"] . "'>";
        echo "<button type='submit' name='delete_department'>Delete</button>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No departments found.";
}

$conn->close();