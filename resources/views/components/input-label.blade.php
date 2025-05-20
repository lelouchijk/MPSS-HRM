@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#1E352A] font-semibold']) }}>
    {{ $value ?? $slot }}
</label>
