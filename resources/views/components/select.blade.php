@props(['for', 'name', 'label' => null, 'required' => false ])
<div {{ $attributes }}>
    <label for="{{ $for }}">{{ $label ?? str($for)->title() }}</label>
    <select id="{{ $for }}" class="block w-full border-gray-300 rounded" {{ $required ? "required" : "" }} >
        {{ $slot }}
    </select>
</div>