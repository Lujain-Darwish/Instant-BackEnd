<?php
include '../../shared/header.php';
include '../../shared/db_config.php';

if (isset($_GET['id'])) {
    $order_id = $_GET['id'];
    $sql = "DELETE FROM orders WHERE id=$order_id";
    
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Order deleted successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error deleting order: " . $conn->error . "</div>";
    }
}
?>

<div class="container mt-5">
    <h2>Delete Order</h2>
    <p>The order has been deleted successfully.</p>

    <a href="read.php" class="btn btn-secondary">Back to Orders</a>
</div>

<?php
include '../../shared/footer.php';
?>
