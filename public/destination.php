<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi</title>
    <link rel="stylesheet" href="../public/style/destination.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <?php require_once "../application/controller/destination.php";?>
    
</head>
<body>
    <!-- Header dengan Navigation -->
    <?php include "../layout/header.html";?>

        <!-- Hero Section -->
        <section id="beranda">
        <div class="hero-content">
            <h1>Pilih Destinasi Wisata Terbaik di Bali</h1>
            <p>Dapatkan pengalaman wisata yang luar biasa di Bali,
            tempat keindahan alam dan budaya hidup bersatu.
            Nikmati perjalanan yang penuh inspirasi, dari pantai 
            terindah hingga candi-candi yang luar biasa.</p>
        </div>
        </section>

    <!-- Destinasi Section -->
    <section id="destinasi">
        <div class="container">
            <h2 class="section-title">Popular Destinations</h2>
                <div class="grid">
                    <?php foreach ($data_destinasi as $destinasi): ?>
                        <div class="card">
                            <img src="<?php echo $destinasi['gambar']; ?>" alt="<?php echo $destinasi['judul']; ?>">
                                <div class="card-content">
                                    <h3><?php echo $destinasi['judul']; ?></h3>
                                    <p><?php echo $destinasi['deskripsi']; ?></p>
                                    <p>Lokasi: <?php echo $destinasi['lokasi']; ?></p>
                                    <p>Rating: <?php echo $destinasi['rating']; ?></p>
                                </div>
                        </div>
                    <?php endforeach; ?>
                </div>
        </div>
    </section>


    <!-- Footer -->
    <?php include "../layout/footer.html"; ?>
</body>
</html>