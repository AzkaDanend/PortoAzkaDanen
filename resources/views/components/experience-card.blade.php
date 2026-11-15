@props(['item'])

<li class="relative flex gap-6 pl-4 sm:pl-0 sm:gap-8 pb-10 last:pb-0">
    <div class="relative flex flex-col items-center">
        <span class="z-10 flex h-10 w-10 items-center justify-center rounded-full border-2 border-peri-400 bg-peri-50 text-peri-600">
            <x-icon name="users" class="h-5 w-5"/>
        </span>
        <span class="absolute top-10 inset-x-0 bottom-0 w-px bg-navy-100" aria-hidden="true"></span>
    </div>

    <div class="grow rounded-2xl border border-navy-100 bg-white p-5 shadow-sm transition duration-200 hover:border-navy-200 hover:shadow-md">
        <div class="flex flex-wrap items-start justify-between gap-2">
            <div>
                <h3 class="text-base font-bold text-navy-700">{{ $item['role'] }}</h3>
                <p class="text-sm font-medium text-peri-600">{{ $item['organization'] }}</p>
            </div>
            <span class="inline-flex items-center gap-1.5 rounded-full bg-navy-50 px-3 py-1 text-xs font-semibold text-navy-700">
                <x-icon name="calendar" class="h-3.5 w-3.5"/>
                {{ $item['period'] }}
            </span>
        </div>
        <p class="mt-3 text-sm leading-relaxed text-muted">{{ $item['description'] }}</p>
    </div>
</li>
