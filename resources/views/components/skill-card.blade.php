@props(['skill'])

<div class="group rounded-2xl border border-navy-100 bg-white p-4 shadow-sm transition duration-200 hover:-translate-y-0.5 hover:border-navy-200 hover:shadow-md">
    <div class="flex items-start gap-3">
        <span class="mt-0.5 inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-lg bg-navy-50 text-navy-700 transition group-hover:bg-navy-100">
            <x-icon name="check" class="h-3.5 w-3.5"/>
        </span>
        <div class="min-w-0">
            <h3 class="text-sm font-semibold text-foreground">{{ $skill['name'] }}</h3>
            <p class="mt-1 text-xs leading-relaxed text-muted">{{ $skill['note'] }}</p>
        </div>
    </div>
</div>
