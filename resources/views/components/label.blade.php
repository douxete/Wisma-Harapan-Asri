@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm font-semibold text-gray-600 uppercase']) }}>
    {{ $value ?? $slot }}
</label>