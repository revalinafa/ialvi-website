<?php
require_once 'config/data.php';

$page_title  = 'Stakeholder';
$active_page = 'stakeholder';
include 'includes/header.php';
?>

<section class="hero" style="padding: 48px 0 32px;">
  <div class="container">
    <div class="hero__eyebrow">Our Partners</div>
    <h1>Stakeholder</h1>
    <p>Mitra industri, badan usaha, dan instansi pemerintah yang bekerja sama
       dengan Air-Sea Interaction &amp; Climate Variability Research Group.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <?php foreach ($stakeholder_categories as $cat_key => $cat_label): ?>

      <?php
        $members = array_filter($stakeholders, function ($s) use ($cat_key) {
            return $s['category'] === $cat_key;
        });
        if (empty($members)) { continue; }
      ?>

      <div class="people-category">
        <h2 class="people-category__title"><?php echo htmlspecialchars($cat_label); ?></h2>

        <div class="facility__grid">
          <?php foreach ($members as $stakeholder): ?>
            <div class="facility-card facility-card--stakeholder">
              <?php if (!empty($stakeholder['logo'])): ?>
                <img class="facility-card__logo"
                     src="assets/img/stakeholders/<?php echo htmlspecialchars($stakeholder['logo']); ?>"
                     alt="Logo <?php echo htmlspecialchars($stakeholder['name']); ?>">
              <?php endif; ?>
              <h3 class="facility-card__title"><?php echo htmlspecialchars($stakeholder['name']); ?></h3>
              <p class="facility-card__desc"><?php echo htmlspecialchars($stakeholder['sector']); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    <?php endforeach; ?>
  </div>
</section>

<?php include 'includes/footer.php'; ?>