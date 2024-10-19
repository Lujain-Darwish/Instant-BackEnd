<?php
include '../../shared/header.php';
include '../../shared/db_config.php';

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id=$product_id";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $sql = "UPDATE products SET name='$name', description='$description', price='$price', stock='$stock' WHERE id=$product_id";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Product updated successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}
?>

<div class="container mt-5">
    <h2 class="mb-4">Update Product</h2>
    <form method="POST">
        <div class="form-group mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $product['name']; ?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required><?php echo $product['description']; ?></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="<?php echo $product['price']; ?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="<?php echo $product['stock']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
        <a href="read.php" class="btn btn-secondary">Back to Products</a>
    </form>
</div>

<?php
include '../../shared/footer.php';
?>
