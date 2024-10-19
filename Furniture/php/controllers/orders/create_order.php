<?php
include '../../shared/header.php';
include '../../shared/db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_id = $_POST['customer_id'];
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $total_price = $_POST['total_price'];

    $sql = "INSERT INTO orders (customer_id, product_id, quantity, total_price) VALUES ('$customer_id', '$product_id', '$quantity', '$total_price')";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Order created successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}
?>

<div class="container mt-5">
    <h2 class="mb-4">Create New Order</h2>
    <form method="POST">
        <div class="form-group mb-3">
            <label for="customer_id" class="form-label">Customer ID</label>
            <input type="number" class="form-control" id="customer_id" name="customer_id" placeholder="Enter Customer ID" required>
        </div>
        <div class="form-group mb-3">
            <label for="product_id" class="form-label">Product ID</label>
            <input type="number" class="form-control" id="product_id" name="product_id" placeholder="Enter Product ID" required>
        </div>
        <div class="form-group mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" required>
        </div>
        <div class="form-group mb-3">
            <label for="total_price" class="form-label">Total Price</label>
            <input type="number" step="0.01" class="form-control" id="total_price" name="total_price" placeholder="Enter Total Price" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Order</button>
        <a href="read.php" class="btn btn-secondary">View All Orders</a>
    </form>
</div>

<?php
include '../../shared/footer.php';
?>
