<?php
// Include the database connection from the next folder
include "../connect/connect.php"; // Adjust the path based on your folder structure

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $discount = mysqli_real_escape_string($conn, $_POST['discount']);
    $stock = mysqli_real_escape_string($conn, $_POST['stock']);
    $image_url = "";

    // Handle file upload
    if (isset($_FILES['image_url']) && $_FILES['image_url']['error'] == 0) {
        $target_dir = "../images/"; // Adjust path for uploads folder
        $target_file = $target_dir . basename($_FILES["image_url"]["name"]);

        // Ensure the uploads directory is writable
        if (move_uploaded_file($_FILES["image_url"]["tmp_name"], $target_file)) {
            $image_url = $target_file;
        } else {
            echo "Error uploading file.";
            exit;
        }
    }

    // Insert into database
    $query = "INSERT INTO products (name, description, price, category, discount, stock, image_url) 
              VALUES ('$name', '$description', '$price', '$category', '$discount', '$stock', '$image_url')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: ./products.php");
        exit;
    } else {
        echo "Unsuccessful. Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Management - Ziara Clothing</title>
  <link rel="stylesheet" href="admin.css">
</head>
<body>
  <h1>Admin Product Management</h1>

  <!-- Back Button -->
  <button onclick="window.history.back()" class="back-btn">Back</button>

  <!-- Product Form -->
  <section class="product-form">
    <h2>Add/Edit Product</h2>
    <form id="productForm" action="" method="POST" enctype="multipart/form-data">
      <label for="productName">Product Name:</label>
      <input type="text" id="productName" name="name" required>

      <label for="productPrice">Price:</label>
      <input type="number" id="productPrice" name="price" required min="0" step="0.01">

      <label for="productDescription">Description:</label>
      <textarea id="productDescription" name="description"></textarea>

      <label for="productCategory">Category:</label>
      <select id="productCategory" name="category">
        <option value="men">Men</option>
        <option value="women">Women</option>
        <option value="kids">Kids</option>
      </select>

      <label for="productDiscount">Discount (%):</label>
      <input type="number" id="productDiscount" name="discount" required min="0" max="100" step="1">

      <label for="productStock">Stock Quantity:</label>
      <input type="number" id="productStock" name="stock" required min="0">

      <label for="productImage">Product Image:</label>
      <input type="file" id="productImage" name="image_url" accept="image/*">

      <button type="submit" name="submit">Save Product</button>
    </form>
  </section>
</body>
</html>
