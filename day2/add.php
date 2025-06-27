<?php
require './db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO products (name, price, category_id) VALUES (?, ?, ?)");
    $stmt->execute([$_POST['name'], $_POST['price'], $_POST['category_id']]);
    header("Location: index.php");
    exit;
}
$categories = $pdo->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Add Product</h2>
<form method="post">
    Name: <input type="text" name="name" required><br>
    Price: <input type="number" name="price" step="0.01" required><br>
    Category:
    <select name="category_id">
        <?php foreach ($categories as $cat): ?>
            <option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <button type="submit">Add Product</button>
</form>
<a href="index.php">Back to Home</a>