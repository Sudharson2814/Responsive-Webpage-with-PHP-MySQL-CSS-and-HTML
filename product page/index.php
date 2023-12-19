<?php

$host = 'localhost';
$username = 'root';
$password = '2814';
$database = 'product';


$connection = mysqli_connect($host, $username, $password, $database);

// Check if the connection is successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch products from the database
$query = "SELECT id, name, price, details, image_path FROM products";
$result = mysqli_query($connection, $query);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}

// Display products on the product page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="../product page/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">

</head>
<body>
 
<h1>Product Page</h1> 

<?php
// Loop through the results and display product information

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='product-card'>";
    echo "<img src='{$row['image_path']}' alt='{$row['name']}' class='product-image'>";
    echo "<h2 class='product-name'>{$row['name']}</h2>";
    echo "<p class='product-price'>Price: $ {$row['price']}</p>";
    echo "<p class='product-details'>{$row['details']}</p>";
    echo "</div>";
}


// Close the database connection
mysqli_close($connection);
?>

</body>
</html>
