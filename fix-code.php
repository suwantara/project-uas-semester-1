<main>
        <h2>Booking Form</h2>
        <form action="" method="post">
            <!-- Dropdown Destinasi -->
            <label for="destination">Destinasi:</label>
            <select id="destination" name="destination[]" multiple required>
                <?php foreach ($data_destinasi as $destinasi): ?>
                    <option value="<?= $destinasi['judul'] ?>">
                        <?= $destinasi['judul'] ?> - Rp <?= number_format($destinasi['harga'], 0, ',', '.') ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <!-- Dropdown Rental -->
            <label for="rental">Rental:</label>
            <select id="rental" name="rental[]" multiple>
                <?php foreach ($data_rental as $rental): ?>
                    <option value="<?= $rental['judul_rental'] ?>">
                        <?= $rental['judul_rental'] ?> - Rp <?= number_format($rental['harga_rental'], 0, ',', '.') ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <label for="date">Tanggal Tour:</label>
            <input type="date" id="date" name="date" required>

            <label for="participants">Jumlah Peserta:</label>
            <input type="number" id="participants" name="participants" min="1" required>

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
                    if (in_array($destinasi['judul'], $destinations)) {
                        $total_destination_price += $destinasi['harga'];
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
            }
            ?>
        </div>
    </main>