<?php
include 'db_connection.php'; // Connect to the database
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Medical Store - Home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Online Medical Store</h1>
            <nav>
                <a href="index.php">Home</a>
                <a href="products.php">Product List</a>
                <a href="about.php">About Us</a>
                <a href="contact.php">Contact Us</a>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
                <a href="admin-login.php">Admin Panel</a>
            </nav>
        </div>
    </header>
    
    <main>
        <section class="hero">
            <div class="hero-content">
                <h2>Welcome to Our Online Medical Store</h2>
                <p>Find the best medical products at unbeatable prices.</p>
                <a href="products.php" class="cta-button">Shop Now</a>
            </div>
        </section>
        
        <section class="features">
            <div class="feature">
                <h3>Wide Range of Products</h3>
                <p>Explore our diverse range of medical products, from prescription medicines to over-the-counter remedies.</p>
            </div>
            <div class="feature">
                <h3>24/7 Customer Support</h3>
                <p>Our customer service team is available around the clock to assist you with any queries or issues.</p>
            </div>
            <div class="feature">
                <h3>Secure Checkout</h3>
                <p>Enjoy a safe and secure shopping experience with our encrypted payment methods.</p>
            </div>
        </section>
        
        <section class="quick-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="products.php">View Products</a></li>
                <li><a href="cart.php">View Shopping Cart</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2024 Online Medical Store</p>
    </footer>
    
</body>
</html>
