<section id="education" class="relative overflow-hidden bg-navy-800 py-20 text-white">
    <div class="pointer-events-none absolute -left-24 -top-24 h-80 w-80 rounded-full border border-white/10" aria-hidden="true"></div>
    <div class="pointer-events-none absolute -bottom-32 -right-16 h-96 w-96 rounded-full border border-white/10" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-6xl px-4 sm:px-6">
        <div class="grid grid-cols-1 items-stretch gap-8 lg:grid-cols-12">
            <div class="lg:col-span-4" data-reveal>
                <span class="inline-block rounded-full border border-white/20 bg-white/10 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-white/85">Education</span>
                <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">Structured learning, applied practice.</h2>
                <p class="mt-3 max-w-sm text-sm leading-relaxed text-white/75">Formal study at Universitas Airlangga paired with hands-on web development and systems analysis work.</p>
                <dl class="mt-6 space-y-3 font-mono text-xs tracking-wide text-white/70">
                    <div class="flex gap-3"><dt class="w-20 shrink-0 uppercase text-white/50">Period</dt><dd>{{ $profile['study_period'] }}</dd></div>
                    <div class="flex gap-3"><dt class="w-20 shrink-0 uppercase text-white/50">Level</dt><dd>{{ $profile['semester'] }}</dd></div>
                    <div class="flex gap-3"><dt class="w-20 shrink-0 uppercase text-white/50">Base</dt><dd>{{ $profile['location'] }}</dd></div>
                </dl>
            </div>

            <div class="lg:col-span-8" data-reveal>
                <div class="relative h-full overflow-hidden rounded-3xl border border-white/15 bg-white/5 backdrop-blur-sm">
                    <img
                        src="{{ asset('images/PortoWebFoto3.jpeg') }}"
                        alt=""
                        aria-hidden="true"
                        class="pointer-events-none absolute inset-0 h-full w-full scale-105 object-cover opacity-25 blur-[2px]"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-800/60 via-transparent to-navy-800/30" aria-hidden="true"></div>
                    <div class="relative max-w-2xl p-7 sm:p-9">
                        <p class="font-mono text-[11px] uppercase tracking-[0.25em] text-[#F4B8A2]">{{ $profile['study_period'] }}</p>
                        <h3 class="mt-3 text-2xl font-bold leading-tight">{{ $profile['university'] }}</h3>
                        <p class="mt-1 text-sm font-semibold text-white/85">{{ $profile['major'] }} · Undergraduate</p>
                        <p class="mt-4 text-sm leading-relaxed text-white/75">Information Systems study covering software development, databases, requirements analysis, business process modeling, and enterprise architecture foundations.</p>
                        <ul class="mt-6 space-y-2.5 text-sm text-white/85">
                            <li class="flex items-center gap-2.5"><span class="h-1.5 w-1.5 rounded-full bg-emerald-300" aria-hidden="true"></span>Web development with PHP, Laravel, Python</li>
                            <li class="flex items-center gap-2.5"><span class="h-1.5 w-1.5 rounded-full bg-emerald-300" aria-hidden="true"></span>UML, BPMN, ERD and requirements modeling</li>
                            <li class="flex items-center gap-2.5"><span class="h-1.5 w-1.5 rounded-full bg-emerald-300" aria-hidden="true"></span>Team-based organizational experience</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
