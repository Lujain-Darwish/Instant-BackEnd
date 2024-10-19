<?php
include '../../shared/header.php';
include '../../shared/db_config.php';

if (isset($_GET['id'])) {
    $customer_id = $_GET['id'];
    $sql = "DELETE FROM customers WHERE id=$customer_id";
    
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Customer deleted successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error deleting customer: " . $conn->error . "</div>";
    }
}
?>

<div class="container mt-5">
    <h2>Delete Customer</h2>
    <p>The customer has been deleted successfully.</p>

    <a href="read.php" class="btn btn-secondary">Back to Customers</a>
</div>

<?php
include '../../shared/footer.php';
?>
