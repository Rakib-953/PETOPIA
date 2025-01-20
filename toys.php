<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Toys - PETOPIA</title>
    <link rel="stylesheet" href="toysstyle.css">
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
                <a href="#home">Home</a>
                <div class="dropdown">
                    <a href="#" class="shop-link active">Shop</a>
                    <div class="dropdown-content">
                        <div class="dropdown-submenu">
                            <a href="Cat_Dog.html">Cat&Dog</a>
                            <div class="submenu-content">
                                <a href="#cat-food">Food</a>
                                <a href="#cat-accessories">Accessories</a>
                                <a href="cat-toys.html" class="active">Toys</a>
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

    <!-- Toys Section -->
    <main>
        <section class="shop-section">
            <h1>Cat Toy Price in BD</h1>
            <p>Explore a wide range of cat toys at PETOPIA. Find the best deals and make your cats happy!</p>
            <div class="filter-section">
                <h3>Filter by Price</h3>
                <ul>
                    <li><a href="#">৳0 - ৳100</a></li>
                    <li><a href="#">৳101 - ৳500</a></li>
                    <li><a href="#">Above ৳500</a></li>
                </ul>

                <h3>Categories</h3>
                <ul>
                    <li><a href="#">Cat Wand</a></li>
                    <li><a href="#">Cat Ball</a></li>
                    <li><a href="#">Interactive Toys</a></li>
                    <li><a href="#">Cat Chew Toys</a></li>
                </ul>
            </div>

            <div class="product-grid">
                <!-- Example Product Cards -->
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
                <div class="product-card">
                    <img src="spring_toy.jpg" alt="Spring Toy">
                    <h3>Spring Cat Toy</h3>
                    <p><span class="price">৳90.00</span> <span class="discount">৳150.00</span></p>
                </div>
            </div>
        </section>
    </main>

    <!-- Pagination Section -->
    <div class="pagination">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">Next</a>
    </div>

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
                    <li><a href="cat-food.html">Cat Food</a></li>
                    <li><a href="cat-accessories.html">Accessories</a></li>
                    <li><a href="cat-toys.html">Toys</a></li>
                    <li><a href="reviews.html">Reviews</a></li>
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
