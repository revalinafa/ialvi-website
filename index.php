<?php
require_once 'config/data.php';
$page_title  = 'Home';
$active_page = 'home';
include 'includes/header.php';
?>

<section class="hero">
  <div class="container hero__grid">
    <div>
      <div class="hero__eyebrow">Pusat Riset Iklim dan Atmosfer &mdash; BRIN</div>
      <h1>Air-Sea Interaction &amp; Climate Variability Research Group</h1>
      <p>Memahami dinamika interaksi laut-atmosfer dan variabilitas iklim di Benua
         Maritim Indonesia melalui observasi, pemodelan, dan sistem pendukung
         keputusan (DSS) berbasis sains atmosfer.</p>
      <p><a href="about.php">Pelajari riset kami &rarr;</a></p>
    </div>
    <div class="hero__image">
      <img src="assets/img/hero/earth-ocean-atmosphere.jpg" alt="Citra bumi, laut, dan atmosfer">
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section__head">
      <h2>Fokus Riset</h2>
      <p>Kelompok riset ini didukung oleh lima kluster riset yang menjawab
         kebutuhan RPJMN 2024&ndash;2029.</p>
    </div>
    <div class="people-grid">
      <div class="person-card"><div class="person-card__body">
        <h3 class="person-card__name">Climate Smart &amp; Precision Agriculture</h3>
        <p class="person-card__note">Mitra: PT. MTS</p>
      </div></div>
      <div class="person-card"><div class="person-card__body">
        <h3 class="person-card__name">Climate Modelling for Food Security</h3>
        <p class="person-card__note">Mitra: PT. EWINDO</p>
      </div></div>
      <div class="person-card"><div class="person-card__body">
        <h3 class="person-card__name">Weather &amp; Climate Modelling for Renewable Energy</h3>
        <p class="person-card__note">Mitra: PT. PLN, PT. MHU</p>
      </div></div>
      <div class="person-card"><div class="person-card__body">
        <h3 class="person-card__name">Ocean-Fisheries-Coastal Prediction Systems</h3>
        <p class="person-card__note">Mitra: PHE Pertamina, SIGN, KKP</p>
      </div></div>
    </div>
  </div>
</section>

<section class="section section--muted">
  <div class="container">
    <div class="section__head">
      <h2>Our Innovations</h2>
      <p>Sebagian Decision Support System (DSS) unggulan yang kami kembangkan
         untuk mitigasi bencana hidrometeorologi dan ketahanan pangan.</p>
    </div>

    <div class="innovation__grid">
      <div class="innovation__item">
        <img class="innovation__logo" src="assets/img/logos/dss-sadewa.png" alt="Logo SADEWA">
        <h3 class="innovation__name">SADEWA</h3>
        <p class="innovation__desc">Satellite Disaster Early Warning System</p>
      </div>
      <div class="innovation__item">
        <img class="innovation__logo" src="assets/img/logos/dss-semar.png" alt="Logo SEMAR">
        <h3 class="innovation__name">SEMAR</h3>
        <p class="innovation__desc">Sistem Embaran Maritim</p>
      </div>
      <div class="innovation__item">
        <img class="innovation__logo" src="assets/img/logos/dss-nakula.png" alt="Logo NAKULA">
        <h3 class="innovation__name">NAKULA</h3>
        <p class="innovation__desc">Prediksi Cuaca Ekstrem Berbasis AI</p>
      </div>
    </div>

    <div class="innovation__cta">
      <a href="about.php" class="btn btn--primary">Learn more about our DSS &rarr;</a>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section__head">
      <h2>Fasilitas &amp; Infrastruktur Riset</h2>
      <p>Riset di IALVI / ASICLIVAR didukung oleh sarana observasi dan
         komputasi kelas atas.</p>
    </div>

    <div class="facility__grid">
      <div class="facility-card">
        <h3 class="facility-card__title">High Performance Computing (HPC)</h3>
        <p class="facility-card__desc">Menjalankan model prediksi cuaca dan
           iklim resolusi tinggi (NAKULA, KAMAJAYA) secara efisien dan cepat.</p>
      </div>
      <div class="facility-card">
        <h3 class="facility-card__title">Radar SANTANU</h3>
        <p class="facility-card__desc">Radar X-Band untuk deteksi hujan
           spasial secara kontinu, mendukung sistem peringatan dini bencana.</p>
      </div>
      <div class="facility-card">
        <h3 class="facility-card__title">Kapal Penelitian Baruna Jaya</h3>
        <p class="facility-card__desc">Platform observasi laut-atmosfer
           langsung untuk riset interaksi laut dan variabilitas iklim.</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="callout">
      <div class="callout__content">
        <h2>Opportunities &amp; Kolaborasi</h2>
        <p>Kami membuka kesempatan kolaborasi riset bagi akademisi dan
           mahasiswa dari berbagai jenjang.</p>
        <ul class="callout__list">
          <li class="callout__item">Visiting Professor</li>
          <li class="callout__item">Student Exchange</li>
          <li class="callout__item">Penerimaan mahasiswa (Tugas Akhir, Magang, Tesis/Disertasi)</li>
        </ul>
        <a href="contact.php" class="btn btn--light">Hubungi Kami &rarr;</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--muted">
  <div class="container">
    <div class="section__head">
      <h2>News &amp; Seminar</h2>
      <p>Update terbaru seputar kegiatan diskusi dan pengembangan kapasitas
         di IALVI / ASICLIVAR.</p>
    </div>

    <div class="news__grid">
      <article class="news-card">
        <div class="news-card__thumb"
             style="background-image: url('assets/img/news/biweekly-seminar.jpg');"></div>
        <div class="news-card__body">
          <p class="news-card__date">28 Agustus 2026</p>
          <h3 class="news-card__title">Biweekly Seminar IALVI</h3>
          <p class="news-card__excerpt">Diskusi rutin dua mingguan membahas
             perkembangan riset interaksi laut-atmosfer.</p>
        </div>
      </article>
      <article class="news-card">
        <div class="news-card__thumb"
             style="background-image: url('assets/img/news/earth-sciences-bootcamp.jpg');"></div>
        <div class="news-card__body">
          <p class="news-card__date">15 Agustus 2026</p>
          <h3 class="news-card__title">Earth Sciences Bootcamp</h3>
          <p class="news-card__excerpt">Pelatihan intensif dasar-dasar sains
             bumi dan atmosfer untuk mahasiswa magang riset.</p>
        </div>
      </article>
      <article class="news-card">
        <div class="news-card__thumb"
             style="background-image: url('assets/img/news/kamajaya-update.jpg');"></div>
        <div class="news-card__body">
          <p class="news-card__date">02 Agustus 2026</p>
          <h3 class="news-card__title">Update Pengembangan KAMAJAYA</h3>
          <p class="news-card__excerpt">Progres terbaru pengembangan DSS
             ketahanan pangan berbasis prediksi awal musim.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>