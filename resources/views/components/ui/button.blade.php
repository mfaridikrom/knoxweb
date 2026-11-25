@props([
    'variant' => 'success',
    'type' => 'button',
])

<button type="{{ $type }}" {{ $attributes->merge(['class' => 'btn-solid theme-' . $variant]) }}>
    {{ $slot }}
</button>
