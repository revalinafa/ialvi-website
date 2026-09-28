<?php
require_once 'config/data.php';

// Cari orang yang slug-nya cocok dengan parameter URL (?slug=...)
$slug   = $_GET['slug'] ?? '';
$person = null;
foreach ($people as $p) {
    if ($p['slug'] === $slug) {
        $person = $p;
        break;
    }
}

// Kalau slug tidak ditemukan (typo, atau orangnya sudah dihapus dari data),
// tampilkan pesan sopan alih-alih halaman kosong/error PHP.
if (!$person) {
    $page_title  = 'Profile Not Found';
    $active_page = 'people';
    include 'includes/header.php';
    ?>
    <section class="section">
      <div class="container">
        <h1>Profile Not Found</h1>
        <p>Sorry, we couldn't find that profile.</p>
        <p><a href="people.php">&larr; Back to People</a></p>
      </div>
    </section>
    <?php
    include 'includes/footer.php';
    exit;
}

$page_title  = $person['name'];
$active_page = 'people';
include 'includes/header.php';
?>

<section class="section" style="padding-top: 40px;">
  <div class="container">
    <p><a href="people.php">&larr; Back to People</a></p>
  </div>
</section>

<section class="section" style="padding-top: 0;">
  <div class="container person-detail">

    <div class="person-detail__photo"
         style="--photo-url: url('/assets/img/people/<?php echo htmlspecialchars($person['photo']); ?>');">
    </div>

    <div class="person-detail__body">
      <h1 class="person-detail__name"><?php echo htmlspecialchars($person['name']); ?></h1>
      <p class="person-detail__role"><?php echo htmlspecialchars($person['role']); ?></p>

      <?php if (!empty($person['degree_note'])): ?>
        <p class="person-detail__note"><?php echo htmlspecialchars($person['degree_note']); ?></p>
      <?php endif; ?>

      <?php if (!empty($person['bio'])): ?>
        <div class="person-detail__bio">
          <p><?php echo nl2br(htmlspecialchars($person['bio'])); ?></p>
        </div>
      <?php endif; ?>

      <?php if (!empty($person['email']) || !empty($person['research_interests']) || !empty($person['scholar_url'])): ?>
        <dl class="person-detail__meta">
          <?php if (!empty($person['email'])): ?>
            <dt>Email</dt>
            <dd><a href="mailto:<?php echo htmlspecialchars($person['email']); ?>"><?php echo htmlspecialchars($person['email']); ?></a></dd>
          <?php endif; ?>

          <?php if (!empty($person['research_interests'])): ?>
            <dt>Research Interests</dt>
            <dd><?php echo htmlspecialchars($person['research_interests']); ?></dd>
          <?php endif; ?>

          <?php if (!empty($person['scholar_url'])): ?>
            <dt>Google Scholar</dt>
            <dd><a href="<?php echo htmlspecialchars($person['scholar_url']); ?>" target="_blank" rel="noopener">View profile &rarr;</a></dd>
          <?php endif; ?>
        </dl>
      <?php endif; ?>
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>