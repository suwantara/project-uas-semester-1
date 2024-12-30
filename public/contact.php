<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../public/style/contact.css">
</head>
<body>
    <!-- Header dengan Navigation -->
    <header>
        <nav>
            <a href="#" class="logo">ANCESTRAVEL</a>
            <ul class="nav-links">
                <li><a href="home.php" target="_self">Home</a></li>
                <li><a href="destination.php" target="_self">Destination</a></li>
                <li><a href="tour.php" target="_self">Tour</a></li>
                <li><a href="rental.php" target="_self">Rental</a></li>
                <li><a href="contact.php" target="_self">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="section-title">Contact Us</h2>
            <form class="contact-form">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" required>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea rows="5" required></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h3>BaliTravel</h3>
                    <p>Your trusted partner for exploring Bali's beauty.</p>
                </div>
                <div>
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="#beranda">Beranda</a></li>
                        <li><a href="#destinasi">Destinasi</a></li>
                        <li><a href="#tour">Tour</a></li>
                        <li><a href="#rental">Rental</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Contact Info</h4>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> Jl. Sunset Road, Kuta, Bali</li>
                        <li><i class="fas fa-phone"></i> +62 812 3456 7890</li>
                        <li><i class="fas fa-envelope"></i> info@balitravel.com</li>
                    </ul>
                </div>
                <div>
                    <h4>Social Media</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2024 BaliTravel. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>