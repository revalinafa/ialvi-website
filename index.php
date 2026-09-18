<?php
require_once 'config/data.php';
require_once 'config/publications.php';
require_once 'config/gallery.php';
$page_title  = 'Home';
$active_page = 'home';

$hero_slider_images = array_values(array_filter($gallery_items, fn($item) => $item['type'] === 'image'));
$hero_slider_images = array_slice($hero_slider_images, 0, 5); // limit to 5 slidess
// ----------------------------------------------------------------------
// Fetch the 3 most recent publications (across ALL categories) for the
// "Climate Interaction & Featured Publications" story block.
// ----------------------------------------------------------------------
$all_publications_flat = [];
foreach ($publications as $cat_key => $category) {
    foreach ($category['items'] as $pub) {
        if (!empty($pub['year'])) {
            $pub['category_label'] = $category['label'];
            $all_publications_flat[] = $pub;
        }
    }
}
usort($all_publications_flat, fn($a, $b) => $b['year'] <=> $a['year']);
$top_publications = array_slice($all_publications_flat, 0, 3);

include 'includes/header.php';
?>


<!-- HERO SECTION -->
<section class="hero">
  <div class="container hero__grid">
    <div>
      <div class="hero__eyebrow">National Research and Innovation Agency</div>
      <h1>Air&ndash;Sea Interaction &amp; Climate Variability Across the Indonesian Maritime Continent</h1>
      <p>We study how the ocean and atmosphere interact over Indonesia's equatorial
         maritime continent, turning observation and modeling into decision support
         systems (DSS) that serve the nation.</p>
      <p><a href="about.php">Explore our research &rarr;</a></p>
    </div>

    <div class="hero__image">
      <div class="hero-slider" id="heroSlider">
        <div class="hero-slider__track" id="heroSliderTrack">
          <?php foreach ($hero_slider_images as $item): ?>
            <div class="hero-slider__slide">
              <a href="gallery.php" aria-label="View this photo in our gallery">
                <img src="assets/img/gallery/<?php echo htmlspecialchars($item['image']); ?>"
                     alt="<?php echo htmlspecialchars($item['caption']); ?>">
              </a>
            </div>
          <?php endforeach; ?>
        </div>

        <button class="hero-slider__nav hero-slider__nav--prev" id="heroSliderPrev" aria-label="Previous slide">&#10094;</button>
        <button class="hero-slider__nav hero-slider__nav--next" id="heroSliderNext" aria-label="Next slide">&#10095;</button>

        <div class="hero-slider__dots" id="heroSliderDots"></div>
      </div>
    </div>
  </div>
</section>

<!-- STORYTELLING SECTION -->
<section class="storytelling-section">

  <!-- Story 1 & 2: Air-Sea Interaction + Climate Interaction, side-by-side, text-only -->
  <div class="story-duo" data-reveal>
    <div class="container story-duo__grid">

      <div class="story-duo__col">
        <span class="story-block__eyebrow">Fundamental Science</span>
        <h2 class="story-block__title">Air&ndash;Sea Interaction</h2>
        <p class="story-block__desc">
          Beneath the calm surface of Indonesia's equatorial waters lies a
          constant exchange &mdash; heat, moisture, and momentum moving between
          ocean and atmosphere. We study these dynamics to understand how the
          maritime continent shapes weather far beyond its shores.
        </p>
        <a href="about.php" class="story-link">Discover the science</a>
      </div>

      <div class="story-duo__divider" aria-hidden="true"></div>

      <div class="story-duo__col">
        <span class="story-block__eyebrow">Climate Variability</span>
        <h2 class="story-block__title">Climate Interaction</h2>
        <p class="story-block__desc">
          Our findings on climate variability ripple outward &mdash; from local
          rainfall patterns to regional flood and drought risk. Every insight
          deepens our understanding of a rapidly changing climate system.
        </p>
        <a href="about.php" class="story-link">Explore our findings</a>
      </div>

    </div>
  </div>

<!-- Featured Publications — belongs to the whole research group, not one story -->
<div class="story-publications" data-reveal>
  <div class="container story-publications__grid">

    <div class="story-publications__head">
      <span class="story-block__eyebrow">Research Output</span>
      <h2 class="story-block__title">Featured Publications</h2>
      <p class="story-block__desc">
        A selection of recent work from the Air&ndash;Sea Interaction &amp;
        Climate Variability Research Group.
      </p>
    </div>

    <div class="story-publications__body">
      <ul class="story-pub-list">
        <?php foreach ($top_publications as $pub): ?>
          <li class="story-pub-list__item">
            <span class="story-pub-list__year"><?php echo htmlspecialchars($pub['year']); ?></span>
            <div class="story-pub-list__body">
              <p class="story-pub-list__title"><?php echo htmlspecialchars($pub['title']); ?></p>
              <p class="story-pub-list__venue"><?php echo htmlspecialchars($pub['venue']); ?></p>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>

      <a href="publication.php" class="story-link">View all publications</a>
    </div>

  </div>
</div>

  <!-- Story 3: The Business Process of ASICLIVAR + Stakeholder Marquee (TIDAK DIUBAH) -->
  <div class="story-block story-block--left" data-reveal>
    <div class="container story-block__grid">
      <div class="story-block__text">
        <span class="story-block__eyebrow">From Observation to Impact</span>
        <h2 class="story-block__title">The Business Process of ASICLIVAR</h2>
        <p class="story-block__desc">
          Observation becomes knowledge. Knowledge becomes prediction. Prediction
          becomes a Decision Support System (DSS) &mdash; a transformation that
          turns raw atmospheric data into tools policymakers and communities can
          act on.
        </p>
        <a href="about.php" class="story-link">See how it works</a>
      </div>
      <div class="story-block__media story-block__media--diagram">
        <img src="assets/img/story/asiclivar-business-process.jpg" alt="Business process diagram of ASICLIVAR, from input to impact">
      </div>
    </div>
  </div>

  <!-- Infinite Stakeholder Marquee (TIDAK DIUBAH) -->
  <div class="story-marquee-wrap" data-reveal>
    <div class="container" style="text-align: center;">
      <p class="story-marquee__label">Trusted by government agencies, industry, and research partners</p>
    </div>

    <div class="marquee">
      <div class="marquee__track">
        <?php
        for ($repeat = 0; $repeat < 2; $repeat++):
            foreach ($stakeholders as $stakeholder):
        ?>
          <a href="stakeholder.php" class="marquee__item" title="<?php echo htmlspecialchars($stakeholder['name']); ?>">
            <img src="assets/img/stakeholders/<?php echo htmlspecialchars($stakeholder['logo']); ?>"
                 alt="<?php echo htmlspecialchars($stakeholder['name']); ?> logo">
          </a>
        <?php
            endforeach;
        endfor;
        ?>
      </div>
    </div>
  </div>

</section>

<!-- INNOVATIONS SECTION (TETAP) -->
<section class="section section--muted">
  <div class="container">
    <div class="section__head">
      <h2>Our Innovations</h2>
      <p>A selection of our leading Decision Support Systems (DSS), developed
         for hydrometeorological disaster mitigation and food security.</p>
    </div>

    <div class="innovation__grid">
      <div class="innovation__item">
        <img class="innovation__logo" src="assets/img/logos/dss-kamajaya.png" alt="KAMAJAYA logo">
        <h3 class="innovation__name">KAMAJAYA</h3>
        <p class="innovation__desc">Medium-Term Early Season Assessment for the Indonesian Region</p>
      </div>
      <div class="innovation__item">
        <img class="innovation__logo" src="assets/img/logos/dss-semar.png" alt="SEMAR logo">
        <h3 class="innovation__name">SEMAR</h3>
        <p class="innovation__desc">Maritime Forecasting System</p>
      </div>
      <div class="innovation__item">
        <img class="innovation__logo" src="assets/img/logos/dss-antasena.png" alt="ANTASENA logo">
        <h3 class="innovation__name">ANTASENA</h3>
        <p class="innovation__desc">Salt Pond Almanac Center</p>
      </div>
    </div>

    <div class="innovation__cta">
      <a href="about.php" class="btn btn--primary">Learn more about our DSS &rarr;</a>
    </div>
  </div>
</section>

<!-- OPPORTUNITIES SECTION (TETAP) -->
<section class="section">
  <div class="container">
    <div class="callout">
      <div class="callout__content">
        <h2>Opportunities &amp; Collaboration</h2>
        <p>We welcome research collaboration with academics and students at
           every level.</p>
        <ul class="callout__list">
          <li class="callout__item">Degree by Research (Master and PhD Student)</li>
          <li class="callout__item">Postdoc</li>
          <li class="callout__item">Visiting Professor</li>
          <li class="callout__item">Internship</li>
          <li class="callout__item">Dissemination and Consultation</li>
        </ul>
        <a href="contact.php" class="btn btn--light">Contact Us &rarr;</a>
      </div>
    </div>
  </div>
</section>

<!-- NEWS SECTION -->
<section class="section section--muted">
  <div class="container">
    <div class="section__head">
      <h2>News &amp; Events</h2>
      <p>Latest updates on discussions and capacity-building activities at
         ASICLIVAR.</p>
    </div>
    <div class="news__grid">
      <?php
      $today    = strtotime('today');
      $is_past  = fn($e) => strtotime($e['date_end'] ?? $e['date']) < $today;
      $poster_events = array_filter($news_events, fn($e) => empty($e['speaker']) && empty($e['software']));
      $home_upcoming = array_filter($poster_events, fn($e) => !$is_past($e));
      $home_past     = array_filter($poster_events, $is_past);
      usort($home_upcoming, fn($a, $b) => strtotime($a['date']) <=> strtotime($b['date']));
      usort($home_past,     fn($a, $b) => strtotime($b['date']) <=> strtotime($a['date']));
      $latest_news = array_slice(array_merge($home_upcoming, $home_past), 0, 3);
      foreach ($latest_news as $event):
        $start = strtotime($event['date']);
        $end   = !empty($event['date_end']) ? strtotime($event['date_end']) : null;
        $date_display = $end
            ? htmlspecialchars(date('d', $start)) . '&ndash;' . htmlspecialchars(date('d M Y', $end))
            : htmlspecialchars(date('d M Y', $start));
      ?>
        <!-- MENGUBAH <article> MENJADI <a> -->
        <a href="news.php" class="news-card" style="text-decoration: none; color: inherit; display: block; transition: transform 0.3s ease;">
          <?php if (!empty($event['image'])): ?>
            <div class="news-card__thumb"
                 style="background-image: url('assets/img/news/<?php echo htmlspecialchars($event['image']); ?>');"></div>
          <?php endif; ?>
          <div class="news-card__body">
            <p class="news-card__date"><?php echo $date_display; ?></p>
            <h3 class="news-card__title"><?php echo htmlspecialchars($event['title']); ?></h3>
            <p class="news-card__excerpt"><?php echo htmlspecialchars($event['description']); ?></p>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
  // Fade-in-up scroll reveal for storytelling blocks
  var revealEls = document.querySelectorAll('[data-reveal]');
  if (!revealEls.length) return;

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target); // reveal once, don't re-hide on scroll up
      }
    });
  }, { threshold: 0.15 });

  revealEls.forEach(function (el) { observer.observe(el); });
});
</script>

<?php include 'includes/footer.php'; ?>