<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat & Dog</title>
    <link rel="stylesheet" href="shopstyle.css">
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="top-section">
            <div class="logo">
                <img src="PETOPIA_logo1.png" alt="PETOPIA Logo" class="logo-image">
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Search Pet Essentials">
                <button class="search-icon">&#128269;</button>
            </div>
        </div>
        <div class="bottom-section">
            <div class="nav-links">
                <a href="#home" class="active">Home</a>
                <div class="dropdown">
                    <a href="#" class="shop-link">Shop</a>
                    <div class="dropdown-content">
                        <div class="dropdown-submenu">
                            <a href="Cat_Dog.html" class="active">Cat&Dog</a> 
                            <div class="submenu-content">
                                <a href="#cat-food">Food</a>
                                <a href="#cat-accessories">Accessories</a>
                                <a href="#cat-toys">Toys</a>
                                <a href="cat-medicine.html">Medicine</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="index.html">Reviews</a>
                <a href="index.html">About</a>
                <div class="dropdown">
                    <a href="#" class="services-link">Services</a>
                    <div class="dropdown-content">
                        <a href="services.html">Buy&Sell</a>
                        <a href="services.html">Adoption</a>
                        <a href="services.html">Health Checkup</a>
                        <a href="services.html">Grooming</a>
                    </div>
                </div>
            </div>
            <div class="actions">
                <a href="myaccount.html" id="myAccountBtn">My Account</a>
                <a href="rewards.html">Rewards</a>
                <a href="cart.html">Cart</a>
                <a href="contact.html" class="contact">&#128222; Contact</a>
            </div>
        </div>
    </div>

    <!-- Shop Sections -->
    <main>
        <!-- Cat Food Section -->
        <section class="shop-section" id="cat-food">
            <h2>Cat Food</h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="felix.jpg" alt="Felix Cat Food">
                    <h3>Felix Cat Food Kitten Tuna in Jelly</h3>
                    <p><span class="price">৳110.00</span> <span class="discount">৳120.00</span></p>
                </div>
                <div class="product-card">
                    <img src="sheba_tuna.jpg" alt="Sheba Tuna">
                    <h3>Sheba Cat Food Pouch Tuna Flavour</h3>
                    <p><span class="price">৳120.00</span> <span class="discount">৳130.00</span></p>
                </div>
                <div class="product-card">
                    <img src="sheba_tuna_salmon.jpg" alt="Sheba Tuna and Salmon">
                    <h3>Sheba Cat Food Pouch Tuna & Salmon Flavour</h3>
                    <p><span class="price">৳120.00</span> <span class="discount">৳130.00</span></p>
                </div>
            </div>
        </section>

        <!-- Cat Accessories Section -->
        <section class="shop-section" id="cat-accessories">
            <h2>Cat Accessories</h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="cat_harness.jpg" alt="Cat Harness">
                    <h3>Cat Harness Belt</h3>
                    <p><span class="price">৳250.00</span> <span class="discount">৳350.00</span></p>
                </div>
                <div class="product-card">
                    <img src="fur_brush.jpg" alt="Pet Fur Brush">
                    <h3>Two-Way Reusable Pet Fur Remover Brush</h3>
                    <p><span class="price">৳599.00</span> <span class="discount">৳650.00</span></p>
                </div>
                <div class="product-card">
                    <img src="body_harness.jpg" alt="Cat Body Harness">
                    <h3>Cat Body Harness and Leash</h3>
                    <p><span class="price">৳300.00</span> - <span class="price">৳320.00</span></p>
                </div>
            </div>
        </section>

        <!-- Cat Toys Section -->
        <section class="shop-section" id="cat-toys">
            <h2>Cat Toys</h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="mouse_toy.jpg" alt="Mouse Toy">
                    <h3>Interactive Mouse Toy</h3>
                    <p><span class="price">৳150.00</span> <span class="discount">৳200.00</span></p>
                </div>
                <div class="product-card">
                    <img src="feather_wand.jpg" alt="Feather Wand">
                    <h3>Feather Wand Toy</h3>
                    <p><span class="price">৳180.00</span> <span class="discount">৳250.00</span></p>
                </div>
                <div class="product-card">
                    <img src="ball_toys.jpg" alt="Ball Toys">
                    <h3>Colorful Rolling Balls</h3>
                    <p><span class="price">৳100.00</span> <span class="discount">৳120.00</span></p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <img src="PETOPIA_logo1.png" alt="PETOPIA Logo" class="footer-logo">
                <p>PETOPIA is your one-stop online pet shop, providing quality food and accessories for your beloved pets. We deliver happiness to your doorstep!</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#cat-food">Cat Food</a></li>
                    <li><a href="#cat-accessories">Accessories</a></li>
                    <li><a href="#cat-toys">Toys</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <p><strong>Address:</strong> Gulshan Link Road, Dhaka - 1212</p>
                <p><strong>Email:</strong> <a href="mailto:petzonebd@gmail.com">petzonebd@gmail.com</a></p>
                <p><strong>Phone:</strong> <a href="tel:+8801941320355">+8801941-320355</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 PETOPIA. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>
