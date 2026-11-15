# Expert Frontend Engineer & UI/UX Designer — Azka Danendra Cahya Portfolio

Act as an Expert Frontend Engineer and UI/UX Designer. Build a complete, polished, production-ready personal developer portfolio website for **Azka Danendra Cahya**, an Information Systems student at Universitas Airlangga, Indonesia, who is preparing for internship opportunities.

Use **https://rayhansw.com** as a visual reference for the overall aesthetic, layout quality, typography, and interaction patterns. Do not copy it exactly. Create an original portfolio that communicates technical competence, analytical thinking, professionalism, and readiness for an internship.

Initialize the project if the current workspace is empty. If an existing project is present, inspect its files and configuration before making changes. Preserve useful existing code and avoid overwriting unrelated files.

The finished website must be a polished frontend-only portfolio: responsive, accessible, interactive where useful, and buildable. Do not implement backend features or business logic.

## 1. Tech Stack & Dependencies

Use the following technology stack. **Do not use Next.js, React, TypeScript, or JSX.** This project must be implemented as a Laravel application using Blade templates.

- **Application/template environment:** Laravel, used only to serve the page and render Blade templates. Do not build backend features.
- **Templating:** Laravel Blade (`.blade.php`) for the page layout, sections, and reusable UI components.
- **Styling:** Tailwind CSS, integrated with Laravel through Vite using the setup compatible with the installed Laravel version.
- **JavaScript interactions:** Use lightweight vanilla JavaScript, or Alpine.js only if already installed and genuinely useful, for mobile navigation, modals, and small UI state. Do not add a frontend SPA.
- **Icons:** Use accessible inline SVG icons or a compatible icon package only if already configured; do not depend on React icon libraries.
- **Typography:** Inter or a similar clean sans-serif for headings and body text; a monospace font for technical labels and code snippets.
- **GitHub activity:** Use frontend-safe public GitHub links or a public contribution-graph image/widget if reliable. Do not create a Laravel API proxy, server-side fetcher, or backend integration. If live data is unavailable, show a clear link to the GitHub profile instead.
- **Contact:** Use email, LinkedIn, and GitHub links only. Do not create a form that submits data, email delivery, authentication, database, or any other backend feature.
- **CV:** A downloadable PDF file stored under `public/documents/`.

Use Laravel only as the lightweight Blade rendering and asset-build environment. Keep the app simple: a route closure in `routes/web.php` can render the main view, with static portfolio content stored in `config/portfolio.php` and displayed through Blade. Do not add controllers, services, models, migrations, database connections, API endpoints, authentication, or server-side business logic. Avoid unnecessary packages. Do not introduce React, Next.js, Inertia, or Livewire.

## 2. Personal Identity & Centralized Configuration

Create `config/portfolio.php` before building the UI.

All personal information, skills, project details, experience, social links, GitHub configuration, and certifications must be centralized in this file so they can be updated without modifying individual components.

Use the following personal information:

- **Full name:** Azka Danendra Cahya
- **Professional identity:** Information Systems Student | Web Developer | Business Analyst
- **University:** Universitas Airlangga
- **Major:** S1 Sistem Informasi
- **Study period:** 2024–present
- **Current semester:** Semester 5
- **Location:** Surabaya, Indonesia
- **Email:** azkadanen7@gmail.com
- **LinkedIn:** https://www.linkedin.com/in/azka-danen-b59a39422/
- **GitHub:** https://github.com/AzkaDanend

Use the uploaded CV PDF as the source for relevant personal information and as the downloadable CV asset. Inspect the workspace for the provided file and copy it into the appropriate public directory if necessary.

Recommended destination:

`public/documents/CV_Azka_Danendra_Cahya.pdf`

The CV button must point to the actual PDF file and trigger a valid download. Do not generate a fake CV, fabricate a certificate, or link to a nonexistent file.

Do not expose the personal phone number or residential address from the CV on the public website unless explicitly configured to do so.

Use well-structured PHP arrays for configuration data and keep data shape consistent across the Blade views.

## 3. Design System & Visual Direction — Match the Uploaded MARK-UP Presentation

**Important design rule:** Use the uploaded PDF, `Blue Modern Mobile App Presentation.pdf`, as the source of truth for the website's **color palette, typography mood, and decorative visual language only**. Keep the original modern developer-portfolio layout and section structure from this prompt. Do not reproduce the PDF slide-by-slide, and do not turn the website into a MARK-UP product presentation.

Inspect the PDF visually before styling. Its visual identity is built around a very light cool lavender/periwinkle background, deep saturated navy-blue typography and blocks, muted periwinkle navigation/text, thin oversized circular outlines, generous whitespace, and rounded capsule/pill shapes. It is **not** a pink-accent palette. Sample exact colors from the PDF when practical; the values below are starting tokens based on the visible reference and may be refined after sampling.

### Color direction

Use a light theme throughout the website:

- **Deep navy primary:** approximately `#000C73` — headings, primary buttons, logo/brand capsule, selected navigation, and occasional strong feature panels.
- **Main background:** approximately `#F7F7FF` — overall page background; use nearby cool-white/lavender tints such as `#E9EAFF` and `#EFF0FF` for soft background variation.
- **Muted periwinkle:** approximately `#52599B` — secondary navigation, metadata, and subdued emphasis, while maintaining accessible contrast.
- **Soft lavender border/decorative tone:** approximately `#C5C7E9` — subtle borders, oversized circular outlines, dividers, and low-contrast decorative shapes.
- **Surface/card colors:** white or very pale lavender/periwinkle. Use navy-filled cards selectively for contrast, following the presentation's navy blocks.
- **Accent usage:** prioritize navy and periwinkle. Do not introduce pink, magenta, emerald, cyan, or neon colors as dominant accents unless a real asset already requires them.
- **Gradients:** optional and restrained, using cool white-to-lavender/periwinkle transitions only. Avoid bright multi-color gradients and neon glows.
- **Text:** deep navy for primary text; muted periwinkle or accessible slate for supporting text. Never use pale lavender for long body copy.
- **Code editor:** a dark navy code-editor panel is allowed as a deliberate contrast feature, but it must harmonize with the presentation's navy identity.

### Preserve the original portfolio layout — only make minor visual adjustments

Retain the modern developer-focused layout and interactions from the previous prompt. Minor adjustments are allowed only to harmonize it with the reference palette and shapes:

- Sticky navbar with a light translucent lavender surface, restrained blur, and a rounded capsule treatment for the brand or selected nav element.
- Split hero with the introduction on one side and the interactive IDE/code-editor mockup on the other.
- Add subtle, oversized circular outline decorations behind the hero, inspired by the PDF cover. Keep them behind content and prevent them from causing overflow or reducing readability.
- Responsive Bento-grid cards, skill cards, featured project cards, and organizational experience timeline/cards.
- GitHub contribution heatmap and repository cards.
- Certifications section with a deliberate empty state.
- Contact CTA and footer.
- Subtle hover effects and smooth section transitions.

Use navy for primary CTAs and key headings, light lavender surfaces for cards, muted periwinkle for secondary details, and occasional navy-filled feature cards. Keep the portfolio's existing content hierarchy, responsive composition, and developer-focused purpose. **Do not copy the PDF's top slide-navigation labels, presentation pagination, or slide layouts into the website.** Do not redesign the portfolio from scratch.

### Typography and shapes

Use a clean geometric sans-serif such as Inter or Geist for headings and body text, with Geist Mono or JetBrains Mono for technical labels and code snippets. Headings should feel bold and confident, similar to the PDF's large navy titles. Use generous whitespace, clear line lengths, rounded corners, and occasional capsule/pill shapes. Avoid excessive card rounding or decoration that makes the page look like a generic mobile app dashboard.

### Animation principles

- Smooth but restrained entrance animations.
- Small hover elevation or navy/periwinkle border transitions on cards.
- Smooth navigation to page sections.
- Respect `prefers-reduced-motion`.
- Do not use distracting, unnecessary, or continuously moving animations.

### Responsive design

The layout must work correctly on mobile phones, tablets, standard laptop screens, and wide desktop screens. Use mobile-first Tailwind classes and prevent horizontal overflow, including from the hero's decorative circular outlines.

### Design consistency

Create reusable CSS variables or Tailwind theme tokens for the extracted reference colors, for example:

- `--color-primary: #000C73`
- `--color-background: #F7F7FF`
- `--color-background-soft: #E9EAFF`
- `--color-muted: #52599B`
- `--color-border: #C5C7E9`
- `--color-surface: #FFFFFF`

Treat these as approximate initial values and refine them by sampling the uploaded PDF. Define and reuse the final tokens consistently instead of scattering unrelated hex values across components.

## 4. Project Architecture

Organize the frontend using reusable Blade layouts, partials, and components. If the workspace is empty, scaffold only the minimal Laravel project needed to render Blade and compile Tailwind assets. If a project exists, inspect its structure first and preserve useful code and configuration. Do not build a backend.

Suggested structure (adapt to the Laravel version and existing project):

```text
config/
└── portfolio.php                 # Centralized personal/profile content

resources/
├── views/
│   ├── layouts/
│   │   └── app.blade.php
│   ├── components/
│   │   ├── section-heading.blade.php
│   │   ├── project-card.blade.php
│   │   ├── skill-card.blade.php
│   │   └── experience-card.blade.php
│   ├── sections/
│   │   ├── hero.blade.php
│   │   ├── about.blade.php
│   │   ├── skills.blade.php
│   │   ├── projects.blade.php
│   │   ├── experience.blade.php
│   │   ├── certifications.blade.php
│   │   ├── github-activity.blade.php
│   │   └── contact.blade.php
│   └── portfolio.blade.php
├── css/
│   └── app.css
└── js/
    └── app.js

routes/
└── web.php

public/
├── documents/
│   └── CV_Azka_Danendra_Cahya.pdf
└── images/
    ├── profile-placeholder.webp
    └── projects/
```

Use a minimal route in `routes/web.php` to render the main Blade view. Read static content from `config/portfolio.php` or pass it directly to the view. Use Blade includes/components for repeated UI and Laravel's `asset()` / `route()` helpers for paths. Do not create controllers, API routes, database models, form handlers, or a TypeScript/React-style `src/app` architecture.

## 5. Sticky Glassmorphic Navbar

Create a reusable Blade partial/component for the navbar, such as `resources/views/sections/navbar.blade.php` or `resources/views/components/navbar.blade.php`.

### Layout

**Left:** Minimal personal monogram or text logo:

`Azka.`

**Center:** Navigation links:

- Home
- About
- Skills
- Projects
- Experience
- Credentials
- Contact

**Right:**

- A small availability badge: `Open to Internship`
- A prominent `Let's Connect` button.

### Behavior

- Sticky positioning with a translucent white/light background, subtle blur, and a fine blue-tinted border.
- Thin border and backdrop blur.
- Smooth-scroll to the corresponding section IDs.
- Highlight the active section when practical.
- Mobile navigation must open and close correctly.
- Close the mobile menu after selecting a section.
- Ensure navigation remains accessible by keyboard.

Do not claim that the user is actively looking for a job beyond the intended internship context.

## 6. Hero Section — Professional Introduction

Create `resources/views/sections/hero.blade.php`.

Design a visually striking split hero section with the introduction on the left and a professional profile or technical Bento card on the right.

### Left column

Add a small badge:

`Information Systems · Universitas Airlangga`

Main heading:

**"Hi, I'm Azka Danendra Cahya."**

Supporting headline:

**"Information Systems Student | Web Developer | Business Analyst"**

Description:

"I'm an Information Systems student at Universitas Airlangga who enjoys turning ideas and business needs into structured, practical digital solutions. I combine web development skills with requirements analysis, process modeling, and collaborative problem-solving to build systems that are useful, understandable, and maintainable."

Primary CTA:

`Explore My Projects`

Link to `#projects`.

Secondary CTA:

`Download CV`

Link to the actual CV PDF in the public directory.

Additional CTA:

`Contact Me`

Link to `#contact`.

Display GitHub and LinkedIn icons as secondary links.

### Right column

Create a polished profile card containing:

- A professional profile image placeholder that can easily be replaced with an actual photograph.
- Name: Azka Danendra Cahya.
- Role: Information Systems Student.
- University: Universitas Airlangga.
- Location: Surabaya, Indonesia.
- Interest tags: Web Development, Business Analysis, System Analysis.
- A small terminal-inspired visual or code snippet.

Example terminal content:

```ts
const azka = {
  major: "Information Systems",
  university: "Universitas Airlangga",
  interests: [
    "Web Development",
    "Business Analysis",
    "System Analysis",
  ],
  mindset: "Learn, Build, Improve",
};
```

The code snippet is decorative and must not break the Blade template or JavaScript.

Do not invent a professional headshot. Use a neutral placeholder until a real photo is provided.

## 7. About Me Section

Create `resources/views/sections/about.blade.php`.

Section title:

**"A Little About Me"**

Subtitle:

"Understanding the problem before building the solution."

Write a natural, professional introduction in English, consistent with the website's language.

Use the following Indonesian source information as the basis:

"Mahasiswa Sistem Informasi Universitas Airlangga semester 5 yang adaptif, cepat belajar, dan memiliki kemampuan komunikasi yang baik. Senang mempelajari hal-hal baru, mengeksplorasi teknologi, serta memahami bagaimana sistem informasi dapat membantu menyelesaikan permasalahan bisnis dan operasional. Mampu bekerja secara individu maupun tim dengan terstruktur dan bertanggung jawab."

Expand this into a polished but realistic introduction without inventing achievements, professional experience, or personal claims unsupported by the source.

Mention relevant career interests:

- Web Development.
- Business Analysis.
- System Analysis.
- Information Systems and digital solutions.

Create three small highlight cards:

1. **Analytical Thinking** — Understanding requirements and organizing problems into structured solutions.
2. **Continuous Learning** — Adapting to new technologies and developing new skills.
3. **Team Collaboration** — Communicating clearly and contributing responsibly to team projects.

These are descriptions of interests and working approach, not quantified achievements.

## 8. Skills & Technical Competencies

Create `resources/views/sections/skills.blade.php`.

Section title:

**"Skills & What I Bring"**

Subtitle:

"A combination of technical implementation, business analysis, and structured problem-solving."

Organize skills into clearly separated categories.

### A. Web Development

- PHP.
- Laravel.
- Python.
- Django.
- HTML and CSS, only if supported by the project's actual implementation or confirmed by the user.
- Database development and management.

Important: The user has explicitly identified PHP, Laravel, Python/Django, and database usage. Do not add other technologies as verified proficiencies without evidence. Technologies that are not confirmed may be marked as learning interests or omitted.

### B. Database & Development Environment

- MySQL.
- Laragon as a local development environment for PHP and database-backed applications.

Present Laragon as a development tool, not a database engine.

Do not automatically label PostgreSQL, Supabase, or other databases as mastered.

### C. Systems Analysis & Modeling

Emphasize these competencies as important strengths:

- Requirements Analysis.
- User Stories.
- Acceptance Criteria.
- UML.
- BPMN.
- Entity Relationship Diagrams (ERD).
- Enterprise Architecture using TOGAF.

The user has identified requirements analysis, UML, BPMN, ERD, user stories, acceptance criteria, and TOGAF-based Enterprise Architecture as areas they can perform well.

### D. Soft Skills

- Effective Time Management.
- Adaptability and Fast Learning.
- Communication.
- Teamwork.
- Individual Responsibility.

### Visual requirements

Use icons and compact cards with concise descriptions.

Avoid fabricated skill percentages, arbitrary progress bars, fake proficiency ratings, or claims such as "expert" unless supported by verified evidence.

Use descriptive proficiency labels only when they can be justified. Otherwise, organize skills by category and relevance.

## 9. Featured Projects

Create `resources/views/sections/projects.blade.php` and a reusable Blade project-card component/partial.

Section title:

**"Selected Projects"**

Subtitle:

"Academic and personal projects that demonstrate how I approach problems, analyze requirements, and develop solutions."

IMPORTANT PROJECT DATA RULES:

- This section must display only projects that the user has actually completed or participated in.
- Do not invent projects, project names, outcomes, technologies, links, metrics, or screenshots.
- The project details below are candidate projects from the user's existing academic context. Include them only when the actual source files, repositories, documentation, or existing workspace support their existence.
- If a candidate project cannot be verified, keep it out of the published featured projects and use a clearly marked placeholder in the configuration for the user to complete later.
- Never publish fictional project descriptions just to fill four cards.
- Do not fabricate GitHub repository URLs.

### Candidate Project 1 — MARK-UP

Potential description:

"A learning companion platform designed to support students preparing for business case competitions through learning resources, competition information, products, and mentoring-related content."

Potential technologies: Flutter and Dart only if verified from the existing source code.

Possible contribution details should be derived from the actual implementation or documentation. Do not assume sole authorship of a group project.

### Candidate Project 2 — Library Information System

Potential description:

"A web-based library information system developed around structured system analysis, authentication, and library-related workflows."

Potential technologies: Laravel, PHP, and MySQL only if verified from the actual project.

Do not state that the system includes specific features unless they are implemented.

### Candidate Project 3 — Requirements Analysis / ReqLint

Potential description:

"A requirements analysis project exploring how user stories can be evaluated against quality criteria and translated into structured acceptance criteria and behavior-driven development scenarios."

Potential technologies and implementation details must be verified before publication.

### Candidate Project 4 — Data Analysis / Machine Learning

Potential description:

"An academic data analysis project involving data preparation, model development, and evaluation of analytical results."

Only include the specific dataset, model, metrics, and programming language if supported by actual project artifacts.

### Project card requirements

Each verified project card should include:

- Project title.
- Short, specific description.
- Problem addressed.
- Role or contribution, when known.
- Technology tags supported by the source.
- Project thumbnail or a neutral designed placeholder.
- `View Project` or `View Details` button.
- `GitHub` button only when a valid repository URL exists.

If a project has no public repository, omit the GitHub button rather than inventing a destination.

Use a responsive Bento-grid layout. Add a subtle border glow and restrained hover elevation.

Create project objects in `config/portfolio.php` so projects can be edited easily.

## 10. Organizational & Committee Experience

Create `resources/views/sections/experience.blade.php`.

Section title:

**"Organizational Experience"**

Subtitle:

"Learning to collaborate, communicate, and contribute through campus organizations and committees."

Use a clean vertical timeline or compact cards.

Prepopulate the following experiences using the supplied information:

### Experience 1

**Staff Ahli Seni & Olahraga — HIMSI**

Period: 2026–2027

Description: Leave contribution details editable until specific responsibilities and achievements are provided. Do not invent programs, event attendance figures, or measurable outcomes.

### Experience 2

**Staff Ahli External — Pointer**

Period: 2026

Description: Placeholder for verified external-relations responsibilities and contributions.

### Experience 3

**Staff Akomtrans — Bina Desa**

Period: 2026

Description: Placeholder for verified accommodation and transportation responsibilities.

### Experience 4

**Staff Perlombaan — Dekan Cup**

Period: 2025

Description: Placeholder for verified competition-committee responsibilities.

### Experience 5

**Staff Perlombaan — Infest**

Period: 2025

Description: Placeholder for verified competition-committee responsibilities.

Display the roles, organizations, and periods even if detailed contributions are not yet available.

For missing descriptions, use concise, professional text such as "Responsibilities and contributions to be updated."

Do not fabricate achievements or quantitative impact.

Keep the experience data centralized in `config/portfolio.php`.

## 11. Certifications & Achievements

Create `resources/views/sections/certifications.blade.php`.

Section title:

**"Certifications & Achievements"**

Subtitle:

"Professional development and continuous learning."

The section must initially be empty because the user has not supplied any certificate details.

Do not populate fictional Dicoding certificates, course completions, awards, issue dates, certificate IDs, verification links, or PDF files.

Instead, create a clean empty state with:

- A subtle award or certificate icon.
- Heading: `Certificates Coming Soon`.
- Description: `Certifications and achievements will be added as they are completed and verified.`

Prepare the data structure for future certificate entries, including:

- Certificate title.
- Issuing organization.
- Issue date.
- Skills or topics.
- Verification URL.
- PDF URL.

When actual certificates are later added, render certificate cards with a `Verify Certificate` external link and a `View PDF` button.

The `View PDF` button should open a functional accessible modal preview only when a real PDF is available.

Implement the certificate preview modal using a Blade partial and Alpine.js or lightweight vanilla JavaScript, with:

- Modal overlay.
- PDF preview.
- Close button.
- Escape-key support.
- Keyboard accessibility.
- Appropriate focus behavior.

Do not show broken modal previews for missing files.

## 12. GitHub Activity

Create `resources/views/sections/github-activity.blade.php`.

Section title:

**"GitHub Activity"**

Subtitle:

"A look at my public repositories and coding activity."

Use the GitHub username:

`AzkaDanend`

### Contribution calendar

Build a responsive GitHub contribution calendar that works with Blade and plain CSS/JavaScript (no React-only package). Read the configurable username from `config/portfolio.php` and handle unavailable data gracefully.

Display a contribution heatmap that fits the light lavender/periwinkle and navy theme and has readable labels.

Handle loading, error, empty, and unavailable states gracefully.

Do not invent contribution counts or imply that a contribution grid represents private repositories.

### Repository fetching

If useful, fetch public repository data directly in the browser with JavaScript from GitHub's public API. This is optional; do not build a server-side proxy or backend service. Example public endpoint:

`https://api.github.com/users/AzkaDanend/repos?sort=updated&per_page=6`

Requirements:

- Fetch only public repositories.
- Sort by recently updated repositories.
- Display up to six repositories.
- Show repository name, description, primary programming language, stars, forks, and repository link.
- Display language badges with appropriate colors when a known language is available.
- Use a neutral fallback for unknown languages.
- Handle rate limits, network failures, empty results, and invalid usernames in the browser.
- Never present mock repository information as genuine GitHub data.
- Do not include tokens, secrets, or personal access tokens in client-side code. If the public endpoint fails, show a friendly unavailable state and a link to GitHub.

Each repository card should have a clickable repository link and accessible icon labels.

## 13. Contact Section

Create `resources/views/sections/contact.blade.php`.

Section title:

**"Let's Connect"**

Headline:

**"Have an opportunity or project in mind?"**

Supporting text:

"I'm open to internship opportunities and conversations about web development, systems analysis, and information systems projects."

Display:

- Email: `azkadanen7@gmail.com`
- LinkedIn: `https://www.linkedin.com/in/azka-danen-b59a39422/`
- GitHub: `https://github.com/AzkaDanend`

Include a prominent email button that opens:

`mailto:azkadanen7@gmail.com`

Do not include a contact form. This is a frontend-only portfolio with no backend or message-submission functionality. Use the email CTA as the primary contact mechanism.

Use `rel="noopener noreferrer"` for external links opened in new tabs.

## 14. Footer

Create a reusable Blade footer partial/component, such as `resources/views/sections/footer.blade.php`.

Closing statement:

**"Understand the problem. Build the solution."**

Supporting text:

"Designed and developed by Azka Danendra Cahya."

Social links:

- GitHub.
- LinkedIn.
- Email.

Copyright:

`© {current year} Azka Danendra Cahya. Built with Laravel, Blade & Tailwind CSS.`

Use the current year dynamically if appropriate, while keeping the default presentation consistent with 2026.

Add subtle hover transitions and a small back-to-top button.

Do not include Instagram unless a real profile URL is configured.

## 15. SEO, Accessibility & Performance

Implement production-minded fundamentals.

### SEO

- Meaningful page title: `Azka Danendra Cahya | Information Systems Portfolio`.
- Meta description for internship recruiters.
- Open Graph metadata.
- Correct heading hierarchy.
- Favicon or simple monogram icon.
- Canonical URL only when the real production domain is known.

### Accessibility

- Semantic HTML.
- Keyboard-accessible navigation and modal.
- Visible focus states.
- Sufficient contrast.
- Accessible button labels.
- Alt text for meaningful images.
- Reduced-motion support.
- Do not use color alone to communicate status.

### Performance

- Optimize local images, specify width/height where practical, and lazy-load below-the-fold images.
- Avoid unnecessary client-side JavaScript.
- Use lazy loading for below-the-fold media.
- Prevent layout shifts.
- Avoid unnecessary dependencies.
- Keep Blade components and CSS/JavaScript modular and easy to maintain.

### Security and reliability

- Do not expose secrets.
- Do not use `dangerouslySetInnerHTML` for portfolio content.
- Do not add form submission, database operations, authentication, or server-side API integrations.
- Handle optional browser-side GitHub fetch failures without breaking the page.
- Avoid fake data in production.

## 16. Centralized Data Configuration

Create `config/portfolio.php` first as the centralized configuration for portfolio content.

Use clearly structured PHP arrays for:

- Personal profile.
- Navigation links.
- Skills grouped by category.
- Verified projects.
- Organizational experience.
- Certifications.
- Social links.
- GitHub username and configuration.

Use clearly structured PHP arrays (and PHP classes/DTOs only if useful) so adding, editing, or removing content is straightforward.

The UI components should consume the configuration rather than duplicate personal data in multiple files.

For unknown project details, use an unpublished or draft status rather than inventing data.

## 17. Implementation Workflow

Follow these steps in order:

1. Inspect the current workspace and identify whether a Laravel project already exists; inspect PHP, Composer, Node, and package versions.
2. Preserve useful existing code and configuration. If the workspace is empty, scaffold a Laravel application compatible with the available environment.
3. Inspect the uploaded portfolio reference PDF visually and derive the light lavender/periwinkle and deep navy-blue color tokens from it. Apply only its palette and visual mood; preserve the modern developer-portfolio layout and interactions specified in this prompt.
4. Inspect the uploaded CV PDF and make it available as a downloadable asset under `public/documents/` if the actual file is present.
5. Configure Tailwind CSS through Vite using the setup compatible with the installed Laravel version. Keep all page templates in Blade (`.blade.php`).
6. Create `config/portfolio.php` with Azka's verified personal data, skill categories, experience, contact information, GitHub configuration, and empty certification data.
7. Add a minimal route in `routes/web.php` to render the main Blade view using the static configuration data. Do not create controllers or backend logic.
8. Build the shared Blade layout, navbar, and reusable section/card components.
9. Implement the hero, about, skills, projects, experience, certifications, GitHub activity, contact, and footer sections.
10. Add responsive Tailwind styling, restrained CSS transitions, accessible mobile navigation, modal interactions, and reduced-motion support. Use Alpine.js or vanilla JavaScript only where necessary.
11. If live GitHub repositories are included, fetch public data directly from the browser with JavaScript and provide clear loading/unavailable/error states. Do not implement server-side fetching or a backend proxy.
12. Verify that all named routes, navigation links, CV download, modals, and external links work.
13. Run available Laravel checks and frontend asset build, such as `php artisan route:list` and `npm run build`; do not create backend tests for features that are out of scope. Run Pint or other linters only if installed/configured.
14. Fix PHP errors, Blade errors, missing assets, broken links, and Vite/build errors.
15. Check the website on mobile, tablet, and desktop breakpoints.
16. Provide a concise summary of completed work, project structure, development commands, and any items requiring the user's input.

## 18. Final Acceptance Criteria

The task is complete only when:

- The Laravel application runs successfully in the available environment.
- Blade templates render without PHP or template errors.
- Tailwind CSS is integrated through Vite and the production asset build succeeds.
- All main sections are implemented and responsive.
- The design is polished, cohesive, and follows the cool-white, lavender/periwinkle, and deep navy-blue palette sampled from the uploaded PDF while retaining the original developer-portfolio layout.
- The navbar links scroll to the correct sections and mobile navigation works accessibly.
- The CV download points to a real PDF; if no actual CV file is available, show no broken download link and clearly report that the asset is needed.
- Skills are presented without fabricated proficiency percentages.
- Only verified or explicitly confirmed projects are published as completed work.
- Organizational roles and dates match the provided information.
- The certification section remains empty until actual credentials are supplied.
- Any live GitHub data is fetched directly from a public source in the browser and gracefully handles errors; mock data is never misrepresented as real information.
- Email, LinkedIn, GitHub, and CV links work. No contact form or backend submission feature exists.
- No buttons lead to `#` or nonexistent pages.
- No missing images, broken links, or fake verification URLs remain.
- No React, Next.js, TypeScript, JSX, or React-only libraries are introduced as part of the implementation.

**Final objective:** Deliver a premium, modern personal portfolio that presents Azka Danendra Cahya as a capable Information Systems student with a combination of web development, requirements analysis, business-process modeling, and collaboration skills—ready to be considered for relevant internship opportunities.

Prioritize accuracy, a lightweight Laravel + Blade + Tailwind frontend, maintainability, and excellent UI/UX over unnecessary visual complexity. **No backend is required or wanted.**
