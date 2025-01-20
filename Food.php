<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Food</title>
    <link rel="stylesheet" href="foodstyle.css">
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
                            <a href="Cat_Dog.html">Cat&Dog</a>
                            <div class="submenu-content">
                                <a href="Food.php">Food</a> <!-- Redirect to cat_food.html -->
                                <a href="Accessories.php">Accessories</a>
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

    <!-- Main Content -->
    <main>
        <div class="filters-section">
            <h3>Filter by Category</h3>
            <ul>
                <li><input type="checkbox" id="dry-food" name="dry-food"> Dry Food</li>
                <li><input type="checkbox" id="wet-food" name="wet-food"> Wet Food</li>
                <li><input type="checkbox" id="kitten-food" name="kitten-food"> Kitten Food</li>
            </ul>
            <h3>Price Range</h3>
            <input type="range" min="0" max="5000" value="2500">
        </div>

        <section class="product-grid">
            <h2>Cat Food</h2>
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
        </section>

        <!-- Pagination -->
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">&raquo;</a>
        </div>

        <!-- Cat Food Details -->
        <section class="details-section">
            <h2>Complete Cat Food Solution</h2>
            <p>
                At PETOPIA, we offer a wide range of cat food products tailored to meet your pet's nutritional needs. From premium dry foods to delicious wet meals, you'll find everything you need for your furry friend.
            </p>
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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const productGrid = document.querySelector(".product-grid");

    // Fetch products from the backend
    fetch("pet_foods_backend.php?action=list")
        .then((response) => response.json())
        .then((products) => {
            productGrid.innerHTML = ""; // Clear any existing content
            products.forEach((product) => {
                // Create product card dynamically
                const productCard = `
                <div class="product-card" data-id="${product.food_id}">
                    <img src="${product.image_url}" alt="${product.name}">
                    <h3>${product.name}</h3>
                    <p>
                        <span class="price">৳${product.price}</span>
                        <span class="discount">৳${product.discount_price}</span>
                    </p>
                </div>`;
                productGrid.innerHTML += productCard;
            });

            // Add click event to each product card
            document.querySelectorAll(".product-card").forEach((card) => {
                card.addEventListener("click", function () {
                    const foodId = this.getAttribute("data-id");
                    showProductDetails(foodId);
                });
            });
        })
        .catch((error) => {
            console.error("Error fetching products:", error);
        });
});

function showProductDetails(foodId) {
    // Fetch details of the selected product
    fetch(`pet_foods_backend.php?food_id=${foodId}`)
        .then((response) => response.json())
        .then((product) => {
            // Display product details in a modal or a section
            const detailsSection = document.querySelector(".details-section");
            detailsSection.innerHTML = `
                <h2>${product.name}</h2>
                <img src="${product.image_url}" alt="${product.name}">
                <p><strong>Brand:</strong> ${product.brand}</p>
                <p><strong>Type:</strong> ${product.type}</p>
                <p><strong>Nutrition Details:</strong> ${product.nutrition_details}</p>
                <p><strong>Recommended For:</strong> ${product.recommended_for}</p>
                <p><span class="price">৳${product.price}</span></p>
                <button class="buy-button">Buy Now</button>
            `;

            // Scroll to the details section
            detailsSection.scrollIntoView({ behavior: "smooth" });
        })
        .catch((error) => {
            console.error("Error fetching product details:", error);
        });
}
document.addEventListener("click", function (e) {
    if (e.target.classList.contains("buy-button")) {
        alert("Thank you for your purchase!"); // Simulate purchase
    }
});



    </script>
</body>
</html>
