<?php
require_once 'config/data.php';

$page_title  = 'News & Event';
$active_page = 'news';
include 'includes/header.php';

$today    = strtotime('today');
$is_past  = fn($e) => strtotime($e['date_end'] ?? $e['date']) < $today;

$past = array_filter($news_events, $is_past);
$upcoming_all = array_filter($news_events, fn($e) => !$is_past($e));

// Events Schedule: entri yang punya speaker/software (seri bootcamp) -> tabel.
$upcoming_schedule = array_filter($upcoming_all, fn($e) => !empty($e['speaker']) || !empty($e['software']));

// Upcoming Events: entri lain (seminar/training/conference besar dengan poster) -> grid.
$upcoming_events = array_filter($upcoming_all, fn($e) => empty($e['speaker']) && empty($e['software']));

usort($upcoming_schedule, fn($a, $b) => strtotime($a['date']) <=> strtotime($b['date']));
usort($upcoming_events,   fn($a, $b) => strtotime($a['date']) <=> strtotime($b['date']));
usort($past,              fn($a, $b) => strtotime($b['date']) <=> strtotime($a['date']));

/**
 * UPCOMING — tampilan tabel matriks (Tanggal | Tipe | Tema | Pembicara |
 * Software | Waktu & Lokasi). Tidak bergantung pada poster.
 */
function render_agenda_row($event) {
    $start = strtotime($event['date']);
    $end   = !empty($event['date_end']) ? strtotime($event['date_end']) : null;
    $date_display = $end
        ? htmlspecialchars(date('d', $start)) . '&ndash;' . htmlspecialchars(date('d M Y', $end))
        : htmlspecialchars(date('d M Y', $start));
    ?>
    <tr>
      <td class="agenda-table__date"><?php echo $date_display; ?></td>
      <td><span class="news-card__type"><?php echo htmlspecialchars(ucfirst($event['type'])); ?></span></td>
      <td>
        <span class="agenda-table__title"><?php echo htmlspecialchars($event['title']); ?></span>

      </td>
      <td><?php echo !empty($event['speaker'])  ? htmlspecialchars($event['speaker'])  : '&ndash;'; ?></td>
      <td><?php echo !empty($event['software']) ? htmlspecialchars($event['software']) : '&ndash;'; ?></td>
      <td class="agenda-table__meta">
        <?php echo !empty($event['time']) ? htmlspecialchars($event['time']) : '&ndash;'; ?><br>
        <span class="agenda-table__location"><?php echo htmlspecialchars($event['location']); ?></span>
      </td>
    </tr>
    <?php
}

/**
 * PAST — grid poster/dokumentasi. Jika poster belum ada, thumbnail
 * di-skip agar tidak muncul kotak abu-abu kosong.
 */
function render_news_card($event) {
    $start = strtotime($event['date']);
    $end   = !empty($event['date_end']) ? strtotime($event['date_end']) : null;
    $date_display = $end
        ? htmlspecialchars(date('d', $start)) . '&ndash;' . htmlspecialchars(date('d M Y', $end))
        : htmlspecialchars(date('d M Y', $start));
    ?>
    <article class="news-card">
      <?php if (!empty($event['image'])): ?>
        <div class="news-card__thumb"
             style="background-image: url('assets/img/news/<?php echo htmlspecialchars($event['image']); ?>');"></div>
      <?php endif; ?>
      <div class="news-card__body">
        <span class="news-card__type"><?php echo htmlspecialchars(ucfirst($event['type'])); ?></span>
        <h3 class="news-card__title"><?php echo htmlspecialchars($event['title']); ?></h3>
        <p class="news-card__date">
          <?php echo $date_display; ?>
          <?php if (!empty($event['time'])): ?> &middot; <?php echo htmlspecialchars($event['time']); ?><?php endif; ?>
        </p>
        <?php if (!empty($event['speaker'])): ?>
          <p class="news-card__location"><?php echo htmlspecialchars($event['speaker']); ?></p>
        <?php endif; ?>
        <p class="news-card__excerpt"><?php echo htmlspecialchars($event['description']); ?></p>
        <?php if (!empty($event['link'])): ?>
          <a href="<?php echo htmlspecialchars($event['link']); ?>" class="news-card__link">Learn more &rarr;</a>
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
    <p>Latest updates on seminars, bootcamps, and activities of the
       Air-Sea Interaction &amp; Climate Variability Research Group.</p>
  </div>
</section>

<section class="section">
  <div class="container">

    <?php if (!empty($upcoming_schedule)): ?>
      <div class="event-group">
        <h2 class="event-group__title">Events Schedule</h2>
        <div class="agenda-table__wrap">
          <table class="agenda-table">
            <colgroup>
              <col style="width: 11%;">
              <col style="width: 14%;">
              <col style="width: 26%;">
              <col style="width: 15%;">
              <col style="width: 11%;">
              <col style="width: 23%;">
            </colgroup>
            <thead>
              <tr>
                <th>Date</th>
                <th>Type</th>
                <th>Theme</th>
                <th>Speaker</th>
                <th>Software</th>
                <th>Time &amp; Location</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($upcoming_schedule as $event): render_agenda_row($event); endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    <?php endif; ?>

    <?php if (!empty($upcoming_events)): ?>
      <div class="event-group">
        <h2 class="event-group__title">Upcoming Events</h2>
        <div class="news__grid">
          <?php foreach ($upcoming_events as $event): render_news_card($event); endforeach; ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if (!empty($past)): ?>
      <div class="event-group">
        <h2 class="event-group__title"> Past Events</h2>
        <div class="news__grid">
          <?php foreach ($past as $event): render_news_card($event); endforeach; ?>
        </div>
      </div>
    <?php endif; ?>

  </div>
</section>

<?php include 'includes/footer.php'; ?>