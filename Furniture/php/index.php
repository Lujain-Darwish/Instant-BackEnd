<?php
// Include the database configuration file
include '/furniture/shared/db_config.php';
// Include the header
include '/furniture/shared/header.php';
?>

<!-- Main Content -->
<div class="container">
    <h1>Welcome to Our Furniture Store</h1>
    <p>Your one-stop shop for quality furniture.</p>
    <p>Browse our collections and find the perfect pieces for your home.</p>
    
    <!-- Admin Section -->
    <h2>Admin Dashboard</h2>
    <div class="admin-sections">
        <div class="admin-section">
            <h3>Manage Customers</h3>
            <a href="php/controllers/customers/admin_customers.php" class="btn btn-primary">Go to Customers CRUD</a>
        </div>
        <div class="admin-section">
            <h3>Manage Products</h3>
            <a href="php/controllers/products/admin_products.php" class="btn btn-primary">Go to Products CRUD</a>
        </div>
        <div class="admin-section">
            <h3>Manage Orders</h3>
            <a href="php/controllers/orders/admin_orders.php" class="btn btn-primary">Go to Orders CRUD</a>
        </div>
    </div>
</div>

<?php
// Include the footer
include '/furniture/shared/footer.php';
?>
