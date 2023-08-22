<x-guest-layout>

    {{-- Navbar --}}
    <div class="mx-auto bg-white w-full">
        <div x-data="{ open: false }"
            class="relative flex flex-col w-full p-5 mx-auto bg-white md:items-center md:justify-between md:flex-row md:px-6 lg:px-8 md:max-w-7xl">
            <div class="flex flex-row items-center justify-between lg:justify-start">
                <a class="text-lg tracking-tight text-black uppercase focus:outline-none focus:ring lg:text-2xl"
                    href="/">
                    <span class="lg:text-lg uppecase focus:ring-0">
                        nazma office
                    </span>
                </a>
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 text-gray-400 hover:text-black focus:outline-none focus:text-black md:hidden">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
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
                        <a href="#"
                            class="px-4 py-8 text-sm text-gray-500 border-b-2 border-transparent lg:px-6 hover:border-blue-500 md:px-3 hover:text-blue-600">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-4 py-8 text-sm text-gray-500 border-b-2 border-transparent lg:px-6 md:px-3 hover:text-blue-600 hover:border-blue-500">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-4 py-8 text-sm text-gray-500 border-b-2 border-transparent lg:px-6 hover:border-blue-500 md:px-3 hover:text-blue-600">
                            Layanan
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-4 py-8 text-sm text-gray-500 border-b-2 border-transparent lg:px-6 hover:border-blue-500 md:px-3 hover:text-blue-600">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-4 py-8 mr-0 md:mr-3 text-sm text-gray-500 border-b-2 border-transparent lg:px-6 hover:border-blue-500 md:px-3 hover:text-blue-600">
                            Galeri
                        </a>
                    </li>
                    <li>
                        <button
                            class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-primary rounded-full group focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 hover:bg-purple-700 active:bg-purple active:text-white focus-visible:outline-black">
                            Acara
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    

    {{-- Hero --}}
    <div id="indicators-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-48 overflow-hidden rounded-lg md:rounded-none md:h-[488px] mx-4 md:mx-0">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="{{ asset('assets/images/hero1.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="absolute inset-0 bg-gradient-to-l from-black/60 dark:from-gray-800/60"></div>
                <div class="absolute top-0 bottom-0 md:right-0 z-20 text-white md:w-1/2 p-10 md:py-32 text-start">
                    <p class="font-normal text-xs 2xl:text-md">
                        Halo, Selamat Datang di Website Nazma Office!
                    </p>
                    <p class="font-semibold text-2xl md:text-3xl lg:text-5xl mt-2">
                        We'll Finish It <br>With Excellence
                    </p>
                    <button
                        class="hidden md:inline-flex items-center justify-center px-4 py-2 mt-3 text-sm font-medium text-white bg-primary rounded-full group focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 hover:bg-purple-700 active:bg-purple active:text-white focus-visible:outline-black">
                        Hubungi Kami
                    </button>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('assets/images/hero2.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('assets/images/hero3.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="3"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <p>
        <ion-icon name="ion-social-chrome-outline"></ion-icon>
    </p>

    {{-- Insight --}}
    <section class="bg-white">
        <p class="text-2xl font-medium text-center pt-12 mb-8 mx-2 md:mx-0">
            Terima Kasih Telah Mempercayai Kami
        </p>
        <div class="grid grid-cols-2 gap-6 py-12 md:grid-cols-4 lg:grid-cols-4 max-w-4xl mx-auto">
            <figure class="flex justify-center flex-col">
                <img class="bg-gray-200 hidden md:inline-block w-32 h-32 self-center object-cover object-center"
                    src="{{ asset('assets/images/noimage.jpg') }}" alt="">
                <p class="mt-5 text-3xl font-semibold leading-6 text-black text-center">
                    1000+
                </p>
                <p class="mt-3 text-xs 2xl:text-md text-center text-gray-500">
                    Mitra Usaha
                </p>
            </figure>
            <figure class="flex justify-center flex-col">
                <img class="bg-gray-200 hidden md:inline-block w-32 h-32 self-center object-cover object-center"
                    src="{{ asset('assets/images/noimage.jpg') }}" alt="">
                <p class="mt-5 text-3xl font-semibold leading-6 text-black text-center">
                    1000+
                </p>
                <p class="mt-3 text-xs 2xl:text-md text-center text-gray-500">
                    Mitra Usaha
                </p>
            </figure>
            <figure class="flex justify-center flex-col">
                <img class="bg-gray-200 hidden md:inline-block w-32 h-32 self-center object-cover object-center"
                    src="{{ asset('assets/images/noimage.jpg') }}" alt="">
                <p class="mt-5 text-3xl font-semibold leading-6 text-black text-center">
                    1000+
                </p>
                <p class="mt-3 text-xs 2xl:text-md text-center text-gray-500">
                    Mitra Usaha
                </p>
            </figure>
            <figure class="flex justify-center flex-col">
                <img class="bg-gray-200 hidden md:inline-block w-32 h-32 self-center object-cover object-center"
                    src="{{ asset('assets/images/noimage.jpg') }}" alt="">
                <p class="mt-5 text-3xl font-semibold leading-6 text-black text-center">
                    1000+
                </p>
                <p class="mt-3 text-xs 2xl:text-md text-center text-gray-500">
                    Mitra Usaha
                </p>
            </figure>
        </div>
    </section>

    {{-- Services --}}
    <section>
        <p class="text-2xl font-medium text-center pt-12 mb-6 mx-2 md:mx-0">
            Layanan Yang Kami Miliki
        </p>
        <div class="items-center px-8 mx-auto max-w-7xl lg:px-16 md:px-12">
            <div class="justify-center w-full lg:p-10 max-auto">
                <div class="justify-center w-full text-center">

                    <div x-data="{ tab: 'tab1' }">
                        <ul class="md:flex gap-3 text-gray-500 justify-center">
                            <li class="-mb-px">
                                <!-- event handler set state to 'tab1' and add conditional :class for active state -->
                                <a @click.prevent="tab = 'tab1'" href="#"
                                    class="inline-block px-8 py-2.5 text-md rounded-full text-white bg-primary"
                                    :class="{ '  text-white bg-primary': tab === 'tab1' }">
                                    Produk Teknologi Informasi
                                </a>
                            </li>
                            <li class="-mb-px">
                                <a @click.prevent="tab = 'tab2'" href="#"
                                    class="inline-block px-8 py-2.5 text-md rounded-full text-gray-400"
                                    :class="{ '  text-white bg-primary': tab === 'tab2' }">
                                    Produk Konsultan Manajemen
                                </a>
                            </li>
                        </ul>
                        <div class="py-4 pt-4 text-left content mt-8">
                            <!-- show tab1 only -->
                            <div x-show="tab==='tab1'" class="text-gray-500" style="">
                                <main class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                                    <div class="max-w-sm p-6 bg-white rounded-lg shadow-sm">
                                        <div class="w-14 h-14 md:w-12 md:h-12 p-2 border border-gray-200 rounded-md">
                                            <svg class=" text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z" />
                                            </svg>
                                        </div>
                                        <a href="#">
                                            <h5 class="mb-2 mt-4 text-md font-medium tracking-tight text-gray-900">
                                                Jasa Pendidikan Komputer (Teknologi Informasi dan Komunikasi) Swasta
                                            </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-500 text-xs 2xl:text-md">
                                            Kursus untuk menambah keahlian dalam bidang komputer, teknologi informasi,
                                            dan komunikasi.
                                        </p>
                                        <a href="#"
                                            class="inline-flex mt-4 items-center text-blue-600 hover:underline">
                                            Selengkapnya
                                            <svg class="w-3 h-3 ml-2.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="max-w-sm p-6 bg-white rounded-lg shadow-sm">
                                        <div class="w-14 h-14 md:w-12 md:h-12 p-2 border border-gray-200 rounded-md">
                                            <svg class=" text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z" />
                                            </svg>
                                        </div>
                                        <a href="#">
                                            <h5 class="mb-2 mt-4 text-md font-medium tracking-tight text-gray-900">
                                                Aktivitas Jasa Multimedia Lainnya
                                            </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-500 text-xs 2xl:text-md">
                                            Layanan konvergen radio dan televisi, video, audio, teks, grafik dan data
                                            yang disalurkan melalui jaringan protokol internet.
                                        </p>
                                        <a href="#"
                                            class="inline-flex mt-4 items-center text-blue-600 hover:underline">
                                            Selengkapnya
                                            <svg class="w-3 h-3 ml-2.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="max-w-sm p-6 bg-white rounded-lg shadow-sm">
                                        <div class="w-14 h-14 md:w-12 md:h-12 p-2 border border-gray-200 rounded-md">
                                            <svg class=" text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z" />
                                            </svg>
                                        </div>
                                        <a href="#">
                                            <h5 class="mb-2 mt-4 text-md font-medium tracking-tight text-gray-900">
                                                Aktivitas Teknologi Informasi dan Jasa Komputer Lainnya
                                            </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-500 text-xs 2xl:text-md">
                                            Pemulihan kerusakan, instalasi personal komputer dan perangkat lunak, serta
                                            manajemen insiden dan digital forensic.
                                        </p>
                                        <a href="#"
                                            class="inline-flex mt-4 items-center text-blue-600 hover:underline">
                                            Selengkapnya
                                            <svg class="w-3 h-3 ml-2.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="max-w-sm p-6 bg-white rounded-lg shadow-sm">
                                        <div class="w-14 h-14 md:w-12 md:h-12 p-2 border border-gray-200 rounded-md">
                                            <svg class=" text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z" />
                                            </svg>
                                        </div>
                                        <a href="#">
                                            <h5 class="mb-2 mt-4 text-md font-medium tracking-tight text-gray-900">
                                                Aktivitas Jasa Informasi Lainnya YTDL
                                            </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-500 text-xs 2xl:text-md">
                                            Jasa informasi berbasis telepon, pencarian informasi atas dasar balas jasa
                                            atau kontrak dan jasa kliping berita, dan lain-lain.
                                        </p>
                                        <a href="#"
                                            class="inline-flex mt-4 items-center text-blue-600 hover:underline">
                                            Selengkapnya
                                            <svg class="w-3 h-3 ml-2.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="max-w-sm p-6 bg-white rounded-lg shadow-sm">
                                        <div class="w-14 h-14 md:w-12 md:h-12 p-2 border border-gray-200 rounded-md">
                                            <svg class=" text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z" />
                                            </svg>
                                        </div>
                                        <a href="#">
                                            <h5 class="mb-2 mt-4 text-md font-medium tracking-tight text-gray-900">
                                                Aktivitas Pengembangan Aplikasi Perdagangan Melalui Internet
                                                (E-Commerce)
                                            </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-500 text-xs 2xl:text-md">
                                            Pengembangan aplikasi perdagangan, konsultasi, analisis dan pemograman
                                            aplikasi melalui internet.
                                        </p>
                                        <a href="#"
                                            class="inline-flex mt-4 items-center text-blue-600 hover:underline">
                                            Selengkapnya
                                            <svg class="w-3 h-3 ml-2.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                                            </svg>
                                        </a>
                                    </div>
                                </main>
                            </div>
                            <div x-show="tab==='tab2'" class="text-gray-500" style="display: none;">
                                <main></main>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-guest-layout>
