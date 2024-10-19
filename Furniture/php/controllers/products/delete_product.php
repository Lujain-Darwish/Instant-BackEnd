<?php
include '../../shared/header.php';
include '../../shared/db_config.php';

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id=$product_id";
    
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Product deleted successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error deleting product: " . $conn->error . "</div>";
    }
}
?>

<div class="container mt-5">
    <h2>Delete Product</h2>
    <p>The product has been deleted successfully.</p>

    <a href="read.php" class="btn btn-secondary">Back to Products</a>
</div>

<?php
include '../../shared/footer.php';
?>
