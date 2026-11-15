<footer class="bg-navy-800 py-14 text-navy-100">
    <div class="mx-auto max-w-6xl px-4 sm:px-6">
        <div class="flex flex-col items-center gap-6 text-center">
            <h2 class="text-2xl font-extrabold tracking-tight text-white sm:text-3xl">{{ $footer['closing'] }}</h2>
            <p class="text-sm text-navy-200">{{ $footer['supporting'] }}</p>

            <div class="flex items-center gap-4">
                <a href="{{ $social['github']['url'] }}" target="_blank" rel="noopener noreferrer" class="rounded-lg p-2 text-navy-200 transition hover:bg-white/10 hover:text-white" aria-label="GitHub profile">
                    <x-icon name="github" class="h-5 w-5"/>
                </a>
                <a href="{{ $social['linkedin']['url'] }}" target="_blank" rel="noopener noreferrer" class="rounded-lg p-2 text-navy-200 transition hover:bg-white/10 hover:text-white" aria-label="LinkedIn profile">
                    <x-icon name="linkedin" class="h-5 w-5"/>
                </a>
                <a href="mailto:{{ $profile['email'] }}" class="rounded-lg p-2 text-navy-200 transition hover:bg-white/10 hover:text-white" aria-label="Email {{ $profile['name'] }}">
                    <x-icon name="mail" class="h-5 w-5"/>
                </a>
            </div>

            <p class="text-xs text-navy-300">© {{ date('Y') }} {{ $profile['name'] }}. Built with Laravel, Blade &amp; Tailwind CSS.</p>
        </div>

        <div class="mt-8 flex justify-center">
            <a
                href="#top"
                class="inline-flex items-center gap-2 rounded-xl border border-white/20 bg-white/10 px-4 py-2 text-xs font-semibold text-white backdrop-blur transition hover:bg-white/20"
                aria-label="Back to top"
            ><x-icon name="arrow-up" class="h-4 w-4"/> Back to top</a>
        </div>
    </div>
</footer>
