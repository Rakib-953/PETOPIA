<?php
include 'database.php';

// Add a new cat medicine
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'add') {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $brand = $_POST['brand'];
    $image_url = $_POST['image_url'];
    $description = $_POST['description'];
    $price = floatval($_POST['price']);
    $discount_price = isset($_POST['discount_price']) ? floatval($_POST['discount_price']) : null;

    $sql = "INSERT INTO cat_medicines (name, type, brand, image_url, description, price, discount_price) 
             VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssddd", $name, $type, $brand, $image_url, $description, $price, $discount_price);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Cat medicine added successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to add cat medicine"]);
    }
}

// Fetch all cat medicines
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'list') {
    $sql = "SELECT medicine_id, name, type, brand, image_url, description, price, discount_price FROM cat_medicines";
    $result = $conn->query($sql);

    $medicines = [];
    while ($row = $result->fetch_assoc()) {
        $medicines[] = $row;
    }
    echo json_encode($medicines);
}

// Fetch details of a single cat medicine
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['medicine_id'])) {
    $medicine_id = intval($_GET['medicine_id']);
    $sql = "SELECT medicine_id, name, type, brand, image_url, description, price, discount_price FROM cat_medicines WHERE medicine_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $medicine_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode($result->fetch_assoc());
    } else {
        echo json_encode(["status" => "error", "message" => "Cat medicine not found"]);
    }
}

?>