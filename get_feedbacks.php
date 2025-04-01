<?php
require_once 'db_connection.php';



header('Content-Type: application/json');

try {
    $stmt = $pdo->query("SELECT * FROM feedbacks ORDER BY created_at DESC");
    $feedbacks = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($feedbacks);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>