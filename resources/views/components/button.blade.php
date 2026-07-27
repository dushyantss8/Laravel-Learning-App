@props([
  'href' => null,
  'type' => 'button',
])

@if ($href)
  <a
    href="{{ $href }}"
    {{ $attributes->except(['href', 'type'])->merge(['class' => 'inline-flex shrink-0 items-center gap-2 rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600']) }}
  >
    {{ $slot }}
  </a>
@else
  <button
    type="{{ $type }}"
    {{ $attributes->except(['href', 'type'])->merge(['class' => 'inline-flex shrink-0 items-center gap-2 rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600']) }}
  >
    {{ $slot }}
  </button>
@endif