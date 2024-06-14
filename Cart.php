<?php
include 'connect.php';

// Fetch product details from the database
$sql = "SELECT * FROM order_table INNER JOIN product_table ON order_table.product_id = product_table.product_id";
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
        <link rel="stylesheet" href="Cart.css">
        <link rel="icon" href="img/logo.png" type="image/x-icon">
        <title>Pecto's Bakery - Cart</title>
    </head>

    <body>
        <main>
          <h2>Shopping Cart</h2>

          <?php if ($results->num_rows > 0) : ?>
              <?php while ($row = $results->fetch_assoc()) : ?>
                  <div class="product">
                      <img src="img/<?php echo $row['photo']; ?>" alt="Product Image">
                      
                      <div class="product-details">
                          <h3><?php echo $row['product_name']; ?></h3>
                          <p><?php echo $row['type']; ?></p>
                          <p>$<?php echo $row['price']; ?></p>
                          <form action="add_to_cart.php" method="post">
                              <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                              <label for="quantity-<?php echo $row['product_id']; ?>">Quantity:</label>
                              <input type="number" id="quantity-<?php echo $row['product_id']; ?>" name="quantity" min="1" value="1">
                          </form>
                      </div>
                  </div>
              <?php endwhile; ?>
          <?php else : ?>
              <p>No products available.</p>
          <?php endif; ?>

          <?php $conn->close(); ?>
        </main>
        <button onclick="window.location.href='checkout.php'">Proceed to Check-Out</button>
    </body>
</html>
