
@props(['type' =>'button', 'disabled' => false, 'style' => ''])

<button type="{{ $type }}"
    {{ $attributes->class([
        'px-3 py-2 rounded tracking-wider',
        'bg-primary hover:bg-primary-dark text-white' => $style === 'primary',
        'bg-secondary hover:bg-secondary-dark text-white' => $style === 'secondary',
        'bg-gray-400 text-white' => $disabled,
        'border-2 border-primary text-primary text-pprimary' => $style === 'primary-outline',
        'border-2 border-secondary text-primary text-secondary' => $style === 'secondary-outline',
        ])
    }}
    {{ $disabled ? 'disabled' : ''}}>
    {{ $slot }}
</button>