<section id="github" class="relative overflow-hidden bg-navy-900 py-24 text-white">
    <img
        src="{{ asset('images/PortoWebFoto4.jpeg') }}"
        alt=""
        aria-hidden="true"
        class="pointer-events-none absolute inset-0 h-full w-full scale-105 object-cover opacity-25 blur-[2px]"
        loading="lazy"
    >
    <div class="absolute inset-0 bg-gradient-to-b from-navy-900/55 via-navy-900/65 to-navy-900/75" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-6xl px-4 sm:px-6">
        <div class="max-w-2xl" data-reveal>
            <span class="mb-3 inline-block rounded-full border border-white/20 bg-white/10 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-white/85">GitHub</span>
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">{{ $github['title'] }}</h2>
            <p class="mt-3 text-base leading-relaxed text-white/70">{{ $github['subtitle'] }}</p>
        </div>

        <div
            x-data="githubActivity"
            x-init="load()"
            x-cloak
            data-reveal
        >
            <div class="mt-10 grid grid-cols-1 gap-6 lg:grid-cols-5">
                <div class="lg:col-span-2">
                    <div class="rounded-3xl border border-navy-100 bg-white p-6 text-foreground">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="text-sm font-bold uppercase tracking-wide text-navy-700">Contribution Calendar</h3>
                            <a
                                href="https://github.com/{{ $github['username'] }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-1.5 text-xs font-semibold text-peri-600 hover:text-peri-500"
                            ><x-icon name="github" class="h-4 w-4"/> {{ $github['username'] }}</a>
                        </div>

                        <template x-if="cal.status === 'loading'">
                            <p class="py-6 text-center text-sm text-muted">Loading contribution data…</p>
                        </template>
                        <template x-if="cal.status === 'error'">
                            <p class="py-6 text-center text-sm text-muted">Contribution data is unavailable right now. Please check back later.</p>
                        </template>
                        <template x-if="cal.status === 'empty'">
                            <p class="py-6 text-center text-sm text-muted">No public contribution activity found yet.</p>
                        </template>
                        <template x-if="cal.status === 'ready'">
                            <div>
                                <div class="overflow-x-auto pb-2">
                                    <div class="inline-flex flex-col gap-1" role="img" aria-label="GitHub contribution heatmap">
                                        <template x-for="row in cal.grid" :key="'r' + row.i">
                                            <div class="flex gap-1">
                                                <template x-for="cell in row.cells" :key="cell.date">
                                                    <span
                                                        class="h-3 w-3 shrink-0 rounded-[3px] transition"
                                                        :class="cell.level > 4 ? 'bg-navy-800' : cell.level === 4 ? 'bg-navy-700' : cell.level === 3 ? 'bg-navy-500' : cell.level === 2 ? 'bg-navy-300' : cell.level === 1 ? 'bg-navy-100' : 'bg-white border border-navy-100'"
                                                        :title="cell.date + ': ' + cell.count + (cell.count === 1 ? ' contribution' : ' contributions')"
                                                    ></span>
                                                </template>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                                <div class="mt-3 flex items-center gap-2 text-xs text-muted">
                                    <span>Less</span>
                                    <span class="h-3 w-3 rounded-[3px] bg-white border border-navy-100"></span>
                                    <span class="h-3 w-3 rounded-[3px] bg-navy-100"></span>
                                    <span class="h-3 w-3 rounded-[3px] bg-navy-300"></span>
                                    <span class="h-3 w-3 rounded-[3px] bg-navy-500"></span>
                                    <span class="h-3 w-3 rounded-[3px] bg-navy-700"></span>
                                    <span>More</span>
                                </div>
                                <p class="mt-2 text-xs text-muted">Public contribution activity (Push, Pull Request, Issues, Create events).</p>
                            </div>
                        </template>
                    </div>
                </div>

                <div class="lg:col-span-3">
                    <h3 class="mb-4 text-sm font-bold uppercase tracking-wide text-white/85">Public Repositories</h3>

                    <template x-if="repos.status === 'loading'">
                        <div class="space-y-4" aria-live="polite">
                            <div class="h-28 animate-pulse rounded-3xl bg-white/10"></div>
                            <div class="h-28 animate-pulse rounded-3xl bg-white/10"></div>
                        </div>
                    </template>
                    <template x-if="repos.status === 'error'">
                        <p class="rounded-3xl border border-white/15 bg-white/5 p-6 text-sm text-white/70 backdrop-blur-sm" aria-live="polite">Repository data is unavailable right now. <a class="underline underline-offset-4" href="https://github.com/{{ $github['username'] }}" target="_blank" rel="noopener noreferrer">Visit GitHub directly</a>.</p>
                    </template>
                    <template x-if="repos.status === 'empty'">
                        <p class="rounded-3xl border border-white/15 bg-white/5 p-6 text-sm text-white/70 backdrop-blur-sm" aria-live="polite">No public repositories found for this account.</p>
                    </template>
                    <template x-if="repos.status === 'ready'">
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2" aria-live="polite">
                            <template x-for="repo in repos.list" :key="repo.name">
                                <a
                                    :href="repo.url || '#'"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="group flex flex-col rounded-3xl border border-navy-100 bg-white p-5 text-foreground shadow-sm transition duration-200 hover:-translate-y-0.5 hover:border-navy-200 hover:shadow-md"
                                >
                                    <div class="flex items-start justify-between gap-2">
                                        <h4 class="truncate font-mono text-sm font-bold text-navy-700 group-hover:text-navy-800" x-text="repo.name"></h4>
                                        <div class="flex shrink-0 items-center gap-1.5">
                                            <template x-if="repo.fork">
                                                <span class="rounded-full bg-navy-50 px-2 py-0.5 font-mono text-[10px] font-bold uppercase tracking-wide text-navy-500">Fork</span>
                                            </template>
                                            <x-icon name="external" class="h-4 w-4 shrink-0 text-muted group-hover:text-navy-700"/>
                                        </div>
                                    </div>
                                    <p class="mt-2 grow text-xs leading-relaxed text-muted" x-text="repo.description || 'No description provided.'"></p>
                                    <div class="mt-4 flex flex-wrap items-center gap-3 border-t border-navy-50 pt-3 text-xs text-muted">
                                        <template x-if="repo.language">
                                            <span class="inline-flex items-center gap-1.5">
                                                <span class="h-2.5 w-2.5 rounded-full" :style="`background:${palette[repo.language] || '#9aa0b5'}`"></span>
                                                <span x-text="repo.language"></span>
                                            </span>
                                        </template>
                                        <span class="inline-flex items-center gap-1.5"><x-icon name="star" class="h-3.5 w-3.5"/> <span x-text="repo.stars"></span></span>
                                        <span class="inline-flex items-center gap-1.5"><x-icon name="fork" class="h-3.5 w-3.5"/> <span x-text="repo.forks"></span></span>
                                    </div>
                                </a>
                            </template>
                        </div>
                    </template>
                </div>
            </div>
        </div>

        {{-- GitHub language badge palette lookup (server-side reference data) --}}
        <script type="application/json" id="gh-language-colors">
            {!! json_encode([
                'PHP' => '#4F5B93', 'Python' => '#3572A5', 'Dart' => '#0175C2',
                'JavaScript' => '#F1E05A', 'HTML' => '#E34C26', 'CSS' => '#563D7C',
                'Blade' => '#F75330', 'Java' => '#B07219', 'Kotlin' => '#A97BFF',
            ], JSON_HEX_TAG | JSON_HEX_AMP) !!}
        </script>

        <div id="contact" class="mt-24 scroll-mt-24">
            <div class="grid grid-cols-1 items-end gap-10 lg:grid-cols-12">
                <div class="lg:col-span-8" data-reveal>
                    <span class="inline-block rounded-full border border-white/20 bg-white/10 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-white/85 backdrop-blur-md">Contact</span>
                    <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">{{ $contact['title'] }}</h2>
                    <p class="editorial-italic mt-3 max-w-xl" style="font-size:clamp(1.75rem,4vw,3rem);line-height:1.1">{{ $contact['headline'] }}</p>
                    <p class="mt-4 max-w-xl text-base leading-relaxed text-white/75">{{ $contact['supporting_text'] }}</p>

                    <div class="mt-8 flex flex-wrap items-center gap-3">
                        <a
                            href="mailto:{{ $profile['email'] }}"
                            class="inline-flex items-center gap-2 rounded-full bg-white px-6 py-3.5 text-sm font-semibold text-navy-800 shadow-lg transition hover:bg-navy-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white"
                        ><x-icon name="mail" class="h-4 w-4"/> {{ $contact['mail_cta'] }}</a>
                        <a href="{{ $social['github']['url'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-full border border-white/25 bg-white/10 px-5 py-3 text-sm font-medium text-white backdrop-blur-md transition hover:bg-white/20"><x-icon name="github" class="h-4 w-4"/> GitHub</a>
                        <a href="{{ $social['linkedin']['url'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-full border border-white/25 bg-white/10 px-5 py-3 text-sm font-medium text-white backdrop-blur-md transition hover:bg-white/20"><x-icon name="linkedin" class="h-4 w-4"/> LinkedIn</a>
                        @isset($social['instagram'])
                            <a href="{{ $social['instagram']['url'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-full border border-white/25 bg-white/10 px-5 py-3 text-sm font-medium text-white backdrop-blur-md transition hover:bg-white/20"><x-icon name="instagram" class="h-4 w-4"/> Instagram</a>
                        @endisset
                    </div>
                </div>

                <div class="lg:col-span-4" data-reveal>
                    <div class="rounded-3xl border border-white/15 bg-white/10 p-6 backdrop-blur-md">
                        <p class="font-mono text-[11px] uppercase tracking-[0.25em] text-white/70">Direct channels</p>
                        <ul class="mt-4 space-y-3 text-sm">
                            <li><a href="mailto:{{ $profile['email'] }}" class="font-semibold text-white underline decoration-white/30 underline-offset-4 hover:decoration-white">{{ $profile['email'] }}</a></li>
                            <li class="text-white/75">{{ $profile['location'] }}</li>
                            <li class="text-white/75">{{ $profile['university'] }} · {{ $profile['major'] }}</li>
                        </ul>
                        <p class="mt-5 border-t border-white/15 pt-4 font-mono text-[10px] uppercase tracking-[0.2em] text-white/60">Photo: shoreline at golden hour</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('alpine:init', () => {
        const palette = (() => {
            try {
                return JSON.parse(document.getElementById('gh-language-colors').textContent);
            } catch (e) {
                return {};
            }
        })();

        Alpine.data('githubActivity', () => ({
            repos: { status: 'loading', list: [] },
            cal: { status: 'loading', grid: [] },
            palette,

            load() {
                if ('IntersectionObserver' in window) {
                    const obs = new IntersectionObserver((entries) => {
                        if (entries.some(e => e.isIntersecting)) {
                            obs.disconnect();
                            this.fetchData();
                        }
                    }, { rootMargin: '200px' });
                    obs.observe(this.$root);
                } else {
                    this.fetchData();
                }
            },

            async fetchData() {
                const [reposRes, calRes] = await Promise.allSettled([
                    this.promise(1), this.promise(2)
                ]);
                const r = reposRes.status === 'fulfilled' ? await reposRes.value : { ok: false };
                const c = calRes.status === 'fulfilled' ? await calRes.value : { ok: false };

                if (r.ok) {
                    this.repos.list = r.repos;
                    this.repos.status = r.repos.length ? 'ready' : 'empty';
                } else {
                    this.repos.status = 'error';
                }

                if (c.ok) {
                    this.cal.grid = this.buildGrid(c.counts);
                    this.cal.status = this.cal.grid.length ? 'ready' : 'empty';
                } else {
                    this.cal.status = 'error';
                }
            },

            async promise(which) {
                if (which === 1) {
                    const url = @json($github['repos_endpoint']);
                    try {
                        const res = await fetch(url, { headers: { Accept: 'application/vnd.github+json' } });
                        if (!res.ok) return { ok: false };
                        const data = await res.json();
                        if (!Array.isArray(data)) return { ok: false };
                        const repos = data
                            .filter((r) => r)
                            .map((r) => ({
                                name: r.name || '',
                                description: r.description,
                                language: r.language,
                                stars: r.stargazers_count ?? 0,
                                forks: r.forks_count ?? 0,
                                url: r.html_url ?? null,
                                fork: !!r.fork,
                            }));
                        return { ok: true, repos };
                    } catch (err) {
                        return { ok: false };
                    }
                }

                const base = @json($github['calendar_endpoint']);
                const seen = {};
                try {
                    for (let page = 1; page <= 3; page++) {
                        const res = await fetch(base + '?page=' + page + '&per_page=100', {
                            headers: { Accept: 'application/vnd.github+json' },
                        });
                        if (!res.ok) return { ok: false };
                        const batch = await res.json();
                        if (!Array.isArray(batch)) return { ok: false };
                        if (batch.length === 0) break;
                        for (const e of batch) {
                            if (!e || ['PushEvent', 'CreateEvent', 'PullRequestEvent', 'IssuesEvent'].indexOf(e.type) === -1) continue;
                            const day = String(e.created_at || '').slice(0, 10);
                            if (!day) continue;
                            seen[day] = (seen[day] || 0) + 1;
                        }
                    }
                } catch (err) {
                    return { ok: false };
                }
                const counts = Object.keys(seen).map((date) => ({ date, count: seen[date] }));
                return { ok: true, counts };
            },

            buildGrid(counts) {
                const map = {};
                for (const c of (counts || [])) map[c.date] = c.count;

                const weeks = 26;
                const end = new Date();
                end.setHours(0, 0, 0, 0);
                // Align to end of the upcoming Saturday (end of this week's run)
                end.setDate(end.getDate() + (6 - end.getDay()));

                const grid = [];
                for (let w = weeks - 1; w >= 0; w--) {
                    const cells = [];
                    for (let d = 0; d < 7; d++) {
                        const day = new Date(end);
                        day.setDate(end.getDate() - (w * 7 + d));
                        const key = day.toISOString().slice(0, 10);
                        const count = map[key] || 0;
                        cells.push({
                            date: key,
                            count,
                            level: count <= 0 ? 0 : count < 2 ? 1 : count < 4 ? 2 : count < 8 ? 3 : count < 12 ? 4 : 5,
                        });
                    }
                    grid.push({ i: weeks - 1 - w, cells });
                }
                return grid;
            },
        }));
    });
</script>
