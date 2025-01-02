<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="booking.css">
    <link rel="stylesheet" href="../layout/global.css">
    <link rel="stylesheet" href="../booking/booking.css">
    <?php require_once "../application/controller/destination.php"?>
    <?php require_once "../application/controller/rental.php"?>
</head>
<body>
    <?php include "../layout/header.html" ?>
    
        <!-- Hero Section -->
    <section id="beranda">
    <div class="hero-content">
        <h1>Tentukan Perjalananmu</h1>
        <p>Dapatkan pengalaman wisata yang luar biasa di Bali, tempat keindahan alam dan budaya hidup bersatu. 
            Nikmati perjalanan yang penuh inspirasi, dari pantai terindah hingga candi-candi yang luar biasa.</p>
    </div>
    </section>

    <!-- Booking menu -->

    <main>
        <h2>Booking Form</h2>
        <form action="" method="post">
            <!-- Dropdown Destinasi -->
            <div class="form-group">
                <label for="destination">Destinasi:</label>
                <div class="dropdown" id="destination-dropdown">
                    <div class="dropdown-button" onclick="toggleDropdown('destination-dropdown')">Pilih Destinasi</div>
                    <div class="dropdown-menu">
                        <?php foreach ($data_destinasi as $destinasi): ?>
                            <label>
                                <input type="checkbox" name="destination[]" value="<?= $destinasi->judul ?>" <?= $destinasi->available ? '' : 'disabled' ?>>
                                <?= $destinasi->judul ?> - Rp <?= number_format($destinasi->harga, 0, ',', '.') ?> <?= $destinasi->available ? '' : '(Tidak Tersedia)' ?>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Dropdown Rental -->
            <div class="form-group">
                <label for="rental">Rental:</label>
                <div class="dropdown" id="rental-dropdown">
                    <div class="dropdown-button" onclick="toggleDropdown('rental-dropdown')">Pilih Rental</div>
                    <div class="dropdown-menu">
                        <?php foreach ($data_rental as $rental): ?>
                            <label>
                                <input type="checkbox" name="rental[]" value="<?= $rental['judul_rental'] ?>">
                                <?= $rental['judul_rental'] ?> - Rp <?= number_format($rental['harga_rental'], 0, ',', '.') ?>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="date">Tanggal Tour:</label>
                <input type="date" id="date" name="date" required>
            </div>

            <div class="form-group">
                <label for="participants">Jumlah Peserta:</label>
                <input type="number" id="participants" name="participants" min="1" required>
            </div>

            <button type="submit">Booking</button>
        </form>

        <div class="card">
            <h3>Detail Booking</h3>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $destinations = $_POST['destination'];
                $rentals = isset($_POST['rental']) ? $_POST['rental'] : [];
                $date = $_POST['date'];
                $participants = $_POST['participants'];

                $total_destination_price = 0;
                $total_rental_price = 0;

                // Hitung total harga destinasi
                foreach ($data_destinasi as $destinasi) {
                    if (in_array($destinasi->judul, $destinations)) {
                        $total_destination_price += $destinasi->harga;
                    }
                }

                // Hitung total harga rental
                if (!empty($rentals)) {
                    foreach ($data_rental as $rental) {
                        if (in_array($rental['judul_rental'], $rentals)) {
                            $total_rental_price += $rental['harga_rental'];
                        }
                    }
                }

                // Total harga keseluruhan
                $total_price = ($total_destination_price + $total_rental_price) * $participants;

                // Output
                echo "<p>Destinasi: " . implode(", ", $destinations) . "</p>";
                if (!empty($rentals)) {
                    echo "<p>Rental: " . implode(", ", $rentals) . "</p>";
                } else {
                    echo "<p>Rental: Tidak Ada</p>";
                }
                echo "<p>Tanggal Tour: $date</p>";
                echo "<p>Jumlah Peserta: $participants</p>";
                echo "<p>Total Harga: Rp " . number_format($total_price, 0, ',', '.') . "</p>";

            // Format pesan untuk WhatsApp
                $message = "Booking Detail:%0A" .
                "Destinasi: " . implode(", ", $destinations) . "%0A" .
                "Rental: " . (!empty($rentals) ? implode(", ", $rentals) : "Tidak Ada") . "%0A" .
                "Tanggal Tour: $date%0A" .
                "Jumlah Peserta: $participants%0A" .
                "Total Harga: Rp " . number_format($total_price, 0, ',', '.');

                // Encode pesan agar sesuai dengan URL
                $encoded_message = urlencode($message);

                // Buat URL WhatsApp
                $whatsapp_url = "https://wa.me/6281238679826?text=$encoded_message";


            // Tampilkan tombol WhatsApp
            echo "<form action='$whatsapp_url' method='get' target='_blank'>
            <button type='submit' class='whatsapp-button'>Chat via WhatsApp</button>
          </form>";
        
            }
            ?>
        </div>
        
    </main>

    <script>
        function toggleDropdown(id) {
            const dropdown = document.getElementById(id);
            dropdown.classList.toggle('open');
        }
    </script>

    <?php include "../layout/footer.html" ?>
</body>
</html>