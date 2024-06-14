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
    $quantity = $_POST['quantity'];

    // Check if the product is already in the user's cart
    $checkCart = "SELECT * FROM cart WHERE user_id = $user_id AND product_id = $product_id";
    $result = $conn->query($checkCart);

    if ($result->num_rows > 0) {
        // Update the quantity if the product is already in the cart
        $updateCart = "UPDATE cart SET quantity = quantity + $quantity WHERE user_id = $user_id AND product_id = $product_id";
        $conn->query($updateCart);
    } else {
        // Insert new product into the cart
        $insertCart = "INSERT INTO cart (user_id, product_id, quantity) VALUES ($user_id, $product_id, $quantity)";
        $conn->query($insertCart);
    }

    // Redirect to the cart page
    header("Location: cart.php");
    exit();
}
?>
