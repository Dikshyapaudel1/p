
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Ziara Clothing</title>
  <link rel="stylesheet" href="admin.css">
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h2>Ziara Admin</h2>
    <a href="" class="active">Dashboard</a>
    <a href="order.php">Orders</a>
    <a href="products.php">Products</a>
    <a href="product_detail.php">Product Details</a>
    <a href="user_section.php">Users</a>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header">
      <h1>Admin Dashboard</h1>
      <button class="logout-btn" onclick="logout()">Log Out</button>
    </div>

    <!-- Stats Section -->
    <div class="stats">
      <div class="stat-card">
        <h3>Total Orders</h3>
        <p>120</p>
      </div>
      <div class="stat-card">
        <h3>Total Products</h3>
        <p>350</p>
      </div>
      <div class="stat-card">
        <h3>Total Users</h3>
        <p>150</p>
      </div>
    </div>

    <!-- Orders Overview Card -->
    <div class="card">
      <h2>Recent Orders</h2>
      <p>Overview of the latest orders placed by customers.</p>
      <ul id="order-list">
        <li>Order #12345 - $45.00 - Completed</li>
        <li>Order #12346 - $99.00 - Pending</li>
        <li>Order #12347 - $25.00 - Shipped</li>
      </ul>
    </div>

    <!-- Products Overview Card -->
    <div class="card">
      <h2>Inventory</h2>
      <p>Overview of available products and stock levels.</p>
      <ul id="inventory-list">
        <li>Product A - 20 in stock</li>
        <li>Product B - 15 in stock</li>
        <li>Product C - 50 in stock</li>
      </ul>
    </div>
  </div>

  <script src="admin.js"></script>
</body>
</html>
