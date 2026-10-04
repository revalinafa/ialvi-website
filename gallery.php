<?php
require_once 'config/data.php';
require_once 'config/gallery.php';
$page_title  = 'Gallery';
$active_page = 'gallery';

// Ekstrak semua tag unik dari array untuk membuat tombol filter secara dinamis
$all_tags = array_unique(array_column($gallery_items, 'tag'));
sort($all_tags); // Urutkan sesuai abjad

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
    
    <!-- GALLERY FILTER TABS -->
    <div class="pub-tabs" id="galleryTabs" style="margin-bottom: 2rem; justify-content: center;">
      <button class="pub-tabs__btn is-active" data-filter="all">All Items</button>
      <?php foreach ($all_tags as $tag): ?>
        <button class="pub-tabs__btn" data-filter="<?php echo htmlspecialchars($tag); ?>">
          <?php echo htmlspecialchars($tag); ?>
        </button>
      <?php endforeach; ?>
    </div>

    <!-- MASONRY GRID -->
    <div class="gallery-masonry" id="galleryGrid">
      <?php foreach ($gallery_items as $item): ?>
        <!-- Tambahkan atribut data-tag pada setiap item untuk target filter JS -->
        <div class="gallery-item" data-tag="<?php echo htmlspecialchars($item['tag']); ?>">
          
          <?php if ($item['type'] === 'youtube'): ?>
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
            
          <?php else: ?>
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
          <?php endif; ?>

        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- SCRIPT UNTUK FILTER GALLERY -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const filterBtns = document.querySelectorAll('#galleryTabs .pub-tabs__btn');
  const galleryItems = document.querySelectorAll('.gallery-item');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      // Hapus kelas aktif dari semua tombol, lalu tambahkan ke tombol yang diklik
      filterBtns.forEach(b => b.classList.remove('is-active'));
      this.classList.add('is-active');

      const filterValue = this.getAttribute('data-filter');

      // Tampilkan atau sembunyikan item berdasarkan tag
      galleryItems.forEach(item => {
        if (filterValue === 'all' || item.getAttribute('data-tag') === filterValue) {
          item.style.display = 'block'; // Tampilkan
        } else {
          item.style.display = 'none';  // Sembunyikan
        }
      });
    });
  });
});
</script>

<?php include 'includes/footer.php'; ?>