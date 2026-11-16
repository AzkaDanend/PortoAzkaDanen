@props(['project'])

<div class="group flex flex-col overflow-hidden rounded-3xl border border-navy-100 bg-white shadow-sm transition duration-200 hover:-translate-y-1 hover:border-navy-200 hover:shadow-lg">
    <div class="relative h-44 overflow-hidden bg-gradient-to-br from-navy-700 via-navy-600 to-peri-400 sm:h-48">
        @if (!empty($project['thumbnail']))
            <img
                src="{{ $project['thumbnail'] }}"
                alt="Project thumbnail for {{ $project['title'] }}"
                class="h-full w-full object-cover transition duration-300 group-hover:scale-105"
                loading="lazy"
                width="600"
                height="360"
            >
        @else
            <div class="flex h-full w-full flex-col items-center justify-center gap-3 p-6 text-center">
                <span class="rounded-xl bg-white/15 px-4 py-1 font-mono text-xs uppercase tracking-widest text-white/90">{{ $project['status'] }}</span>
                @if (($project['status'] ?? '') === 'draft')
                    <p class="max-w-[16rem] text-sm font-medium text-white/80">Placeholders appear only while real project art is unavailable.</p>
                @endif
            </div>
        @endif
    </div>

    <div class="flex flex-1 flex-col p-6">
        <h3 class="text-lg font-bold text-navy-700">{{ $project['title'] }}</h3>

        <p class="mt-2 text-sm leading-relaxed text-muted">{{ $project['description'] }}</p>

        @if (!empty($project['problem']))
            <p class="mt-3 text-sm leading-relaxed text-foreground/80"><span class="font-semibold text-peri-600">Problem:</span> {{ $project['problem'] }}</p>
        @endif

        @if (!empty($project['role']))
            <p class="mt-2 text-sm text-foreground/80"><span class="font-semibold text-peri-600">Role:</span> {{ $project['role'] }}</p>
        @endif

        @if (!empty($project['technologies']))
            <div class="mt-4 flex flex-wrap gap-2">
                @foreach ($project['technologies'] as $tech)
                    <span class="rounded-full border border-navy-100 bg-navy-50 px-2.5 py-1 text-xs font-medium text-navy-700">{{ $tech }}</span>
                @endforeach
            </div>
        @endif

        <div class="mt-6 flex flex-wrap items-center gap-3 border-t border-navy-50 pt-4">
            @if (!empty($project['live_url']))
                <a
                    href="{{ $project['live_url'] }}"
                    class="inline-flex items-center gap-2 rounded-xl bg-navy-700 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-navy-800"
                    target="_blank"
                    rel="noopener noreferrer"
                >View Project <x-icon name="external" class="h-4 w-4"/></a>
            @endif

            @if (!empty($project['github_url']))
                <a
                    href="{{ $project['github_url'] }}"
                    class="inline-flex items-center gap-2 rounded-xl border border-navy-200 bg-white px-4 py-2 text-sm font-semibold text-navy-700 transition hover:bg-navy-50"
                    target="_blank"
                    rel="noopener noreferrer"
                ><x-icon name="github" class="h-4 w-4"/> GitHub</a>
            @endif
        </div>
    </div>
</div>
