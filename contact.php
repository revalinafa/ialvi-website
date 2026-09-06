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
        <h2>Alamat</h2>
        <p><?php echo nl2br(htmlspecialchars($contact_info['address'])); ?></p>
      </div>

      <div class="contact-card">
        <h2>Email</h2>
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
        <ul class="contact-socials">
          <?php foreach ($contact_info['socials'] as $social): ?>
            <li><a href="<?php echo htmlspecialchars($social['url']); ?>"><?php echo htmlspecialchars($social['platform']); ?></a></li>
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