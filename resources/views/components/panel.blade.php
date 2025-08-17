@php
    $classes =
        'p-4 bg-white/5 rounded-xl text-center border border-transparent hover:border-blue-800/50 transition-colors duration-1000 group';
@endphp

<div {{ $attributes = $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
