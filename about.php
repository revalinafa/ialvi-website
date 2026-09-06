<?php
require_once 'config/data.php';
$page_title  = 'About';
$active_page = 'about';
include 'includes/header.php';
?>

<section class="hero">
  <div class="container">
    <div class="hero__eyebrow">Pusat Riset Iklim dan Atmosfer &mdash; BRIN</div>
    <h1>About IALVI</h1>
    <p>Air-Sea Interaction and Climate Variability Research Group (IALVI /
       ASICLIVAR) adalah kelompok riset di bawah Pusat Riset Iklim dan
       Atmosfer (PRIMA), BRIN, yang berfokus memahami dinamika interaksi
       laut-atmosfer serta variabilitas iklim di Benua Maritim Indonesia.
       Melalui observasi, pemodelan, dan pengembangan sistem pendukung
       keputusan (DSS), kelompok riset ini mendukung lima kluster riset
       prioritas RPJMN 2024&ndash;2029, mulai dari pertanian presisi hingga
       keselamatan transportasi dan energi terbarukan.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="leader__grid">
      <div class="leader__photo"
           style="background-image: url('assets/img/people/erma-yulihastin.jpg');"></div>
      <div>
        <p class="leader__quote">&ldquo;Benua maritim ekuator menyimpan kompleksitas
           yang luar biasa &mdash; tugas kami adalah mengubah kompleksitas itu
           menjadi pengetahuan dan sistem pendukung keputusan yang benar-benar
           bermanfaat bagi masyarakat.&rdquo;</p>
        <p class="leader__name">Prof. Dr. Erma Yulihastin, S.Si., M.Si.</p>
        <p class="leader__role">Chief Scientist / Group Leader &mdash; IALVI / ASICLIVAR</p>
      </div>
    </div>
  </div>
</section>

<section class="section section--muted">
  <div class="container">
    <div class="section__head">
      <h2>Struktur Organisasi</h2>
      <p>Hierarki keilmuan di IALVI / ASICLIVAR dirancang berjenjang untuk
         membina peneliti muda sekaligus mahasiswa riset melalui bimbingan
         langsung dari peneliti senior.</p>
    </div>
    <div class="org-structure">
      <div class="org-structure__level">
        <h3 class="org-structure__level-title">Chief Scientist</h3>
        <p class="org-structure__level-desc">Group Leader &amp; Professor Researcher</p>
      </div>
      <div class="org-structure__arrow">&rarr;</div>
      <div class="org-structure__level">
        <h3 class="org-structure__level-title">Senior &amp; Junior Researchers</h3>
        <p class="org-structure__level-desc">PhD Candidate &amp; peneliti tetap</p>
      </div>
      <div class="org-structure__arrow">&rarr;</div>
      <div class="org-structure__level">
        <h3 class="org-structure__level-title">Postdoctoral Researchers</h3>
        <p class="org-structure__level-desc">Riset lanjutan pasca-doktoral</p>
      </div>
      <div class="org-structure__arrow">&rarr;</div>
      <div class="org-structure__level">
        <h3 class="org-structure__level-title">Research Assistants / Students</h3>
        <p class="org-structure__level-desc">Master &amp; doctoral student, magang riset</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section__head">
      <h2>Decision Support Systems (DSS)</h2>
      <p>IALVI / ASICLIVAR mengembangkan berbagai Decision Support System (DSS)
         berbasis observasi, satelit, dan pemodelan atmosfer untuk mendukung
         mitigasi bencana hidrometeorologi, ketahanan pangan, dan keselamatan
         transportasi di Indonesia.</p>
    </div>

    <div class="dss-list">
      <?php
      // Tampilkan hanya DSS yang ditandai 'featured' => true di config/data.php,
      // dengan layout berselang-seling (zig-zag): genap → gambar di kanan.
      $featured_dss = array_filter($dss_list, function ($dss) {
          return !empty($dss['featured']);
      });

      $i = 0;
      foreach ($featured_dss as $dss):
          $is_reverse = ($i % 2 === 1);
          $i++;
      ?>
        <article class="dss-card<?php echo $is_reverse ? ' dss-card--reverse' : ''; ?>">
          <div class="dss-card__image"
               style="background-image: url('assets/img/dss/<?php echo htmlspecialchars($dss['image']); ?>');">
          </div>
          <div class="dss-card__content">
            <span class="dss-card__tag">Decision Support System</span>
            <h3 class="dss-card__title"><?php echo htmlspecialchars($dss['name']); ?></h3>
            <p class="dss-card__tagline"><?php echo htmlspecialchars($dss['tagline']); ?></p>
            <p class="dss-card__desc"><?php echo htmlspecialchars($dss['desc']); ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
