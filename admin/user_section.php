<?php
// Include database connection
include "../connect/connect.php";




    // Prepare and execute the SQL statement
    $sql = "SELECT * FROM  users";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
      echo "<table>";
      echo"<thead>
      <tr>
      <th>id</th>
      <th>name</th>
      <th>email</th>
      <th>password</th>
      
    </tr>
    </thead>";
    echo"<tbody>";
    while ($row = mysqli_fetch_assoc($result)){
      echo"<tr>";
      echo"<td>".$row['id']."</td>";
      echo"<td>".$row['name']."</td>";
      echo"<td>".$row['email']."</td>";
      echo"<td>".$row['password']."</td>";
    
      echo"</tr";


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
