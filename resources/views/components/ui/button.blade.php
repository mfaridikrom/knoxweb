@props([
    'variant' => 'success',
    'button' => '',
])

<button {{ $attributes->merge(['class' => 'btn btn-' . $variant]) }}>
    {{ $slot }}</button>
