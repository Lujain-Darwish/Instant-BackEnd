<?php
include '../../shared/header.php';
include '../../shared/db_config.php';

if (isset($_GET['id'])) {
    $order_id = $_GET['id'];
    $sql = "SELECT * FROM orders WHERE id=$order_id";
    $result = $conn->query($sql);
    $order = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_id = $_POST['customer_id'];
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $total_price = $_POST['total_price'];

    $sql = "UPDATE orders SET customer_id='$customer_id', product_id='$product_id', quantity='$quantity', total_price='$total_price' WHERE id=$order_id";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Order updated successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}
?>

<div class="container mt-5">
    <h2 class="mb-4">Update Order</h2>
    <form method="POST">
        <div class="form-group mb-3">
            <label for="customer_id" class="form-label">Customer ID</label>
            <input type="number" class="form-control" id="customer_id" name="customer_id" value="<?php echo $order['customer_id']; ?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="product_id" class="form-label">Product ID</label>
            <input type="number" class="form-control" id="product_id" name="product_id" value="<?php echo $order['product_id']; ?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="<?php echo $order['quantity']; ?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="total_price" class="form-label">Total Price</label>
            <input type="number" step="0.01" class="form-control" id="total_price" name="total_price" value="<?php echo $order['total_price']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Order</button>
        <a href="read.php" class="btn btn-secondary">Back to Orders</a>
    </form>
</div>

<?php
include '../../shared/footer.php';
?>
