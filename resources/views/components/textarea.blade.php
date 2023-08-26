@props(['id', 'name', 'label', 'required' => false, 'value' => ''])

<div>
    <label for="{{ $id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        {{ $label }} @if ($required)
            <span class="text-red-500">*</span>
        @endif
    </label>
    <textarea id="{{ $id }}" rows="4" name="{{ $name }}" {{ $required ? 'required' : '' }}
        placeholder="{{ $label }}"
        {{ $attributes->merge(['class' => 'block p-2.5 w-full text-xs 2xl:text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500']) }}>{{ $value }}</textarea>

    @error($name)
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
