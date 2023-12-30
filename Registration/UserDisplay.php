<?php
require "config.php";


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM members";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}
    echo '<link rel="stylesheet" type="text/css" href="css\table.css">';

echo "<table>";


    echo "<tr><th>Id</th><th>Name</th><th>Email</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "</tr>";
}
    echo "</table>";
$conn->close();
?>
