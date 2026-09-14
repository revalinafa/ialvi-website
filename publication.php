<?php
require_once 'config/data.php';
$page_title  = 'Publication';
$active_page = 'publication';

// ----------------------------------------------------------------------
// Publications extracted from Prof. Erma Yulihastin's research track record,
// grouped by category. Each item's 'link' points to its DOI where available.
// ----------------------------------------------------------------------
$publications = [

    'international_journals' => [
        'label' => 'International Journals',
        'items' => [
            ['year' => 2026, 'title' => 'Contribution of local and large-scale climate drivers on the extreme rainfall events in the Megacity of Jakarta', 'authors' => 'Syamsudin, F., Lestari, S., Awaludin, A., Yulihastin, E. et al.', 'venue' => 'Atmospheric Research', 'link' => 'https://doi.org/10.1016/j.atmosres.2025.108537'],
            ['year' => 2025, 'title' => 'High Wind Associated with Bow Echo Mesovortex over Cimenyan, Indonesia', 'authors' => 'Yulihastin, E. et al.', 'venue' => 'Meteorology and Atmospheric Physics', 'link' => 'https://doi.org/10.1007/s00703-025-01095-7'],
            ['year' => 2025, 'title' => 'Diverse impact of 2023 El Niño on weather patterns over the Indonesian Maritime Continent', 'authors' => 'Zehri, S., Yulihastin, E. et al.', 'venue' => 'Journal of Southern Hemisphere Earth Systems Science, 75, ES25005', 'link' => 'https://doi.org/10.1071/ES25005'],
            ['year' => 2025, 'title' => 'Land effect on propagating convective systems during the heavy rainfall event of the 2002 Jakarta flood, Indonesia', 'authors' => 'Yulihastin, E., Nuryanto, D.E., Muharsyah, R. et al.', 'venue' => 'Natural Hazards', 'link' => 'https://doi.org/10.1007/s11069-025-07390-1'],
            ['year' => 2025, 'title' => 'Temperature variability and its governing mechanisms within the Jailolo Strait, Indonesia', 'authors' => 'Basit, A. et al., Yulihastin, E.', 'venue' => 'Kuwait Journal of Science, 52(2), 100384', 'link' => 'https://doi.org/10.1016/j.kjs.2025.100384'],
            ['year' => 2025, 'title' => 'Performance of weather research forecasting model for seasonal prediction of precipitation over Indonesian Maritime Continent', 'authors' => 'Sofiati, I., Nurlatifah, A., Yulihastin, E. et al.', 'venue' => 'Kuwait Journal of Science, 52(1)', 'link' => 'https://doi.org/10.1016/j.kjs.2024.100293'],
            ['year' => 2024, 'title' => 'Cross-shelf transport of high chlorophyll-a coastal waters by frontal eddies in the south of Java sea', 'authors' => 'Ismail, M.F.A., Budiman, A.S., Basit, A., Yulihastin, E., Sofiati, I., Mujiasih, S.', 'venue' => 'Kuwait Journal of Science', 'link' => 'https://doi.org/10.1016/j.kjs.2024.100253'],
            ['year' => 2023, 'title' => 'Extreme precipitation over complex terrain using multiple remote sensing observation: A case study in the Great Bandung, Indonesia', 'authors' => 'Sinatra, T., Nugroho, G.A., Halimurrahman, Cholianawati, N., Indrawati, A., Renggono, F., Yulihastin, E. et al.', 'venue' => 'Remote Sensing Applications: Society and Environment, 32', 'link' => 'https://doi.org/10.1016/j.rsase.2023.101058'],
            ['year' => 2023, 'title' => 'Propagation of Tropical Squall Line Induced Storm Coastal Inundation Episodes in Java-Bali, Indonesia', 'authors' => 'Yulihastin, E., Fathrio, I., Sulaiman, A., Hatmaja, R.B., Suaydhi, et al.', 'venue' => 'Heliyon, 9(9)', 'link' => 'https://doi.org/10.1016/j.heliyon.2023.e19804'],
            ['year' => 2023, 'title' => 'The spatial distribution of a comprehensive drought risk index in Java, Indonesia', 'authors' => 'Avia, L.Q., Yulihastin, E., Izzaturrahim, M.H., Muharsyah, R., Satyawardhana, H., Gammamerdianti, Sofiati, I., Nurfindarti, E.', 'venue' => 'Kuwait Journal of Science', 'link' => 'https://doi.org/10.1016/j.kjs.2023.02.031'],
            ['year' => 2023, 'title' => 'Evolution of double vortices induce tropical cyclogenesis of Seroja over Flores, Indonesia', 'authors' => 'Yulihastin, E., Taofiqurohman, A., Fathrio, I. et al.', 'venue' => 'Natural Hazards, 117, 2675–2692', 'link' => 'https://doi.org/10.1007/s11069-023-05961-8'],
            ['year' => 2023, 'title' => 'Seasonal mixed layer temperature and salt balances in the Banda Sea observed by an Argo float', 'authors' => 'Ismail, M.F.A., Karstensen, J., Ribbe, J., Arifin, T., Chandra, H., Akhwady, R., Yulihastin, E., Basit, A., Budiman, A.S.', 'venue' => 'Geoscience Letters', 'link' => 'https://doi.org/10.1186/s40562-023-00266'],
            ['year' => 2022, 'title' => 'Propagation of Convective Systems Associated with Early Morning Precipitation and Different Northerly Background Winds over Western Java', 'authors' => 'Yulihastin, E., Hadi, T.W., Abdillah, M.R., Fauziah, I.R., Ningsih, N.S.', 'venue' => 'Journal of the Meteorological Society of Japan', 'link' => 'https://doi.org/10.2151/jmsj.2022-005'],
            ['year' => 2021, 'title' => 'Oceanic Effect on Precipitation Development in the Maritime Continent During Anomalously-Wet Dry Seasons in Java, Indonesia', 'authors' => 'Yulihastin, E., Suaydhi, M.F., Putranto, I., Sofiati', 'venue' => 'Indonesia Journal of Geography, 53(3)', 'link' => 'https://doi.org/10.22146/IJG.63543'],
            ['year' => 2021, 'title' => 'Improvement of Heavy Rainfall Simulated with SST Adjustment Associated with Mesoscale Convective Complexes Related to Severe Flash Flood in Luwu, Sulawesi, Indonesia', 'authors' => 'Yulihastin, E., Nuryanto, D.E., Trismidianto, Muharsyah, R.', 'venue' => 'Atmosphere, 1445, 1–16', 'link' => 'https://doi.org/10.3390/atmos12111445'],
            ['year' => 2021, 'title' => 'Convective Cold Pool Associated with Offshore Propagation of Convection System over the East Coast of Southern Sumatra, Indonesia', 'authors' => 'Yulihastin, E., Fathrio, I., Trismidianto, Nauval, F., Saufina, E., Harjupa, W., Satiadi, D.', 'venue' => 'Advances in Meteorology', 'link' => 'https://doi.org/10.1155/2021/2047609'],
            ['year' => 2020, 'title' => 'Early Morning Peaks in the Diurnal Cycle of Precipitation over the Northern Coast of West Java and Possible Influencing Factors', 'authors' => 'Yulihastin, E., Hadi, T.W., Ningsih, N.S., Syahputra, M.R.', 'venue' => 'Annales Geophysicae, 38, 231–242', 'link' => 'https://doi.org/10.5194/angeo-38-231-2020'],
        ],
    ],

    'international_proceedings' => [
        'label' => 'International Proceedings',
        'items' => [
            ['year' => 2024, 'title' => 'Variation of Convective Activities Response to the Sea Surface Temperature over the Indonesia Maritime Continent', 'authors' => 'Wardani, W.N., Yulihastin, E. et al.', 'venue' => 'Proceedings of INCREASE 2023', 'link' => 'https://doi.org/10.1007/978-981-97-0740-9_10'],
            ['year' => 2024, 'title' => 'Impact of the Extreme Indian Ocean Boreal Summer Intraseasonal Oscillation on the Weather Pattern Over the Western Maritime Continent', 'authors' => 'Iswahyudi, R.F., Yulihastin, E. et al.', 'venue' => 'Proceedings of INCREASE 2023', 'link' => 'https://doi.org/10.1007/978-981-97-0740-9_40'],
            ['year' => 2023, 'title' => 'Identification of temperature change related to frost phenomenon over Jayapura, Indonesia', 'authors' => 'Izza, M.Y.N., Astuty, S., Ramadhan, R.A., Perdani, N.N., Firdaus, M.D., Anwar, M.K., Rosdeawati, N., Yulihastin, E.', 'venue' => 'IOP Conf. Ser.: Earth Environ. Sci., 1192, 012036', 'link' => 'https://doi.org/10.1088/1755-1315/1192/1/012036'],
            ['year' => 2023, 'title' => 'The Role of Self-Organization Convective Clouds Resulting in Heavy Rainfall Over the Western Part of Java Island on July 15–16, 2022', 'authors' => 'Purwaningsih, A., Trismidianto, Andarini, D.F., Noersomadi, Harjana, T., Satiadi, D., Rahmatia, F., Saufina, E., Harjupa, W., Yulihastin, E. et al.', 'venue' => 'Proceedings of INCREASE 2022, Springer Proceedings in Physics, vol. 290', 'link' => 'https://doi.org/10.1007/978-981-19-9768-6_82'],
            ['year' => 2023, 'title' => 'Warming of the Upper Ocean in the Indonesian Maritime Continent', 'authors' => 'Ismail, M.F.A., Budiman, A.S., Basit, A., Yulihastin, E. et al.', 'venue' => 'Proceedings of INCREASE 2022, Springer Proceedings in Physics, vol. 290', 'link' => 'https://doi.org/10.1007/978-981-19-9768-6_45'],
            ['year' => 2023, 'title' => 'Ensembles Simulation on the Seasonal Rainfall Characteristics Over Indonesia Maritime Continent', 'authors' => 'Satyawardhana, H., Aji, M.A.S., Risyanto, Yulihastin, E. et al.', 'venue' => 'Proceedings of INCREASE 2022, Springer Proceedings in Physics, vol. 290', 'link' => 'https://doi.org/10.1007/978-981-19-9768-6_77'],
            ['year' => 2023, 'title' => 'Air-Sea Interaction Over Southeast Tropical Indian Ocean (SETIO) During Storm Intensification Episodes in the Early Dry Season Period', 'authors' => 'Perdani, N.N., Taofiqorahman, A., Yulihastin, E. et al.', 'venue' => 'Proceedings of INCREASE 2022, Springer Proceedings in Physics, vol. 290', 'link' => 'https://doi.org/10.1007/978-981-19-9768-6_46'],
            ['year' => 2023, 'title' => 'Comparison of Statistical Properties of Rainfall Extremes Between Megacity Jakarta and New Capital City Nusantara', 'authors' => 'Lestari, S., Syamsudin, F., Pianto, T.A., Sulistyowati, R., Yulihastin, E. et al.', 'venue' => 'Proceedings of INCREASE 2022, Springer Proceedings in Physics, vol. 290', 'link' => 'https://doi.org/10.1007/978-981-19-9768-6_31'],
            ['year' => 2021, 'title' => 'Simulation of Daily Variation of Precipitation During Anomalously-Wet Dry Seasons Event Over the Western Maritime Continent', 'authors' => 'Yulihastin, E., Suaydhi, Satyawardhana, H., Ihsan, C.N.', 'venue' => 'IOP Conf. Series: Earth and Environmental Science, 893, 012046', 'link' => 'https://doi.org/10.1088/1755-1315/893/1/012046'],
            ['year' => 2021, 'title' => 'Mode of Wind and Sea Surface Temperature Over the South China Sea During Rainy Season in Indonesia', 'authors' => 'Yulihastin, E., Hadi, T.W., Syahputra, M.R.', 'venue' => 'IOP Conf. Series: Earth and Environmental Science, 789, 012003', 'link' => 'https://doi.org/10.1088/1755-1315/789/1/012003'],
            ['year' => 2021, 'title' => 'Assessment of Marine Warming in Indonesia: A Case Study Off the Coast of West Sumatra', 'authors' => 'Ismail, M.F.A., Gerhaneu, N.Y., Yulihastin, E., Ratnawati, H.I., Purwandana, A.', 'venue' => 'IOP Conf. Series: Earth and Environmental Science, 718, 012006', 'link' => 'https://doi.org/10.1088/1755-1315/718/1/012006'],
            ['year' => 2019, 'title' => 'Propagation of the Diurnal Rainfall Related to Cold Surge-Cold Tongue Interaction over the Northern Coast of West Java', 'authors' => 'Yulihastin, E., Hadi, T.W., Ningsih, N.S.', 'venue' => 'IOP Conference Series: Earth and Environmental Science, 303, 012007', 'link' => 'https://doi.org/10.1088/1755-1315/303/1/012007'],
            ['year' => 2018, 'title' => 'Monthly Variations of Diurnal Rainfall in North Coast of West Java Indonesia During Boreal Winter Periods', 'authors' => 'Yulihastin, E., Trismidianto', 'venue' => 'IOP Conference Series: Earth and Environmental Science, 149, 012009', 'link' => 'https://doi.org/10.1088/1755-1315/149/1/012009'],
            ['year' => 2018, 'title' => 'ENSO and PDO Influence to Climate Variability in Monsoon Region of Indonesia', 'authors' => 'Yulihastin, E., Cholianawati, N., Nugroho, G.A., Satyawardhana, H., Sinatra, T.', 'venue' => 'IOP Conference Series: Earth and Environmental Science, 166, 012044', 'link' => 'https://doi.org/10.1088/1755-1315/166/1/012044'],
            ['year' => 2017, 'title' => 'MJO Modulation on Diurnal Rainfall over West Java During Pre-Monsoon and Strong El Niño Periods', 'authors' => 'Yulihastin, E., Trismidianto, Satyawardhana, H., Nugroho, G.A.', 'venue' => 'IOP Conference Series: Earth and Environmental Science, 54012029', 'link' => 'https://doi.org/10.1088/1755-1315/54/1/012029'],
            ['year' => 2017, 'title' => 'Identification of Changing in Diurnal Pattern of Rainfall in Case of Flooding in Northern Coastal of West Java 2014', 'authors' => 'Yulihastin, E., Ningsih, N.S., Hadi, T.W.', 'venue' => 'Proceeding of the 6th International Symposium for Sustainable Humanosphere, 25, 83–90', 'link' => null],
        ],
    ],

    'national_journals_books' => [
        'label' => 'National Journals & Books',
        'items' => [
            ['year' => 2024, 'title' => 'Interaction Between the Atmosphere and Ocean as a Trigger for Extreme Weather to Improve the Accuracy of Coastal Rainfall Onset Prediction', 'authors' => 'Yulihastin, E.', 'venue' => 'BRIN Publishing', 'link' => 'https://doi.org/10.55981/brin.1096'],
            ['year' => 2024, 'title' => 'Ocean Contribution to Heavy Rainfall During Dry Season in Bengkulu, Southern Sumatra', 'authors' => 'Firdaus, M.D., Syamsuddin, M.L., Yulihastin, E.', 'venue' => 'Jurnal Berkala Sainstek', 'link' => 'https://doi.org/10.19184/bst.v12i2.43989'],
            ['year' => 2024, 'title' => 'Identification of Atmospheric Rossby–Tropical Cyclone Interaction in Eastern Indonesian Waters', 'authors' => 'Suhenda, M.H.A., Yulihastin, E. et al.', 'venue' => 'Jurnal Ilmu Dasar', 'link' => null],
            ['year' => 2016, 'title' => 'Identification of the MJO Active Phase over the Indonesian Maritime Continent in the CCAM Model', 'authors' => 'Yulihastin, E., Adikusumah, N., Hermawan, E.', 'venue' => 'Buku Ilmiah Sains Atmosfer dan Aplikasinya, PSTA-LAPAN, ISBN 978-979-1458-94-8', 'link' => null],
        ],
    ],

    'intellectual_properties' => [
        'label' => 'Intellectual Properties / Patents',
        'items' => [
            ['year' => null, 'title' => 'Method for Predicting Potential Fishing Zones Based on Atmospheric and Ocean Numerical Models', 'authors' => null, 'venue' => 'Patent — Status: Published, No. S00202111390', 'link' => null],
        ],
    ],
];

// ----------------------------------------------------------------------
// Build the "Recent Publications" collection: every item (across all
// categories) published within the last 5 years, flattened into a single
// sorted list. Adjust $recent_years_span below if you want a different window.
// ----------------------------------------------------------------------
$recent_years_span = 5;
$recent_year_threshold = (int) date('Y') - ($recent_years_span - 1); // e.g. 2026 → 2022

$recent_items = [];
foreach ($publications as $key => $category) {
    foreach ($category['items'] as $pub) {
        if (!empty($pub['year']) && $pub['year'] >= $recent_year_threshold) {
            $pub['category_label'] = $category['label']; // remember origin for its badge
            $recent_items[] = $pub;
        }
    }
}

// Sort by year, newest first
usort($recent_items, fn($a, $b) => $b['year'] <=> $a['year']);

$total_publications = array_sum(array_map(fn($cat) => count($cat['items']), $publications));

include 'includes/header.php';
?>

<!-- Publication Hero Section -->
<section class="hero" style="padding: 4rem 0;">
  <div class="container" style="text-align: center;">
    <div class="hero__eyebrow" style="display: inline-block;">Research &amp; Journals</div>
    <h1>IALVI Scientific Publications</h1>
    <p style="margin: 0 auto;">Explore papers, journal articles, conference proceedings, and
       intellectual properties contributed by the Air-Sea Interaction &amp;
       Climate Variability Research Group.</p>
  </div>
</section>

<!-- Publication Content Section -->
<section class="section">
  <div class="container">

   <div class="pub-tabs" id="pubTabs">
  <button class="pub-tabs__btn is-active" data-tab="recent">
    Recent Publications <span class="pub-tabs__span">(Last <?php echo $recent_years_span; ?> Years)</span>
    <span class="pub-tabs__count"><?php echo count($recent_items); ?></span>
  </button>

  <?php foreach ($publications as $key => $category): ?>
    <button class="pub-tabs__btn" data-tab="<?php echo htmlspecialchars($key); ?>">
      <?php echo htmlspecialchars($category['label']); ?>
      <span class="pub-tabs__count"><?php echo count($category['items']); ?></span>
    </button>
  <?php endforeach; ?>

  <button class="pub-tabs__btn" data-tab="all">
    All Publications
    <span class="pub-tabs__count"><?php echo $total_publications; ?></span>
  </button>
</div>

    <!-- "Recent Publications" panel — flat, mixed-category, sorted by year -->
    <div class="pub-panel pub-panel--recent" data-panel="recent">
      <div class="pub-grid">
        <?php foreach ($recent_items as $pub): ?>
          <article class="pub-card">
            <div class="pub-card__top">
              <span class="pub-card__badge pub-card__badge--year"><?php echo htmlspecialchars($pub['year']); ?></span>
              <span class="pub-card__badge pub-card__badge--type"><?php echo htmlspecialchars($pub['category_label']); ?></span>
            </div>

            <h3 class="pub-card__title"><?php echo htmlspecialchars($pub['title']); ?></h3>

            <?php if (!empty($pub['authors'])): ?>
              <p class="pub-card__authors"><?php echo htmlspecialchars($pub['authors']); ?></p>
            <?php endif; ?>

            <p class="pub-card__venue"><em><?php echo htmlspecialchars($pub['venue']); ?></em></p>

            <?php if (!empty($pub['link'])): ?>
              <a href="<?php echo htmlspecialchars($pub['link']); ?>"
                 class="pub-card__link" target="_blank" rel="noopener noreferrer">
                View Publication &rarr;
              </a>
            <?php else: ?>
              <span class="pub-card__link pub-card__link--disabled">Link Not Available</span>
            <?php endif; ?>
          </article>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Category panels — each also renders under the "All Publications" tab -->
    <?php foreach ($publications as $key => $category): ?>
      <div class="pub-panel pub-panel--category" data-panel="<?php echo htmlspecialchars($key); ?>">
        <div class="pub-grid">
          <?php foreach ($category['items'] as $pub): ?>
            <article class="pub-card">
              <div class="pub-card__top">
                <?php if (!empty($pub['year'])): ?>
                  <span class="pub-card__badge pub-card__badge--year"><?php echo htmlspecialchars($pub['year']); ?></span>
                <?php endif; ?>
                <span class="pub-card__badge pub-card__badge--type"><?php echo htmlspecialchars($category['label']); ?></span>
              </div>

              <h3 class="pub-card__title"><?php echo htmlspecialchars($pub['title']); ?></h3>

              <?php if (!empty($pub['authors'])): ?>
                <p class="pub-card__authors"><?php echo htmlspecialchars($pub['authors']); ?></p>
              <?php endif; ?>

              <p class="pub-card__venue"><em><?php echo htmlspecialchars($pub['venue']); ?></em></p>

              <?php if (!empty($pub['link'])): ?>
                <a href="<?php echo htmlspecialchars($pub['link']); ?>"
                   class="pub-card__link" target="_blank" rel="noopener noreferrer">
                  View Publication &rarr;
                </a>
              <?php else: ?>
                <span class="pub-card__link pub-card__link--disabled">Link Not Available</span>
              <?php endif; ?>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
  var tabsWrap = document.getElementById('pubTabs');
  if (!tabsWrap) return;

  var buttons = tabsWrap.querySelectorAll('.pub-tabs__btn');
  var recentPanel    = document.querySelector('.pub-panel--recent');
  var categoryPanels = document.querySelectorAll('.pub-panel--category');

  function activateTab(tabKey) {
    buttons.forEach(function (btn) {
      btn.classList.toggle('is-active', btn.dataset.tab === tabKey);
    });

    if (tabKey === 'recent') {
      recentPanel.classList.add('is-visible');
      categoryPanels.forEach(function (p) { p.classList.remove('is-visible'); });

    } else if (tabKey === 'all') {
      recentPanel.classList.remove('is-visible');
      categoryPanels.forEach(function (p) { p.classList.add('is-visible'); });

    } else {
      recentPanel.classList.remove('is-visible');
      categoryPanels.forEach(function (p) {
        p.classList.toggle('is-visible', p.dataset.panel === tabKey);
      });
    }
  }

  buttons.forEach(function (btn) {
    btn.addEventListener('click', function () { activateTab(btn.dataset.tab); });
  });

  activateTab('recent'); // default tab saat halaman dimuat
});
</script>

<?php include 'includes/footer.php'; ?>