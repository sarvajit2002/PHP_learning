<?php
require 'db.php';

$products = $pdo->query("
    SELECT products.*, categories.name AS category_name
    FROM products
    LEFT JOIN categories ON products.category_id = categories.id
")->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Product List</h2>
<a href="add.php">Add New Product</a>
<table border="1" cellpadding="8">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($products as $prod): ?>
        <tr>
            <td><?= htmlspecialchars($prod['name']) ?></td>
            <td><?= $prod['price'] ?></td>
            <td><?= htmlspecialchars($prod['category_name']) ?></td>
            <td>
                <a href="edit.php?id=<?= $prod['id'] ?>">Edit</a> |
                <a href="delete.php?id=<?= $prod['id'] ?>" onclick="return confirm('Delete this product?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
