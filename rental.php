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

    <!-- Rental Section -->
    <section id="rental">
        <div class="container">
            <h2 class="section-title">Rental</h2>
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