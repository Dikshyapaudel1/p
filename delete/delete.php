<?php
include "../connect/connect.php";

if (isset($_GET['id'])) {
    // Sanitize and validate the product_id to prevent SQL injection
    $product_id = intval($_GET['id']);
    
    // Check if the product_id is valid
    if ($product_id > 0) {
        $query = "DELETE FROM products WHERE id = $product_id";
        $result = mysqli_query($conn, $query);
        
        if ($result) {
            header("Location:../admin/product_detail.php ");
            exit;
        } else {
            echo "Error: Could not delete the product. " . mysqli_error($conn);
        }
    } else {
        echo "Invalid product ID.";
    }
} else {
    echo "No product ID .";
}
?>
