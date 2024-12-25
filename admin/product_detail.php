<?php
// Include database connection
include "../connect/connect.php";




    // Prepare and execute the SQL statement
    $sql = "SELECT * FROM products";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
      echo "<table>";
      echo"<thead>
      <tr>
      <th>id</th>
      <th>name</th>
      <th>description</th>
      <th>price</th>
      <th>category</th>
      <th>image_url</th>
      <th>discount</th>
      <th>stock</th>
      <th>edit</th>
      <th>delete</th>
    </tr>
    </thead>";
    echo"<tbody>";
    while ($row = mysqli_fetch_assoc($result)){
      echo"<tr>";
      echo"<td>".$row['id']."</td>";
      echo"<td>".$row['name']."</td>";
      echo"<td>".$row['description']."</td>";
      echo"<td>".$row['price']."</td>";
      echo"<td>".$row['category']."</td>";
      echo"<td>".$row['image_url']."</td>";
      echo"<td>".$row['discount']."</td>";
      echo"<td>".$row['stock']."</td>";

      echo"<td><a href='./products.php? id=".$row['id']."'>
      <button>Edit</button></a></td>";
      





      echo"<td><a href='../delete/delete.php?  id=".$row['id']."'>
      <button>Delete</button></a></td>";
      echo"</tr></br>";
      


    }
    }
    // Check if the product exists
    
else {
    $error = "No product ID provided.";
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Details - Ziara Clothing</title>
  <link rel="stylesheet" href="admin.css">
</head>
<body>
  <h1>Product Details</h1>

  <!-- Back Button -->
  <button onclick="window.history.back()" class="back-btn">Back</button>

 
</body>
</html>
