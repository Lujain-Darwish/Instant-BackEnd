<?php
include '../../shared/header.php';
include '../../shared/db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $sql = "INSERT INTO products (name, description, price, stock) VALUES ('$name', '$description', '$price', '$stock')";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Product created successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}
?>

<div class="container mt-5">
    <h2 class="mb-4">Create New Product</h2>
    <form method="POST">
        <div class="form-group mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name" required>
        </div>
        <div class="form-group mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description" required></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Enter Price" required>
        </div>
        <div class="form-group mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" placeholder="Enter Stock Quantity" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Product</button>
        <a href="read.php" class="btn btn-secondary">View All Products</a>
    </form>
</div>

<?php
include '../../shared/footer.php';
?>
