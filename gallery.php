<?php
require_once 'config/data.php';
$page_title  = 'Gallery';
$active_page = 'gallery';

// Mock gallery data array (mix of photos and YouTube videos)
// 'type' => 'image'   → uses the 'image' field (path inside assets/img/gallery/)
// 'type' => 'youtube' → uses the 'youtube_id' field to auto-generate a thumbnail
$gallery_items = [
    [
        'type'  => 'image',
        'image' => 'field-observation-01.jpg',
        'caption' => 'Installing an Automatic Weather Station (AWS) in the field',
    ],
    [
        'type'       => 'youtube',
        'youtube_id' => 'dQw4w9WgXcQ',
        'caption'    => 'IALVI Biweekly Seminar — Air-Sea Interaction Highlights',
    ],
    [
        'type'  => 'image',
        'image' => 'radar-santanu.jpg',
        'caption' => 'SANTANU X-Band radar installation',
    ],
    [
        'type'  => 'image',
        'image' => 'team-fieldwork.jpg',
        'caption' => 'Research team during coastal fieldwork',
    ],
    [
        'type'       => 'youtube',
        'youtube_id' => 'dQw4w9WgXcQ',
        'caption'    => 'Earth Sciences Bootcamp 2026 — Recap',
    ],
    [
        'type'  => 'image',
        'image' => 'baruna-jaya-vessel.jpg',
        'caption' => 'Baruna Jaya research vessel at sea',
    ],
    [
        'type'  => 'image',
        'image' => 'hpc-server-room.jpg',
        'caption' => 'High Performance Computing (HPC) server room',
    ],
    [
        'type'  => 'image',
        'image' => 'group-photo-2026.jpg',
        'caption' => 'IALVI / ASICLIVAR group photo, 2026',
    ],
    [
        'type'       => 'youtube',
        'youtube_id' => 'dQw4w9WgXcQ',
        'caption'    => 'Introduction to the KAMAJAYA Dashboard',
    ],
    [
        'type'  => 'image',
        'image' => 'satellite-dish-observation.jpg',
        'caption' => 'Satellite dish for atmospheric observation',
    ],
];

include 'includes/header.php';
?>

<section class="hero" style="padding: 3.5rem 0 2.5rem;">
  <div class="container">
    <div class="hero__eyebrow">National Research and Innovation Agency (BRIN)</div>
    <h1>Gallery</h1>
    <p>A visual archive of our fieldwork, facilities, seminars, and team
       moments &mdash; from ocean buoys to server rooms.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="gallery-masonry">
      <?php foreach ($gallery_items as $item): ?>

        <?php if ($item['type'] === 'youtube'): ?>
          <div class="gallery-item">
            <a class="gallery-item__video-link"
               href="https://www.youtube.com/watch?v=<?php echo urlencode($item['youtube_id']); ?>"
               target="_blank" rel="noopener noreferrer"
               aria-label="Watch on YouTube: <?php echo htmlspecialchars($item['caption']); ?>">
              <img class="gallery-item__media"
                   src="https://img.youtube.com/vi/<?php echo urlencode($item['youtube_id']); ?>/maxresdefault.jpg"
                   alt="<?php echo htmlspecialchars($item['caption']); ?>"
                   loading="lazy">
              <span class="gallery-item__play" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="22" height="22">
                  <path d="M8 5v14l11-7z" fill="currentColor"/>
                </svg>
              </span>
            </a>
            <p class="gallery-item__caption"><?php echo htmlspecialchars($item['caption']); ?></p>
          </div>

        <?php else: ?>
          <div class="gallery-item">
            <img class="gallery-item__media"
                 src="assets/img/gallery/<?php echo htmlspecialchars($item['image']); ?>"
                 alt="<?php echo htmlspecialchars($item['caption']); ?>"
                 loading="lazy">
            <p class="gallery-item__caption"><?php echo htmlspecialchars($item['caption']); ?></p>
          </div>
        <?php endif; ?>

      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>