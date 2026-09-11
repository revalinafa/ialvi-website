<?php
require_once 'config/data.php';
$page_title  = 'Publication';
$active_page = 'publication';

// Publication data array (can later be moved to config/data.php or a database)
$publications = [
    [
        'title'   => 'Understanding the Dynamics of the Maritime Continent: A Comprehensive Review',
        'authors' => 'Erma Yulihastin, et al.',
        'journal' => 'Journal of Atmospheric Sciences',
        'year'    => '2025',
        'type'    => 'International Journal',
        'link'    => '#'
    ],
    [
        'title'   => 'Extreme Weather Prediction Using the Deep Learning-Based NAKULA Model',
        'authors' => 'M. Furqon Azis Ismail, Erma Yulihastin',
        'journal' => 'Journal of Meteorology and Geophysics',
        'year'    => '2024',
        'type'    => 'National Journal',
        'link'    => '#'
    ],
    [
        'title'   => 'Coding Literacy and Artificial Intelligence (AI) in the Digital Era',
        'authors' => 'Revalina Fidiya Anugrah, et al.',
        'journal' => 'TERNAVIA: Multidisciplinary Community Service Journal',
        'year'    => '2024',
        'type'    => 'Multidisciplinary Journal',
        'link'    => '#'
    ]
];

include 'includes/header.php';
?>

<!-- Publication-specific Hero Section -->
<section class="hero" style="padding: 4rem 0; background-color: #f8fafc; border-bottom: 1px solid #e2e8f0;">
  <div class="container text-center">
    <div class="hero__eyebrow" style="color: #3b82f6; font-weight: 600; text-transform: uppercase; margin-bottom: 1rem;">
      Research &amp; Journals
    </div>
    <h1 style="font-size: 2.5rem; color: #0f172a; margin-bottom: 1rem;">IALVI Scientific Publications</h1>
    <p style="color: #475569; max-width: 600px; margin: 0 auto; line-height: 1.6;">
      Explore papers, journal articles, and research contributions from the
      Air-Sea Interaction &amp; Climate Variability Research Group.
    </p>
  </div>
</section>

<!-- Publication List Section -->
<section class="section">
  <div class="container">
    <div class="section__head">
      <h2>Latest Publications</h2>
      <p>Featuring research outcomes from observation, modeling, and DSS development.</p>
    </div>

    <!-- Publication List Wrapper -->
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
          <a href="<?php echo $pub['link']; ?>" class="publication-card__link">Read Article &rarr;</a>
        </article>
      <?php endforeach; ?>
    </div>
    
  </div>
</section>

<?php include 'includes/footer.php'; ?>