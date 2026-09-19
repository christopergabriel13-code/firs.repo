
<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil nilai dari formulir
    $product_Name = $_POST["product_name"];
    $price = $_POST["price"];
    $stock = $_POST["STOCK"];
    $id = $_POST["id"];
    $category_id = $_POST["category_id"]
    // Simpan data produk ke dalam database
    $sql = "INSERT INTO products (product_name, price, quantity) 
    VALUES ('$productName', '$price', '$quantity')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>