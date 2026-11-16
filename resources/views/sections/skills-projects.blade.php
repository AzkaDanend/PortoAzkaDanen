<section id="skills" class="relative overflow-hidden bg-background py-24">
    <img
        src="{{ asset('images/PortoWebFoto4.jpeg') }}"
        alt=""
        aria-hidden="true"
        class="pointer-events-none absolute inset-0 h-full w-full scale-105 object-cover opacity-[0.17] blur-[2px]"
        loading="lazy"
    >
    <div class="pointer-events-none absolute -left-28 bottom-0 h-80 w-80 rounded-full bg-peri-100/50 blur-3xl" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-6xl px-4 sm:px-6">
        <div data-reveal>
            <x-section-heading :title="$skills['title']" :subtitle="$skills['subtitle']">Skills</x-section-heading>
        </div>

        <div class="grid grid-cols-1 gap-5 lg:grid-cols-6">
            @foreach ($skills['categories'] as $index => $category)
                <article
                    data-reveal
                    class="group flex flex-col rounded-3xl border border-navy-100 bg-white p-6 shadow-sm transition duration-200 hover:-translate-y-0.5 hover:border-navy-200 hover:shadow-md {{ $index === 0 ? 'lg:col-span-4' : ($index === 1 ? 'lg:col-span-2' : 'lg:col-span-3') }}"
                >
                    <div class="mb-5 flex items-center gap-3">
                        <span class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-navy-700 text-white transition group-hover:bg-navy-800">
                            <x-icon :name="$category['icon']"/>
                        </span>
                        <div>
                            <h3 class="text-base font-bold text-foreground">{{ $category['name'] }}</h3>
                            <p class="font-mono text-[11px] uppercase tracking-widest text-muted">{{ count($category['skills']) }} areas</p>
                        </div>
                    </div>

                    <div class="grid flex-1 content-start grid-cols-1 gap-3 {{ $index === 0 ? 'sm:grid-cols-2' : '' }}">
                        @foreach ($category['skills'] as $skill)
                            <x-skill-card :skill="$skill"/>
                        @endforeach
                    </div>
                </article>
            @endforeach
        </div>

        <div id="projects" class="mt-24 scroll-mt-24">
            <div class="flex flex-wrap items-end justify-between gap-4" data-reveal>
                <x-section-heading :title="$projects['title']" :subtitle="$projects['subtitle']">Projects</x-section-heading>
                @php $publishedCount = collect($projects['items'])->filter(fn ($p) => ($p['status'] ?? 'draft') !== 'draft')->count(); @endphp
                <p class="mb-10 shrink-0 rounded-full border border-navy-200 bg-white px-4 py-2 font-mono text-xs tracking-wide text-muted">{{ $publishedCount }} verified · only confirmed work published</p>
            </div>

            @php $published = collect($projects['items'])->filter(fn ($p) => ($p['status'] ?? 'draft') !== 'draft'); @endphp

            @if ($published->isNotEmpty())
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    @foreach ($published as $project)
                        <x-project-card :project="$project"/>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</section>
