<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT title, description FROM projects";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<section class='project'>";
    echo "<h2>{$row['title']}</h2>";
    echo "<p>{$row['description']}</p>";
    echo "</section>";
}

$conn->close();
?>
