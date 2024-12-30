<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental</title>
    <link rel="stylesheet" href="rental.css">
    <?php require_once "application/controller/rental.php";?>
</head>
<body>
    <!-- Header dengan Navigation -->
    <?php include "layout/header.html" ?>

    <!-- Hero Section -->
    <section id="beranda">
    <div class="hero-content">
        <h1>Pilih Rental Wisata Terbaik di Bali</h1>
        <p>Sewa tansportasi lepas kunci & tour dengan driver terbaik di Bali.
            Free delivery Airport,Kuta & Seminyak Area, jaminan unit terlengkap,
            jaminan unit bersih dan terawat, pelayanan 24 jam.
        </p>
    </div>
    </section>

    <!-- Rental Section -->
    <section id="rental">
        <div class="container">
            <div class="grid">
            
            <?php foreach ($data_rental as $rental): ?>
                        <div class="card">
                            <img src="<?php echo $rental['gambar']; ?>" alt="<?php echo $rental['judul_rental']; ?>">
                                <div class="card-content">
                                    <h3><?php echo $rental['judul_rental']; ?></h3>
                                    <p><?php echo $rental['deskripsi']; ?></p>
                                    <p>Harga: <?php echo $rental['harga_rental']; ?></p>
                                    <p>Rating: <?php echo $rental['rating']; ?></p>
                                </div>
                        </div>
            <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include "layout/footer.html" ?>
</body>
</html>