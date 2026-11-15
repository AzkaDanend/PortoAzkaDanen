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
        'interests' => ['Web Development', 'Business Analysis', 'System Analysis'],
        'mindset' => 'Learn, Build, Improve',
    ],

    'social' => [
        'github' => ['url' => 'https://github.com/AzkaDanend', 'label' => 'GitHub'],
        'linkedin' => ['url' => 'https://www.linkedin.com/in/azka-danen-b59a39422/', 'label' => 'LinkedIn'],
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
            'I am an Information Systems student at Universitas Airlangga, currently in semester 5.',
            'I enjoy learning new things, exploring technology, and understanding how information systems can help solve business and operational problems.',
            'I work well both individually and in teams, with a structured approach and a strong sense of responsibility.',
        ],
        'career_interests' => [
            'Web Development',
            'Business Analysis',
            'System Analysis',
            'Information Systems & Digital Solutions',
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
                ],
            ],
        ],
    ],

    // Verified projects only. Unverified candidates intentionally omitted:
    // do not publish as completed work until real artifacts exist.
    'projects' => [
        'title' => 'Selected Projects',
        'subtitle' => 'Academic and personal projects that demonstrate how I approach problems, analyze requirements, and develop solutions.',
        'items' => [
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
                'description' => 'Responsibilities and contributions to be updated.',
            ],
            [
                'role' => 'Staff Ahli External',
                'organization' => 'Pointer',
                'period' => '2026',
                'description' => 'Responsibilities and contributions to be updated.',
            ],
            [
                'role' => 'Staff Akomtrans',
                'organization' => 'Bina Desa',
                'period' => '2026',
                'description' => 'Responsibilities and contributions to be updated.',
            ],
            [
                'role' => 'Staff Perlombaan',
                'organization' => 'Dekan Cup',
                'period' => '2025',
                'description' => 'Responsibilities and contributions to be updated.',
            ],
            [
                'role' => 'Staff Perlombaan',
                'organization' => 'Infest',
                'period' => '2025',
                'description' => 'Responsibilities and contributions to be updated.',
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
        ],
    ],

    'github' => [
        'username' => 'AzkaDanend',
        'repos_endpoint' => 'https://api.github.com/users/AzkaDanend/repos?sort=updated&per_page=6',
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
