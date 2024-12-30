<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANCESTRAVEL</title>
    <link rel="stylesheet" href="../public/style/index.css">
    <!-- <link rel="stylesheet" href="../layout/global.css"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <?php require_once "../application/controller/destination.php";?>
    <?php require_once "../application/controller/rental.php";?>
    <?php require_once "../application/controller/review.php";?>

</head>
<body>
    <!-- Header dengan Navigation -->
    <?php include "../layout/header.html";?>

    <!-- Hero Section -->
    <section id="beranda">
    <div class="hero-content">
        <h1>Jelajahi Keindahan Tradisi Bali
            Pengalaman Wisata yang Tak Terlupakan</h1>
        <p>Dapatkan pengalaman wisata yang luar biasa di Bali, tempat keindahan alam dan budaya hidup bersatu. 
            Nikmati perjalanan yang penuh inspirasi, dari pantai terindah hingga candi-candi yang luar biasa.</p>
        <a href="#tour" class="btn">Explore Tours</a>
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

    <!-- Tour Section -->
    <!-- <section id="tour">
        <div class="container">
            <h2 class="section-title">Tour Packages</h2>
            <div class="grid">
            <?php // foreach ($data_rental as $rental): ?>
                        <div class="card">
                            <img src="<?php // echo $rental['gambar']; ?>" alt="<?php // echo $rental['judul']; ?>">
                                <div class="card-content">
                                    <h3><?php // echo $rental['judul']; ?></h3>
                                    <p><?php // echo $rental['deskripsi']; ?></p>
                                    <p>Lokasi: <?php // echo $rental['harga']; ?></p>
                                    <p>Rating: <?php // echo $rental['rating']; ?></p>
                                    <button></button>
                                </div>
                        </div>
            <?php // endforeach; ?>
            </div>
        </div>
    </section>

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

    <!-- Review Section -->
    <section id="review">
        <div class="container"></div>
            <h2 class="section-title">Reviews</h2>
            <div class="grid-review">
                <?php foreach ($data_review as $review): ?>
                    <div class="card-review">
                        <img src="<?php echo $review['gambar']; ?>" alt="<?php echo $review['gambar']; ?>">
                        <div class="card-content">
                            <h3><?php echo $review['nama']; ?></h3>
                            <p><?php echo $review['asal']; ?></p>
                            <div class="review-text">
                                <?php echo $review['review']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="section-title">Contact Us</h2>
            <form class="contact-form" action="" method="POST">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea rows="5" name="message" required></textarea>
                </div>
                <button type="submit" name="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>
    
    <?php
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        // Email tujuan
        $to = "ancestralhall@macr2.com"; // Ganti dengan email Anda
        
        // Subject email
        $subject = "New Contact Form Submission from $name";
        
        // Format pesan email
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";
        
        // Header email
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        // Kirim email
        if(mail($to, $subject, $email_content, $headers)) {
            echo "<script>alert('Thank you for your message. We will contact you soon!');</script>";
        } else {
            echo "<script>alert('Sorry, something went wrong. Please try again later.');</script>";
        }
    }
    ?>



    
    <!-- Footer -->
    <?php include "../layout/footer.html";?>
    <script>
        // Simple mobile menu toggle
        const menuToggle = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('.nav-links');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>