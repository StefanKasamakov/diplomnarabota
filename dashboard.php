<!DOCTYPE html>
<html>
<head>
    <title>Product Dashboard</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Product Dashboard</h1>
    <table>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
        </tr>
    <?php
    include 'connect.php';
    $query = "SELECT * FROM products";
    $result = mysqli_query($conn, $query);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach($products as $product) {
        echo "<tr>";
        echo "<td>" . $product['id'] . "</td>";
        echo "<td>" . $product['name'] . "</td>";
        echo "<td>" . $product['price'] . "</td>";
        echo "</tr>";
    }
    ?>
    </table>
    <h2>Update Product Price</h2>
    <form action="update_prices.php" method="post">
        <label for="product_id">Product ID:</label>
        <input type="text" id="product_id" name="product_id"><br>
        <label for="new_price">New Price:</label>
        <input type="text" id="new_price" name="new_price"><br>
        <input type="submit" value="Update Price">
    </form>
</body>
</html>
