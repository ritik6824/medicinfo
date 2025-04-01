<?php
require_once 'db_connection.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    $rating = $_POST['rating'] ?? 0;

    try {
        $stmt = $pdo->prepare("INSERT INTO feedbacks (name, email, message, rating) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $email, $message, $rating]);
        
        header('Location: Index.php?success=1');
        exit();
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
?>