<?php
$host = 'localhost';
$user = 'phpuser';
$pass = 'root';  // MariaDB 설치 시 설정한 root 비번
$dbname = 'test';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
} else {
    echo "연결 성공!";
}
?>
