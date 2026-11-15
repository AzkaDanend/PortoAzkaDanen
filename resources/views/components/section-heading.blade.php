@props(['title', 'subtitle' => null])

<div class="mb-10 max-w-2xl">
    <span class="mb-3 inline-block rounded-full border border-peri-200 bg-peri-50 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-peri-600">
        {{ $slot }}
    </span>
    <h2 class="text-3xl font-bold tracking-tight text-navy-700 sm:text-4xl">{{ $title }}</h2>
    @if ($subtitle)
        <p class="mt-3 text-base leading-relaxed text-muted">{{ $subtitle }}</p>
    @endif
</div>
