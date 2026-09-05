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
    'home'        => ['label' => 'Home',        'href' => 'index.php'],
    'about'       => ['label' => 'About',        'href' => 'about.php'],
    'people'      => ['label' => 'People',       'href' => 'people.php'],
    'news'        => ['label' => 'News & Event', 'href' => 'news.php'],
    'publication' => ['label' => 'Publication',  'href' => 'publication.php'],
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
      <img src="assets/img/logos/asiclivar-logo.png" alt="ASICLIVAR logo">
      <span class="navbar__brand-text">
        IALVI / ASICLIVAR
        <small>Pusat Riset Iklim dan Atmosfer &mdash; BRIN</small>
      </span>
    </a>

    <button class="navbar__toggle" id="navToggle" aria-label="Buka menu">&#9776;</button>

    <ul class="navbar__menu" id="navMenu">
      <?php foreach ($nav_items as $key => $item): ?>
        <li>
          <a href="<?php echo $item['href']; ?>"
             class="<?php echo $active_page === $key ? 'is-active' : ''; ?>">
            <?php echo $item['label']; ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </nav>
</header>
