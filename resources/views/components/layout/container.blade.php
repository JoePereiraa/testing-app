@props(['type' => ''])

<div {{ $attributes->merge(['class' => 'container' . ' ' . $type]) }}>
    {{ $slot }}
</div>
