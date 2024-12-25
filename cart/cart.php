<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart - Ziara Clothing</title>
  <link rel="stylesheet" href="./cart.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar">
    <a href="#" class="navbar-logo">Ziara Clothing</a>
    <ul class="navbar-links">
      <li><a href="../home/home.html">Home</a></li>
      <li><a href="../men/men_index.html">Men</a></li>
      <li><a href="../women/women_index.html">Women</a></li>
      <li><a href="../kids/kids_index.html">Kids</a></li>
      <li><a href="../contact/contact.html">Contact</a></li>
    </ul>
    <div class="search-bar">
        <input type="text" placeholder="Search...">
      </div>
      <div class="cart-icon"><a href="../cart/cart.html"><i class="fas fa-shopping-cart" ></i></a></div>
    <div class="profile-icon"><a href="../profile/profile.html"><i class="fas fa-user"></i></a></div>
  </nav>

  <!-- Cart Section -->
  <section class="cart-container">
    <h2>Your Shopping Cart</h2>
    
    <!-- Cart is Empty Message -->
    <div class="empty-cart">
      <p>Your cart is currently empty.</p>
      <a href="../men/men_index.html" class="continue-shopping">Continue Shopping</a>
    </div>

    <div class="cart-items">

      <!-- Sample Cart Item -->
      <div class="cart-item">
        <img src="sample-tshirt.jpg" alt="Product Image">
        <div class="item-details">
          <h3>Classic T-Shirt</h3>
          <p>Brief description of the t-shirt goes here.</p>
          <p>Size: M</p>
          <p>Color: White</p>
          <input type="number" value="1" min="1" class="quantity">
          <p class="item-price">$25.00</p>
          <button class="remove-item">Remove</button>
        </div>
      </div>

    </div>

    <!-- Cart Summary -->
    <div class="cart-summary">
      <h3>Order Summary</h3>
      <p>Subtotal: <span id="subtotal">$25.00</span></p>
      <p>Discount: <span id="discount">$0.00</span></p>
      <p>Estimated Tax: <span id="tax">$2.50</span></p>
      <p>Shipping: <span id="shipping">$5.00</span></p>
      <p><strong>Total: <span id="total">$32.50</span></strong></p>

      <div class="promo-code">
        <input type="text" id="promo" placeholder="Enter Promo Code">
        <button class="apply-promo">Apply</button>
      </div>

      <button class="checkout-button">Proceed to Checkout</button>
      <a href="../men/men_index.html" class="continue-shopping">Continue Shopping</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2024 Ziara Clothing. All Rights Reserved.</p>
  </footer>

  <script src="./cart.js"></script>
</body>
</html>
