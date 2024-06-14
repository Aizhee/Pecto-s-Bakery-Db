<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if user is not logged in
    header("Location: LogIn.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch favorite items for the current user
$sql = "SELECT * FROM products JOIN likes_table ON products.product_id = likes_table.product_id WHERE likes_table.user_id = $use";
$results = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&family=Great+Vibes&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="Favorites.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <title>Pecto's Bakery - Favorites</title>
</head>

<body>
    <main>
        <h2>My Favorites</h2>

        <?php if ($results->num_rows > 0) : ?>
            <?php while ($row = $results->fetch_assoc()) : ?>
                <div class="product">
                    <img src="img/<?php echo $row['photo']; ?>" alt="Product Image">
                    
                    <div class="product-details">
                        <h3><?php echo $row['product_name']; ?></h3>
                        <p><?php echo $row['type']; ?></p>
                        <p>$<?php echo number_format($row['price'], 2); ?></p>
                        <form action="add_to_cart.php" method="post">
                            <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                            <button type="submit">Add to Cart</button>
                        </form>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>You have no favorite items.</p>
        <?php endif; ?>

        <?php $conn->close(); ?>
    </main>
</body>
</html>
