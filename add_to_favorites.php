<?php
session_start();
include 'connect.php';

if (isset($_SESSION['user_id']) && isset($_POST['product_id'])) {
    $user_id = $_SESSION['user_id'];
    $product_id = $_POST['product_id'];

    $sql = "INSERT INTO likes_table (like_id, user_id, product_id) VALUES (NULL,?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $user_id, $product_id);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Product added to favorites']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to add product to favorites']);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
?>
