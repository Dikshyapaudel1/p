<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Management - Ziara Clothing</title>
  <link rel="stylesheet" href="admin.css">
</head>
<body>

  <!-- Sidebar (reuse if needed from the admin dashboard) -->
  <div class="sidebar">
    <h2>Ziara Admin</h2>
    <a href="index_admin.php">Dashboard</a>
    <a href="#" class="active">Orders</a>
    <a href="products.php">Products</a>
    <a href="user_section.php">Users</a>
    <a href="product_detail.php">Product Details</a>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header">
      <h1>Orders</h1>
      <button class="add-order-btn" onclick="addOrder()">+ Add New Order</button>
    </div>

    <!-- Orders Table -->
    <table class="order-table">
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Customer Name</th>
          <th>Product</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id="order-list">
        <!-- Sample order row -->
        <tr>
          <td>#12345</td>
          <td>John Doe</td>
          <td>Classic T-Shirt - $25.00</td>
          <td><span class="status completed">Completed</span></td>
          <td>
            <button class="view-btn" onclick="viewOrder(12345)">View</button>
            <button class="delete-btn" onclick="deleteOrder(12345)">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <script src="order.js"></script>
</body>
</html>
