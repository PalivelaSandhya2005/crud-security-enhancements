<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $conn->prepare('INSERT INTO posts (title, content) VALUES (?, ?)');
    $stmt->bind_param('ss', $_POST['title'], $_POST['content']);
    $stmt->execute();
    echo 'Post added successfully';
}
?>
