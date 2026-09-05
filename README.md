# Website IALVI / ASICLIVAR Research Group

Company profile untuk Air-Sea Interaction and Climate Variability Research
Group (PRIMA — BRIN). Dibangun dengan **PHP Native**, tema warna calm soft
blue & white, terinspirasi struktur ANU Earth Sciences People page.

## 1. Struktur Folder

```
ialvi-website/
├── index.php              → Home / landing page
├── about.php               → Tentang IALVI + daftar DSS (buat menyusul, lihat pola people.php)
├── people.php               → Halaman Tim (SUDAH JADI, lihat di bawah)
├── news.php                 → News & Event (buat menyusul, gunakan pola sama)
├── publication.php          → Publikasi (buat menyusul)
├── contact.php               → Kontak & lokasi (buat menyusul)
│
├── includes/
│   ├── header.php           → Navbar global + <head>, dipakai semua halaman
│   └── footer.php            → Footer global + penutup <body>
│
├── config/
│   └── data.php               → Semua data statis (mockup): $people, $people_categories,
│                                  $extra_programs, $dss_list. Ganti isi array ini dengan
│                                  query database kapan pun tanpa mengubah halaman.
│
├── data/
│   └── people.json            → Struktur data yang sama persis dalam format JSON,
│                                  disediakan jika suatu saat migrasi ke React.js
│
├── assets/
│   ├── css/style.css           → Semua styling (design tokens ada di bagian atas file)
│   ├── js/main.js               → Toggle menu mobile
│   └── img/
│       ├── people/               → Foto profil tiap anggota (lihat panduan penamaan di bawah)
│       ├── hero/                  → Foto hero bumi/laut/atmosfer untuk Home
│       ├── dss/                    → Screenshot/ikon tiap sistem DSS (SADEWA, SEMAR, dst.) untuk About
│       └── logos/                  → Logo ASICLIVAR, PRIMA, BRIN
```

## 2. Cara menambah halaman baru (About, News, Publication, Contact)

Setiap halaman baru cukup mengikuti pola `people.php`:

```php
<?php
require_once 'config/data.php';       // jika perlu data
$page_title  = 'About';                // judul tab browser
$active_page = 'about';                // menandai menu navbar mana yang aktif
include 'includes/header.php';
?>

... konten halaman (gunakan class .section, .container, .hero, dst dari style.css) ...

<?php include 'includes/footer.php'; ?>
```

## 3. Kenapa PHP Native (bukan React) untuk kasus ini

PHP Native cocok karena:
- Website ini bersifat *company profile* (statis/jarang berubah), bukan aplikasi interaktif.
- Tidak butuh build step (npm/webpack) — cukup PHP + Apache/Nginx, sesuai infrastruktur
  kantor/kampus yang umumnya sudah tersedia (shared hosting/cPanel BRIN atau Unsoed).
- Tim penerus (mahasiswa magang berikutnya) akan lebih mudah meneruskan tanpa perlu
  paham tooling frontend modern.

**Kapan sebaiknya pindah ke React.js**: jika ke depan halaman People/News perlu
filter interaktif (search, sort by kategori tanpa reload), atau datanya akan
diambil dari API/database secara real-time dengan banyak interaksi client-side.
Struktur `data/people.json` sudah disiapkan agar migrasi ini tidak perlu menulis
ulang data dari nol — tinggal `fetch('data/people.json')` atau diubah jadi endpoint API.

## 4. Menjalankan secara lokal

Dengan PHP terpasang, dari dalam folder `ialvi-website/`:

```
php -S localhost:8000
```

lalu buka `http://localhost:8000` di browser.
