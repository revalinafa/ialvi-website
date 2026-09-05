# Panduan Menyiapkan Aset Gambar (agar layout rapi seperti ANU)

Halaman People di ANU Earth Sciences terlihat rapi karena satu hal utama:
**semua foto profil memiliki rasio dan gaya crop yang sama persis.** Grid CSS
di `style.css` (`.person-card__photo { aspect-ratio: 4/5; }`) sudah dibuat
untuk otomatis memotong foto ke rasio itu — tapi hasil terbaik tetap butuh
foto sumber yang disiapkan dengan benar.

## Langkah 1 — Kumpulkan foto per orang
Dari folder foto yang Anda punya (file `.png` seperti pada screenshot),
setiap orang harus punya **satu file foto wajah/setengah badan**, bukan
foto kelompok. Untuk staf yang aslinya hanya ada dalam foto grup (lihat
halaman "Air-Sea Interaction & Climate Variability Research Group" di PDF),
foto perlu di-crop manual satu per satu dari foto grup tersebut.

## Langkah 2 — Samakan rasio & crop
- Rasio potret: **4:5** (contoh ukuran final: 800 × 1000 px).
- Posisi wajah: mata berada kira-kira di 1/3 bagian atas foto, konsisten
  untuk semua orang — ini yang membuat grid terlihat "rapi" secara visual,
  bukan acak-acakan.
- Background: jika memungkinkan, seragamkan (polos/netral) atau biarkan
  foto asli tapi lakukan crop ketat supaya proporsi wajah antar-foto mirip.
- Tools cepat: Canva ("Resize" ke 800×1000, custom size), atau Photoshop/
  GIMP dengan Crop Tool rasio tetap 4:5.

## Langkah 3 — Kompres ukuran file
- Format: `.jpg` (foto) — lebih ringan dari `.png` untuk foto orang.
- Target ukuran: di bawah 200 KB per file agar halaman People (18+ foto)
  tetap cepat dimuat.
- Tools: TinyPNG/TinyJPG (tinypng.com) atau Squoosh (squoosh.app).

## Langkah 4 — Penamaan file (WAJIB cocok dengan `config/data.php`)
Gunakan **slug** (huruf kecil, tanpa spasi, pakai tanda "-") sesuai field
`photo` yang sudah didefinisikan di `config/data.php`, contoh:

| Nama                          | Nama file yang harus disimpan       |
|--------------------------------|--------------------------------------|
| Prof. Dr. Erma Yulihastin      | `erma-yulihastin.jpg`                |
| M. Furqon Azis Ismail          | `furqon-azis-ismail.jpg`             |
| Dr.rer.nat. Abdul Basit        | `abdul-basit.jpg`                    |
| ... (lihat daftar lengkap di config/data.php, field 'photo') |

Simpan semua file ini ke dalam folder:
```
assets/img/people/
```

Jika suatu saat menambah anggota baru, cukup: (1) taruh foto dengan nama
slug baru di folder ini, (2) tambahkan satu entri array baru di
`config/data.php` — grid akan otomatis menampilkannya, tanpa perlu
mengubah kode HTML/CSS.

## Langkah 5 — Foto pendukung lain
- `assets/img/hero/` — 1 foto hero untuk halaman Home. Cari foto bertema
  bumi dari luar angkasa / citra satelit awan-laut / radar cuaca (bisa
  ambil dari materi PRIMA yang sudah ada di slide PDF, mis. citra satelit
  di slide "Pusat Riset Iklim dan Atmosfer"). Rasio landscape (mis. 1200×900).
- `assets/img/dss/` — screenshot dashboard tiap sistem (SADEWA, SEMAR,
  KAMAJAYA, dll.) untuk ditampilkan di halaman About. Bisa langsung crop
  dari screenshot yang sudah ada di file PDF PRIMA.
- `assets/img/logos/` — logo ASICLIVAR, logo BRIN, dan logo tiap sistem DSS
  (SADEWA, SEMAR, dll.), format `.png` transparan.

## Ringkasan checklist sebelum upload ke server
- [ ] Semua foto people rasio 4:5, crop wajah konsisten
- [ ] Semua nama file sudah slug (huruf kecil + tanda "-") dan cocok dengan `config/data.php`
- [ ] Ukuran file < 200 KB per foto
- [ ] Foto hero & DSS sudah masuk folder masing-masing
- [ ] Test buka `people.php` di browser — pastikan tidak ada foto yang kosong/pecah
