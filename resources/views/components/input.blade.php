@props(['label' => '', 'type' => 'text', 'name' => '', 'placeholder' => '', 'value' => ''])
<div class="mb-4">
    <label class="form-label mb-2">{{ $label }}</label>
    <input
        type="{{ $type }}"
        class="form-control form-control-alt @error($name) is-invalid @enderror"
        placeholder="{{ $placeholder }}"
        value="{{ $value }}"
        name="{{ $name }}"
        wire:model.live="{{ $name }}"
    />
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
