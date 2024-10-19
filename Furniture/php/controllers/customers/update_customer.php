<?php
include '../../shared/header.php';
include '../../shared/db_config.php';

if (isset($_GET['id'])) {
    $customer_id = $_GET['id'];
    $sql = "SELECT * FROM customers WHERE id=$customer_id";
    $result = $conn->query($sql);
    $customer = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE customers SET name='$name', email='$email', phone='$phone' WHERE id=$customer_id";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Customer updated successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}
?>

<div class="container mt-5">
    <h2 class="mb-4">Update Customer</h2>
    <form method="POST">
        <div class="form-group mb-3">
            <label for="name" class="form-label">Customer Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $customer['name']; ?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $customer['email']; ?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $customer['phone']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Customer</button>
        <a href="read.php" class="btn btn-secondary">Back to Customers</a>
    </form>
</div>

<?php
include '../../shared/footer.php';
?>
