<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Accessories</title>
    <link rel="stylesheet" href="accesssstyle.css">
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
                <a href="index.html">Home</a>
                <div class="dropdown">
                    <a href="#" class="shop-link">Shop</a>
                    <div class="dropdown-content">
                        <div class="dropdown-submenu">
                            <a href="Cat_Dog.html">Cat&Dog</a> 
                            <div class="submenu-content">
                                <a href="cat-food.html">Food</a>
                                <a href="cat-accessories.html" class="active">Accessories</a>
                                <a href="cat-toys.html">Toys</a>
                                <a href="cat-medicine.html">Medicine</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="reviews.html">Reviews</a>
                <a href="about.html">About</a>
                <div class="dropdown">
                    <a href="#" class="services-link">Services</a>
                    <div class="dropdown-content">
                        <a href="services.html">Buy&Sell</a>
                        <a href="adoption.html">Adoption</a>
                        <a href="health-checkup.html">Health Checkup</a>
                        <a href="grooming.html">Grooming</a>
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

    <!-- Accessories Section -->
    <main>
        <div class="container">
            <!-- Sidebar -->
            <aside class="sidebar">
                <h2>Filter by Category</h2>
                <label><input type="checkbox" value="Harnesses"> Harnesses</label>
                <label><input type="checkbox" value="Grooming Tools"> Grooming Tools</label>
                <label><input type="checkbox" value="Scratching"> Scratching</label>
                <label><input type="checkbox" value="Feeding Accessories"> Feeding Accessories</label>
                
                <h2>Price Range</h2>
                <input type="range" min="0" max="1000" value="500" class="price-range">
                <p>৳0 - ৳1000</p>
            </aside>

            <!-- Product Section -->
            <section class="shop-section">
                <h1>Cat Accessories</h1>
                <p>Find the best accessories for your cat, from harnesses to grooming tools, and more.</p>

                <!-- Product Grid -->
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

                    <div class="product-card">
                        <img src="nail_clipper.jpg" alt="Cat Nail Clipper">
                        <h3>Cat Nail Clipper</h3>
                        <p><span class="price">৳150.00</span> <span class="discount">৳200.00</span></p>
                    </div>

                    <div class="product-card">
                        <img src="scratch_board.jpg" alt="Cat Scratcher Board">
                        <h3>Cat Scratcher Board</h3>
                        <p><span class="price">৳500.00</span> <span class="discount">৳650.00</span></p>
                    </div>

                    <div class="product-card">
                        <img src="feeder_bowl.jpg" alt="Cat Feeder Bowl">
                        <h3>Cat Feeder Bowl</h3>
                        <p><span class="price">৳200.00</span> <span class="discount">৳300.00</span></p>
                    </div>
                </div>
            </section>
        </div>
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
</body>
</html>
