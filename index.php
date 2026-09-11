<?php
require_once 'config/data.php';
$page_title  = 'Home';
$active_page = 'home';
include 'includes/header.php';
?>

<section class="hero">
  <div class="container hero__grid">
    <div>
      <div class="hero__eyebrow">National Research and Innovation Agency (BRIN)</div>
      <h1>Understanding Air-Sea Interaction Across the Indonesian Maritime Continent</h1>
      <p>We study how the ocean and atmosphere interact over Indonesia's equatorial
         maritime continent, turning observation and modeling into decision support
         systems (DSS) that serve the nation.</p>
      <p><a href="about.php">Explore our research &rarr;</a></p>
    </div>

    <div class="hero__image">
      <div class="hero-slider" id="heroSlider">
        <div class="hero-slider__track" id="heroSliderTrack">
          <div class="hero-slider__slide">
            <img src="assets/img/hero/earth-ocean-atmosphere.jpg" alt="Earth, ocean, and atmosphere imagery">
          </div>
          <div class="hero-slider__slide">
            <img src="assets/img/hero/satellite-observation.jpg" alt="Satellite atmospheric observation">
          </div>
          <div class="hero-slider__slide">
            <img src="assets/img/hero/ocean-monitoring.jpg" alt="Ocean monitoring system">
          </div>
        </div>

        <button class="hero-slider__nav hero-slider__nav--prev" id="heroSliderPrev" aria-label="Previous slide">&#10094;</button>
        <button class="hero-slider__nav hero-slider__nav--next" id="heroSliderNext" aria-label="Next slide">&#10095;</button>

        <div class="hero-slider__dots" id="heroSliderDots"></div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section__head">
      <h2>Discover Our Research Story</h2>
      <p>From ocean-atmosphere dynamics to real-world impact &mdash; see how our
         research unfolds across three interconnected stories.</p>
    </div>

    <div class="story-grid">
      <a href="about.php" class="story-card">
        <div class="story-card__image"
             style="background-image: url('assets/img/story/air-sea-interaction.jpg');"></div>
        <div class="story-card__overlay">
          <h3 class="story-card__title">Air-Sea Interaction</h3>
          <p class="story-card__caption">How ocean and atmosphere shape each other
             across the equatorial maritime continent.</p>
          <span class="story-card__link">Discover the story &rarr;</span>
        </div>
      </a>

      <a href="publication.php" class="story-card">
        <div class="story-card__image"
             style="background-image: url('assets/img/story/climate-interaction.jpg');"></div>
        <div class="story-card__overlay">
          <h3 class="story-card__title">Climate Interaction &amp; Publications</h3>
          <p class="story-card__caption">Published findings on climate variability
             and its cascading effects across the region.</p>
          <span class="story-card__link">Discover the story &rarr;</span>
        </div>
      </a>

      <a href="about.php" class="story-card">
        <div class="story-card__image"
             style="background-image: url('assets/img/story/asiclivar-business-process.jpg');"></div>
        <div class="story-card__overlay">
          <h3 class="story-card__title">The Business Process of ASICLIVAR</h3>
          <p class="story-card__caption">From observation to knowledge, prediction,
             and DSS/T &mdash; see how research becomes real-world impact.</p>
          <span class="story-card__link">Discover the story &rarr;</span>
        </div>
      </a>
    </div>
  </div>
</section>

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
        <img class="innovation__logo" src="assets/img/logos/dss-nakula.png" alt="NAKULA logo">
        <h3 class="innovation__name">NAKULA</h3>
        <p class="innovation__desc">AI-Based Extreme Weather Prediction</p>
      </div>
    </div>

    <div class="innovation__cta">
      <a href="about.php" class="btn btn--primary">Learn more about our DSS &rarr;</a>
    </div>
  </div>
</section>

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

<section class="section section--muted">
  <div class="container">
    <div class="section__head">
      <h2>News &amp; Events</h2>
      <p>Latest updates on discussions and capacity-building activities at
         ASICLIVAR.</p>
    </div>

    <div class="news__grid">
      <?php
      $latest_news = $news_events;
      usort($latest_news, fn($a, $b) => strtotime($b['date']) <=> strtotime($a['date']));
      $latest_news = array_slice($latest_news, 0, 3);
      foreach ($latest_news as $event):
      ?>
        <article class="news-card">
          <div class="news-card__thumb"
               style="background-image: url('assets/img/news/<?php echo htmlspecialchars($event['image']); ?>');"></div>
          <div class="news-card__body">
            <p class="news-card__date"><?php echo htmlspecialchars(date('d M Y', strtotime($event['date']))); ?></p>
            <h3 class="news-card__title"><?php echo htmlspecialchars($event['title']); ?></h3>
            <p class="news-card__excerpt"><?php echo htmlspecialchars($event['description']); ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>