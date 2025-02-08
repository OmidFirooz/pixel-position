@php
    $classes = "p-4 bg-white/5 rounded-xl gap-x-6 font-bold border border-transparent hover:border-blue-800 transition-colors duration-300 group";
@endphp

<div {{ $attributes(['class'=> $classes ])}}>
    {{ $slot }}
</div>