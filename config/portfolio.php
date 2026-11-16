<?php

return [
    'profile' => [
        'name' => 'Azka Danendra Cahya',
        'monogram' => 'Azka.',
        'profession' => 'Information Systems Student | Web Developer | Business Analyst',
        'university' => 'Universitas Airlangga',
        'major' => 'S1 Sistem Informasi',
        'study_period' => '2024–present',
        'semester' => 'Semester 5',
        'location' => 'Surabaya, Indonesia',
        'email' => 'azkadanen7@gmail.com',
        'availability' => 'Open to Internship',
        'interests' => ['Web Development', 'Business Analysis', 'System Analysis', 'Equity Research', 'Capital Markets', 'Data Analysis'],
        'mindset' => 'Learn, Build, Improve',
    ],

    'social' => [
        'github' => ['url' => 'https://github.com/AzkaDanend', 'label' => 'GitHub'],
        'linkedin' => ['url' => 'https://www.linkedin.com/in/azka-danen-b59a39422/', 'label' => 'LinkedIn'],
        'instagram' => ['url' => 'https://www.instagram.com/kakazka7', 'label' => 'Instagram'],
        'email' => ['url' => 'mailto:azkadanen7@gmail.com', 'label' => 'Email'],
    ],

    'seo' => [
        'title' => 'Azka Danendra Cahya | Information Systems Portfolio',
        'description' => 'Portfolio of Azka Danendra Cahya, an Information Systems student at Universitas Airlangga specializing in web development, requirements analysis, and business process modeling, open to internship opportunities.',
        'keywords' => 'Azka Danendra Cahya, Information Systems, Universitas Airlangga, web developer, business analyst, internship, Laravel, UML, BPMN',
    ],

    'navigation' => [
        ['label' => 'Home', 'href' => '#home', 'id' => 'home'],
        ['label' => 'About', 'href' => '#about', 'id' => 'about'],
        ['label' => 'Skills', 'href' => '#skills', 'id' => 'skills'],
        ['label' => 'Projects', 'href' => '#projects', 'id' => 'projects'],
        ['label' => 'Experience', 'href' => '#experience', 'id' => 'experience'],
        ['label' => 'Credentials', 'href' => '#certifications', 'id' => 'certifications'],
        ['label' => 'Contact', 'href' => '#contact', 'id' => 'contact'],
    ],

    'cv' => [
        // Will be set to 'documents/CV_Azka_Danendra_Cahya.pdf' once the real
        // signed-off CV PDF is uploaded by the owner.
        'file' => null,
        'label' => 'Download CV',
    ],

    'about' => [
        'title' => 'A Little About Me',
        'subtitle' => 'Understanding the problem before building the solution.',
        'intro' => [
            'An enthusiastic Airlangga University student with a keen interest in finance, investment analysis, and capital markets. Actively involved in HIMSI, demonstrating strong interpersonal and collaborative skills, with a passion for networking, exploring new opportunities, and continuous personal and professional development.',
            'An undergraduate Information Systems student at Universitas Airlangga (2024–Present), based in Surabaya, Indonesia. Passionate about equity research, particularly the Indonesian stock market, with a strong interest in data analysis and data-driven insights.',
        ],
        'career_interests' => [
            'Web Development',
            'Business Analysis',
            'System Analysis',
            'Information Systems & Digital Solutions',
            'Equity Research',
            'Investment Analysis',
            'Capital Markets',
            'Data Analysis',
        ],
        'highlights' => [
            [
                'title' => 'Analytical Thinking',
                'description' => 'Understanding requirements and organizing problems into structured solutions.',
                'icon' => 'brain',
            ],
            [
                'title' => 'Continuous Learning',
                'description' => 'Adapting to new technologies and developing new skills.',
                'icon' => 'spark',
            ],
            [
                'title' => 'Team Collaboration',
                'description' => 'Communicating clearly and contributing responsibly to team projects.',
                'icon' => 'users',
            ],
        ],
    ],

    'skills' => [
        'title' => 'Skills & What I Bring',
        'subtitle' => 'A combination of technical implementation, business analysis, and structured problem-solving.',
        'categories' => [
            [
                'name' => 'Web Development',
                'icon' => 'code',
                'skills' => [
                    ['name' => 'PHP', 'note' => 'Core programming language for server-side development'],
                    ['name' => 'Laravel', 'note' => 'Building structured, maintainable web applications'],
                    ['name' => 'Python', 'note' => 'Scripting and data-oriented programming'],
                    ['name' => 'Django', 'note' => 'Web framework for structured Python applications'],
                    ['name' => 'Database Development & Management', 'note' => 'Designing and maintaining relational data'],
                ],
            ],
            [
                'name' => 'Database & Development Environment',
                'icon' => 'database',
                'skills' => [
                    ['name' => 'MySQL', 'note' => 'Relational database design and querying'],
                    ['name' => 'Laragon', 'note' => 'Local development environment for PHP & database applications'],
                ],
            ],
            [
                'name' => 'Systems Analysis & Modeling',
                'icon' => 'diagram',
                'skills' => [
                    ['name' => 'Requirements Analysis', 'note' => 'Eliciting and structuring user and business needs'],
                    ['name' => 'User Stories', 'note' => 'Capturing needs from the user perspective'],
                    ['name' => 'Acceptance Criteria', 'note' => 'Defining clear, testable completion conditions'],
                    ['name' => 'UML', 'note' => 'Modeling system structure and behavior'],
                    ['name' => 'BPMN', 'note' => 'Modeling and documenting business processes'],
                    ['name' => 'ERD', 'note' => 'Designing entities and relationships for databases'],
                    ['name' => 'Enterprise Architecture (TOGAF)', 'note' => 'Structured approach to enterprise planning'],
                ],
            ],
            [
                'name' => 'Soft Skills',
                'icon' => 'users',
                'skills' => [
                    ['name' => 'Effective Time Management', 'note' => 'Prioritizing tasks and meeting commitments'],
                    ['name' => 'Adaptability & Fast Learning', 'note' => 'Adjusting quickly to new tools and environments'],
                    ['name' => 'Communication', 'note' => 'Conveying ideas clearly to technical and non-technical audiences'],
                    ['name' => 'Teamwork', 'note' => 'Collaborating toward shared goals'],
                    ['name' => 'Individual Responsibility', 'note' => 'Delivering dependable work independently'],
                    ['name' => 'Public Speaking', 'note' => 'Presenting ideas confidently to audiences'],
                ],
            ],
            [
                'name' => 'Finance & Data Analysis',
                'icon' => 'diagram',
                'skills' => [
                    ['name' => 'Equity Research', 'note' => 'Evaluating business performance, prospects, and valuation'],
                    ['name' => 'Investment Analysis', 'note' => 'Analyzing financial conditions of listed companies'],
                    ['name' => 'Capital Markets', 'note' => 'Focus on the Indonesian stock market'],
                    ['name' => 'Data Analysis', 'note' => 'Turning data into data-driven insights'],
                ],
            ],
            [
                'name' => 'Data & Product Tools',
                'icon' => 'code',
                'skills' => [
                    ['name' => 'JavaScript', 'note' => 'Interactive web interfaces and data visualization'],
                    ['name' => 'FastAPI', 'note' => 'Building data-oriented Python APIs'],
                    ['name' => 'Leaflet', 'note' => 'Interactive map-based data presentation'],
                    ['name' => 'Docker', 'note' => 'Consistent development and deployment environments'],
                    ['name' => 'Git', 'note' => 'Version control and collaboration'],
                ],
            ],
            [
                'name' => 'Languages',
                'icon' => 'users',
                'skills' => [
                    ['name' => 'Indonesian (Fluent)', 'note' => 'Primary academic and professional language'],
                    ['name' => 'English (Fluent)', 'note' => 'Research, documentation, and communication'],
                    ['name' => 'Javanese (Native)', 'note' => 'Daily communication'],
                ],
            ],
        ],
    ],

    // Verified projects only. Unverified candidates intentionally omitted:
    // do not publish as completed work until real artifacts exist.
    // PDF portfolio items below are marked ongoing/draft until repos go live.
    'projects' => [
        'title' => 'Selected Projects',
        'subtitle' => 'Academic and personal projects that demonstrate how I approach problems, analyze requirements, and develop solutions.',
        'items' => [
            [
                'id' => 'deksi',
                'title' => 'DEKSI (Deteksi Ekonomi Indonesia)',
                'description' => 'Platform yang menyajikan data dan analisis ekonomi Indonesia secara terstruktur, transparan, dan dapat ditelusuri.',
                'problem' => 'Economic data scattered and hard to trace.',
                'role' => 'Developer',
                'technologies' => ['Data Analysis', 'Economic Research', 'Web Platform'],
                'thumbnail' => null,
                'github_url' => null,
                'live_url' => null,
                'status' => 'ongoing',
            ],
            [
                'id' => 'aneka-vandel',
                'title' => 'Aneka Vandel',
                'description' => 'Dibuat untuk membantu pengrajin vandel di Tulungagung memasarkan produk secara daring sekaligus mengelola proses bisnis secara lebih terstruktur.',
                'problem' => 'Local craftsmen need online marketing and structured business management.',
                'role' => 'Developer',
                'technologies' => ['E-commerce', 'Business Process', 'Web Application'],
                'thumbnail' => null,
                'github_url' => null,
                'live_url' => null,
                'status' => 'ongoing',
            ],
            [
                'id' => 'mark-up',
                'title' => 'Mark-Up',
                'description' => 'Aplikasi mobile berbasis Flutter untuk pembelajaran dan mentoring kompetisi bisnis bagi mahasiswa, dengan fitur modul, kelas, bootcamp, mentor, informasi lomba, dan pembayaran online.',
                'problem' => 'Students need structured learning and mentoring for business competitions.',
                'role' => 'Developer',
                'technologies' => ['Flutter', 'Mobile', 'Business Mentoring', 'Online Payment'],
                'thumbnail' => null,
                'github_url' => null,
                'live_url' => null,
                'status' => 'ongoing',
            ],
            [
                'id' => 'placeholder-1',
                'title' => 'Upcoming Project',
                'description' => 'A verified project will be featured here.',
                'problem' => null,
                'role' => null,
                'technologies' => [],
                'thumbnail' => null,
                'github_url' => null,
                'live_url' => null,
                'status' => 'draft',
            ],
        ],
    ],

    'experience' => [
        'title' => 'Organizational Experience',
        'subtitle' => 'Learning to collaborate, communicate, and contribute through campus organizations and committees.',
        'items' => [
            [
                'role' => 'Staff Ahli Seni & Olahraga',
                'organization' => 'HIMSI',
                'period' => '2026–2027',
                'description' => 'Expert Staff – Arts & Sports. Teamwork, communication, and event execution.',
            ],
            [
                'role' => 'Staff Ahli External',
                'organization' => 'Pointer',
                'period' => '2026',
                'description' => 'Expert Staff – External Relations. Communication, coordination, and external partnerships.',
            ],
            [
                'role' => 'Staff Akomtrans',
                'organization' => 'Bina Desa',
                'period' => '2026',
                'description' => 'Staff – Accommodation & Transportation. Logistics and operational support.',
            ],
            [
                'role' => 'Staff Perlombaan',
                'organization' => 'Dekan Cup',
                'period' => '2025',
                'description' => 'Staff – Competition Committee. Competition management and event execution.',
            ],
            [
                'role' => 'Staff Perlombaan',
                'organization' => 'Infest',
                'period' => '2025',
                'description' => 'Staff – Competition Committee. Competition management and event execution.',
            ],
        ],
    ],

    'certifications' => [
        'title' => 'Certifications & Achievements',
        'subtitle' => 'Professional development and continuous learning.',
        'empty_heading' => 'Certificates Coming Soon',
        'empty_description' => 'Certifications and achievements will be added as they are completed and verified.',
        'items' => [
            [
                'title' => 'Sertifikat Kompetensi Junior Web Programmer',
                'issuer' => 'BNSP — LSP Universitas Airlangga',
                'issue_date' => 'Surabaya, 2 November 2026 · Valid 3 years',
                'skills' => ['Structured Programming', 'User Interface Implementation', 'Data Structures', 'Debugging'],
                'verification_url' => '',
                'pdf_url' => 'documents/SertifikatKompetensi_JuniorWebProgrammer_AzkaDanendraCahya.pdf',
            ],
            [
                'title' => 'Equity Research Competition (ERC)',
                'issuer' => 'Equity Research Competition',
                'issue_date' => 'Riset dan analisis saham perusahaan terbuka',
                'skills' => ['Equity Research', 'Financial Analysis', 'Valuation', 'Business Prospects'],
                'verification_url' => '',
                'pdf_url' => null,
            ],
        ],
    ],

    'github' => [
        'username' => 'AzkaDanend',
        'repos_endpoint' => 'https://api.github.com/users/AzkaDanend/repos?sort=updated&per_page=100',
        'calendar_endpoint' => 'https://api.github.com/users/AzkaDanend/events/public',
        'title' => 'GitHub Activity',
        'subtitle' => 'A look at my public repositories and coding activity.',
    ],

    'contact' => [
        'title' => "Let's Connect",
        'headline' => 'Have an opportunity or project in mind?',
        'supporting_text' => "I'm open to internship opportunities and conversations about web development, systems analysis, and information systems projects.",
        'mail_cta' => 'Email me at azkadanen7@gmail.com',
        'form_enabled' => false,
    ],

    'footer' => [
        'closing' => 'Understand the problem. Build the solution.',
        'supporting' => 'Designed and developed by Azka Danendra Cahya.',
    ],
];
