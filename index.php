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

<?php include 'includes/footer.php'; ?>
