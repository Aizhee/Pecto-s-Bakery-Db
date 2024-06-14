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

    // Delete the product from the cart
    $deleteCart = "DELETE FROM cart WHERE user_id = $user_id AND product_id = $product_id";
    if ($conn->query($deleteCart) === TRUE) {
        // Redirect back to the cart page
        header("Location: cart.php");
    } else {
        echo "Error: " . $conn->error;
    }
    exit();
}
?>
