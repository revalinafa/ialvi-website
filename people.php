<?php
require_once 'config/data.php';

$page_title  = 'People';
$active_page = 'people';
include 'includes/header.php';
?>

<section class="hero" style="padding: 48px 0 32px;">
  <div class="container">
    <div class="hero__eyebrow">Our Team</div>
    <h1>People</h1>
    <p>Tim peneliti IALVI / ASICLIVAR terdiri dari ilmuwan, engineer, postdoctoral
       researcher, dan asisten riset yang bekerja pada interaksi laut-atmosfer dan
       variabilitas iklim di Benua Maritim Indonesia.</p>
  </div>
</section>

<section class="section">
  <div class="container">

    <?php
    // Kelompokkan personel berdasarkan kategori, mengikuti urutan
    // yang sudah didefinisikan pada $people_categories.
    foreach ($people_categories as $cat_key => $cat_label):

        // Filter anggota untuk kategori ini
        $members = array_filter($people, function ($person) use ($cat_key) {
            return $person['category'] === $cat_key;
        });

        if (empty($members)) { continue; } // skip kategori kosong
    ?>

    <div class="people-category">
      <h2 class="people-category__title"><?php echo htmlspecialchars($cat_label); ?></h2>

      <div class="people-grid">
        <?php foreach ($members as $person): ?>
          <a href="person.php?slug=<?php echo urlencode($person['slug']); ?>" class="person-card">
            <div class="person-card__photo"
                 style="--photo-url: url('/assets/img/people/<?php echo htmlspecialchars($person['photo']); ?>');">
            </div>
            <div class="person-card__body">
              <h3 class="person-card__name"><?php echo htmlspecialchars($person['name']); ?></h3>
              <p class="person-card__role"><?php echo htmlspecialchars($person['role']); ?></p>
              <?php if (!empty($person['degree_note'])): ?>
                <p class="person-card__note"><?php echo htmlspecialchars($person['degree_note']); ?></p>
              <?php endif; ?>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>

    <?php endforeach; ?>

  </div>
</section>

<?php if (!empty($collaborators)): ?>
<section class="section section--muted">
  <div class="container">
    <div class="section__head">
      <h2>Collaborators</h2>
      <p>Researchers and partners from other institutions who have collaborated
         with ASICLIVAR</p>
    </div>

    <ul class="collaborator-list">
      <?php foreach ($collaborators as $collab): ?>
        <li class="collaborator-list__item">
          <span class="collaborator-list__name"><?php echo htmlspecialchars($collab['name']); ?></span>
          <?php if (!empty($collab['affiliation'])): ?>
            <span class="collaborator-list__affiliation"><?php echo htmlspecialchars($collab['affiliation']); ?></span>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
<?php endif; ?>

<section class="section">
  <div class="container">
    <div class="section__head">
      <h2>Program &amp; Kesempatan Kolaborasi</h2>
    </div>
    <div class="program-boxes">
      <?php foreach ($extra_programs as $program): ?>
        <div class="program-box">
          <h3><?php echo htmlspecialchars($program['title']); ?></h3>
          <p><?php echo htmlspecialchars($program['description']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>