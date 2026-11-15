<section id="experience" class="relative overflow-hidden bg-background py-24">
    <img
        src="{{ asset('images/PortoWebFoto2.jpeg') }}"
        alt=""
        aria-hidden="true"
        class="pointer-events-none absolute inset-0 h-full w-full scale-105 object-cover opacity-[0.17] blur-[2px]"
        loading="lazy"
    >
    <div class="pointer-events-none absolute -left-24 top-16 h-72 w-72 rounded-full border border-navy-200/50" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-6xl px-4 sm:px-6">
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-12">
            <div class="lg:col-span-4">
                <div class="lg:sticky lg:top-28" data-reveal>
                    <x-section-heading :title="$experience['title']" :subtitle="$experience['subtitle']">Experience</x-section-heading>
                    <div class="mt-2 flex items-baseline gap-3" aria-hidden="true">
                        <span class="editorial-italic text-6xl text-navy-200">05</span>
                        <span class="font-mono text-xs uppercase tracking-widest text-muted">roles · committees<br>&amp; organizations</span>
                    </div>
                    <p class="mt-4 max-w-xs border-l-2 border-navy-200 pl-4 font-mono text-xs leading-relaxed tracking-wide text-muted">2027 — 2025<br>Most recent first.<br>Details updated as confirmed.</p>
                </div>
            </div>

            <div class="lg:col-span-8" data-reveal>
                <ul role="list">
                    @foreach ($experience['items'] as $item)
                        <x-experience-card :item="$item"/>
                    @endforeach
                </ul>
            </div>
        </div>

        <div id="certifications" class="mt-24 scroll-mt-24">
            <div data-reveal>
                <x-section-heading :title="$certifications['title']" :subtitle="$certifications['subtitle']">Credentials</x-section-heading>
            </div>

            @if (count($certifications['items']) > 0)
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3" data-reveal>
                    @foreach ($certifications['items'] as $cert)
                        <div class="flex flex-col rounded-3xl border border-navy-100 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:border-navy-200 hover:shadow-md">
                            <span class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-peri-50 text-peri-600">
                                <x-icon name="certificate"/>
                            </span>
                            <h3 class="text-base font-bold text-foreground">{{ $cert['title'] }}</h3>
                            <p class="mt-1 text-sm font-medium text-peri-600">{{ $cert['issuer'] }}</p>
                            <p class="mt-2 text-xs text-muted">{{ $cert['issue_date'] }}</p>

                            <div class="mt-4 flex flex-wrap gap-2">
                                @foreach ($cert['skills'] as $topic)
                                    <span class="rounded-full bg-navy-50 px-2.5 py-1 text-xs font-medium text-navy-700">{{ $topic }}</span>
                                @endforeach
                            </div>

                            <div class="mt-6 flex flex-wrap gap-3 border-t border-navy-50 pt-4">
                                @if (!empty($cert['verification_url']))
                                    <a href="{{ $cert['verification_url'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-xl bg-navy-700 px-4 py-2 text-sm font-semibold text-white transition hover:bg-navy-800">Verify Certificate <x-icon name="external" class="h-4 w-4"/></a>
                                @endif
                                @if (!empty($cert['pdf_url']))
                                    <a
                                        href="{{ asset($cert['pdf_url']) }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex items-center gap-2 rounded-xl border border-navy-200 bg-white px-4 py-2 text-sm font-semibold text-navy-700 transition hover:bg-navy-50"
                                    >View PDF <x-icon name="external" class="h-4 w-4"/></a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="overflow-hidden rounded-3xl border border-navy-100 bg-white shadow-sm" data-reveal>
                    <div class="flex flex-col items-center px-8 py-12 text-center sm:px-12">
                        <span class="inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-navy-700 text-white">
                            <x-icon name="certificate" class="h-7 w-7"/>
                        </span>
                        <h3 class="mt-5 text-lg font-bold text-navy-700">{{ $certifications['empty_heading'] }}</h3>
                        <p class="mx-auto mt-2 max-w-md text-sm leading-relaxed text-muted">{{ $certifications['empty_description'] }}</p>
                        <p class="mt-4 rounded-full bg-navy-50 px-4 py-1.5 font-mono text-[11px] uppercase tracking-widest text-muted">Verified credentials only · nothing invented</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
