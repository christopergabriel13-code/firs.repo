<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Produk di Marketplace</title>
</head>
<body>
    <form action="process_product.php" method="post">
        <label for="product_name">Nama Produks:</label>
        <input type="text" id="product_name" name="product_name" required>

        <label for="price">Harga:</label>
        <input type="number" id="price" name="price" required>

        <label for="quantity">Stok:</label>
        <input type="number" id="quantity" name="quantity" required>

        <input type="submit" value="Tambah Produk">
    </form>
</body>
</html>