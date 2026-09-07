<?php
require_once 'config/data.php';
$page_title  = 'Publication';
$active_page = 'publication';

// Array data publikasi (Nantinya bisa dipindahkan ke config/data.php atau database)
$publications = [
    [
        'title'   => 'Understanding the Dynamics of the Maritime Continent: A Comprehensive Review',
        'authors' => 'Erma Yulihastin, dkk.',
        'journal' => 'Journal of Atmospheric Sciences',
        'year'    => '2025',
        'type'    => 'Jurnal Internasional',
        'link'    => '#'
    ],
    [
        'title'   => 'Prediksi Cuaca Ekstrem Menggunakan Model NAKULA Berbasis Deep Learning',
        'authors' => 'M. Furqon Azis Ismail, Erma Yulihastin',
        'journal' => 'Jurnal Meteorologi dan Geofisika',
        'year'    => '2024',
        'type'    => 'Jurnal Nasional',
        'link'    => '#'
    ],
    [
        'title'   => 'Literasi Coding dan Kecerdasan Buatan (AI) di Era Digital',
        'authors' => 'Revalina Fidiya Anugrah, dkk.',
        'journal' => 'TERNAVIA: Jurnal Pengabdian Multidisiplin',
        'year'    => '2024',
        'type'    => 'Jurnal Multidisiplin',
        'link'    => '#'
    ]
];

include 'includes/header.php';
?>

<!-- Hero Section Khusus Publikasi -->
<section class="hero" style="padding: 4rem 0; background-color: #f8fafc; border-bottom: 1px solid #e2e8f0;">
  <div class="container text-center">
    <div class="hero__eyebrow" style="color: #3b82f6; font-weight: 600; text-transform: uppercase; margin-bottom: 1rem;">
      Penelitian &amp; Jurnal
    </div>
    <h1 style="font-size: 2.5rem; color: #0f172a; margin-bottom: 1rem;">Publikasi Ilmiah IALVI</h1>
    <p style="color: #475569; max-width: 600px; margin: 0 auto; line-height: 1.6;">
      Jelajahi karya tulis, artikel jurnal, dan kontribusi riset dari tim Air-Sea Interaction &amp; Climate Variability Research Group.
    </p>
  </div>
</section>

<!-- Section Daftar Publikasi -->
<section class="section">
  <div class="container">
    <div class="section__head">
      <h2>Daftar Publikasi Terbaru</h2>
      <p>Menampilkan hasil riset observasi, pemodelan, dan pengembangan DSS.</p>
    </div>

    <!-- Wrapper List Publikasi -->
    <div class="publication__list">
      <?php foreach ($publications as $pub): ?>
        <article class="publication-card">
          <div class="publication-card__meta">
            <span class="badge badge--solid"><?php echo $pub['year']; ?></span>
            <span class="badge badge--outline"><?php echo $pub['type']; ?></span>
          </div>
          <h3 class="publication-card__title"><?php echo $pub['title']; ?></h3>
          <p class="publication-card__authors"><?php echo $pub['authors']; ?></p>
          <p class="publication-card__journal"><em><?php echo $pub['journal']; ?></em></p>
          <a href="<?php echo $pub['link']; ?>" class="publication-card__link">Baca Artikel &rarr;</a>
        </article>
      <?php endforeach; ?>
    </div>
    
  </div>
</section>

<?php include 'includes/footer.php'; ?>