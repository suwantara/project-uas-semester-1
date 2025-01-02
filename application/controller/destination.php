<?php

class Destination {
    public $gambar;
    public $judul;
    public $deskripsi;
    public $lokasi;
    public $rating;
    public $harga;
    public $available;

    public function __construct($gambar, $judul, $deskripsi, $lokasi, $rating, $harga, $available) {
        $this->gambar = $gambar;
        $this->judul = $judul;
        $this->deskripsi = $deskripsi;
        $this->lokasi = $lokasi;
        $this->rating = $rating;
        $this->harga = $harga;
        $this->available = $available;
    }
}

$data_destinasi = array(
    new Destination('../asset/img/destination/uluwatu.jpg', 'Uluwatu Temple', 'Ancient clifftop temple with stunning sunset views', 'Pecatu, South Kuta, Badung Regency, Bali', '4.8', '100000', true),
    new Destination('../asset/img/destination/tanah-lot.jpg', 'Tanah Lot', 'Iconic sea temple known for its picturesque sunsets', 'Tabanan, Bali', '4.7', '100000', true),
    new Destination('../asset/img/destination/besakih.jpg', 'Besakih Temple', 'Pura Besakih, pura terbesar di Bali.Pura Besakih merupakan pusat kegiatan dari seluruh Pura yang ada di Bali.', 'Kec. Rendang, Kabupaten Karangasem, Bali', '4.9', '100000', false),
    new Destination('../asset/img/destination/kuta.jpg', 'Goa Gajah', 'Gua Gajah adalah gua buatan dari masa purbakala yang berfungsi sebagai tempat ibadah', 'Bedulu, Kec. Blahbatuh, Kabupaten Gianyar, Bali', '4.2', '100000', true),
    new Destination('../asset/img/destination/nusa-dua.jpg', 'Klungkung Royal Palace', 'Kerta Gosa adalah pengadilan tinggi raja Bali, kasus-kasus di pulau yang tidak dapat diselesaikan dipindahkan ke situs ini.', 'Central Semarapura, Klungkung, Klungkung Regency, Bali', '4.5', '100000', true),
    new Destination('../asset/img/destination/ubud.jpg', 'Penglipuran', 'Desa yang masih menjunjung tinggi nilai-nilai luhur nenek moyang, tata ruang Desa Penglipuran pun mengusung patokan adat yang sudah turun temurun.', 'Jl. Penglipuran, Kubu, Kec. Bangli, Kabupaten Bangli, Bali', '4.8', '100000', true),
    new Destination('../asset/img/destination/ubud.jpg', 'Taman Ujung', 'Taman ini dulunya menjadi tempat beristirahat untuk para raja-raja dengan menyuguhkan pemandangan sangat mempesona.', 'Taman Ujung, Tumbu, Kec. Karangasem, Kabupaten Karangasem, Bali', '4.6', '100000', false),
    new Destination('../asset/img/destination/ubud.jpg', 'Tenganan', 'Tenganan Pegringsingan desa tradisional yang terkenal dengan kerajinan kain tenunnya.', 'Tenganan, Kec. Manggis, Kabupaten Karangasem, Bali', '4.8', '100000', true),
    new Destination('../asset/img/destination/ubud.jpg', 'Tirta Empul', 'Pura Tirta Empul merupakan tempat suci di Bali yang terkenal dengan mata airnya untuk mensucikan diri.', 'Tampaksiring, Kec. Tampaksiring, Kabupaten Gianyar, Bali', '4.8', '100000', true),
    // Tambahkan destinasi lainnya di sini
);

?>