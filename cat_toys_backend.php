<?php
include 'database.php';

// Add a new cat toy
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'add') {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $brand = $_POST['brand'];
    $image_url = $_POST['image_url'];
    $description = $_POST['description'];
    $price = floatval($_POST['price']);
    $discount_price = isset($_POST['discount_price']) ? floatval($_POST['discount_price']) : null;

    $sql = "INSERT INTO cat_toys (name, type, brand, image_url, description, price, discount_price) 
             VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssddd", $name, $type, $brand, $image_url, $description, $price, $discount_price);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Cat toy added successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to add cat toy"]);
    }
}

// Fetch all cat toys
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'list') {
    $sql = "SELECT toy_id, name, type, brand, image_url, description, price, discount_price FROM cat_toys";
    $result = $conn->query($sql);

    $toys = [];
    while ($row = $result->fetch_assoc()) {
        $toys[] = $row;
    }
    echo json_encode($toys);
}

// Fetch details of a single cat toy
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['toy_id'])) {
    $toy_id = intval($_GET['toy_id']);
    $sql = "SELECT toy_id, name, type, brand, image_url, description, price, discount_price FROM cat_toys WHERE toy_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $toy_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode($result->fetch_assoc());
    } else {
        echo json_encode(["status" => "error", "message" => "Cat toy not found"]);
    }
}

?>