@props(['id', 'name', 'label', 'required' => false, 'helper' => null])

<div>
    <label class="block mb-2 text-sm font-medium text-gray-900" for="{{ $id }}">
        {{ $label }}
        @if ($required)
            <span class="text-red-500">*</span>
        @endif
    </label>
    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
        aria-describedby="file_input_help" id="{{ $id }}" type="file" name="{{ $name }}"
        {{ $required ? 'required' : '' }}>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
        {{ $helper }}
    </p>

    @error($name)
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
    @enderror

</div>
