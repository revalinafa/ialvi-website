<?php
/**
 * data.php
 * Sumber data statis (mockup) untuk kelompok riset IALVI / ASICLIVAR.
 * Nantinya bagian ini bisa diganti dengan query ke database (MySQL) tanpa
 * mengubah cara pemanggilan di halaman (people.php, about.php, dst).
 */

// ----------------------------------------------------------------------
// 1. KATEGORI PEOPLE — urutan array menentukan urutan tampil di halaman
// ----------------------------------------------------------------------
$people_categories = [
    'chief_scientist'   => 'Chief Scientist / Professor',
    'senior_researcher' => 'Senior Researchers',
    'junior_researcher' => 'Junior Researchers',
    'postdoc'           => 'Postdoctoral Researchers',
    'research_assistant'=> 'Research Assistants & Data Analysts',
];

// ----------------------------------------------------------------------
// 2. DAFTAR PERSONEL
//    field 'photo' mengacu ke assets/img/people/<slug>.jpg
//    field 'degree_note' = keterangan studi lanjut (S2/S3) jika ada
// ----------------------------------------------------------------------
$people = [

    // --- Chief Scientist / Professor ---
    [
        'slug'        => 'erma-yulihastin',
        'name'        => 'Prof. Dr. Erma Yulihastin, S.Si., M.Si.',
        'role'        => 'Chief Scientist / Group Leader',
        'category'    => 'chief_scientist',
        'degree_note' => 'Professor Researcher',
        'photo'       => 'erma-yulihastin.jpg',
    ],

    // --- Senior Researchers ---
    [
        'slug'        => 'furqon-azis-ismail',
        'name'        => 'M. Furqon Azis Ismail, S.Si., M.Sc., Ph.D.',
        'role'        => 'Senior Researcher',
        'category'    => 'senior_researcher',
        'degree_note' => null,
        'photo'       => 'furqon-azis-ismail.jpg',
    ],
    [
        'slug'        => 'abdul-basit',
        'name'        => 'Dr.rer.nat. Abdul Basit, S.Si., M.App.Sc.',
        'role'        => 'Senior Researcher',
        'category'    => 'senior_researcher',
        'degree_note' => null,
        'photo'       => 'abdul-basit.jpg',
    ],
    [
        'slug'        => 'fiolenta-marpaung',
        'name'        => 'Fiolenta Marpaung, S.Si., M.Sc., Ph.D.',
        'role'        => 'Senior Researcher',
        'category'    => 'senior_researcher',
        'degree_note' => null,
        'photo'       => 'fiolenta-marpaung.jpg',
    ],
    [
        'slug'        => 'suaydhi',
        'name'        => 'Suaydhi, M.Sc.',
        'role'        => 'Senior Researcher',
        'category'    => 'senior_researcher',
        'degree_note' => 'Doctoral Student (S3 Australia)',
        'photo'       => 'suaydhi.jpg',
    ],

    // --- Junior Researchers ---
    [
        'slug'        => 'eka-putri-wulandari',
        'name'        => 'Eka Putri Wulandari, S.Si., M.Si.',
        'role'        => 'Junior Researcher',
        'category'    => 'junior_researcher',
        'degree_note' => null,
        'photo'       => 'eka-putri-wulandari.jpg',
    ],
    [
        'slug'        => 'rahaden-bagas-hatmaja',
        'name'        => 'Rahaden Bagas Hatmaja, S.Si., M.Si.',
        'role'        => 'Junior Researcher',
        'category'    => 'junior_researcher',
        'degree_note' => 'Doctoral Student (S3 USA)',
        'photo'       => 'rahaden-bagas-hatmaja.jpg',
    ],
    [
        'slug'        => 'amalia-nurlatifah',
        'name'        => 'Amalia Nurlatifah, S.Si., M.T.',
        'role'        => 'Junior Researcher',
        'category'    => 'junior_researcher',
        'degree_note' => 'Doctoral Student (S3 UK)',
        'photo'       => 'amalia-nurlatifah.jpg',
    ],

    // --- Postdoctoral Researchers ---
    [
        'slug'        => 'erlin-beliyana',
        'name'        => 'Dr. Erlin Beliyana, S.Si., M.Si.',
        'role'        => 'Postdoctoral Researcher',
        'category'    => 'postdoc',
        'degree_note' => null,
        'photo'       => 'erlin-beliyana.jpg',
    ],
    [
        'slug'        => 'inovasita-alifdini',
        'name'        => 'Dr.rer.nat. Inovasita Alifdini, S.Kel., M.Phil.',
        'role'        => 'Postdoctoral Researcher',
        'category'    => 'postdoc',
        'degree_note' => null,
        'photo'       => 'inovasita-alifdini.jpg',
    ],
    [
        'slug'        => 'amirotul-bahiyah',
        'name'        => 'Dr. Amirotul Bahiyah, S.Si., M.Sc.',
        'role'        => 'Postdoctoral Researcher',
        'category'    => 'postdoc',
        'degree_note' => 'Candidate',
        'photo'       => 'amirotul-bahiyah.jpg',
    ],
    [
        'slug'        => 'gandhi-napitupulu',
        'name'        => 'Dr. Gandhi Napitupulu, S.Si., M.Sc.',
        'role'        => 'Postdoctoral Researcher',
        'category'    => 'postdoc',
        'degree_note' => 'Candidate',
        'photo'       => 'gandhi-napitupulu.jpg',
    ],

    // --- Research Assistants & Data Analysts ---
    [
        'slug'        => 'narizka-nanda-purwadani',
        'name'        => 'Narizka Nanda Purwadani, S.Si., M.Si.',
        'role'        => 'Research Assistant',
        'category'    => 'research_assistant',
        'degree_note' => 'Doctoral Student (S3 ITB)',
        'photo'       => 'narizka-nanda-purwadani.jpg',
    ],
    [
        'slug'        => 'alya-fitri-syalsabilla',
        'name'        => 'Alya Fitri Syalsabilla, S.Stat., M.Stat.',
        'role'        => 'Research Assistant',
        'category'    => 'research_assistant',
        'degree_note' => 'Doctoral Student (S3 Sains Kebumian ITB)',
        'photo'       => 'alya-fitri-syalsabilla.jpg',
    ],
    [
        'slug'        => 'syifa-alifia-azzahra',
        'name'        => 'Syifa Alifia Azzahra, S.Si.',
        'role'        => 'Research Assistant',
        'category'    => 'research_assistant',
        'degree_note' => 'Master Student (S2 Fisika ITB)',
        'photo'       => 'syifa-alifia-azzahra.jpg',
    ],
    [
        'slug'        => 'afiq-mahasin',
        'name'        => 'Afiq Mahasin, S.Si.',
        'role'        => 'Research Assistant',
        'category'    => 'research_assistant',
        'degree_note' => 'Master Student (S2 Fisika ITB)',
        'photo'       => 'afiq-mahasin.jpg',
    ],
    [
        'slug'        => 'sanaullah-zehri',
        'name'        => 'Sanaullah Zehri, S.Pd.',
        'role'        => 'Research Assistant',
        'category'    => 'research_assistant',
        'degree_note' => 'Master Student (S2 Fisika ITB)',
        'photo'       => 'sanaullah-zehri.jpg',
    ],
    [
        'slug'        => 'ikbal-nur-dian-triatmojo',
        'name'        => 'M. Ikbal Nur Dian Triatmojo, S.Si.',
        'role'        => 'Research Assistant',
        'category'    => 'research_assistant',
        'degree_note' => 'Master Student (S2 Geodesi & Geomatika ITB) — Cand.',
        'photo'       => 'ikbal-nur-dian-triatmojo.jpg',
    ],
];

// ----------------------------------------------------------------------
// 3. PROGRAM TAMBAHAN (ditampilkan sebagai box di bawah grid People)
// ----------------------------------------------------------------------
$extra_programs = [
    [
        'title'       => 'Visiting Professor',
        'description' => 'Program kunjungan profesor tamu dari institusi mitra (dalam & luar negeri) untuk kolaborasi riset dan joint advisory.',
    ],
    [
        'title'       => 'Student Exchange Opportunity',
        'description' => 'Kesempatan pertukaran mahasiswa untuk internship, tugas akhir, hingga riset bersama dengan mitra kampus, termasuk akses ke fasilitas HPC, Radar SANTANU, dan Kapal Riset Baruna Jaya.',
    ],
];

// ----------------------------------------------------------------------
// 4. DECISION SUPPORT SYSTEM (untuk halaman About)
// ----------------------------------------------------------------------
$dss_list = [
    ['name' => 'SADEWA',   'desc' => 'Satellite Disaster Early Warning System — peringatan dini hujan ekstrem berbasis satelit.'],
    ['name' => 'SEMAR',    'desc' => 'Sistem Embaran Maritim — informasi cuaca laut, arus, dan zona potensi penangkapan ikan.'],
    ['name' => 'SRIKANDI', 'desc' => 'Sistem Informasi Komposisi Atmosfer Indonesia — pemantauan kualitas udara.'],
    ['name' => 'SANTANU',  'desc' => 'Sistem Pemantau Hujan Spasial berbasis radar X-Band.'],
    ['name' => 'JATAYU',   'desc' => 'Jaringan Pengamatan Atmosfer untuk Keselamatan Transportasi Udara.'],
    ['name' => 'KAMAJAYA', 'desc' => 'Kajian Awal Musim Wilayah Indonesia Jangka Madya — DSS ketahanan pangan.'],
    ['name' => 'SRIRAMA',  'desc' => 'Sistem Informasi Perubahan Iklim Indonesia — proyeksi iklim jangka panjang.'],
    ['name' => 'INDRA',    'desc' => 'Decision Support Tool untuk Smart Water Management System.'],
    ['name' => 'GATOTKACA','desc' => 'GNSS for Atmospheric Observation and Tracking Climate Change.'],
    ['name' => 'NAKULA',   'desc' => 'Prediksi cuaca ekstrem resolusi tinggi berbasis deep learning & HPC.'],
    ['name' => 'ANTASENA', 'desc' => 'AlmaNak Tambak Sentra Garam — rekomendasi berbasis prediksi curah hujan.'],
    ['name' => 'KRESNA',   'desc' => 'Knowledge of Risk and Early drought-fire warning System for Needed Action.'],
    ['name' => 'ARJUNA',   'desc' => 'Analisis Risiko banjir Jangka pendek-menengah Untuk aNtisipasi perubahan iklim IndonesiA.'],
];
