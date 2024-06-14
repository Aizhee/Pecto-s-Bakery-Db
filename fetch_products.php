<?php
// Include the database connection file
include 'connect.php';

// SQL query to fetch product data
$sql = "SELECT product_name, photo, price FROM product_table";
$result = $conn->query($sql);

$products = array();

if ($result->num_rows > 0) {
    // Loop through the fetched data and store it in an array
    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

// Return the data as a JSON response
echo json_encode($products);

// Close the database connection
$conn->close();
?>
