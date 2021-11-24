@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-white bg-gray-900 hover:bg-gray-700 text-white rounded-full py-3 px-6 text-lg font-extrabold'
            : 'text-gray-300 hover:bg-gray-700 hover:text-white rounded-full py-3 px-6 text-lg font-semibold';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>