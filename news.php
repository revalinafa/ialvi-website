<?php
require_once 'config/data.php';

$page_title  = 'News & Event';
$active_page = 'news';
include 'includes/header.php';

$today = strtotime('today');
$upcoming = array_filter($news_events, fn($e) => strtotime($e['date']) >= $today);
$past     = array_filter($news_events, fn($e) => strtotime($e['date']) < $today);

usort($upcoming, fn($a, $b) => strtotime($a['date']) <=> strtotime($b['date']));
usort($past, fn($a, $b) => strtotime($b['date']) <=> strtotime($a['date']));

function render_news_card($event) {
    ?>
    <article class="news-card">
      <div class="news-card__thumb"
           style="background-image: url('assets/img/news/<?php echo htmlspecialchars($event['image']); ?>');"></div>
      <div class="news-card__body">
        <span class="news-card__type"><?php echo htmlspecialchars(ucfirst($event['type'])); ?></span>
        <h3 class="news-card__title"><?php echo htmlspecialchars($event['title']); ?></h3>
        <p class="news-card__date">
          <?php echo htmlspecialchars(date('d M Y', strtotime($event['date']))); ?>
          <?php if (!empty($event['time'])): ?> &middot; <?php echo htmlspecialchars($event['time']); ?><?php endif; ?>
        </p>
        <p class="news-card__location"><?php echo htmlspecialchars($event['location']); ?></p>
        <p class="news-card__excerpt"><?php echo htmlspecialchars($event['description']); ?></p>
        <?php if (!empty($event['link'])): ?>
          <a href="<?php echo htmlspecialchars($event['link']); ?>" class="news-card__link">Selengkapnya &rarr;</a>
        <?php endif; ?>
      </div>
    </article>
    <?php
}
?>

<section class="hero" style="padding: 48px 0 32px;">
  <div class="container">
    <div class="hero__eyebrow">Updates</div>
    <h1>News &amp; Events</h1>
    <p>Informasi terbaru seputar seminar, bootcamp, dan kegiatan
       Air-Sea Interaction &amp; Climate Variability Research Group.</p>
  </div>
</section>

<section class="section">
  <div class="container">

    <?php if (!empty($upcoming)): ?>
      <div class="event-group">
        <h2 class="event-group__title">Upcoming</h2>
        <div class="news__grid">
          <?php foreach ($upcoming as $event): render_news_card($event); endforeach; ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if (!empty($past)): ?>
      <div class="event-group">
        <h2 class="event-group__title">Past Events</h2>
        <div class="news__grid">
          <?php foreach ($past as $event): render_news_card($event); endforeach; ?>
        </div>
      </div>
    <?php endif; ?>

  </div>
</section>

<?php include 'includes/footer.php'; ?>