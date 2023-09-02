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
                        class="px-4 md:py-8 text-xs 2xl:text-md text-gray-500 border-b-2 border-transparent lg:px-6 md:px-3 hover:text-blue-600 {{ request()->routeIs('user.home') ? 'text-primary' : '' }}
                        }}">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.about') }}"
                        class="px-4 md:py-8 text-xs 2xl:text-md text-gray-500 border-b-2 border-transparent lg:px-6 md:px-3 hover:text-blue-600 {{ request()->routeIs('user.about') ? 'text-primary' : '' }}">
                        Tentang Kami
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.service') }}"
                        class="px-4 md:py-8 text-xs 2xl:text-md text-gray-500 border-b-2 border-transparent lg:px-6 md:px-3 hover:text-blue-600 {{ request()->routeIs('user.service') || request()->routeIs('user.service.detail') ? 'text-primary' : '' }}">
                        Layanan
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.blog') }}"
                        class="px-4 md:py-8 text-xs 2xl:text-md text-gray-500 border-b-2 border-transparent lg:px-6 md:px-3 hover:text-blue-600 {{ request()->routeIs('user.blog') || request()->routeIs('user.blog.detail') ? 'text-primary' : '' }}">
                        Blog </a>
                </li>
                <li>
                    <a href="{{ route('user.gallery') }}"
                        class="px-4 md:py-8 mr-0 md:mr-3 text-xs 2xl:text-md text-gray-500 border-b-2 border-transparent lg:px-6 md:px-3 hover:text-blue-600 {{ request()->routeIs('user.gallery') ? 'text-primary' : '' }}">
                        Galeri
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.event') }}"
                        class="inline-flex
                        items-center justify-center px-6 py-2 text-xs 2xl:text-md font-medium text-white
                        rounded-full group focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2
                        hover:bg-purple-700 active:bg-purple active:text-white focus-visible:outline-black
                        {{ request()->routeIs('user.event') || request()->routeIs('user.event.detail') ? 'text-white bg-primary' : 'bg-primary' }}
                        ">
                        Acara
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    {{-- check if today is friday --}}
    @if (date('l') == 'Friday')
        <div id="marketing-banner" tabindex="-1"
            class="fixed z-50 flex flex-col md:flex-row mt-20 justify-between w-[calc(100%-2rem)] p-4 -translate-x-1/2 bg-white border border-gray-100 rounded-lg shadow-sm lg:max-w-6xl left-1/2 top-6">
            <div class="xl:flex
    flex-col items-start mb-3 mr-4 md:items-center md:flex-row md:mb-0">
                <a href="#" onclick="event.preventDefault();"
                    class="flex items-center mb-2 border-gray-200 md:pr-4 md:mr-4 md:border-r md:mb-0">
                    <img src="{{ asset('assets/images/logo circle.png') }}" class="h-10 mr-2" alt="Flowbite Logo">
                    <span class="self-center text-lg font-semibold whitespace-nowrap text-gray-400">
                        Konsultasi Gratis
                    </span>
                </a>
                <p class="xl:flex items-center text-md font-normal text-gray-500">
                    Konsultasi gratis dengan kami setiap hari &nbsp; <b>Jum'at</b> &nbsp; mulai pukul &nbsp; <b>09.00 -
                        16.00</b>
                </p>
            </div>
            <div class="flex items-center flex-shrink-0">
                @php
                    $companyLandingSetting = \App\Models\CompanyLandingSetting::first();
                    $message = "Halo Admin Nazma OFfice, saya ingin melakukan konsultasi gratis di Jum'at ini";
                @endphp
                <a href="
            https://api.whatsapp.com/send?phone={{ $companyLandingSetting->personal_phone }}&text={{ $message }}
        "
                    target="_blank"
                    class="px-5 py-2 mr-2 text-md font-medium text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                    Daftar Sekarang
                </a>
                <button data-dismiss-target="#marketing-banner" type="button"
                    class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-full text-md p-2 dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close banner</span>
                </button>
            </div>
        </div>
    @endif

</div>
