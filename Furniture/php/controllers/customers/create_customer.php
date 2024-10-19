<?php
include '../../shared/header.php';
include '../../shared/db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO customers (name, email, phone) VALUES ('$name', '$email', '$phone')";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Customer created successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}
?>

<div class="container mt-5">
    <h2 class="mb-4">Create New Customer</h2>
    <form method="POST">
        <div class="form-group mb-3">
            <label for="name" class="form-label">Customer Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Customer Name" required>
        </div>
        <div class="form-group mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
        </div>
        <div class="form-group mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Customer</button>
        <a href="read.php" class="btn btn-secondary">View All Customers</a>
    </form>
</div>

<?php
include '../../shared/footer.php';
?>
