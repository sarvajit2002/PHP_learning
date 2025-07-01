<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Hello, World!</h1>

    <h2>Product List with Prices:</h2>
    <ul>
        <?php foreach ($products as $product): ?>
            <li><?= $product->getName() ?> - ₹<?= $product->getPrice() ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Total Price Calculation:</h2>
    <?php
        function calculateTotalPrice($price1, $price2) {
            return $price1 + $price2;
        }

        $total = calculateTotalPrice(150, 200);
        echo "Total Price: ₹" . $total;
    ?>
</body>
</html>
