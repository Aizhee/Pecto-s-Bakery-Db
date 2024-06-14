<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if user is not logged in
    header("Location: LogIn.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $product_id = $_POST['product_id'];

    // Check if the product is already in the user's favorites
    $checkFavorite = "SELECT * FROM product_table WHERE user_id = $user_id AND product_id = $product_id";
    $result = $conn->query($checkFavorite);

    if ($result->num_rows == 0) {
        // Insert new product into the favorites
        $insertFavorite = "INSERT INTO likes_table (user_id, product_id) VALUES ($user_id, $product_id)";
        $conn->query($insertFavorite);
    }

    // Redirect to the favorites page
    header("Location: favorites.php");
    exit();
}
?>
