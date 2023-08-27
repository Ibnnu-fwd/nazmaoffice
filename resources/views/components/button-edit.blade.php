@props(['id' => '', 'onclick' => '', 'label', 'modal' => ''])

<button id="{{ $id }}" type="button" onclick="{{ $onclick }}" data-modal-target="{{ $modal }}"
    data-modal-toggle="{{ $modal }}"
    class="py-2 px-3 flex items-center text-sm font-medium hover:text-white text-center text-lime-700 focus:outline-none bg-white rounded-lg border border-lime-700 hover:bg-lime-800 hover:text-primary-700 focus:z-10 focus:ring-4 focus:lime-lime-300">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor"
        aria-hidden="true">
        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
        <path fill-rule="evenodd"
            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
            clip-rule="evenodd" />
    </svg>
    {{ $label }}
</button>
