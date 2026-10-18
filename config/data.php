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
    'degree_by_research' => 'Degree by Research Student',
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
        'url'         => 'https://www.linkedin.com/in/prof-dr-erma-yulihastin-a2334038/',
    ],

    // --- Senior Researchers ---
    [
        'slug'        => 'furqon-azis-ismail',
        'name'        => 'M. Furqon Azis Ismail, S.Si., M.Sc., Ph.D.',
        'role'        => 'Senior Researcher (Head of Research on Oceanology)',
        'category'    => 'senior_researcher',
        'degree_note' => null,
        'photo'       => 'furqon-azis-ismail.png',
        'url'         => 'https://www.linkedin.com/in/furqon-azis-ismail-a1a02736/',
    ],
    [
        'slug'        => 'abdul-basit',
        'name'        => 'Dr.rer.nat. Abdul Basit, S.Si., M.Aspp.Sc.',
        'role'        => 'Senior Researcher',
        'category'    => 'senior_researcher',
        'degree_note' => null,
        'photo'       => 'abdul-basit.png',
        'url'         => 'https://scholar.google.com/citations?user=hJ7pWKsAAAAJ&hl=en',
    ],
    [
        'slug'        => 'fiolenta-marpaung',
        'name'        => 'Fiolenta Marpaung, S.Si., M.Sc., Ph.D.',
        'role'        => 'Senior Researcher',
        'category'    => 'senior_researcher',
        'degree_note' => null,
        'photo'       => 'fiolenta-marpaung.png',
        'url'         => 'https://www.linkedin.com/in/fiolentamarpaung/',
    ],
    [
        'slug'        => 'suaydhi',
        'name'        => 'Suaydhi, M.Sc.',
        'role'        => 'Senior Researcher',
        'category'    => 'senior_researcher',
        'degree_note' => 'Doctoral Student (PhD, Australia)',
        'photo'       => 'suaydhi.png',
        'url'         => 'https://www.linkedin.com/in/suay-suaydhi-b79b6926/',
    ],

    // --- Junior Researchers ---
    [
        'slug'        => 'eka-putri-wulandari',
        'name'        => 'Eka Putri Wulandari, S.Si., M.Si.',
        'role'        => 'Junior Researcher',
        'category'    => 'junior_researcher',
        'degree_note' => null,
        'photo'       => 'eka-putri-wulandari.png',
        'url'         => 'https://scholar.google.com/citations?hl=en&user=XghVo9wAAAAJ',
    ],
    [
        'slug'        => 'rahaden-bagas-hatmaja',
        'name'        => 'Rahaden Bagas Hatmaja, S.Si., M.Si.',
        'role'        => 'Junior Researcher',
        'category'    => 'junior_researcher',
        'degree_note' => 'Doctoral Student (PhD, USA)',
        'photo'       => 'rahaden-bagas-hatmaja.png',
        'url'         => 'https://www.linkedin.com/in/rbhatmaja/',
    ],
    [
        'slug'        => 'amalia-nurlatifah',
        'name'        => 'Amalia Nurlatifah, S.Si., M.T.',
        'role'        => 'Junior Researcher',
        'category'    => 'junior_researcher',
        'degree_note' => 'Doctoral Student (PhD, UK)',
        'photo'       => 'amalia-nurlatifah.png',
        'url'         => 'https://www.linkedin.com/in/amalialatifah/',
    ],

    // --- Postdoctoral and Research Assistants Fellows ---
    [
        'slug'        => 'erlin-beliyana',
        'name'        => 'Dr. Erlin Beliyana, S.Si., M.Si.',
        'role'        => 'Postdoctoral Researcher',
        'category'    => 'postdoc_ra',
        'degree_note' => null,
        'photo'       => 'erlin-beliyana.png',
        'url'         => 'https://www.linkedin.com/in/erlin-beliyana-4925571a1/',
    ],
    [
        'slug'        => 'inovasita-alifdini',
        'name'        => 'Dr.rer.nat. Inovasita Alifdini, S.Kel., M.Phil.',
        'role'        => 'Postdoctoral Researcher',
        'category'    => 'postdoc_ra',
        'degree_note' => null,
        'photo'       => 'inovasita-alifdini.png',
        'url'         => 'https://www.linkedin.com/in/inovasita-alifdini-a7264488/',
    ],
    [
        'slug'        => 'amirotul-bahiyah',
        'name'        => 'Dr. Amirotul Bahiyah, S.Si., M.Sc.',
        'role'        => 'Postdoctoral Researcher',
        'category'    => 'postdoc_ra',
        'degree_note' => 'Candidate',
        'photo'       => 'amirotul-bahiyah.png',
        'url'         => 'https://www.linkedin.com/in/amirotul-bahiyah/',
    ],
    [
        'slug'        => 'narizka-nanda-purwadani',
        'name'        => 'Narizka Nanda Purwadani, S.Si., M.Si.',
        'role'        => 'Research Assistant',
        'category'    => 'postdoc_ra',
        'degree_note' => 'Doctoral Student (PhD, ITB)',
        'photo'       => 'narizka-nanda-purwadani.png',
        'url'         => 'https://www.linkedin.com/in/narizka-nanda-purwadani/',
    ],
    [
        'slug'        => 'alya-fitri-syalsabilla',
        'name'        => 'Alya Fitri Syalsabilla, S.Stat., M.Stat.',
        'role'        => 'Research Assistant',
        'category'    => 'postdoc_ra',
        'degree_note' => 'Doctoral Student (PhD in Earth Sciences, ITB)',
        'photo'       => 'alya-fitri-syalsabilla.png',
        'url'         => 'https://www.linkedin.com/in/alyafitrisyalsabilla/',
    ],
    [
        'slug'        => 'syifa-alifia-azzahra',
        'name'        => 'Syifa Alifia Azzahra, S.Si.',
        'role'        => 'Research Assistant',
        'category'    => 'postdoc_ra',
        'degree_note' => 'Master Student (Physics, ITB)',
        'photo'       => 'syifa-alifia-azzahra.png',
        'url'         => 'https://www.linkedin.com/in/syifa-alifia-azzahra/',
    ],
    [
        'slug'        => 'afiq-mahasin',
        'name'        => 'Afiq Mahasin, S.Si.',
        'role'        => 'Research Assistant',
        'category'    => 'postdoc_ra',
        'degree_note' => 'Master Student (Physics, ITB)',
        'photo'       => 'afiq-mahasin.png',
        'url'         => 'https://www.linkedin.com/in/afiq-mahasin-a78113299/?locale=en',
    ],
    [
        'slug'        => 'sanaullah-zehri',
        'name'        => 'Sanaullah Zehri, S.Pd.',
        'role'        => 'Research Assistant',
        'category'    => 'postdoc_ra',
        'degree_note' => 'Master Student (Physics, ITB)',
        'photo'       => 'sanaullah-zehri.png',
        'url'         => 'https://www.linkedin.com/in/sanaullahzehri/',
    ],
    [
        'slug'        => 'ikbal-nur-dian-triatmojo',
        'name'        => 'M. Ikbal Nur Dian Triatmojo, S.Si.',
        'role'        => 'CandidateResearch Assistant',
        'category'    => 'postdoc_ra',
        'degree_note' => 'Master Student (Geodesy & Geomatics, ITB)',
        'photo'       => 'ikbal-nur-dian-triatmojo.png',
        'url'         => 'https://www.linkedin.com/in/ikbal-triatmadja/',
    ],

    // --- Degree by Research ---
    [
        'slug'        => 'riril-mariadani',
        'name'        => 'Riril Mariadani, S.T.',
        'role'        => 'Candidate Master Degree by Research',
        'category'    => 'degree_by_research',
        'degree_note' => 'Master Student (Petroleum Engineering, ITB)',
        'photo'       => 'riril-mariadani.png',
        'url'         => 'https://www.linkedin.com/in/riril-mariadani-948a8265/',
    ],

    
];

$collaborators = [
    ['name' => 'Dr. Salvienty Makarim, S.Si, M.Sc',   'affiliation' => 'Ministry of Marine Affairs and Fisheries', 'url' => 'https://www.researchgate.net/profile/Salvienty-Makarim'],
    ['name' => 'Dr. Mohammad Zaki Mahasin, S.Pi., M.Pi.',            'affiliation' => 'Ministry of Marine Affairs and Fisheries', 'url' => 'https://www.researchgate.net/scientific-contributions/M-Zaki-Mahasin-2185292724'],
    ['name' => 'Prof. Madya Dr. Norma Bt Alias',                         'affiliation' => 'Universiti Teknologi Malaysia', 'url' => 'https://www.linkedin.com/in/norma-alias-6b9bb062/?locale=ms'],
    ['name' => 'Dr. Mohd Fadzil Mohd Akhir',           'affiliation' => 'Universiti Malaysia Terengganu', 'url' => 'https://www.linkedin.com/in/mohd-fadzil-akhir-a2415a36/'],
    ['name' => 'Prof. Sr. Dr. Mazlan Hashim FASc',    'affiliation' => 'Universiti Teknologi Malaysia', 'url' => 'https://www.linkedin.com/in/mazlan-hashim-2ba58615/'],
    ['name' => 'Dr. Ponselvi A/p Jeevaragagam',           'affiliation' => 'Universiti Teknologi Malaysia', 'url' => 'https://www.linkedin.com/in/ponselvi-jeevaragagam-6065ba40/'],
    ['name' => 'Prof. Madya Ts. Gs. Dr. Mohd Nadzri bin Md Reba',          'affiliation' => 'Universiti Teknologi Malaysia', 'url' => 'https://www.utm.my/directory/staff/nadzri'],
    ['name' => 'Josephine R. Brown',                     'affiliation' => 'The University of Melbourne', 'url' => 'https://www.linkedin.com/in/josephine-brown-693226329/'],
    ['name' => 'Dr. Claire Vincent',                      'affiliation' => 'The University of Melbourne', 'url' => 'https://findanexpert.unimelb.edu.au/profile/19945-claire-vincent'],
    ['name' => 'Dr. Shigeo Yoden',                        'affiliation' => 'Kyoto University, Japan', 'url' => 'http://www-mete.kugi.kyoto-u.ac.jp/yoden/index_En.html'],
    ['name' => 'Dr. Tri Wahyu Hadi',                      'affiliation' => 'Kyoto University, Japan', 'url' => 'https://itb.ac.id/staf/profil/1732/tri-wahyu-hadi'],
    ['name' => 'Matthew C. Wheeler',                  'affiliation' => 'Bureau of Meteorology', 'url' => 'https://www.linkedin.com/in/matthew-c-wheeler-29941263/'],
    ['name' => 'Dr. John McGregor',                   'affiliation' => 'CSIRO Oceans and Atmosphere', 'url' => 'https://www.linkedin.com/in/john-mcgregor-24062440/'],
    ['name' => 'Dr. Jack Katzfey',                    'affiliation' => 'CSIRO Oceans and Atmosphere', 'url' => 'https://www.linkedin.com/in/jack-katzfey-7a9bab5b/'],
    ['name' => 'Dr. Marcus Thatcher',                 'affiliation' => 'CSIRO Oceans and Atmosphere', 'url' => 'https://people.csiro.au/t/m/marcus-thatcher'],
    ['name' => 'Ariane Koch-Larrouy',                 'affiliation' => 'Toulouse University, CNRS, CNES, IRD', 'url' => 'https://www.researchgate.net/profile/Ariane-Koch-Larrouy'],
    ['name' => 'PD Dr. Tim Rixen',                    'affiliation' => 'Leibniz Centre for Tropical Marine Research (ZMT)', 'url' => 'https://www.leibniz-zmt.de/de/tropenforschung/mitarbeiterinnen-mitarbeiter/tim-rixen.html'],
    ['name' => 'Acep Purqon, S.Si., M.Si., Ph.D.',    'affiliation' => 'Institut Teknologi Bandung', 'url' => 'https://www.linkedin.com/in/acep-purqon-737543aa/'],
    ['name' => 'Ivonne Radjawane',                         'affiliation' => 'Institut Teknologi Bandung', 'url' => 'https://www.linkedin.com/in/ivonne-radjawane-3a498732/'],
    ['name' => 'Prof. Dr. Eng. Nining Sari Ningsih, M.S.',                  'affiliation' => 'Institut Teknologi Bandung', 'url' => 'https://itb.ac.id/staf/profil/nining-sari-ningsih'],
    ['name' => 'Dr. Muhammad Rais Abdillah, S.Si., M.Sc.',                       'affiliation' => 'Institut Teknologi Bandung', 'url' => 'https://itb.ac.id/staf/profil/muhammad-rais-abdillah'],
    ['name' => 'Dr. Joko Sampurno, M.Si.',                       'affiliation' => 'Universitas Tanjungpura', 'url' => 'https://www.researchgate.net/profile/Joko-Sampurno'],
    ['name' => 'Prof. Dr. H. Makhfud Efendy, S.Pi, M.Si.',                      'affiliation' => 'Universitas Trunojoyo', 'url' => 'https://ilmukelautan.trunojoyo.ac.id/profil/sumberdaya-manusia/dosen-pengajar/dr-makhfud-efendy-s-pi-m-si/'],
    ['name' => 'Jamrud Aminuddin, S.Si., M.Si., Ph. D.',                    'affiliation' => 'Universitas Jenderal Soedirman', 'url' => 'https://www.instagram.com/jamrudaminuddin/'],
    ['name' => 'Ratna Dewi Syarifah',                 'affiliation' => 'Universitas Jember', 'url' => 'https://www.linkedin.com/in/ratna-dewi-syarifah-34259aa7/'],
    ['name' => 'Dr. Winita Sulandari, S.Si., M.Si.',  'affiliation' => 'Universitas Sebelas Maret', 'url' => 'https://expert.uns.ac.id/researcher/797'],
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

$news_events = [
 
    [
        'slug'        => 'biweekly-seminar-asiclivar',
        'title'       => 'Biweekly Seminar ASICLIVAR',
        'type'        => 'seminar',
        'date'        => '2026-08-28',
        'time'        => '09:00 - 10.00 WIB',
        'location'    => 'KST Samaun Samadikun, Bandung',
        'speaker'     => 'Fiolenta Marpaung, Ph.D.',
        'description' => 'Biweekly discussion on the latest developments in air-sea interaction research.',
        'image'       => 'biweekly-seminar.jpeg',
        'link'        => null,
    ],
  [
        'slug'        => 'bootcamp-marine-heatwave',
        'title'       => 'Data Processing for Marine Heatwave',
        'type'        => 'bootcamp',
        'date'        => '2026-09-01',
        'time'        => '09:00 - 12:00 WIB',
        'location'    => 'Online (Google Meet)',
        'speaker'     => 'Dr. Erlin Beliyana',
        'software'    => 'MATLAB',
        'description' => 'Earth Sciences Bootcamp session on marine heatwave data processing.',
        'image'       => 'earth-sciences-bootcamp.jpeg',
        'link'        => null,
    ],
    [
        'slug'        => 'bootcamp-tornado-data-processing',
        'title'       => 'Tornado Data Processing and Analysis',
        'type'        => 'bootcamp',
        'date'        => '2026-09-30',
        'time'        => '13:00 - 16:00 WIB',
        'location'    => 'Meeting Room 80.3, BRIN KST Samaun Samadikun, Bandung',
        'speaker'     => 'Sanaullah Zehri, S.Pd.',
        'description' => 'A hands-on introductory session for students and researchers to learn how to process and analyze tornado-related data using Jupyter Notebook, with practical workflows for Earth and atmospheric science research. Presented by Sanaullah Zehri, Research Assistant.',
        'image'       => 'tornado.jpeg',
        'link'        => null,
    ],
    
    [
        'slug'        => 'bootcamp-mahameru-hpc',
        'title'       => 'How to Access Mahameru HPC',
        'type'        => 'bootcamp',
        'date'        => '2026-09-08',
        'time'        => '09:00 - 12:00 WIB',
        'location'    => 'Online (Google Meet)',
        'speaker'     => 'Dr.rer.nat. Inovasita Alifdini',
        'software'    => 'HPC',
        'description' => 'A hands-on introductory session for students and researchers to learn how to access and navigate the Mahameru High Performance Computing (HPC) system and understand the basic workflow for computational research.',
        'image'       => 'mahameru-hpc.jpeg',
        'link'        => null,
    ],
    [
        'slug'        => 'earth-school-2026',
        'title'       => 'EARTH School 2026: Equatorial Atmosphere Radar and Tropical Hydrometeorology',
        'type'        => 'training',
        'date'        => '2026-09-21',
        'date_end'    => '2026-09-25',
        'time'        => null,
        'location'    => 'BRIN Samaun Samadikun, Bandung, Indonesia',
        'speaker'     => 'Mamoru Yamamoto, Hiroyuki Hasighuchi, Asif Awaludin, Nurjanna Joko Trilaksono, Hubert Luce, Noersomadi, Erma Yulihastin, Atsuki Shinbori, Shigeo Yoden, Marzuki, Yasukuni Shibata, Prayitno Abadi, Ajith K. Kuriakose, Albertus Sulaiman, Chun Yen Huang, Tatsuhiro Yokoyama',
        'description' => 'An international training program on atmospheric radar and tropical hydrometeorology, celebrating the 25th Anniversary of the Equatorial Atmosphere Radar (EAR). Organized by BRIN, RISH Kyoto University, and partners.',
        'image'       => 'earth-school.jpeg',
        'link'        => null,
    ],
     [
        'slug'        => 'biweekly-seminar-sept-17-2026',
        'title'       => 'Future Changes of Compound Wind-Precipitation Extremes in the Indonesian Maritime Continent from Downscaled CMIP6',
        'type'        => 'seminar',
        'date'        => '2026-09-17',
        'time'        => '09:30 - 10:30 WIB',
        'location'    => 'Hybrid — Meeting Room 80.3, BRIN KST. Samaun Samadikun, Dago, Bandung / Google Meet (meet.google.com/wsg-nckm-crd)',
        'description' => 'Dr.rer.nat. Inovasita Alifdini (Postdoctoral, RG. ASICLIVAR) presents: "High-intensity CWPEs are driven more by precipitation than wind, with no systematic change in wind-precipitation dependence." Free e-certificate available.',
        'speaker'     => 'Dr.rer.nat. Inovasita Alifdini',
        'image'       => 'biweekly-seminar2.jpeg',
        'link'        => null,
    ],
    [
        'slug'        => 'fgd-kamajaya-mio',
        'title'       => 'FGD Implementasi Kamajaya BRIN x MIO',
        'type'        => 'FGD',
        'date'        => '2026-10-02',
        'time'        => '09:30 - 11:00 WIB',
        'location'    => 'Online (Google Meet)',
        'description' => 'Diskusi implementasi Kamajaya BRIN dengan PT Mega Inovasi Organik.',
        'speaker'     => null,
        'software'    => null,
        'image'       => null,
        'link'        => null,
    ],
    [
        'slug'        => 'meeting-pt-klk',
        'title'       => 'PT KLK',
        'type'        => 'Meeting',
        'date'        => '2026-09-28',
        'time'        => '14.00 WIB',
        'location'    => 'Online (Microsoft Teams)',
        'description' => 'Pertemuan kerja sama dengan PT KLK.',
        'speaker'     => null,
        'software'    => null,
        'image'       => null,
        'link'        => null,
    ],
];

// ----------------------------------------------------------------------
// 6. CONTACT INFO
// ----------------------------------------------------------------------
$contact_info = [
    'address'   => 'KST Samaun Samadikun, Bandung, West Java, Indonesia',
    'email'     => 'erma005@brin.go.id',
    'phone'     => null,
    'map_embed' => 'https://maps.google.com/maps?q=-6.8819068,107.6111792&z=17&output=embed',
    'socials'   => [
        ['platform' => 'Instagram', 'url' => 'https://instagram.com/asiclivar.indonesia'],
    ],
];

// ----------------------------------------------------------------------
// 8. STAKEHOLDER / MITRA
//    Dikelompokkan berdasarkan kategori mitra.
// ----------------------------------------------------------------------
$stakeholder_categories = [
    'university'        => 'University Partners',
    'industry_current'  => 'Current Partners',
    'industry_former'   => 'Former Partners',
    'government'        => 'Government & Ministry Partners',
];

$stakeholders = [
    // --- University Partners ---
    ['name' => 'Leibniz Centre for Tropical Marine Research (ZMT)',                 'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'ZMT.png'],
    ['name' => 'The University of Melbourne',                 'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'Melbourne.png'],
    ['name' => 'Toulouse University',                 'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'toulouse.png'],
    ['name' => 'Kyoto University',                 'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'kyoto.png'],
    ['name' => 'Universiti Teknologi Malaysia',                 'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'UTM.png'],
    ['name' => 'Universiti Malaysia Terengganu',                 'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'UMT.png'],
    ['name' => 'Institut Teknologi Bandung',                 'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'itb.png'],
    ['name' => 'Universitas Padjadjaran',                  'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'unpad.png'],
    ['name' => 'IPB University',                             'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'ipb.png'],
    ['name' => 'Universitas Gadjah Mada',                    'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'ugm.png'],
    ['name' => 'Universitas Jenderal Soedirman',          'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'unsoed.png'],
    ['name' => 'Universitas Diponegoro',                   'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'undip.png'],
    ['name' => 'Institut Teknologi Sumatera',              'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'itera.png'],
    ['name' => 'Institut Teknologi Sepuluh Nopember',        'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'its.png'],
    ['name' => 'Universitas Brawijaya',                       'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'ub.png'],
    ['name' => 'Universitas Pendidikan Indonesia',           'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'upi.png'],
    ['name' => 'Telkom University',                        'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'telkom.png'],
    ['name' => 'Universitas Muhammadiyah Prof. Dr. Hamka', 'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'uhamka.png'],
    ['name' => 'Universitas Tanjungpura',                  'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'untan.png'],
    ['name' => 'Universitas Jember',                        'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'unej.png'],
    ['name' => 'Universitas Mataram',                      'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'unram.png'],
    ['name' => 'Universitas Pertahanan RI',                'sector' => 'Academic & Research Collaboration', 'category' => 'university', 'logo' => 'unhan.png'],

    // --- Current Partners (industry) ---
    ['name' => 'PT. EWINDO',     'sector' => 'Climate Modelling for Food Security',    'category' => 'industry_current', 'logo' => 'pt-ewindo.png'],
    ['name' => 'PT. PLN',        'sector' => 'Weather & Climate Modelling for Operational Safety and Renewable Energy', 'category' => 'industry_current', 'logo' => 'pt-pln.png'],
    ['name' => 'PT. MHU',        'sector' => 'Weather & Climate Modelling for Operational Safety and Renewable Energy', 'category' => 'industry_current', 'logo' => 'pt-mhu.png'],
    ['name' => 'PHE Pertamina',  'sector' => 'Ocean-Fisheries-Coastal Prediction Systems', 'category' => 'industry_current', 'logo' => 'pt-phe-pertamina.png'],
    ['name' => 'SIGN',           'sector' => 'Ocean-Fisheries-Coastal Prediction Systems', 'category' => 'industry_current', 'logo' => 'pt-sign.png'],
    ['name' => 'DATATEC',        'sector' => 'Weather and Seasonal Prediction Systems for Planning and Safety Transportation', 'category' => 'industry_current', 'logo' => 'pt-datatec.png'],
    ['name' => 'KAMSELINDO',     'sector' => 'Weather and Seasonal Prediction Systems for Planning and Safety Transportation', 'category' => 'industry_current', 'logo' => 'kamselindo.png'],
    ['name' => 'PT. Mega Inovasi Organik', 'sector' => 'Climate Smart & Organic Agriculture', 'category' => 'industry_current', 'logo' => 'pt-mio.png'],
    ['name' => 'PAM JAYA DKI Jakarta', 'sector' => 'Water Resource Management & Hydrometeorology', 'category' => 'industry_current', 'logo' => 'pam-jaya.png'],
    ['name' => 'KLK OLEO', 'sector' => 'Climate Modelling for Plantation & Agro-industry atau Sustainable Agriculture & Industrial Operations', 'category' => 'industry_current', 'logo' => 'klk-oleo.png'],
    ['name' => 'Koperasi Sekunder Induk Garam Nasional', 'sector' => 'Weather & Climate Prediction for Salt Production', 'category' => 'industry_current', 'logo' => 'koperasi-garam.png'],

    // --- Former Partners (industry) ---
    ['name' => 'PT. MTS', 'sector' => 'Climate Smart & Precision Agriculture', 'category' => 'industry_former', 'logo' => 'pt-mts.png'],
    // --- Government & Ministry Partners ---
    ['name' => 'BNPB', 'sector' => 'Disaster Early Warning', 'category' => 'government', 'logo' => 'bnpb.png'],
    ['name' => 'KKP',  'sector' => 'Maritime Productivity',  'category' => 'government', 'logo' => 'kkp.png'],
    ['name' => 'Dinas Ketahanan Pangan dan Pertanian Kab. Lamongan',  'sector' => 'Climate Smart Agriculture',  'category' => 'government', 'logo' => 'logo-kppl.png'],
    ['name' => 'Dinas Perikanan dan Kelautan DIY',  'sector' => 'Maritime Productivity & Fisheries atau Ocean-Coastal Management',  'category' => 'government', 'logo' => 'dinkel-yogya.png'],
    ['name' => 'Kementerian Dalam Negeri',  'sector' => 'Public Policy & Regional Development atau Disaster Mitigation Policy',  'category' => 'government', 'logo' => 'kemendagri.png'],
    ['name' => 'Bank Indonesia',  'sector' => 'Economic Policy',  'category' => 'government', 'logo' => 'bank-indo.png'],

];

$dss_list = [
    [
        'name'     => 'SADEWA',
        'tagline'  => 'Satellite Disaster Early Warning System',
        'desc'     => 'Monitors and predicts extreme rainfall events that potentially cause floods and landslides across Indonesia.',
        'image'    => 'sadewa.jpg',
        'featured' => true
    ],
    [
        'name'     => 'SEMAR',
        'tagline'  => 'Maritime Forecasting System',
        'desc'     => 'Delivers real-time information on ship positions, fishing zones, and marine weather to ensure maritime safety and productivity.',
        'image'    => 'semar.jpg',
        'featured' => true
    ],
    [
        'name'     => 'KAMAJAYA',
        'tagline'  => 'Medium-Term Early Season Assessment',
        'desc'     => 'Provides high-resolution atmospheric observations and predictions to support smart farming and food security across the region.',
        'image'    => 'kamajaya.jpg',
        'featured' => true
    ],
    [
        'name'     => 'NAKULA',
        'tagline'  => 'AI-Based Extreme Weather Prediction',
        'desc'     => 'An advanced high-resolution weather prediction model integrating deep learning for hydrometeorological disaster mitigation.',
        'image'    => 'nakula.jpg',
        'featured' => true
    ],
    [
        'name'     => 'ANTASENA',
        'tagline'  => 'Salt Pond Almanac',
        'desc'     => 'Provides weather recommendations and dry day forecasts specifically designed to support national salt production.',
        'image'    => 'antasena.jpg',
        'featured' => true
    ],
    [
        'name'     => 'KRESNA',
        'tagline'  => 'Knowledge of Risk and Early Warning System',
        'desc'     => 'An early warning system providing drought and fire hazard indices for needed mitigation actions.',
        'image'    => 'kresna.jpg',
        'featured' => true
    ],
    [
        'name'     => 'ARJUNA',
        'tagline'  => 'Short-to-Medium Term Flood Risk Analysis',
        'desc'     => 'A localized early warning system utilizing affordable hydrometeorological instruments for real-time monitoring and forecasting.',
        'image'    => 'arjuna.jpg',
        'featured' => true
    ]
];

