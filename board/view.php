<?php
$conn = new mysqli("localhost", "phpuser", "root", "test");

$id = $_GET['id'];
$sql = "SELECT * FROM board WHERE id = $id";  // intentionally vulnerable

$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "<h2>{$row['title']}</h2>";
echo "<p>{$row['content']}</p>";
?>
