<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Medicine | PETOPIA</title>
    <link rel="stylesheet" href="medicinestyle.css">
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
                                <a href="Food.php">Food</a>
                                <a href="Accessories.php">Accessories</a>
                                <a href="toys.php" class="active">Toys</a>
                                <a href="medicine.php">Medicine</a>
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

    <!-- Cat Medicine Section -->
    <main>
        <div class="filters-section">
            <h3>Filter by Type</h3>
            <ul>
                <li><input type="checkbox" id="flea-tick" name="flea-tick"> Flea & Tick Treatment</li>
                <li><input type="checkbox" id="dewormer" name="dewormer"> Dewormer</li>
                <li><input type="checkbox" id="antibiotics" name="antibiotics"> Antibiotics</li>
            </ul>
            <h3>Price Range</h3>
            <input type="range" min="0" max="5000" value="2500">
        </div>

        <section class="product-grid">
            <h2>Cat Medicines</h2>
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
            <h2>Medicine Details</h2>
            </section>
    </main>


    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <img src="PETOPIA_logo1.png" alt="PETOPIA Logo" class="footer-logo">
                <p>PETOPIA is your trusted pet care shop, delivering happiness to your doorstep.</p>
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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const productGrid = document.querySelector(".product-grid");

            // Fetch medicines from the backend
            fetch("cat_medicines_backend.php?action=list")
                .then((response) => response.json())
                .then((medicines) => {
                    productGrid.innerHTML = ""; 
                    medicines.forEach((medicine) => {
                        const productCard = `
                            <div class="product-card" data-id="${medicine.medicine_id}">
                                <img src="${medicine.image_url}" alt="${medicine.name}">
                                <h3>${medicine.name}</h3>
                                <p>
                                    <span class="price">৳${medicine.price}</span>
                                    <span class="discount">৳${medicine.discount_price}</span>
                                </p>
                            </div>`;
                        productGrid.innerHTML += productCard;
                    });

                    // Add click event to each product card
                    document.querySelectorAll(".product-card").forEach((card) => {
                        card.addEventListener("click", function () {
                            const medicineId = this.getAttribute("data-id");
                            showMedicineDetails(medicineId);
                        });
                    });
                })
                .catch((error) => {
                    console.error("Error fetching medicines:", error);
                });
        });

        function showMedicineDetails(medicineId) {
            // Fetch details of the selected medicine
            fetch(`cat_medicines_backend.php?medicine_id=${medicineId}`)
                .then((response) => response.json())
                .then((medicine) => {
                    const detailsSection = document.querySelector(".details-section");
                    detailsSection.innerHTML = `
                        <h2>${medicine.name}</h2>
                        <img src="${medicine.image_url}" alt="${medicine.name}">
                        <p><strong>Type:</strong> ${medicine.type}</p>
                        <p><strong>Brand:</strong> ${medicine.brand}</p>
                        <p><strong>Description:</strong> ${medicine.description}</p>
                        <p><span class="price">৳${medicine.price}</span></p>
                        <button class="buy-button">Buy Now</button>
                    `;

                    detailsSection.scrollIntoView({ behavior: "smooth" });
                })
                .catch((error) => {
                    console.error("Error fetching medicine details:", error);
                });
        }

        // Add click event for "Buy Now" button
        document.addEventListener("click", function (e) {
            if (e.target.classList.contains("buy-button")) {
                alert("Thank you for your purchase!"); 
            }
        });

    </script>
</body>
</html>
</body>
</html>
