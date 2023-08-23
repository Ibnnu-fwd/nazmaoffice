{{-- Navbar --}}
<div class="mx-auto bg-white w-full sticky top-0 z-50">
    <div x-data="{ open: false }"
        class="relative flex flex-col w-full py-2 mx-auto bg-white md:items-center md:justify-between md:flex-row px-4 md:px-6 lg:px-8 md:max-w-7xl">
        <div class="flex flex-row items-center justify-between lg:justify-start">
            <img src="{{ asset('assets/images/logo nazma elipse -01.png') }}"
                class="rounded-full object-cover object-center w-14 h-14 md:w-16 md:h-16" />
            <button @click="open = !open"
                class="inline-flex items-center justify-center p-2 text-gray-400 hover:text-black focus:outline-none focus:text-black md:hidden">
                <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                    <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <nav :class="{ 'flex': open, 'hidden': !open }"
            class="flex-col flex-grow hidden py-10 md:flex lg:py-0 md:justify-end md:flex-row">
            <ul class="space-y-2 list-none md:space-y-0 md:items-center md:inline-flex">
                <li>
                    <a href="{{ route('user.home') }}"
                        class="px-4 py-8 text-xs 2xl:text-md text-gray-500 border-b-2 border-transparent lg:px-6 md:px-3 hover:text-blue-600 {{ request()->routeIs('user.home') ? 'text-primary' : '' }}
                        }}">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.about') }}"
                        class="px-4 py-8 text-xs 2xl:text-md text-gray-500 border-b-2 border-transparent lg:px-6 md:px-3 hover:text-blue-600 {{ request()->routeIs('user.about') ? 'text-primary' : '' }}">
                        Tentang Kami
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="px-4 py-8 text-xs 2xl:text-md text-gray-500 border-b-2 border-transparent lg:px-6 md:px-3 hover:text-blue-600">
                        Layanan
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.blog') }}"
                        class="px-4 py-8 text-xs 2xl:text-md text-gray-500 border-b-2 border-transparent lg:px-6 md:px-3 hover:text-blue-600 {{ request()->routeIs('user.blog') || request()->routeIs('user.blog.detail') ? 'text-primary' : '' }}">
                        Blog </a>
                </li>
                <li>
                    <a href="{{ route('user.gallery') }}"
                        class="px-4 py-8 mr-0 md:mr-3 text-xs 2xl:text-md text-gray-500 border-b-2 border-transparent lg:px-6 md:px-3 hover:text-blue-600 {{ request()->routeIs('user.gallery') ? 'text-primary' : '' }}">
                        Galeri
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.event') }}"
                        class="inline-flex
                        items-center justify-center px-4 py-2 text-xs 2xl:text-md font-medium text-white bg-primary
                        rounded-full group focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2
                        hover:bg-purple-700 active:bg-purple active:text-white focus-visible:outline-black
                        {{ request()->routeIs('user.event') ? 'text-white bg-primary' : 'text-primary bg-white' }}
                        ">
                        Acara
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
