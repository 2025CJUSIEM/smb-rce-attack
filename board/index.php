<?php
$conn = new mysqli("localhost", "phpuser", "root", "test");

$result = $conn->query("SELECT * FROM board");

echo "<h2>게시판 목록</h2>";
echo "<a href='write.php'>[글쓰기]</a><br><br>";

while ($row = $result->fetch_assoc()) {
    echo "<a href='view.php?id={$row['id']}'>{$row['title']}</a><br>";
}
?>
