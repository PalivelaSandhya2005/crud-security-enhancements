<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $conn->prepare('UPDATE posts SET title = ?, content = ? WHERE id = ?');
    $stmt->bind_param('ssi', $_POST['title'], $_POST['content'], $_POST['id']);
    $stmt->execute();
    echo 'Post updated';
}
?>
