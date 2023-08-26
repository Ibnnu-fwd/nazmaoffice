@props(['header' => '', 'id' => '', 'bgColor' => 'bg-white', 'padding' => true, 'page_title' => ''])

<div class="py-2" id="{{ $id }}">
    <div class="bg-white mb-4 relative shadow-sm sm:rounded-md overflow-hidden">
        <h1 class="text-md text-center text-blue-950 pb-3 py-3">
            {{ $page_title }}
        </h1>
    </div>
    <div class="mx-auto">
        <div
            class="{{ $bgColor == 'bg-transparent' ? 'bg-transparent' : $bgColor . ' shadow-sm' }} overflow-hidden sm:rounded-md shadow-sm">
            <div class="{{ $padding == true ? 'p-4' : '' }}">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
