@props(['for', 'type' => 'text', 'label' => null, 'required' => false ])
<div {{ $attributes }}>
    <label for="{{ $for }}">{{ $label ?? str($for)->title() }}</label>
    <input id="{{ $for }}" type="{{ $type }}" placeholder="Enter {{ $label ?? str($for)->title() }}" class="block w-full border-gray-300 rounded" {{ $required ? "required" : "" }} />
</div>