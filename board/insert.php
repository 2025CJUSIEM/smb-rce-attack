<?php
$conn = new mysqli("localhost", "phpuser", "root", "test");

$title = $_POST['title'];
$content = $_POST['content'];

$sql = "INSERT INTO board (title, content) VALUES ('$title', '$content')";
$conn->query($sql);

echo "등록 완료!<br><a href='index.php'>목록으로</a>";
?>
