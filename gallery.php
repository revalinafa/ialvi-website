<?php
require_once 'config/data.php';
$page_title  = 'Gallery';
$active_page = 'gallery';

// Mock gallery data array (mix of photos and YouTube videos)
// 'tag'   → small category label shown in the overlay (atmo.ai-style "telemetry" tag)
// 'coord' → short location/context string shown under the tag
// 'type'  => 'image'   → uses the 'image' field (path inside assets/img/gallery/)
// 'type'  => 'youtube' → uses the 'youtube_id' field to auto-generate a thumbnail
$gallery_items = [
    [
        'type'    => 'image',
        'image'   => 'field-observation-01.jpg',
        'tag'     => 'Field Observation',
        'coord'   => 'Bandung, West Java',
        'caption' => 'Installing an Automatic Weather Station (AWS)',
    ],
    [
        'type'       => 'youtube',
        'youtube_id' => 'FHPjFpW_jgw',
        'tag'        => 'Seminar',
        'coord'      => 'KST Samaun Samadikun',
        'caption'    => 'IALVI Biweekly Seminar — Air-Sea Interaction Highlights',
    ],
    [
        'type'    => 'image',
        'image'   => 'radar-santanu.jpg',
        'tag'     => 'Facility',
        'coord'   => 'Coastal Radar Site',
        'caption' => 'SANTANU X-Band radar installation',
    ],
    [
        'type'    => 'image',
        'image'   => 'team-fieldwork.jpg',
        'tag'     => 'Fieldwork',
        'coord'   => 'South Coast, Java',
        'caption' => 'Research team during coastal fieldwork',
    ],
    [
        'type'       => 'youtube',
        'youtube_id' => 'FM6QqQUG--k',
        'tag'        => 'Bootcamp',
        'coord'      => 'KST Samaun Samadikun',
        'caption'    => 'Earth Sciences Bootcamp 2026 — Recap',
    ],
    [
        'type'    => 'image',
        'image'   => 'baruna-jaya-vessel.jpg',
        'tag'     => 'Research Vessel',
        'coord'   => 'Indonesian Waters',
        'caption' => 'Baruna Jaya research vessel at sea',
    ],
    [
        'type'    => 'image',
        'image'   => 'hpc-server-room.jpg',
        'tag'     => 'Infrastructure',
        'coord'   => 'BRIN Data Center',
        'caption' => 'High Performance Computing (HPC) server room',
    ],
    [
        'type'    => 'image',
        'image'   => 'group-photo-2026.jpg',
        'tag'     => 'Team',
        'coord'   => 'IALVI / ASICLIVAR',
        'caption' => 'Group photo, 2026',
    ],
    [
        'type'       => 'youtube',
        'youtube_id' => 'E7KDBaM58RA',
        'tag'        => 'Product Demo',
        'coord'      => 'KAMAJAYA DSS',
        'caption'    => 'Introduction to the KAMAJAYA Dashboard',
    ],
    [
        'type'    => 'image',
        'image'   => 'satellite-dish-observation.jpg',
        'tag'     => 'Observation',
        'coord'   => 'Ground Station',
        'caption' => 'Satellite dish for atmospheric observation',
    ],
        [
        'type'    => 'image',
        'image'   => 'Screenshot 2026-09-11 140250.png',
        'tag'     => 'Field Observation',
        'coord'   => 'Bandung, West Java',
        'caption' => 'Installing an Automatic Weather Station (AWS)',
    ],
    [
        'type'       => 'youtube',
        'youtube_id' => 'WII2wHhArbI',
        'tag'        => 'Seminar',
        'coord'      => 'KST Samaun Samadikun',
        'caption'    => 'IALVI Biweekly Seminar — Air-Sea Interaction Highlights',
    ],
    [
        'type'    => 'image',
        'image'   => 'IMG-20230504-WA0049.jpg',
        'tag'     => 'Facility',
        'coord'   => 'Coastal Radar Site',
        'caption' => 'SANTANU X-Band radar installation',
    ],
    [
        'type'    => 'image',
        'image'   => 'IMG-20230404-WA0080.jpg',
        'tag'     => 'Fieldwork',
        'coord'   => 'South Coast, Java',
        'caption' => 'Research team during coastal fieldwork',
    ],
    [
        'type'       => 'youtube',
        'youtube_id' => 'kFkSfkrk1tc',
        'tag'        => 'Bootcamp',
        'coord'      => 'KST Samaun Samadikun',
        'caption'    => 'Earth Sciences Bootcamp 2026 — Recap',
    ],
    [
        'type'    => 'image',
        'image'   => 'IMG_20240221_131032.jpg',
        'tag'     => 'Research Vessel',
        'coord'   => 'Indonesian Waters',
        'caption' => 'Baruna Jaya research vessel at sea',
    ],
    [
        'type'    => 'image',
        'image'   => 'IMG_20240221_130419.jpg',
        'tag'     => 'Infrastructure',
        'coord'   => 'BRIN Data Center',
        'caption' => 'High Performance Computing (HPC) server room',
    ],
    [
        'type'    => 'image',
        'image'   => 'IMG_20240221_120858.jpg',
        'tag'     => 'Team',
        'coord'   => 'IALVI / ASICLIVAR',
        'caption' => 'Group photo, 2026',
    ],
    [
        'type'       => 'youtube',
        'youtube_id' => 'gOx622jPTeA',
        'tag'        => 'Product Demo',
        'coord'      => 'KAMAJAYA DSS',
        'caption'    => 'Introduction to the KAMAJAYA Dashboard',
    ],
    [
        'type'    => 'image',
        'image'   => 'DSC_0401.JPG',
        'tag'     => 'Observation',
        'coord'   => 'Ground Station',
        'caption' => 'Satellite dish for atmospheric observation',
    ],
        [
        'type'    => 'image',
        'image'   => 'DSC_0393.JPG',
        'tag'     => 'Observation',
        'coord'   => 'Ground Station',
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
            <a class="gallery-item__frame"
               href="https://www.youtube.com/watch?v=<?php echo urlencode($item['youtube_id']); ?>"
               target="_blank" rel="noopener noreferrer"
               aria-label="Watch on YouTube: <?php echo htmlspecialchars($item['caption']); ?>">
              <img class="gallery-item__media"
                   src="https://img.youtube.com/vi/<?php echo urlencode($item['youtube_id']); ?>/maxresdefault.jpg"
                   alt="<?php echo htmlspecialchars($item['caption']); ?>"
                   loading="lazy">

              <span class="gallery-item__play" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="20" height="20">
                  <path d="M8 5v14l11-7z" fill="currentColor"/>
                </svg>
              </span>

              <span class="gallery-item__corner" aria-hidden="true">&#8599;</span>

              <span class="gallery-item__overlay">
                <span class="gallery-item__tag"><?php echo htmlspecialchars($item['tag']); ?></span>
                <span class="gallery-item__coord"><?php echo htmlspecialchars($item['coord']); ?></span>
              </span>
            </a>
            <p class="gallery-item__caption"><?php echo htmlspecialchars($item['caption']); ?></p>
          </div>

        <?php else: ?>
          <div class="gallery-item">
            <div class="gallery-item__frame">
              <img class="gallery-item__media"
                   src="assets/img/gallery/<?php echo htmlspecialchars($item['image']); ?>"
                   alt="<?php echo htmlspecialchars($item['caption']); ?>"
                   loading="lazy">

              <span class="gallery-item__corner" aria-hidden="true">&#8599;</span>

              <span class="gallery-item__overlay">
                <span class="gallery-item__tag"><?php echo htmlspecialchars($item['tag']); ?></span>
                <span class="gallery-item__coord"><?php echo htmlspecialchars($item['coord']); ?></span>
              </span>
            </div>
            <p class="gallery-item__caption"><?php echo htmlspecialchars($item['caption']); ?></p>
          </div>
        <?php endif; ?>

      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>