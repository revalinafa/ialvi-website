<?php
require_once 'config/data.php';

$page_title  = 'Contact';
$active_page = 'contact';
include 'includes/header.php';
?>

<section class="hero" style="padding: 48px 0 32px;">
  <div class="container">
    <div class="hero__eyebrow">Get in Touch</div>
    <h1>Contact Us</h1>
    <p>Hubungi kami untuk kolaborasi riset, kunjungan, atau pertanyaan lainnya.</p>
  </div>
</section>

<section class="section">
  <div class="container contact-layout">

    <div>
      <div class="contact-card">
        <h2>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0Z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
          Alamat
        </h2>
        <p><?php echo nl2br(htmlspecialchars($contact_info['address'])); ?></p>
      </div>

      <div class="contact-card">
        <h2>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="2" y="4" width="20" height="16" rx="2"/>
            <path d="m22 6-10 7L2 6"/>
          </svg>
          Email
        </h2>
        <p><a href="mailto:<?php echo htmlspecialchars($contact_info['email']); ?>">
          <?php echo htmlspecialchars($contact_info['email']); ?>
        </a></p>

        <?php if (!empty($contact_info['phone'])): ?>
          <h2>Telepon</h2>
          <p><?php echo htmlspecialchars($contact_info['phone']); ?></p>
        <?php endif; ?>
      </div>

      <div class="contact-card">
        <h2>Media Sosial</h2>
        <?php
        function render_social_icon($platform) {
            switch (strtolower($platform)) {
                case 'instagram':
                    return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="2" width="20" height="20" rx="5"/>
                        <circle cx="12" cy="12" r="4"/>
                        <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>
                    </svg>';
                case 'linkedin':
                    return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM.5 8h4V23h-4V8zm7.5 0h3.8v2.05h.05c.53-1 1.83-2.05 3.77-2.05C19.5 8 21 10.2 21 13.9V23h-4v-8.2c0-1.95-.03-4.45-2.72-4.45-2.72 0-3.14 2.13-3.14 4.32V23H7V8z"/>
                    </svg>';
                default:
                    return '';
            }
        }
        ?>
        <ul class="contact-socials">
          <?php foreach ($contact_info['socials'] as $social): ?>
            <li>
              <a href="<?php echo htmlspecialchars($social['url']); ?>" aria-label="<?php echo htmlspecialchars($social['platform']); ?>">
                <?php echo render_social_icon($social['platform']); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <div class="contact-map">
      <iframe
        src="<?php echo htmlspecialchars($contact_info['map_embed']); ?>"
        width="100%" height="420" style="border:0;" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>