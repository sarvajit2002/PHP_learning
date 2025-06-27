<?php
require 'db.php';

$id = $_GET['id'];
$product = $pdo->prepare("SELECT * FROM products WHERE id = ?");
$product->execute([$id]);
$product = $product->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("UPDATE products SET name=?, price=?, category_id=? WHERE id=?");
    $stmt->execute([$_POST['name'], $_POST['price'], $_POST['category_id'], $id]);
    header("Location: index.php");
    exit;
}

$categories = $pdo->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Edit Product</h2>
<form method="post">
    Name: <input type="text" name="name" value="<?= htmlspecialchars($product['name']) ?>"><br>
    Price: <input type="number" name="price" step="0.01" value="<?= $product['price'] ?>"><br>
    Category:
    <select name="category_id">
        <?php foreach ($categories as $cat): ?>
            <option value="<?= $cat['id'] ?>" <?= $product['category_id'] == $cat['id'] ? 'selected' : '' ?>>
                <?= $cat['name'] ?>
            </option>
        <?php endforeach; ?>
    </select><br>
    <button type="submit">Update Product</button>
</form>
<a href="index.php">Back to Home</a>
