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

    <!-- Toys Section -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cat Toys</title>
        <link rel="stylesheet" href="foodstyle.css">
    </head>

    <body>

        <main>
            <div class="filters-section">
                <h3>Filter by Type</h3>
                <ul>
                    <li><input type="checkbox" id="mouse-toys" name="mouse-toys"> Mouse Toys</li>
                    <li><input type="checkbox" id="feather-wands" name="feather-wands"> Feather Wands</li>
                    <li><input type="checkbox" id="puzzle-toys" name="puzzle-toys"> Puzzle Toys</li>
                </ul>
                <h3>Price Range</h3>
                <input type="range" min="0" max="5000" value="2500">
            </div>

            <section class="product-grid">
                <h2>Cat Toys</h2>
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
                <h2>Toy Details</h2>
            </section>

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

    </main>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const productGrid = document.querySelector(".product-grid");

            // Fetch toys from the backend
            fetch("cat_toys_backend.php?action=list")
                .then((response) => response.json())
                .then((toys) => {
                    productGrid.innerHTML = "";
                    toys.forEach((toy) => {
                        const productCard = `
                            <div class="product-card" data-id="${toy.toy_id}">
                                <img src="${toy.image_url}" alt="${toy.name}">
                                <h3>${toy.name}</h3>
                                <p>
                                    <span class="price">৳${toy.price}</span>
                                    <span class="discount">৳${toy.discount_price}</span>
                                </p>
                            </div>`;
                        productGrid.innerHTML += productCard;
                    });

                    // Add click event to each product card
                    document.querySelectorAll(".product-card").forEach((card) => {
                        card.addEventListener("click", function() {
                            const toyId = this.getAttribute("data-id");
                            showToyDetails(toyId);
                        });
                    });
                })
                .catch((error) => {
                    console.error("Error fetching toys:", error);
                });
        });

        function showToyDetails(toyId) {
            // Fetch details of the selected toy
            fetch(`cat_toys_backend.php?toy_id=${toyId}`)
                .then((response) => response.json())
                .then((toy) => {
                    const detailsSection = document.querySelector(".details-section");
                    detailsSection.innerHTML = `
                        <h2>${toy.name}</h2>
                        <img src="${toy.image_url}" alt="${toy.name}">
                        <p><strong>Type:</strong> ${toy.type}</p>
                        <p><strong>Brand:</strong> ${toy.brand}</p>
                        <p><strong>Description:</strong> ${toy.description}</p>
                        <p><span class="price">৳${toy.price}</span></p>
                        <button class="buy-button">Buy Now</button>
                    `;

                    detailsSection.scrollIntoView({
                        behavior: "smooth"
                    });
                })
                .catch((error) => {
                    console.error("Error fetching toy details:", error);
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


