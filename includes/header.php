<?php
/**
 * header.php
 * Navbar global. Setiap halaman men-set $page_title dan $active_page
 * SEBELUM meng-include file ini, contoh:
 *   $page_title  = 'People';
 *   $active_page = 'people';
 *   include 'includes/header.php';
 */
if (!isset($active_page)) { $active_page = ''; }
if (!isset($page_title))  { $page_title = 'IALVI Research Group'; }

$nav_items = [
    'home'        => ['label' => 'Home',         'href' => 'index.php'],
    'about'       => ['label' => 'About',        'href' => 'about.php'],
    'people'      => ['label' => 'People',       'href' => 'people.php'],
    'news'        => ['label' => 'News & Event', 'href' => 'news.php'],
    'publication' => [
        'label'    => 'Publication',
        'href'     => 'publication.php',
        'children' => [
            'patent'      => ['label' => 'Patent',      'href' => 'patent.php'],
            'stakeholder' => ['label' => 'Stakeholder', 'href' => 'stakeholder.php'],
        ],
    ],
    'gallery'      => ['label' => 'Gallery',       'href' => 'gallery.php'],
    'contact'     => ['label' => 'Contact',      'href' => 'contact.php'],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($page_title); ?> · IALVI / ASICLIVAR Research Group</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="site-header">
  <nav class="navbar">
    <a href="index.php" class="navbar__brand">
      
      <!-- Mulai Logo SVG IALVI (Hanya Ikon) -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 100" width="45" height="45" style="margin-right: 12px; flex-shrink: 0;">
        <defs>
          <linearGradient id="oceanGrad" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" stop-color="#1e3a8a" />
            <stop offset="100%" stop-color="#3b82f6" />
          </linearGradient>
          <linearGradient id="airGrad" x1="0%" y1="100%" x2="100%" y2="0%">
            <stop offset="0%" stop-color="#93c5fd" />
            <stop offset="100%" stop-color="#eff6ff" />
          </linearGradient>
        </defs>
        <g transform="translate(0, 0)">
          <path d="M 15 45 Q 35 15 65 20 Q 80 22 90 40" fill="none" stroke="url(#airGrad)" stroke-width="8" stroke-linecap="round"/>
          <path d="M 25 55 Q 45 30 75 35" fill="none" stroke="#60a5fa" stroke-width="5" stroke-linecap="round" opacity="0.6"/>
          <path d="M 5 55 Q 30 85 55 65 T 95 70" fill="none" stroke="url(#oceanGrad)" stroke-width="8" stroke-linecap="round"/>
          <path d="M 15 70 Q 40 100 65 80 T 105 85" fill="none" stroke="#1e40af" stroke-width="5" stroke-linecap="round"/>
          <circle cx="75" cy="22" r="7" fill="#fbbf24" />
        </g>
      </svg>
      <!-- Akhir Logo SVG -->

      <span class="navbar__brand-text">
        IALVI / ASICLIVAR
      </span>
    </a>

    <button class="navbar__toggle" id="navToggle" aria-label="Buka menu">&#9776;</button>

    <ul class="navbar__menu" id="navMenu">
      <?php foreach ($nav_items as $key => $item): ?>
        <?php
          $has_children = !empty($item['children']);
          $is_active = ($active_page === $key);
          if ($has_children) {
              foreach ($item['children'] as $child_key => $child) {
                  if ($active_page === $child_key) { $is_active = true; }
              }
          }
        ?>
        <li class="navbar__item<?php echo $has_children ? ' has-dropdown' : ''; ?>">
          <a href="<?php echo $item['href']; ?>"
             class="<?php echo $is_active ? 'is-active' : ''; ?>">
            <?php echo $item['label']; ?>
            <?php if ($has_children): ?><span class="navbar__caret">&#9662;</span><?php endif; ?>
          </a>

          <?php if ($has_children): ?>
            <ul class="dropdown-menu">
              <?php foreach ($item['children'] as $child_key => $child): ?>
                <li>
                  <a href="<?php echo $child['href']; ?>"
                     class="<?php echo $active_page === $child_key ? 'is-active' : ''; ?>">
                    <?php echo $child['label']; ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </nav>
</header>