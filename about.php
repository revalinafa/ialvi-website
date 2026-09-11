<?php
require_once 'config/data.php';
$page_title  = 'About';
$active_page = 'about';
include 'includes/header.php';
?>

<section class="hero">
  <div class="container hero__grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
    
    <!-- Text Column -->
    <div class="hero__content">
      <div class="hero__eyebrow" style="color: #3b82f6; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 1rem; font-size: 0.875rem;">
        National Research and Innovation Agency (BRIN)
      </div>
      <h1 style="font-size: 2.5rem; color: #0f172a; margin-bottom: 1.5rem; line-height: 1.2;">About ASICLIVAR</h1>
      <p style="color: #475569; line-height: 1.8; font-size: 1.125rem;">
        The Air-Sea Interaction and Climate Variability Research Group (ASICLIVAR) is a research group under the Research Center for Climate
        and Atmosphere (PRIMA), National Research and Innovation Agency (BRIN),
        focused on understanding air-sea interaction dynamics and climate
        variability across the Indonesian Maritime Continent.
      </p>
      <p style="color: #475569; line-height: 1.8; font-size: 1.125rem; margin-top: 1rem;">
        Through observation, modeling, and the development of Decision Support
        Systems (DSS), this research group supports five priority research
        clusters under the 2024&ndash;2029 National Mid-Term Development Plan
        (RPJMN), ranging from precision agriculture to transportation safety
        and renewable energy.
      </p>
    </div>

    <!-- Image Column ASICLIVAR Illustration SVG) -->
    <div class="hero__illustration">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" width="100%" height="auto" style="max-width: 450px; display: block; margin: 0 auto;">
        <!-- Background Circle -->
        <circle cx="200" cy="200" r="190" fill="#f8fafc" />
        <circle cx="200" cy="200" r="190" stroke="#e2e8f0" stroke-width="2" fill="none" stroke-dasharray="10 10" />

        <!-- Cloud Elements -->
        <path d="M 250 140 Q 260 110 290 120 A 30 30 0 0 1 340 140 Q 360 140 350 170 L 250 170 Z" fill="#e2e8f0" opacity="0.7"/>
        <path d="M 80 200 Q 90 180 110 190 A 20 20 0 0 1 140 200 Q 150 200 145 220 L 80 220 Z" fill="#e2e8f0" opacity="0.7"/>

        <!-- Ocean/Wave Elements (Bottom) -->
        <path d="M 40 320 Q 90 290 140 320 T 240 320 T 340 320 L 340 360 L 40 360 Z" fill="#93c5fd" opacity="0.5"/>
        <path d="M 10 340 Q 60 310 110 340 T 210 340 T 310 340 T 390 320 L 390 380 L 10 380 Z" fill="#3b82f6" opacity="0.8"/>

        <!-- Ocean Observation Buoy (PUMMA representation) -->
        <rect x="145" y="270" width="10" height="50" fill="#cbd5e1" />
        <circle cx="150" cy="265" r="8" fill="#fbbf24" />
        <path d="M 130 310 L 170 310 L 160 330 L 140 330 Z" fill="#ef4444" />
        
        <!-- Transmission Signal Dashed Lines -->
        <path d="M 130 110 L 150 250" stroke="#60a5fa" stroke-width="2" stroke-dasharray="6,6" fill="none" />
        <path d="M 170 110 L 290 230" stroke="#60a5fa" stroke-width="2" stroke-dasharray="6,6" fill="none" />
        
        <!-- Satellite (SADEWA / Himawari representation) -->
        <g transform="translate(90, 50)">
          <!-- Left Solar Panel -->
          <rect x="0" y="25" width="40" height="30" fill="#1e3a8a" />
          <line x1="10" y1="25" x2="10" y2="55" stroke="#60a5fa" stroke-width="1" />
          <line x1="20" y1="25" x2="20" y2="55" stroke="#60a5fa" stroke-width="1" />
          <line x1="30" y1="25" x2="30" y2="55" stroke="#60a5fa" stroke-width="1" />
          <!-- Right Solar Panel -->
          <rect x="100" y="25" width="40" height="30" fill="#1e3a8a" />
          <line x1="110" y1="25" x2="110" y2="55" stroke="#60a5fa" stroke-width="1" />
          <line x1="120" y1="25" x2="120" y2="55" stroke="#60a5fa" stroke-width="1" />
          <line x1="130" y1="25" x2="130" y2="55" stroke="#60a5fa" stroke-width="1" />
          <!-- Satellite Body -->
          <rect x="45" y="15" width="50" height="50" rx="5" fill="#cbd5e1" />
          <!-- Main Lens/Instrument -->
          <circle cx="70" cy="40" r="15" fill="#0f172a" />
          <circle cx="70" cy="40" r="6" fill="#3b82f6" />
          <!-- Bottom Transmission Antenna -->
          <path d="M 60 65 L 80 65 L 70 85 Z" fill="#94a3b8" />
        </g>

        <!-- Ground Radar (SANTANU representation) -->
        <g transform="translate(260, 220)">
          <!-- Base Tower -->
          <path d="M 35 100 L 45 30 L 65 30 L 75 100 Z" fill="#94a3b8" />
          <!-- Lattice Structure -->
          <line x1="42" y1="50" x2="68" y2="50" stroke="#cbd5e1" stroke-width="2" />
          <line x1="38" y1="75" x2="72" y2="75" stroke="#cbd5e1" stroke-width="2" />
          <!-- Radar Dome -->
          <path d="M 20 30 Q 55 -10 90 30 Z" fill="#f8fafc" stroke="#cbd5e1" stroke-width="3" />
          <!-- Radar Signal -->
          <path d="M 10 -5 A 60 60 0 0 1 100 -5" fill="none" stroke="#60a5fa" stroke-width="3" stroke-linecap="round" />
          <path d="M 25 10 A 40 40 0 0 1 85 10" fill="none" stroke="#93c5fd" stroke-width="3" stroke-linecap="round" />
        </g>
      </svg>
    </div>
    
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="leader__grid">
      <div class="leader__photo"
           style="background-image: url('assets/img/people/erma-yulihastin.png');"></div>
      <div>
        <p class="leader__quote">&ldquo;The equatorial maritime continent holds
           remarkable complexity &mdash; our task is to turn that complexity
           into knowledge and decision support systems that truly benefit
           society.&rdquo;</p>
        <p class="leader__name">Prof. Dr. Erma Yulihastin, S.Si., M.Si.</p>
        <p class="leader__role">Chief Scientist / Group Leader &mdash; ASICLIVAR</p>
      </div>
    </div>
  </div>
</section>

<section class="section section--muted">
  <div class="container">
    <div class="section__head">
      <h2>Organizational Structure</h2>
      <p>The scientific hierarchy at ASICLIVAR is designed to be
         tiered, mentoring early-career researchers and research students
         through direct guidance from senior researchers.</p>
    </div>
    <div class="org-structure">
      <div class="org-structure__level">
        <h3 class="org-structure__level-title">Chief Scientist</h3>
        <p class="org-structure__level-desc">Group Leader &amp; Professor Researcher</p>
      </div>
      <div class="org-structure__arrow">&rarr;</div>
      <div class="org-structure__level">
        <h3 class="org-structure__level-title">Senior &amp; Junior Researchers</h3>
        <p class="org-structure__level-desc">PhD Candidate &amp; permanent researchers</p>
      </div>
      <div class="org-structure__arrow">&rarr;</div>
      <div class="org-structure__level">
        <h3 class="org-structure__level-title">Postdoctoral Researchers</h3>
        <p class="org-structure__level-desc">Advanced postdoctoral research</p>
      </div>
      <div class="org-structure__arrow">&rarr;</div>
      <div class="org-structure__level">
        <h3 class="org-structure__level-title">Research Assistants / Students</h3>
        <p class="org-structure__level-desc">Master &amp; doctoral students, research interns</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section__head">
      <h2>Decision Support Systems (DSS)</h2>
      <p>ASICLIVAR develops a range of Decision Support Systems (DSS)
         based on observation, satellite data, and atmospheric modeling to
         support hydrometeorological disaster mitigation, food security, and
         transportation safety across Indonesia.</p>
    </div>

    <div class="dss-list">
      <?php
      // Show only DSS entries flagged 'featured' => true in config/data.php,
      // in an alternating zig-zag layout: odd rows → image on the right.
      $featured_dss = array_filter($dss_list, function ($dss) {
          return !empty($dss['featured']);
      });

      $i = 0;
      foreach ($featured_dss as $dss):
          $is_reverse = ($i % 2 === 1);
          $i++;
      ?>
        <article class="dss-card<?php echo $is_reverse ? ' dss-card--reverse' : ''; ?>">
          <div class="dss-card__image"
               style="background-image: url('assets/img/dss/<?php echo htmlspecialchars($dss['image']); ?>');">
          </div>
          <div class="dss-card__content">
            <span class="dss-card__tag">Decision Support System</span>
            <h3 class="dss-card__title"><?php echo htmlspecialchars($dss['name']); ?></h3>
            <p class="dss-card__tagline"><?php echo htmlspecialchars($dss['tagline']); ?></p>
            <p class="dss-card__desc"><?php echo htmlspecialchars($dss['desc']); ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>