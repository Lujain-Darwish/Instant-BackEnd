<?php
include '../../shared/header.php';
include '../../shared/db_config.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<div class="container mt-5">
    <h2 class="mb-4">Product List</h2>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['stock']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Update</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <a href="create.php" class="btn btn-primary mt-3">Create New Product</a>
</div>

<?php
include '../../shared/footer.php';
?>
