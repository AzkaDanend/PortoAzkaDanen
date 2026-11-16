<nav
    x-data='{
        open: false, scrolled: false, active: "home",
        sectionIds: [@foreach ($navigation as $i => $item) @if($i > 0), @endif"{{ $item['id'] }}"@endforeach],
        uspy: (id) => { return document.getElementById(id); },
        onscroll() {
            const y = window.scrollY + 140;
            let current = this.sectionIds[0];
            for (const id of this.sectionIds) {
                const el = this.uspy(id);
                if (el && el.offsetTop <= y) current = id;
            }
            this.active = current;
        }
    }'
    x-init="scrolled = window.scrollY > 40;
        window.addEventListener('scroll', () => { scrolled = window.scrollY > 40; onscroll(); }, { passive: true });
        onscroll();"
    @keydown.escape.window="open = false"
    class="fixed inset-x-0 top-0 z-50"
>
    <div class="mx-auto max-w-6xl px-4 sm:px-6">
        <div
            class="mt-3 flex items-center justify-between rounded-2xl border px-4 py-3 transition-all duration-300"
            :class="scrolled
                ? 'border-navy-200/70 bg-white/85 shadow-lg shadow-navy-700/5 backdrop-blur-md'
                : 'border-white/25 bg-white/10 shadow-none backdrop-blur-md'"
        >
            <a href="#home" class="text-lg font-bold tracking-tight transition-colors" :class="scrolled ? 'text-navy-700' : 'text-white'" aria-label="Home - Azka Danendra Cahya">
                Azka<span class="editorial-italic font-medium">.</span>
            </a>

            <ul class="hidden items-center gap-1 md:flex" role="list">
                @foreach ($navigation as $item)
                    <li>
                        <a
                            href="{{ $item['href'] }}"
                            @click.prevent="
                                document.querySelector('{{ $item['href'] }}')?.scrollIntoView({ behavior: 'smooth' });
                                active = '{{ $item['id'] }}';"
                            class="rounded-lg px-3 py-2 text-sm font-medium transition-colors"
                            :class="active === '{{ $item['id'] }}'
                                ? (scrolled ? 'bg-navy-50 text-navy-700' : 'bg-white/20 text-white')
                                : (scrolled ? 'text-muted hover:bg-navy-50/60 hover:text-navy-700' : 'text-white/80 hover:bg-white/10 hover:text-white')"
                        >{{ $item['label'] }}</a>
                    </li>
                @endforeach
            </ul>

            <div class="hidden items-center gap-3 md:flex">
                <a
                    href="#contact"
                    class="rounded-xl px-4 py-2 text-sm font-semibold shadow-sm transition focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-navy-600"
                    :class="scrolled ? 'bg-navy-700 text-white hover:bg-navy-800' : 'bg-white text-navy-800 hover:bg-navy-50'"
                >Let's Connect</a>
            </div>

            <button
                type="button"
                x-cloak
                class="inline-flex items-center justify-center rounded-lg border p-2 transition md:hidden"
                :class="scrolled ? 'border-navy-200 bg-white/70 text-navy-700 hover:bg-navy-50' : 'border-white/30 bg-white/10 text-white hover:bg-white/20'"
                @click="open = !open"
                :aria-expanded="open.toString()"
                aria-controls="mobile-menu"
                aria-label="Toggle navigation menu"
            >
                <svg x-show="!open" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7h16M4 12h16M4 17h16"/></svg>
                <svg x-show="open" x-cloak class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 6l12 12M18 6L6 18"/></svg>
            </button>
        </div>

        <div
            x-show="open"
            x-cloak
            x-transition
            id="mobile-menu"
            class="mt-2 rounded-2xl border border-navy-200/70 bg-white/95 p-4 shadow-lg backdrop-blur-md md:hidden"
        >
            <ul class="flex flex-col gap-1" role="list">
                @foreach ($navigation as $item)
                    <li>
                        <a
                            href="{{ $item['href'] }}"
                            @click="open = false; active = '{{ $item['id'] }}';"
                            class="block rounded-lg px-3 py-2 text-sm font-medium text-foreground transition hover:bg-navy-50 hover:text-navy-700"
                        >{{ $item['label'] }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="mt-3 flex items-center justify-end gap-3 border-t border-navy-100 pt-3">
                <a href="#contact" @click="open = false" class="rounded-xl bg-navy-700 px-4 py-2 text-sm font-semibold text-white transition hover:bg-navy-800">Let's Connect</a>
            </div>
        </div>
    </div>
</nav>
