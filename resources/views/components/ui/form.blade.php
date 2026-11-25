@props([
    'type' => 'radio',
    'id' => null,
    'name' => null,
    'value' => '',
    'checked' => false,
])

<input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}" @checked($checked)
    {{ $attributes }}>
