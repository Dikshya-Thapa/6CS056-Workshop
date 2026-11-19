@props([
    'name',
    'label',
    'type' => 'text',
    'value' => ''
])

<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>

    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        class="input @error($name) invalid @enderror"
        {{ $attributes }}
    >

    @error($name)
        <p class="error">{{ $message }}</p>
    @enderror
</div>
