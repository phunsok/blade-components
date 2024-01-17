@props(['for', 'name', 'label' => null, 'required' => false, 'checked' => false])
<div class="flex gap-2" {{ $attributes }}>
    <input type="radio" name="{{ $name }}" id="{{ $for }}" class="mt-1.5 border-gray-300" {{ $required ? "required" : "" }} {{ $checked ? "checked" : "" }} />
    <label for="{{ $for }}">{{ $label ?? str($for)->headline() }}
    </label>
</div>