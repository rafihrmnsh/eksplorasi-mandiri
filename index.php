<?php
session_start();
$products = [
    ["id" => 1, "name" => "Robot Sapu", "description" => "ini adalah robot sapu otomatis", "price" => 200000, "image" => "https://cdn.eraspace.com/pub/media/wysiwyg/artikel/Tahun_2022/September/RobotSapu-1.jpg"]
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sederhana</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>Selamat Datang di Toko Sederhana</h1>
</header>


<div class="container">
    <h2>Produk Kami</h2>
    <?php foreach ($products as $product): ?>
        <div class="product">
            <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
            <h2><?= $product['name'] ?></h2>
            <p><?= $product['description'] ?></p>
            <div class="price">Rp <?= number_format($product['price'], 0, ',', '.') ?></div>

           <!-- Metode 1 : https://api.whatsapp.com/send?phone=628119712104&text=halo -->
           <!-- Metode 2 : whatsapp://send?phone=628119712104&text=Hai -->
           <!-- Metode 3 :https://wa.me/628119712104-->

                <button onclick="document.location='https://wa.me/628119712104'">Pesan Sekarang</button>
            </form>
        </div>
    <?php endforeach; ?>
</div>

<footer>
    &copy; 2024 Toko Sederhana
</footer>

</body>
</html>
