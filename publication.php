<?php
require_once 'config/data.php';
require_once 'config/publications.php';
$page_title  = 'Publication';
$active_page = 'publication';

// ----------------------------------------------------------------------
// Publications extracted from Prof. Erma Yulihastin's research track record,
// grouped by category. Each item's 'link' points to its DOI where available.
// ----------------------------------------------------------------------

// ----------------------------------------------------------------------
// Build the "Recent Publications" collection: every item (across all
// categories) published within the last 5 years, flattened into a single
// sorted list. Adjust $recent_years_span below if you want a different window.
// ----------------------------------------------------------------------
$recent_years_span = 5;
$recent_year_threshold = (int) date('Y') - ($recent_years_span - 1); // e.g. 2026 → 2022

$recent_items = [];
foreach ($publications as $key => $category) {
    foreach ($category['items'] as $pub) {
        if (!empty($pub['year']) && $pub['year'] >= $recent_year_threshold) {
            $pub['category_label'] = $category['label']; // remember origin for its badge
            $recent_items[] = $pub;
        }
    }
}

// Sort by year, newest first
usort($recent_items, fn($a, $b) => $b['year'] <=> $a['year']);

$total_publications = array_sum(array_map(fn($cat) => count($cat['items']), $publications));

include 'includes/header.php';
?>

<!-- Publication Hero Section -->
<section class="hero" style="padding: 4rem 0;">
  <div class="container" style="text-align: center;">
    <div class="hero__eyebrow" style="display: inline-block;">Research &amp; Journals</div>
    <h1>IALVI Scientific Publications</h1>
    <p style="margin: 0 auto;">Explore papers, journal articles, conference proceedings, and
       intellectual properties contributed by the Air-Sea Interaction &amp;
       Climate Variability Research Group.</p>
  </div>
</section>

<!-- Publication Content Section -->
<section class="section">
  <div class="container">

   <div class="pub-tabs" id="pubTabs">
  <button class="pub-tabs__btn is-active" data-tab="recent">
    Recent Publications <span class="pub-tabs__span">(Last <?php echo $recent_years_span; ?> Years)</span>
    <span class="pub-tabs__count"><?php echo count($recent_items); ?></span>
  </button>

  <?php foreach ($publications as $key => $category): ?>
    <button class="pub-tabs__btn" data-tab="<?php echo htmlspecialchars($key); ?>">
      <?php echo htmlspecialchars($category['label']); ?>
      <span class="pub-tabs__count"><?php echo count($category['items']); ?></span>
    </button>
  <?php endforeach; ?>

  <button class="pub-tabs__btn" data-tab="all">
    All Publications
    <span class="pub-tabs__count"><?php echo $total_publications; ?></span>
  </button>
</div>

    <!-- "Recent Publications" panel — flat, mixed-category, sorted by year -->
    <div class="pub-panel pub-panel--recent" data-panel="recent">
      <div class="pub-grid">
        <?php foreach ($recent_items as $pub): ?>
          <article class="pub-card">
            <div class="pub-card__top">
              <span class="pub-card__badge pub-card__badge--year"><?php echo htmlspecialchars($pub['year']); ?></span>
              <span class="pub-card__badge pub-card__badge--type"><?php echo htmlspecialchars($pub['category_label']); ?></span>
            </div>

            <h3 class="pub-card__title"><?php echo htmlspecialchars($pub['title']); ?></h3>

            <?php if (!empty($pub['authors'])): ?>
              <p class="pub-card__authors"><?php echo htmlspecialchars($pub['authors']); ?></p>
            <?php endif; ?>

            <p class="pub-card__venue"><em><?php echo htmlspecialchars($pub['venue']); ?></em></p>

            <?php if (!empty($pub['link'])): ?>
              <a href="<?php echo htmlspecialchars($pub['link']); ?>"
                 class="pub-card__link" target="_blank" rel="noopener noreferrer">
                View Publication &rarr;
              </a>
            <?php else: ?>
              <span class="pub-card__link pub-card__link--disabled">Link Not Available</span>
            <?php endif; ?>
          </article>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Category panels — each also renders under the "All Publications" tab -->
    <?php foreach ($publications as $key => $category): ?>
      <div class="pub-panel pub-panel--category" data-panel="<?php echo htmlspecialchars($key); ?>">
        <div class="pub-grid">
          <?php foreach ($category['items'] as $pub): ?>
            <article class="pub-card">
              <div class="pub-card__top">
                <?php if (!empty($pub['year'])): ?>
                  <span class="pub-card__badge pub-card__badge--year"><?php echo htmlspecialchars($pub['year']); ?></span>
                <?php endif; ?>
                <span class="pub-card__badge pub-card__badge--type"><?php echo htmlspecialchars($category['label']); ?></span>
              </div>

              <h3 class="pub-card__title"><?php echo htmlspecialchars($pub['title']); ?></h3>

              <?php if (!empty($pub['authors'])): ?>
                <p class="pub-card__authors"><?php echo htmlspecialchars($pub['authors']); ?></p>
              <?php endif; ?>

              <p class="pub-card__venue"><em><?php echo htmlspecialchars($pub['venue']); ?></em></p>

              <?php if (!empty($pub['link'])): ?>
                <a href="<?php echo htmlspecialchars($pub['link']); ?>"
                   class="pub-card__link" target="_blank" rel="noopener noreferrer">
                  View Publication &rarr;
                </a>
              <?php else: ?>
                <span class="pub-card__link pub-card__link--disabled">Link Not Available</span>
              <?php endif; ?>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
  var tabsWrap = document.getElementById('pubTabs');
  if (!tabsWrap) return;

  var buttons = tabsWrap.querySelectorAll('.pub-tabs__btn');
  var recentPanel    = document.querySelector('.pub-panel--recent');
  var categoryPanels = document.querySelectorAll('.pub-panel--category');

  function activateTab(tabKey) {
    buttons.forEach(function (btn) {
      btn.classList.toggle('is-active', btn.dataset.tab === tabKey);
    });

    if (tabKey === 'recent') {
      recentPanel.classList.add('is-visible');
      categoryPanels.forEach(function (p) { p.classList.remove('is-visible'); });

    } else if (tabKey === 'all') {
      recentPanel.classList.remove('is-visible');
      categoryPanels.forEach(function (p) { p.classList.add('is-visible'); });

    } else {
      recentPanel.classList.remove('is-visible');
      categoryPanels.forEach(function (p) {
        p.classList.toggle('is-visible', p.dataset.panel === tabKey);
      });
    }
  }

  buttons.forEach(function (btn) {
    btn.addEventListener('click', function () { activateTab(btn.dataset.tab); });
  });

  activateTab('recent'); // default tab saat halaman dimuat
});
</script>

<?php include 'includes/footer.php'; ?>