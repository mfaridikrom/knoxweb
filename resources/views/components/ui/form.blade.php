@props([
    'type' => 'radio',
    'id' => '',
    'name' => '',
    'value' => '',
    'checked' => false,
])

<input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}"
    {{ $checked ? 'checked' : '' }}>
