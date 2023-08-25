@props(['id', 'name', 'label', 'required' => false])

<div>
    <label for="{{ $id }}" class="block text-xs 2xl:text-sm font-medium text-gray-900">
        {{ $label }}
        @if ($required)
            <span class="text-red-500">*</span>
        @endif
    </label>
    <select id="{{ $id }}" name="{{ $name }}" {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'bg-gray-50 block mt-2 w-full p-2.5 text-xs 2xl:text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500']) }}>
        {{ $slot }}
    </select>

    @error($name)
        <p class="mt-1 text-xs 2xl:text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>
