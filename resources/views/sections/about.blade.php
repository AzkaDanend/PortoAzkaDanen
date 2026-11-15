<section id="about" class="relative overflow-hidden bg-background py-24">
    <img
        src="{{ asset('images/PortoWebFoto1.jpeg') }}"
        alt=""
        aria-hidden="true"
        class="pointer-events-none absolute inset-0 h-full w-full scale-105 object-cover opacity-[0.17] blur-[2px]"
        loading="lazy"
    >
    <div class="pointer-events-none absolute -right-32 top-10 h-96 w-96 rounded-full border border-navy-200/50" aria-hidden="true"></div>
    <div class="pointer-events-none absolute -right-20 top-24 h-72 w-72 rounded-full border border-peri-200/60" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-6xl px-4 sm:px-6">
        <div class="grid grid-cols-1 items-start gap-10 lg:grid-cols-12 lg:gap-14">
            {{-- Portrait editorial --}}
            <div class="lg:col-span-5" data-reveal>
                <div class="relative">
                    <div class="absolute -inset-3 rounded-[2.2rem] border border-navy-200/60" aria-hidden="true"></div>
                    <figure class="relative overflow-hidden rounded-[2rem] border border-navy-100 bg-white shadow-xl shadow-navy-700/10">
                        <img
                            src="{{ asset('images/PortoWebFoto.jpeg') }}"
                            alt="Portrait of {{ $profile['name'] }} outdoors"
                            class="aspect-[4/5] w-full object-cover object-top"
                            loading="lazy"
                            width="640"
                            height="800"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-900/70 via-transparent to-transparent" aria-hidden="true"></div>
                        <figcaption class="absolute inset-x-0 bottom-0 p-5">
                            <p class="font-mono text-[11px] uppercase tracking-[0.25em] text-white/80">About Me · Information Systems</p>
                            <p class="editorial-italic mt-1 text-2xl text-white">{{ $profile['name'] }}</p>
                            <p class="mt-1 text-xs font-medium text-white/80">{{ $profile['university'] }} — {{ $profile['location'] }}</p>
                        </figcaption>
                    </figure>
                    <span class="absolute -bottom-4 left-6 inline-flex items-center gap-2 rounded-full bg-navy-700 px-4 py-2 text-xs font-semibold text-white shadow-lg">
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-300" aria-hidden="true"></span>
                        {{ $profile['semester'] }} · {{ $profile['study_period'] }}
                    </span>
                </div>
            </div>

            {{-- Copy + highlights --}}
            <div class="lg:col-span-7" data-reveal>
                <x-section-heading :title="$about['title']" :subtitle="$about['subtitle']">About</x-section-heading>

                <div class="space-y-4">
                    @foreach ($about['intro'] as $paragraph)
                        <p class="max-w-2xl text-base leading-relaxed text-muted">{{ $paragraph }}</p>
                    @endforeach
                </div>

                <div class="mt-6">
                    <h3 class="mb-3 text-sm font-bold uppercase tracking-wide text-navy-700">Career Interests</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($about['career_interests'] as $interest)
                            <span class="inline-flex items-center gap-2 rounded-full border border-navy-100 bg-white px-3 py-1.5 text-sm font-medium text-navy-700">
                                <x-icon name="spark" class="h-4 w-4 text-peri-500"/>
                                {{ $interest }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-3">
                    @foreach ($about['highlights'] as $highlight)
                        <div class="group rounded-2xl border border-navy-100 bg-white p-5 shadow-sm transition duration-200 hover:-translate-y-0.5 hover:border-navy-200 hover:shadow-md">
                            <span class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-navy-700 text-white transition group-hover:bg-navy-800">
                                <x-icon :name="$highlight['icon']"/>
                            </span>
                            <h3 class="text-sm font-bold text-foreground">{{ $highlight['title'] }}</h3>
                            <p class="mt-1.5 text-[13px] leading-relaxed text-muted">{{ $highlight['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
