<?php
/**
 * data.php
 * Static (mock) data source for the IALVI / ASICLIVAR research group.
 * This section can later be replaced with a MySQL database query without
 * changing how it is called on any page (people.php, about.php, etc).
 */

// ----------------------------------------------------------------------
// 1. PEOPLE CATEGORIES — array order determines display order on the page
// ----------------------------------------------------------------------
$people_categories = [
    'chief_scientist'   => 'Chief Scientist / Professor',
    'senior_researcher' => 'Senior Researchers',
    'junior_researcher' => 'Junior Researchers',
    'postdoc_ra'        => 'Postdoctoral and Research Assistants Fellows',
];

// ----------------------------------------------------------------------
// 2. TEAM MEMBERS
//    'photo' field refers to assets/img/people/<slug>.png
//    'degree_note' = ongoing study note (Master's/PhD) if applicable
// ----------------------------------------------------------------------
$people = [

    // --- Chief Scientist / Professor ---
    [
        'slug'        => 'erma-yulihastin',
        'name'        => 'Prof. Dr. Erma Yulihastin, S.Si., M.Si.',
        'role'        => 'Chief Scientist / Group Leader',
        'category'    => 'chief_scientist',
        'degree_note' => 'Professor Researcher',
        'photo'       => 'erma-yulihastin.png',
    ],

    // --- Senior Researchers ---
    [
        'slug'        => 'furqon-azis-ismail',
        'name'        => 'M. Furqon Azis Ismail, S.Si., M.Sc., Ph.D.',
        'role'        => 'Senior Researcher (',
        'category'    => 'senior_researcher',
        'degree_note' => null,
        'photo'       => 'furqon-azis-ismail.png',
    ],
    [
        'slug'        => 'abdul-basit',
        'name'        => 'Dr.rer.nat. Abdul Basit, S.Si., M.App.Sc.',
        'role'        => 'Senior Researcher',
        'category'    => 'senior_researcher',
        'degree_note' => null,
        'photo'       => 'abdul-basit.png',
    ],
    [
        'slug'        => 'fiolenta-marpaung',
        'name'        => 'Fiolenta Marpaung, S.Si., M.Sc., Ph.D.',
        'role'        => 'Senior Researcher',
        'category'    => 'senior_researcher',
        'degree_note' => null,
        'photo'       => 'fiolenta-marpaung.png',
    ],
    [
        'slug'        => 'suaydhi',
        'name'        => 'Suaydhi, M.Sc.',
        'role'        => 'Senior Researcher',
        'category'    => 'senior_researcher',
        'degree_note' => 'Doctoral Student (PhD, Australia)',
        'photo'       => 'suaydhi.png',
    ],

    // --- Junior Researchers ---
    [
        'slug'        => 'eka-putri-wulandari',
        'name'        => 'Eka Putri Wulandari, S.Si., M.Si.',
        'role'        => 'Junior Researcher',
        'category'    => 'junior_researcher',
        'degree_note' => null,
        'photo'       => 'eka-putri-wulandari.png',
    ],
    [
        'slug'        => 'rahaden-bagas-hatmaja',
        'name'        => 'Rahaden Bagas Hatmaja, S.Si., M.Si.',
        'role'        => 'Junior Researcher',
        'category'    => 'junior_researcher',
        'degree_note' => 'Doctoral Student (PhD, USA)',
        'photo'       => 'rahaden-bagas-hatmaja.png',
    ],
    [
        'slug'        => 'amalia-nurlatifah',
        'name'        => 'Amalia Nurlatifah, S.Si., M.T.',
        'role'        => 'Junior Researcher',
        'category'    => 'junior_researcher',
        'degree_note' => 'Doctoral Student (PhD, UK)',
        'photo'       => 'amalia-nurlatifah.png',
    ],

    // --- Postdoctoral and Research Assistants Fellows ---
    [
        'slug'        => 'erlin-beliyana',
        'name'        => 'Dr. Erlin Beliyana, S.Si., M.Si.',
        'role'        => 'Postdoctoral Researcher',
        'category'    => 'postdoc_ra',
        'degree_note' => null,
        'photo'       => 'erlin-beliyana.png',
    ],
    [
        'slug'        => 'inovasita-alifdini',
        'name'        => 'Dr.rer.nat. Inovasita Alifdini, S.Kel., M.Phil.',
        'role'        => 'Postdoctoral Researcher',
        'category'    => 'postdoc_ra',
        'degree_note' => null,
        'photo'       => 'inovasita-alifdini.png',
    ],
    [
        'slug'        => 'amirotul-bahiyah',
        'name'        => 'Dr. Amirotul Bahiyah, S.Si., M.Sc.',
        'role'        => 'Postdoctoral Researcher',
        'category'    => 'postdoc_ra',
        'degree_note' => 'Candidate',
        'photo'       => 'amirotul-bahiyah.png',
    ],
    [
        'slug'        => 'gandhi-napitupulu',
        'name'        => 'Dr. Gandhi Napitupulu, S.Si., M.Sc.',
        'role'        => 'Postdoctoral Researcher',
        'category'    => 'postdoc_ra',
        'degree_note' => 'Candidate',
        'photo'       => 'gandhi-napitupulu.png',
    ],
    [
        'slug'        => 'narizka-nanda-purwadani',
        'name'        => 'Narizka Nanda Purwadani, S.Si., M.Si.',
        'role'        => 'Research Assistant',
        'category'    => 'postdoc_ra',
        'degree_note' => 'Doctoral Student (PhD, ITB)',
        'photo'       => 'narizka-nanda-purwadani.png',
    ],
    [
        'slug'        => 'alya-fitri-syalsabilla',
        'name'        => 'Alya Fitri Syalsabilla, S.Stat., M.Stat.',
        'role'        => 'Research Assistant',
        'category'    => 'postdoc_ra',
        'degree_note' => 'Doctoral Student (PhD in Earth Sciences, ITB)',
        'photo'       => 'alya-fitri-syalsabilla.png',
    ],
    [
        'slug'        => 'syifa-alifia-azzahra',
        'name'        => 'Syifa Alifia Azzahra, S.Si.',
        'role'        => 'Research Assistant',
        'category'    => 'postdoc_ra',
        'degree_note' => 'Master Student (Physics, ITB)',
        'photo'       => 'syifa-alifia-azzahra.png',
    ],
    [
        'slug'        => 'afiq-mahasin',
        'name'        => 'Afiq Mahasin, S.Si.',
        'role'        => 'Research Assistant',
        'category'    => 'postdoc_ra',
        'degree_note' => 'Master Student (Physics, ITB)',
        'photo'       => 'afiq-mahasin.png',
    ],
    [
        'slug'        => 'sanaullah-zehri',
        'name'        => 'Sanaullah Zehri, S.Pd.',
        'role'        => 'Research Assistant',
        'category'    => 'postdoc_ra',
        'degree_note' => 'Master Student (Physics, ITB)',
        'photo'       => 'sanaullah-zehri.png',
    ],
    [
        'slug'        => 'ikbal-nur-dian-triatmojo',
        'name'        => 'M. Ikbal Nur Dian Triatmojo, S.Si.',
        'role'        => 'Research Assistant',
        'category'    => 'postdoc_ra',
        'degree_note' => 'Master Student (Geodesy & Geomatics, ITB) — Cand.',
        'photo'       => 'ikbal-nur-dian-triatmojo.png',
    ],
];

// ----------------------------------------------------------------------
// 3. ADDITIONAL PROGRAMS (displayed as boxes below the People grid)
// ----------------------------------------------------------------------
$extra_programs = [
    [
        'title'       => 'Visiting Professor',
        'description' => 'A visiting professor program with partner institutions (domestic & international) for research collaboration and joint advisory.',
    ],
    [
        'title'       => 'Student Exchange Opportunity',
        'description' => 'Student exchange opportunities for internships, final projects, and joint research with partner universities, including access to HPC facilities, the SANTANU Radar, and the Baruna Jaya research vessel.',
    ],
];

// ----------------------------------------------------------------------
// 4. DECISION SUPPORT SYSTEMS (for the About page)
// ----------------------------------------------------------------------
$dss_list = [
    // 'featured' => true → shown in the zig-zag grid on the About page
    ['slug' => 'semar',    'name' => 'SEMAR',    'tagline' => 'Maritime Forecasting System', 'desc' => 'Provides real-time vessel position, potential fishing zone data, marine and atmospheric weather, and radio communication frequency information to ensure sailing safety and boost capture fisheries production.', 'image' => 'semar.jpg', 'featured' => true],
    ['slug' => 'arjuna',   'name' => 'ARJUNA',   'tagline' => 'Short-to-Medium Term Flood Risk Analysis for Indonesian Climate Change Anticipation', 'desc' => 'A hydrometeorological early warning system providing high-resolution weather-to-seasonal monitoring and prediction at specific sites, delivering daily forecasts up to six months ahead for flood disaster preparedness.', 'image' => 'arjuna.jpg', 'featured' => true],
    ['slug' => 'antasena', 'name' => 'ANTASENA', 'tagline' => 'Salt Pond Almanac Center', 'desc' => 'Provides recommendations on optimal embankment and harvesting timing for salt ponds based on rainfall predictions, helping salt farmers determine the best production schedule.', 'image' => 'antasena.jpg', 'featured' => true],
    ['slug' => 'kamajaya', 'name' => 'KAMAJAYA', 'tagline' => 'Medium-Term Early Season Assessment for the Indonesian Region', 'desc' => 'Provides high-resolution atmospheric observation and prediction (weather, onset of season, climate variability) across all of Indonesia to support Smart Farming and Precision Farming.', 'image' => 'kamajaya.jpg', 'featured' => true],
    ['slug' => 'kresna',   'name' => 'KRESNA',   'tagline' => 'Knowledge of Risk and Early Drought-Fire Warning System for Needed Action', 'desc' => 'Provides drought and land-fire risk indices (Drought Hazard Index, Fire Hazard Index, and a combined index) to support forest and land fire preparedness and mitigation.', 'image' => 'kresna.jpg', 'featured' => true],

    ['slug' => 'srikandi', 'name' => 'SRIKANDI', 'tagline' => 'Indonesian Atmospheric Composition Information System', 'desc' => 'Air quality monitoring from satellite sensors and atmospheric chemistry models.', 'image' => 'srikandi.jpg', 'featured' => false],
    ['slug' => 'santanu',  'name' => 'SANTANU',  'tagline' => 'Spatial Rainfall Monitoring System', 'desc' => 'High-resolution rainfall detection based on X-Band radar.', 'image' => 'santanu.jpg', 'featured' => false],
    ['slug' => 'jatayu',   'name' => 'JATAYU',   'tagline' => 'Atmospheric Observation Network for Air Transportation', 'desc' => 'Atmospheric dynamics prediction to support air transportation safety.', 'image' => 'jatayu.jpg', 'featured' => false],
    ['slug' => 'srirama',  'name' => 'SRIRAMA',  'tagline' => 'Indonesian Climate Change Information System', 'desc' => 'Projections of Indonesian climate change up to 100 years ahead.', 'image' => 'srirama.jpg', 'featured' => false],
    ['slug' => 'indra',    'name' => 'INDRA',    'tagline' => 'Water Resource Input Data', 'desc' => 'A Decision Support Tool for Smart Water Management Systems.', 'image' => 'indra.jpg', 'featured' => false],
    ['slug' => 'gatotkaca','name' => 'GATOTKACA','tagline' => 'GNSS for Atmospheric Observation and Tracking Climate Change', 'desc' => 'Atmospheric profile observation using radio occultation techniques.', 'image' => 'gatotkaca.jpg', 'featured' => false],
];

// ----------------------------------------------------------------------
// 5. NEWS & EVENTS
// ----------------------------------------------------------------------
$news_events = [
    [
        'slug'        => 'biweekly-seminar-sept-2026',
        'title'       => 'IALVI Biweekly Seminar',
        'type'        => 'seminar',
        'date'        => '2026-09-12',
        'time'        => '10:00 - 11:30 (Jakarta time)',
        'location'    => 'KST Samaun Samadikun, Bandung / Online (Zoom)',
        'description' => 'A recurring biweekly discussion covering progress in air-sea interaction research.',
        'image'       => 'biweekly-seminar-sept.jpeg',
        'link'        => null,
    ],
    [
        'slug'        => 'biweekly-seminar-ialvi',
        'title'       => 'IALVI Biweekly Seminar',
        'type'        => 'seminar',
        'date'        => '2026-08-28',
        'time'        => null,
        'location'    => 'KST Samaun Samadikun, Bandung',
        'description' => 'A recurring biweekly discussion on the latest developments in air-sea interaction research.',
        'image'       => 'biweekly-seminar.jpeg',
        'link'        => null,
    ],
    [
        'slug'        => 'earth-sciences-bootcamp',
        'title'       => 'Earth Sciences Bootcamp',
        'type'        => 'bootcamp',
        'date'        => '2026-08-15',
        'time'        => null,
        'location'    => 'KST Samaun Samadikun, Bandung',
        'description' => 'An intensive training program on the fundamentals of earth and atmospheric sciences for research interns.',
        'image'       => 'earth-sciences-bootcamp.jpeg',
        'link'        => null,
    ],
    [
        'slug'        => 'kamajaya-update',
        'title'       => 'KAMAJAYA Development Update',
        'type'        => 'announcement',
        'date'        => '2026-08-02',
        'time'        => null,
        'location'    => 'KST Samaun Samadikun, Bandung',
        'description' => 'The latest progress on the development of the food-security DSS based on early-season predictions.',
        'image'       => 'kamajaya-update.jpeg',
        'link'        => null,
    ],
];

// ----------------------------------------------------------------------
// 6. CONTACT INFO
// ----------------------------------------------------------------------
$contact_info = [
    'address'   => 'KST Samaun Samadikun, Bandung, West Java, Indonesia',
    'email'     => 'ialvi.prima@brin.go.id',
    'phone'     => null,
    'map_embed' => 'https://maps.google.com/maps?q=-6.8819068,107.6111792&z=17&output=embed',
    'socials'   => [
        ['platform' => 'Instagram', 'url' => '#'],
        ['platform' => 'LinkedIn',  'url' => '#'],
    ],
];

// ----------------------------------------------------------------------
// 8. STAKEHOLDER / MITRA
//    Dikelompokkan berdasarkan kategori mitra.
// ----------------------------------------------------------------------
$stakeholder_categories = [
    'industry'   => 'Industry & Business Partners',
    'government' => 'Government & Ministry Partners',
];
 
$stakeholders = [
    // --- Industry & Business Partners ---
    // CATATAN: 'logo' => null berarti belum ada file logo, card akan
    // fallback tampil nama teks saja. Isi dengan nama file di
    // assets/img/stakeholders/<file> begitu logo asli tersedia.
    ['name' => 'PT. MTS',        'sector' => 'Climate Smart & Precision Agriculture', 'category' => 'industry', 'logo' => 'pt-mts.png'],
    ['name' => 'PT. EWINDO',     'sector' => 'Climate Modelling for Food Security',    'category' => 'industry', 'logo' => 'pt-ewindo.png'],
    ['name' => 'PT. PLN',        'sector' => 'Weather & Climate Modelling for Operational Safety and Renewable Energy', 'category' => 'industry', 'logo' => 'pt-pln.png'],
    ['name' => 'PT. MHU',        'sector' => 'Weather & Climate Modelling for Operational Safety and Renewable Energy', 'category' => 'industry', 'logo' => 'pt-mhu.png'],
    ['name' => 'PHE Pertamina',  'sector' => 'Ocean-Fisheries-Coastal Prediction Systems', 'category' => 'industry', 'logo' => 'pt-phe-pertamina.png'],
    ['name' => 'SIGN',           'sector' => 'Ocean-Fisheries-Coastal Prediction Systems', 'category' => 'industry', 'logo' => 'pt-sign.png'],
    ['name' => 'DATATEC',        'sector' => 'Weather and Seasonal Prediction Systems for Planning and Safety Transportation', 'category' => 'industry', 'logo' => 'pt-datatec.png'],
    ['name' => 'KAMSELINDO',     'sector' => 'Weather and Seasonal Prediction Systems for Planning and Safety Transportation', 'category' => 'industry', 'logo' => 'kamselindo.png'],
 
   // --- Government & Ministry Partners ---
    ['name' => 'BMKG',     'sector' => 'Accurate Atmospheric Information', 'category' => 'government', 'logo' => 'bmkg.png'],
    ['name' => 'BNPB',     'sector' => 'Disaster Early Warning',           'category' => 'government', 'logo' => 'bnpb.png'],
    ['name' => 'KEMENTAN', 'sector' => 'Precision Agriculture',            'category' => 'government', 'logo' => 'kementan.png'],
    ['name' => 'KKP',      'sector' => 'Maritime Productivity',            'category' => 'government', 'logo' => 'kkp.png'],
  ];