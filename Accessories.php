<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Accessories</title>
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
                                <a href="toys.php">Toys</a>
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
    <main>
        <div class="filters-section">
            <h3>Filter by Type</h3>
            <ul>
                <li><input type="checkbox" id="collars" name="collars"> Collars</li>
                <li><input type="checkbox" id="leashes" name="leashes"> Leashes</li>
                <li><input type="checkbox" id="beds" name="beds"> Beds</li>
                <li><input type="checkbox" id="toys" name="toys"> Toys</li>
            </ul>
            <h3>Price Range</h3>
            <input type="range" min="0" max="5000" value="2500">
        </div>

        <section class="product-grid">
            <h2>Cat Accessories</h2>
        </section>

        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">&raquo;</a>
        </div>

        <section class="details-section">
            <h2>Accessory Details</h2>
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
        document.addEventListener("DOMContentLoaded", function() {
            const productGrid = document.querySelector(".product-grid");

            // Fetch accessories from the backend
            fetch("cat_accessories_backend.php?action=list")
                .then((response) => response.json())
                .then((accessories) => {
                    productGrid.innerHTML = "";
                    accessories.forEach((accessory) => {
                        const productCard = `
                            <div class="product-card" data-id="${accessory.accessories_id}">
                                <img src="${accessory.image_url}" alt="${accessory.name}">
                                <h3>${accessory.name}</h3>
                                <p>
                                    <span class="price">৳${accessory.price}</span>
                                    <span class="discount">৳${accessory.discount_price}</span>
                                </p>
                            </div>`;
                        productGrid.innerHTML += productCard;
                    });

                    // Add click event to each product card
                    document.querySelectorAll(".product-card").forEach((card) => {
                        card.addEventListener("click", function() {
                            const accessoryId = this.getAttribute("data-id");
                            showAccessoryDetails(accessoryId);
                        });
                    });
                })
                .catch((error) => {
                    console.error("Error fetching accessories:", error);
                });
        });

        function showAccessoryDetails(accessoryId) {
            // Fetch details of the selected accessory
            fetch(`cat_accessories_backend.php?accessory_id=${accessoryId}`)
                .then((response) => response.json())
                .then((accessory) => {
                    const detailsSection = document.querySelector(".details-section");
                    detailsSection.innerHTML = `
                        <h2>${accessory.name}</h2>
                        <img src="${accessory.image_url}" alt="${accessory.name}">
                        <p><strong>Type:</strong> ${accessory.type}</p>
                        <p><strong>Brand:</strong> ${accessory.brand}</p>
                        <p><span class="price">৳${accessory.price}</span></p>
                        <button class="buy-button">Buy Now</button>
                    `;

                    detailsSection.scrollIntoView({
                        behavior: "smooth"
                    });
                })
                .catch((error) => {
                    console.error("Error fetching accessory details:", error);
                });
        }

        // Add click event for "Buy Now" button
        document.addEventListener("click", function(e) {
            if (e.target.classList.contains("buy-button")) {
                alert("Thank you for your purchase!");
            }
        });
    </script>
</body>

</html>