
@props([
    'name',
    'label',
    'value' => ''
])

<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>

    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
        class="input @error($name) invalid @enderror"
        {{ $attributes }}
    >{{ old($name, $value) }}</textarea>

    @error($name)
        <p class="error">{{ $message }}</p>
    @enderror
</div>
