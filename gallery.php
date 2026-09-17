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
        'type'       => 'youtube',
        'youtube_id' => '3jzotGvY9-g',
        'tag'        => 'Documentary',
        'coord'      => 'CNA Insider',
        'caption'    => 'A \'Super\' El Niño Is Coming For Southeast Asia. What Happens Next? | Insight'
    ],
[
        'type'       => 'youtube',
        'youtube_id' => 'WII2wHhArbI',
        'tag'        => 'Media',
        'coord'      => 'CNN Indonesia',
        'caption'    => 'Beware of Super El Niño, Expert: August Expected to Reach Peak Temperatures'
    ],
    [
        'type'       => 'youtube',
        'youtube_id' => 'FM6QqQUG--k',
        'tag'        => 'Talkshow',
        'coord'      => 'Jimmy Oentoro Channel',
        'caption'    => 'Extreme Weather and Early Morning Rain: A Sign of Climate Crisis in Indonesia?'
    ],
    [
        'type'       => 'youtube',
        'youtube_id' => 'FHPjFpW_jgw',
        'tag'        => 'Profile',
        'coord'      => 'Bandung, West Java',
        'caption'    => 'Climate and Atmospheric Research Centre (PRIMA) Profile Video'
    ],
    [
        'type'       => 'youtube',
        'youtube_id' => 'FM6QqQUG--k',
        'tag'        => 'Talkshow',
        'coord'      => 'Jimmy Oentoro Channel',
        'caption'    => 'Extreme Weather and Early Morning Rain: A Sign of Climate Crisis in Indonesia?'
    ],
    [
        'type'       => 'youtube',
        'youtube_id' => 'E7KDBaM58RA',
        'tag'        => 'Biography',
        'coord'      => 'BRIN',
        'caption'    => 'Research Professor Biography: Dr. Erma Yulihastin'
    ],
    [
        'type'       => 'youtube',
        'youtube_id' => 'MNb-_c-bJN4',
        'tag'        => 'Media',
        'coord'      => 'Nusantara TV',
        'caption'    => 'Highly Vulnerable Climate, Expert: Climate Change Due to Human Activities | KASI PAHAM'
    ],
        [
        'type'       => 'youtube',
        'youtube_id' => 'gOx622jPTeA',
        'tag'        => 'Media',
        'coord'      => 'BeritaSatu',
        'caption'    => 'Uncovering the Facts of Forest Fires: Why Are Kalimantan Fires Spreading Faster? | BeritaSatu'
    ],
        [
        'type'    => 'image',
        'image'   => 'Djunjunan Data Center.jpg',
        'tag'     => 'Facility',
        'coord'   => 'Bandung, West Java',
        'caption' => 'Djunjunan Data Center'
    ],
    [
        'type'    => 'image',
        'image'   => 'Diskusi di Djunjunan Data Center.jpg',
        'tag'     => 'Meeting',
        'coord'   => 'Bandung, West Java',
        'caption' => 'Discussion Session at Djunjunan Data Center'
    ],
    [
        'type'    => 'image',
        'image'   => 'hpc-server-room.jpg',
        'tag'     => 'Infrastructure',
        'coord'   => 'BRIN Data Center',
        'caption' => 'High Performance Computing (HPC) Server Room'
    ],
    [
        'type'    => 'image',
        'image'   => 'Kelompok Usaha Garam Bajulmati.jpg',
        'tag'     => 'Field Visit',
        'coord'   => 'Malang, East Java',
        'caption' => 'Visit to Bajulmati Salt Business Group'
    ],
    [
        'type'    => 'image',
        'image'   => 'Kelompok Usaha Garam Bajulmati-2.jpg',
        'tag'     => 'Field Visit',
        'coord'   => 'Malang, East Java',
        'caption' => 'Observation of the Salt Production Process'
    ],
    [
        'type'    => 'image',
        'image'   => 'MBKM.jpeg',
        'tag'     => 'Education',
        'coord'   => 'BRIN Bandung',
        'caption' => 'Group Photo with MBKM Students'
    ],
    [
        'type'    => 'image',
        'image'   => 'Meeting dengan PT MHU.jpeg',
        'tag'     => 'Collaboration',
        'coord'   => 'Meeting with Stakeholders',
        'caption' => 'Strategic Meeting with PT MHU'
    ],
    [
        'type'    => 'image',
        'image'   => 'meeting dengan PT.jpeg',
        'tag'     => 'Collaboration',
        'coord'   => 'Meeting with Stakeholders',
        'caption' => 'Discussion with Industry Partners'
    ],
    [
        'type'    => 'image',
        'image'   => 'presentasi akhir MBKM 2023.JPG',
        'tag'     => 'Education',
        'coord'   => 'BRIN Bandung',
        'caption' => 'MBKM Final Presentation Session (Part 1)'
    ],
    [
        'type'    => 'image',
        'image'   => 'presentasi akhir MBKM 2023-2.JPG',
        'tag'     => 'Education',
        'coord'   => 'BRIN Bandung',
        'caption' => 'MBKM Final Presentation Session (Part 2)'
    ],
    [
        'type'    => 'image',
        'image'   => 'presentasi akhir MBKM 2023-3.JPG',
        'tag'     => 'Education',
        'coord'   => 'BRIN Bandung',
        'caption' => 'MBKM Final Presentation Session (Part 3)'
    ],
    [
        'type'    => 'image',
        'image'   => 'presentasi akhir MBKM 2023-4.JPG',
        'tag'     => 'Education',
        'coord'   => 'BRIN Bandung',
        'caption' => 'MBKM Final Presentation Session (Part 4)'
    ],
    [
        'type'    => 'image',
        'image'   => 'presentasi akhir MBKM 2023-5.jpg',
        'tag'     => 'Education',
        'coord'   => 'BRIN Bandung',
        'caption' => 'MBKM Final Presentation Session (Part 5)'
    ],

    [
        'type'    => 'image',
        'image'   => 'Rapat antisipasi musim kemarau 2023 Serang Banten.jpg',
        'tag'     => 'Meeting',
        'coord'   => 'Serang, Banten',
        'caption' => 'Coordination Meeting on Dry Season and Weak El Nino'
    ],
    [
        'type'    => 'image',
        'image'   => 'Rapat antisipasi musim kemarau 2023 Serang Banten-2.jpg',
        'tag'     => 'Meeting',
        'coord'   => 'Serang, Banten',
        'caption' => 'Dry Season Anticipation Strategy Meeting'
    ],
    [
        'type'    => 'image',
        'image'   => 'Screenshot 2026-09-11 140250.png',
        'tag'     => 'Facility',
        'coord'   => 'Fudan University',
        'caption' => 'Server Room Facility at Fudan University'
    ],
    [
        'type'    => 'image',
        'image'   => 'Wawancara Karhutla 2026.jpeg',
        'tag'     => 'Media',
        'coord'   => 'BTV Studio',
        'caption' => 'Live Broadcast Interview on Forest and Land Fires'
    ],
    [
        'type'    => 'image',
        'image'   => 'WhatsApp Image 2026-09-15 at 14.26.12.jpeg',
        'tag'     => 'Education',
        'coord'   => 'BRIN Bandung',
        'caption' => 'Group Photo with MBKM Students in Bandung'
    ],
    [
        'type'    => 'image',
        'image'   => 'WhatsApp Image 2026-09-15 at 14.26.13.jpeg',
        'tag'     => 'Education',
        'coord'   => 'BRIN Bandung',
        'caption' => 'MBKM Students Research Activity'
    ]
];

include 'includes/header.php';
?>

<section class="hero" style="padding: 3.5rem 0 2.5rem;">
  <div class="container">
    <div class="hero__eyebrow">National Research and Innovation Agency (BRIN)</div>
    <h1>Gallery</h1>
    <p>A visual archive of our fieldwork, facilities, meetings, and team
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