<section id="home" class="relative min-h-[100svh] overflow-hidden bg-navy-900 text-white">
    {{-- Background photograph --}}
    <div class="absolute inset-0" aria-hidden="false">
        <img
            src="{{ asset('images/PortoWebFoto.jpeg') }}"
            alt=""
            aria-hidden="true"
            class="h-full w-full scale-105 object-cover object-center blur-[2px]"
            fetchpriority="high"
        >
    </div>
    {{-- Readability scrims (navy-dominant, photo colors show through on the right) --}}
    <div class="absolute inset-0 bg-gradient-to-r from-navy-900/90 via-navy-900/45 to-navy-900/10" aria-hidden="true"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/85 via-navy-900/10 to-navy-900/30" aria-hidden="true"></div>

    {{-- MAREN grid lines --}}
    <div class="pointer-events-none absolute inset-0 z-[1]" aria-hidden="true">
        <div class="absolute inset-y-0 left-[17.37%] w-px bg-white/25"></div>
        <div class="absolute inset-y-0 left-[73.04%] hidden w-px bg-white/25 sm:block"></div>
        <div class="absolute inset-x-0 top-[52.8%] hidden h-px bg-white/20 lg:block"></div>
        <div class="absolute inset-x-0 top-[76px] h-px bg-white/25"></div>
    </div>

    {{-- Watermark --}}
    <div class="pointer-events-none absolute inset-x-0 bottom-[-2vw] z-[1] overflow-hidden" aria-hidden="true">
        <p class="editorial-watermark whitespace-nowrap text-center text-white">AZKA</p>
    </div>

    {{-- Content --}}
    <div class="relative z-10 mx-auto flex min-h-[100svh] w-full max-w-6xl flex-col px-4 pb-10 pt-28 sm:px-6 sm:pt-32">
        <div class="grid flex-1 grid-cols-1 items-end gap-10 lg:grid-cols-12">
            {{-- Left / centre headline --}}
            <div class="lg:col-span-8">
                <span class="animate-editorial-fade inline-flex items-center gap-2 rounded-full border border-white/30 bg-white/10 px-4 py-1.5 text-xs font-semibold tracking-wide text-white backdrop-blur-md">
                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-300" aria-hidden="true"></span>
                    {{ $profile['major'] }} · {{ $profile['university'] }}
                </span>

                <h1 class="mt-5 [text-shadow:0_2px_28px_rgba(0,8,60,0.65)]">
                    <span class="editorial-headline animate-editorial-rise block uppercase text-white" style="animation-delay:.05s">Building</span>
                    <span class="editorial-headline animate-editorial-rise block uppercase text-white" style="animation-delay:.18s">Digital Experiences</span>
                    <span class="editorial-italic animate-editorial-rise mt-3 block text-white" style="font-size:clamp(1.75rem,4.5vw,3.75rem);animation-delay:.32s">Turning Ideas Into Solutions.</span>
                </h1>

                <p class="animate-editorial-fade mt-4 max-w-xl font-mono text-xs tracking-wide text-white/75" style="animation-delay:.45s">
                    {{ $profile['location'] }} · {{ $profile['semester'] }} · {{ $profile['study_period'] }}
                </p>

                <div class="animate-editorial-fade mt-6 flex flex-wrap items-center gap-4" style="animation-delay:.55s">
                    <a
                        href="#projects"
                        class="inline-flex items-center gap-2 rounded-full bg-white px-6 py-3 text-sm font-semibold text-navy-800 shadow-lg transition hover:bg-navy-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white"
                    >Explore My Projects</a>
                    <a
                        href="#projects"
                        class="inline-flex h-12 w-12 items-center justify-center rounded-full border border-white/40 bg-white/10 text-white backdrop-blur-md transition hover:bg-white/20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white"
                        aria-label="Scroll to projects"
                    >
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0-4 4m4-4H3"/></svg>
                    </a>
                    @if (!empty($cv['file']))
                        <a href="{{ asset($cv['file']) }}" download class="text-sm font-semibold text-white/85 underline decoration-white/40 underline-offset-4 transition hover:text-white">Download CV</a>
                    @endif
                    <span class="hidden items-center gap-3 sm:inline-flex" aria-label="Social links">
                        <a href="{{ $social['github']['url'] }}" target="_blank" rel="noopener noreferrer" class="text-white/75 transition hover:text-white" aria-label="GitHub profile">
                            <x-icon name="github" class="h-5 w-5"/>
                        </a>
                        <a href="{{ $social['linkedin']['url'] }}" target="_blank" rel="noopener noreferrer" class="text-white/75 transition hover:text-white" aria-label="LinkedIn profile">
                            <x-icon name="linkedin" class="h-5 w-5"/>
                        </a>
                    </span>
                </div>
            </div>

            {{-- Right column --}}
            <div class="lg:col-span-4">
                <div class="animate-editorial-fade rounded-2xl border border-white/20 bg-navy-900/35 p-5 backdrop-blur-md" style="animation-delay:.5s">
                    <p class="flex items-center gap-2 text-xs font-bold uppercase tracking-[0.2em] text-white/90">
                        <svg class="animate-editorial-star h-5 w-5 text-[#F4B8A2]" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 0c.9 6.6 5.4 11.1 12 12-6.6.9-11.1 5.4-12 12-.9-6.6-5.4-11.1-12-12C6.6 11.1 11.1 6.6 12 0Z"/></svg>
                        Portfolio · 2026
                    </p>
                    <p class="mt-3 text-sm leading-relaxed text-white/85">
                        I'm an Information Systems student at Universitas Airlangga who enjoys turning ideas and business needs into structured, practical digital solutions.
                    </p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        @foreach ($profile['interests'] as $interest)
                            <span class="rounded-full border border-white/25 bg-white/10 px-3 py-1 text-xs font-medium text-white">{{ $interest }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Bottom row: polaroid + labels + scroll cue --}}
        <div class="mt-10 flex flex-wrap items-end justify-between gap-6">
            <div class="flex items-end gap-6">
                <figure class="animate-editorial-drop w-32 shrink-0 rounded-md bg-white p-2 pb-3 shadow-2xl sm:w-44" style="transform:rotate(-13deg)">
                    <img
                        src="{{ asset('images/PortoWebFoto1.jpeg') }}"
                        alt="Azka overlooking a coastal cliff at dusk"
                        class="aspect-[4/5] w-full rounded-sm object-cover object-center"
                        loading="eager"
                        width="352"
                        height="440"
                    >
                    <figcaption class="mt-2 text-center">
                        <span class="editorial-italic block text-sm leading-tight text-navy-800">Field observation</span>
                        <span class="mt-0.5 block font-mono text-[10px] uppercase tracking-widest text-muted">Coastal survey · Dusk</span>
                    </figcaption>
                </figure>
                <p class="hidden pb-2 font-mono text-[11px] uppercase tracking-[0.25em] text-white/80 sm:block">
                    Surabaya<br>/ Portfolio<br>/ 2026
                </p>
            </div>

            <a href="#about" class="group inline-flex items-center gap-3 rounded-full border border-white/30 bg-white/10 px-4 py-2.5 text-xs font-semibold uppercase tracking-[0.2em] text-white backdrop-blur-md transition hover:bg-white/20" aria-label="Scroll to about section">
                Scroll to explore
                <svg class="h-4 w-4 transition group-hover:translate-y-0.5 motion-safe:animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0-7-7m7 7V3"/></svg>
            </a>
        </div>
    </div>
</section>
