<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'seller') {
    header('Location: login.php'); // Redirect to login page if not a seller
    exit();
}

// Retrieve the seller's name from session or database
$seller_name = isset($_SESSION['username']) ? $_SESSION['username'] : 'Seller'; // Assuming 'username' is stored in the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Dashboard - Petopia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card:hover {
            transform: translateY(-5px);
            transition: all 0.2s ease-in-out;
        }
        .main-content {
            padding: 20px;
        }
        .navbar {
            background-color: #7C444F;
        }
        .navbar-brand {
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Petopia Seller</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-white" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Welcome, <?php echo htmlspecialchars($seller_name); ?>!</h1> <!-- Dynamically display the seller's username -->
        <div class="main-content">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Pets</h5>
                            <p class="card-text" id="total-pets">Loading...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Active Listings</h5>
                            <p class="card-text" id="active-listings">Loading...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Transactions</h5>
                            <p class="card-text" id="total-transactions">Loading...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Revenue</h5>
                            <p class="card-text" id="total-revenue">Loading...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        async function fetchSellerDashboardData() {
            try {
                const response = await fetch('get_seller_dashboard_data.php');
                if (!response.ok) throw new Error('Failed to fetch data');
                const data = await response.json();
                document.getElementById('total-pets').textContent = data.total_pets;
                document.getElementById('active-listings').textContent = data.active_listings;
                document.getElementById('total-transactions').textContent = data.total_transactions;
                document.getElementById('total-revenue').textContent = `$${data.total_revenue.toFixed(2)}`;
            } catch (error) {
                console.error('Error:', error);
            }
        }
        document.addEventListener('DOMContentLoaded', fetchSellerDashboardData);
    </script>
</body>
</html>
