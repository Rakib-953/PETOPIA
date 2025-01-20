<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETOPIA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="top-section">
            <div class="logo">
                <img src="images/PETOPIA_logo1.png" alt="PETOPIA Logo" class="logo-image">
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Search Pet Essentials">
                <span class="search-icon">&#128269;</span>
            </div>
        </div>
        <div class="bottom-section">
            <div class="nav-links">
                <a href="#home" class="active">Home</a>

                <div class="dropdown">
                    <a href="#" class="services-link">Shop</a>
                    <div class="dropdown-content">
                        <div class="dropdown-submenu">
                            <a href="Cat_Dog.php">Cat&Dog</a>
                            
                            <a href="Food.php">Food</a>
                            
                            <a href="Accessories.php">Accessories</a>
                           <a href="toys.php">Toys</a>
                           <a href="medicine.php">Medicine</a>

                             </div>
                    </div>
                </div>


                <a href="#reviews">Reviews</a>
                <a href="#about">About</a>
                <div class="dropdown">
                    <a href="#" class="services-link">Services</a>
                    <div class="dropdown-content">
                        <div class="dropdown-submenu">
                            <a href="services.html">Buy&Sell</a>
                            
                            <a href="services.html">Adoption</a>
                            
                            <a href="services.html">Health Checkup</a>
                           <a href="services.html">Grooming</a>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="actions">

                <a href="login.php" id="myAccountBtn">My Account</a>
                <a href="rewards.html">Rewards</a>
                <a href="cart.html">Cart</a>
                <a href="contact.html" class="contact">&#128222; Contact</a>
            </div>
        </div>
    </div>



    <!-- Home Section -->
<div class="content home-section" id="home">
    <div class="home-content">
        <h1>Welcome to PETOPIA</h1>
        <p>Your one-stop shop for all pet essentials and grooming services.</p>
        <button class="contact-button" onclick="window.location.href='contact.html'">Contact Us</button>
    </div>
    <div class="home-image">
        <img src="images/photo1.png" alt="Pet Image">
    </div>
</div>




<!-- Shop Section -->
<div class="shop-section" id="shop-section">
    <h2>Category</h2>
    <div class="categories">
        <div class="category-card" id="food">
            <img src="images/photo3.jpg" alt="Food">
            <a href="shop.html" class="shop-btn">Food</a>
        </div>

        <div class="category-card" id="Accessories">
            <img src="images/photo4.jpg" alt="Accessories">
            <a href="shop.html" class="shop-btn">Accessories</a>
        </div>

        <div class="category-card" id="toys">
            <img src="images/photo5.jpg" alt="Toys">
          <a href="shop.html" class="shop-btn">Toys</a>
        </div>

        <div class="category-card" id="medicine">
            <img src="images/photo6.jpg" alt="Medicine">
          <a href="shop.html" class="shop-btn"> Medicine</a>
        </div>
    </div>
</div>




   <!-- Review Section -->
<div class="review-section" id="reviews">
    <h2>What Our Customers Say</h2>
    <div class="review-cards-wrapper">
        <div class="review-cards">
          
            <div class="review-card">
                <p><span class="quote">“</span>Best grooming service ever! My dog loves it here.<span class="quote">”</span></p>
                <div class="review-details">
                    <img src="https://via.placeholder.com/50" alt="Customer Image" class="review-image">
                    <div>
                        <h4>John Doe</h4>
                        <div class="stars">★★★★★</div>
                    </div>
                </div>
            </div>
          
          
          
            <div class="review-card">
                <p><span class="quote">“</span>Amazing products for my cat. Highly recommend!<span class="quote">”</span></p>
                <div class="review-details">
                    <img src="https://via.placeholder.com/50" alt="Customer Image" class="review-image">
                    <div>
                        <h4>Jane Smith</h4>
                        <div class="stars">★★★★★</div>
                    </div>
                </div>
            </div>
          
          
          
            <div class="review-card">
                <p><span class="quote">“</span>Great customer service and quick delivery.<span class="quote">”</span></p>
                <div class="review-details">
                    <img src="https://via.placeholder.com/50" alt="Customer Image" class="review-image">
                    <div>
                        <h4>Emma Brown</h4>
                        <div class="stars">★★★★★</div>
                    </div>
                </div>
            </div>
          
          
           
          <div class="review-card">
                <p><span class="quote">“</span>Excellent service, highly recommended.<span class="quote">”</span></p>
                <div class="review-details">
                    <img src="https://via.placeholder.com/50" alt="Customer Image" class="review-image">
                    <div>
                        <h4>Mark White</h4>
                        <div class="stars">★★★★★</div>
                    </div>
                </div>
            </div>
          
          
            <div class="review-card">
                <p><span class="quote">“</span>My dog loved the grooming experience!<span class="quote">”</span></p>
                <div class="review-details">
                    <img src="https://via.placeholder.com/50" alt="Customer Image" class="review-image">
                    <div>
                        <h4>Sarah Green</h4>
                        <div class="stars">★★★★★</div>
                    </div>
                </div>
            </div>
          
          
            <div class="review-card">
                <p><span class="quote">“</span>Fast delivery and great quality products.<span class="quote">”</span></p>
                <div class="review-details">
                    <img src="https://via.placeholder.com/50" alt="Customer Image" class="review-image">
                    <div>
                        <h4>James Lee</h4>
                        <div class="stars">★★★★★</div>
                    </div>
                </div>
            </div>
          
          
            <div class="review-card">
                <p><span class="quote">“</span>Top-notch customer service, highly impressed.<span class="quote">”</span></p>
                <div class="review-details">
                    <img src="https://via.placeholder.com/50" alt="Customer Image" class="review-image">
                    <div>
                        <h4>Linda White</h4>
                        <div class="stars">★★★★★</div>
                    </div>
                </div>
            </div>
          
          
            <div class="review-card">
                <p><span class="quote">“</span>Will definitely order again. Highly recommend.<span class="quote">”</span></p>
                <div class="review-details">
                    <img src="https://via.placeholder.com/50" alt="Customer Image" class="review-image">
                    <div>
                        <h4>Oliver Gray</h4>
                        <div class="stars">★★★★★</div>
                    </div>
                </div>
            </div> 
          
          
        </div>
    </div>
</div>

    <!-- About Section -->
  
    <section class="about-section">
    <!-- Left Side: Image -->
    <img src="images/photo2.png" alt="About Us Image">
    
    <!-- Right Side: Text Content -->
    <div class="about-content">
        <h2>About PETOPIA</h2>
        <p>
            At PETOPIA, we are passionate about providing top-quality products and services for your beloved pets. 
            Whether it is nutritious food, fun toys, grooming services, or expert advice, we are here to ensure your furry friends are happy, healthy, and loved.
        </p>
        <p>
            Our mission is to create a haven for pet owners, offering everything they need in one convenient place. 
            With a dedicated team and a love for animals, PETOPIA is your trusted partner in pet care.
        </p>
    </div>

</section>
  
  
  <!-- Services Section -->
<div class="services-section" id="services">
    <h2>Our Services</h2>
    <div class="services-container">
        <!-- Service Card 1 -->
        <div class="service-card">
            <img src="images/photo7.png" alt="Buy & Sell Icon" class="service-icon">
            <h3>Buy & Sell</h3>
            <p>Connect with buyers and sellers of pets and pet products easily and safely.</p>
        </div>
        
        <!-- Service Card 2 -->
        <div class="service-card">
            <img src="images/photo8.png" alt="Adoption Icon" class="service-icon">
            <h3>Adoption</h3>
            <p>Find loving homes for pets or adopt a furry friend into your family.</p>
        </div>
        
        <!-- Service Card 3 -->
        <div class="service-card">
            <img src="images/photo9.png" alt="Health Checkup Icon" class="service-icon">
            <h3>Health Checkup</h3>
            <p>Ensure your pets are in the best health with our trusted vet services.</p>
        </div>
        
        <!-- Service Card 4 -->
        <div class="service-card">
            <img src="images/photo10.png" alt="Grooming Icon" class="service-icon">
            <h3>Grooming</h3>
            <p>Professional grooming services to keep your pets looking and feeling great.</p>
        </div>
    </div>
</div>



    <!-- Footer -->
<footer class="footer">
    <div class="footer-container">
        <!-- Logo Section -->
        <div class="footer-section logo-section">
            <img src="images/PETOPIA_logo1.png" alt="PETOPIA Logo" class="footer-logo">
            <p>PETOPIA is your one-stop online pet shop, providing quality food and accessories for your beloved pets. We deliver happiness to your doorstep!</p>
        </div>

        <!-- Categories Section -->
        <div class="footer-section category">
            <h3>Categories</h3>
            <ul>
                <li><a href="cat_dog.html">Food</a></li>
                <li><a href="cat_dog.html">Accessories</a></li>
                <li><a href="cat_dog.html">Medicine</a></li>
            </ul>
        </div>

        <!-- Quick Links Section -->
        <div class="footer-section quick-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>

        <!-- Contact Section -->
        <div class="footer-section contact">
            <h3>Contact</h3>
            <p><strong>Address:</strong> 53/6 Mirpur pallabipolashi, Dhaka - 1212</p>
            <p><strong>Email:</strong> <a href="mailto: peetopia123bd@gmail.com">petopia123bd@gmail.com</a></p>
            <p><strong>Phone:</strong> <a href="tel:+8801912345674">+8801912-345674</a></p>
        </div>

        <!-- Social Media Links -->
        <div class="footer-section social-media">
            <a href="#"><img src="images/p1.png" alt="Facebook"></a>
            <a href="#"><img src="images/p2.png" alt="Instagram"></a>
            <a href="#"><img src="images/p4.png" alt="WhatsApp"></a>
            <a href="#"><img src="images/p3.png" alt="Twitter"></a>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <p>&copy; 2025 PETOPIA. All Rights Reserved.</p>
    </div>
</footer>



</body>
</html>




