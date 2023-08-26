@props(['name' => '', 'icon' => '', 'route' => '', 'active' => false])

<li>
    <a href="{{ $route }}"
        class="flex items-center py-3 pl-6 nav-item hover:text-orange-400 rounded-md {{ $active == true ? 'text-orange-400 active-nav-link' : 'text-white' }}">
        <i
            class="{{ $icon }} w-4 h-4 transition duration-75  group-hover:text-orange-400 {{ $active == true ? 'text-orange-400' : 'text-white' }}"></i>
        <span class="ml-3">{{ $name }}</span>
    </a>
</li>
