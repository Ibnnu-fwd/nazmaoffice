<x-guest-layout>

    @push('css-internal')
        <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />

        <style>
            @import url('https://fonts.cdnfonts.com/css/damion');

            #header-title {
                font-family: 'Damion', cursive;
                line-height: 1.2;
            }
        </style>
    @endpush

    {{-- Hero --}}
    <div id="indicators-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-48 overflow-hidden rounded-lg md:rounded-none md:h-[350px] lg:h-[488px] mx-4 md:mx-0">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('assets/images/hero1.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 blur-mode top-1/2 left-1/2"
                    alt="...">
                <div class="absolute inset-0 bg-gradient-to-l from-black/60 dark:from-gray-800/60"></div>
                <div
                    class="absolute top-0 bottom-0 md:right-0 z-20 text-white lg:w-1/2 p-10 md:py-12 lg:py-24 text-start">
                    <p class="font-normal text-xs 2xl:text-sm">
                        Halo, Selamat Datang di Website Nazma Office!
                    </p>
                    <p id="header-title" class="font-medium text-2xl md:text-6xl lg:text-7xl mt-2">
                        We'll Finish It <br>With Excellence
                    </p>
                    <button
                        class="hidden md:inline-flex items-center justify-center px-6 py-3 mt-4 text-xs 2xl:text-sm font-medium text-white bg-primary rounded-full group focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 hover:bg-purple-700 active:bg-purple active:text-white focus-visible:outline-black">
                        Hubungi Kami
                    </button>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('assets/images/hero2.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 blur-mode top-1/2 left-1/2"
                    alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('assets/images/hero3.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 blur-mode top-1/2 left-1/2"
                    alt="...">
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

    {{-- Insight --}}
    <section class="bg-white">
        <p class="text-xl font-semibold text-black text-center pt-12 mb-2 mx-2 md:mx-0">
            Terima Kasih Telah Mempercayai Kami
        </p>
        <div class="grid grid-cols-2 gap-6 py-12 md:grid-cols-4 lg:grid-cols-4 max-w-4xl mx-auto">
            <figure class="flex justify-center flex-col">
                <ion-icon name="storefront-outline"
                    class="w-12 h-12 text-gray-300 hover:text-primary self-center object-center"></ion-icon>
                <p class="mt-5 text-3xl font-semibold leading-6 text-black text-center">
                    1000+
                </p>
                <p class="mt-3 text-xs 2xl:text-sm text-center text-gray-500">
                    Mitra Usaha
                </p>
            </figure>
            <figure class="flex justify-center flex-col">
                <ion-icon name="bookmarks-outline"
                    class="w-12 h-12 text-gray-300 hover:text-primary self-center object-center"></ion-icon>
                <p class="mt-5 text-3xl font-semibold leading-6 text-black text-center">
                    1000+
                </p>
                <p class="mt-3 text-xs 2xl:text-sm text-center text-gray-500">
                    Event Edukatif
                </p>
            </figure>
            <figure class="flex justify-center flex-col">
                <ion-icon name="people-outline"
                    class="w-12 h-12 text-gray-300 hover:text-primary self-center object-center"></ion-icon>
                <p class="mt-5 text-3xl font-semibold leading-6 text-black text-center">
                    1000+
                </p>
                <p class="mt-3 text-xs 2xl:text-sm text-center text-gray-500">
                    Mentor Profesional
                </p>
            </figure>
            <figure class="flex justify-center flex-col">
                <ion-icon name="person-add-outline"
                    class="w-12 h-12 text-gray-300 hover:text-primary self-center object-center"></ion-icon>
                <p class="mt-5 text-3xl font-semibold leading-6 text-black text-center">
                    1000+
                </p>
                <p class="mt-3 text-xs 2xl:text-sm text-center text-gray-500">
                    Mitra Usaha
                </p>
            </figure>
        </div>
    </section>

    {{-- Services --}}
    <section>
        <p class="text-xl font-semibold text-black text-center pt-12 mb-6 mx-2 md:mx-0">
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
                                    class="inline-block px-8 py-2.5 text-xs 2xl:text-sm rounded-full text-white bg-primary"
                                    :class="{ '  text-white bg-primary': tab === 'tab1' }">
                                    Produk Teknologi Informasi
                                </a>
                            </li>
                            <li class="-mb-px">
                                <a @click.prevent="tab = 'tab2'" href="#"
                                    class="inline-block px-8 py-2.5 text-xs 2xl:text-sm rounded-full text-gray-400"
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
                                            <ion-icon name="easel-outline" class="text-primary"
                                                size="large"></ion-icon>
                                        </div>
                                        <a href="#">
                                            <h5
                                                class="mb-2 mt-4 text-xs 2xl:text-sm font-semibold tracking-tight text-gray-900">
                                                Jasa Pendidikan Komputer (Teknologi Informasi dan Komunikasi) Swasta
                                            </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-500 text-xs 2xl:text-sm">
                                            Kursus untuk menambah keahlian dalam bidang komputer, teknologi informasi,
                                            dan komunikasi.
                                        </p>
                                        <a href="#"
                                            class="inline-flex mt-4 items-center text-primary hover:underline text-xs 2xl:text-sm">
                                            Selengkapnya
                                            <ion-icon name="chevron-forward-outline" class="text-primary ml-2"
                                                size="small"></ion-icon>
                                        </a>
                                    </div>
                                    <div class="max-w-sm p-6 bg-white rounded-lg shadow-sm">
                                        <div class="w-14 h-14 md:w-12 md:h-12 p-2 border border-gray-200 rounded-md">
                                            <ion-icon name="play-circle-outline" class="text-danger"
                                                size="large"></ion-icon>
                                        </div>
                                        <a href="#">
                                            <h5
                                                class="mb-2 mt-4 text-xs 2xl:text-sm font-semibold tracking-tight text-gray-900">
                                                Aktivitas Jasa Multimedia Lainnya
                                            </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-500 text-xs 2xl:text-sm">
                                            Layanan konvergen radio dan televisi, video, audio, teks, grafik dan data
                                            yang disalurkan melalui jaringan protokol internet.
                                        </p>
                                        <a href="#"
                                            class="inline-flex mt-4 items-center text-primary hover:underline text-xs 2xl:text-sm">
                                            Selengkapnya
                                            <ion-icon name="chevron-forward-outline" class="text-primary ml-2"
                                                size="small"></ion-icon>
                                        </a>
                                    </div>
                                    <div class="max-w-sm p-6 bg-white rounded-lg shadow-sm">
                                        <div class="w-14 h-14 md:w-12 md:h-12 p-2 border border-gray-200 rounded-md">
                                            <ion-icon name="globe-outline" class="text-success"
                                                size="large"></ion-icon>
                                        </div>
                                        <a href="#">
                                            <h5
                                                class="mb-2 mt-4 text-xs 2xl:text-sm font-semibold tracking-tight text-gray-900">
                                                Aktivitas Teknologi Informasi dan Jasa Komputer Lainnya
                                            </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-500 text-xs 2xl:text-sm">
                                            Pemulihan kerusakan, instalasi personal komputer dan perangkat lunak, serta
                                            manajemen insiden dan digital forensic.
                                        </p>
                                        <a href="#"
                                            class="inline-flex mt-4 items-center text-primary hover:underline text-xs 2xl:text-sm">
                                            Selengkapnya
                                            <ion-icon name="chevron-forward-outline" class="text-primary ml-2"
                                                size="small"></ion-icon>
                                        </a>
                                    </div>
                                    <div class="max-w-sm p-6 bg-white rounded-lg shadow-sm">
                                        <div class="w-14 h-14 md:w-12 md:h-12 p-2 border border-gray-200 rounded-md">
                                            <ion-icon name="code-outline" class="text-warning"
                                                size="large"></ion-icon>
                                        </div>
                                        <a href="#">
                                            <h5
                                                class="mb-2 mt-4 text-xs 2xl:text-sm font-semibold tracking-tight text-gray-900">
                                                Aktivitas Jasa Informasi Lainnya YTDL
                                            </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-500 text-xs 2xl:text-sm">
                                            Jasa informasi berbasis telepon, pencarian informasi atas dasar balas jasa
                                            atau kontrak dan jasa kliping berita, dan lain-lain.
                                        </p>
                                        <a href="#"
                                            class="inline-flex mt-4 items-center text-primary hover:underline text-xs 2xl:text-sm">
                                            Selengkapnya
                                            <ion-icon name="chevron-forward-outline" class="text-primary ml-2"
                                                size="small"></ion-icon>
                                        </a>
                                    </div>
                                    <div class="max-w-sm p-6 bg-white rounded-lg shadow-sm">
                                        <div class="w-14 h-14 md:w-12 md:h-12 p-2 border border-gray-200 rounded-md">
                                            <ion-icon name="flag-outline" class="text-black"
                                                size="large"></ion-icon>
                                        </div>
                                        <a href="#">
                                            <h5
                                                class="mb-2 mt-4 text-xs 2xl:text-sm font-semibold tracking-tight text-gray-900">
                                                Aktivitas Pengembangan Aplikasi Perdagangan Melalui Internet
                                                (E-Commerce)
                                            </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-500 text-xs 2xl:text-sm">
                                            Pengembangan aplikasi perdagangan, konsultasi, analisis dan pemograman
                                            aplikasi melalui internet.
                                        </p>
                                        <a href="#"
                                            class="inline-flex mt-4 items-center text-primary hover:underline text-xs 2xl:text-sm">
                                            Selengkapnya
                                            <ion-icon name="chevron-forward-outline" class="text-primary ml-2"
                                                size="small"></ion-icon>
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

    {{-- About us --}}
    <section class="bg-white py-12">
        <div class="relative items-center w-full px-5 py-24 mx-auto md:px-12 lg:px-16 max-w-7xl">
            <div class="w-full mx-auto text-left">
                <div class="relative flex-col items-center m-auto align-middle">
                    <div class="items-center gap-12 text-left lg:gap-24 lg:inline-flex">
                        <div class="flex flex-col m-auto md:order-first">
                            <div class="max-w-xl">
                                <div>
                                    <p class="text-xl font-semibold tracking-tight text-black">
                                        Tentang Kami
                                    </p>
                                </div>
                            </div>
                            <div class="mt-6 lg:max-w-7xl">
                                <p class="text-gray-400 text-xs 2xl:text-sm">
                                    Nabila Zafira Mahalia, yang dikenal juga sebagai NaZMa Office, didirikan pada tahun
                                    2007. Dengan pengalaman mencapai lebih dari 10 tahun, tepatnya sekitar 12 tahun,
                                    NaZMa Office telah mengembangkan keahlian yang mendalam dalam bidang konsultan IT
                                    dan layanan manajemen.
                                </p>
                                <ul role="list" class="grid md:grid-cols-2 gap-4 list-none lg:gap-6">
                                    <li>
                                        <div>
                                            <p class="mt-5 text-md font-semibold leading-6 text-black">
                                                Produk unggulan kami
                                            </p>
                                        </div>
                                        <ul class="list-disc list-inside mt-3 text-xs 2xl:text-sm text-gray-400">
                                            <li>Penjualan hardware</li>
                                            <li>Pengembangan perangkat lunak</li>
                                            <li>Pelatihan IT</li>
                                            <li>Pembuatan video profil</li>
                                            <li>Pengembangan website</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div>
                                            <p class="mt-5 text-md font-semibold leading-6 text-black">
                                                Dibidang konsultan:
                                            </p>
                                        </div>
                                        <ul class="list-disc list-inside mt-3 text-xs 2xl:text-sm text-gray-400">
                                            <li>Pelatihan InHouse</li>
                                            <li>Public course</li>
                                            <li>Sertifikasi</li>
                                            <li>Event organisasi</li>
                                            <li>Kajian - kajian</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="order-first block w-full mt-8 lg:mt-0">
                            <img class=" object-cover object-center rounded-lg w-full mx-auto bg-gray-300 lg:ml-auto h-60 md:h-80 blur-mode"
                                alt="hero" src="{{ asset('assets/images/hero2.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Partners --}}
    <section class="py-12">
        <p class="text-xl text-black tracking-tight text-center px-10 md:px-0">
            Lebih dari <strong>100+ mitra</strong> tumbuh bersama NaZMa Office
        </p>
        <div>
            <div class="">
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:py-8 lg:px-8">
                    <div class="mt-6 grid gap-5 md:gap-0.5 md:grid-flow-col lg:mt-8">
                        <div class="flex justify-center col-span-1 px-8">
                            <img class="max-h-12 blur-mode" src="{{ asset('assets/images/partner/image 2.svg') }}"
                                alt=" logo">
                        </div>
                        <div class="flex justify-center col-span-1 px-8">
                            <img class="max-h-12 blur-mode" src="{{ asset('assets/images/partner/image 3.svg') }}"
                                alt="logo">
                        </div>
                        <div class="flex justify-center col-span-1 px-8">
                            <img class="max-h-12 blur-mode" src="{{ asset('assets/images/partner/image 4.svg') }}"
                                alt="logo">
                        </div>
                        <div class="flex justify-center col-span-1 px-8">
                            <img class="max-h-12 blur-mode" src="{{ asset('assets/images/partner/image 5.svg') }}"
                                alt="logo">
                        </div>
                        <div class="flex justify-center col-span-1 px-8">
                            <img class="max-h-12 blur-mode" src="{{ asset('assets/images/partner/image 6.svg') }}"
                                alt="logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    <section class="py-12 bg-white">
        <p class="text-xl font-semibold tracking-tight text-black text-center">
            Apa Kata Mereka
        </p>
        <div id="testimonial">
            <div class="carousel carousel-center p-4 space-x-4 w-full">
                <div id="item1" class="carousel-item">
                    <div class="max-w-sm p-12 md:p-6 bg-white rounded-lg border border-gray-50">
                        <div class="flex justify-between items-center mb-4">
                            <img src="{{ asset('assets/images/noimage.jpg') }}"
                                class=" blur-mode w-16 h-16 object-center object-cover rounded-full" alt="">
                            <div class="flex items-center">
                                <ion-icon name="star" class="text-primary h-4 w-4 me-1"></ion-icon>
                                <span class="text-xs 2xl:text-sm text-primary">5.0</span>
                            </div>
                        </div>
                        <a href="#">
                            <h5 class="text-md font-medium tracking-tight text-gray-900">
                                Faisal Salim
                            </h5>
                            <span class="text-xs 2xl:text-sm -mt-2 tracking-tight text-gray-400">
                                Business Man
                            </span>
                        </a>
                        <p class="mt-3 font-normal text-gray-500 text-xs 2xl:text-sm">
                            Tim IT NaZMa sangat responsif dan selalu siap membantu kami dengan pertanyaan atau masalah
                            yang kami
                            miliki
                        </p>
                    </div>
                </div>
                <div id="item2" class="carousel-item">

                    <div class="max-w-sm p-12 md:p-6 bg-white rounded-lg border border-gray-50">
                        <div class="flex justify-between items-center mb-4">
                            <img src="{{ asset('assets/images/noimage.jpg') }}"
                                class=" blur-mode w-16 h-16 object-center object-cover rounded-full" alt="">
                            <div class="flex items-center">
                                <ion-icon name="star" class="text-primary h-4 w-4 me-1"></ion-icon>
                                <span class="text-xs 2xl:text-sm text-primary">5.0</span>
                            </div>
                        </div>
                        <a href="#">
                            <h5 class="text-md font-medium tracking-tight text-gray-900">
                                Faisal Salim
                            </h5>
                            <span class="text-xs 2xl:text-sm -mt-2 tracking-tight text-gray-400">
                                Business Man
                            </span>
                        </a>
                        <p class="mt-3 font-normal text-gray-500 text-xs 2xl:text-sm">
                            Tim IT NaZMa sangat responsif dan selalu siap membantu kami dengan pertanyaan atau masalah
                            yang kami
                            miliki
                        </p>
                    </div>

                </div>
                <div id="item3" class="carousel-item">

                    <div class="max-w-sm p-12 md:p-6 bg-white rounded-lg border border-gray-50">
                        <div class="flex justify-between items-center mb-4">
                            <img src="{{ asset('assets/images/noimage.jpg') }}"
                                class=" blur-mode w-16 h-16 object-center object-cover rounded-full" alt="">
                            <div class="flex items-center">
                                <ion-icon name="star" class="text-primary h-4 w-4 me-1"></ion-icon>
                                <span class="text-xs 2xl:text-sm text-primary">5.0</span>
                            </div>
                        </div>
                        <a href="#">
                            <h5 class="text-md font-medium tracking-tight text-gray-900">
                                Faisal Salim
                            </h5>
                            <span class="text-xs 2xl:text-sm -mt-2 tracking-tight text-gray-400">
                                Business Man
                            </span>
                        </a>
                        <p class="mt-3 font-normal text-gray-500 text-xs 2xl:text-sm">
                            Tim IT NaZMa sangat responsif dan selalu siap membantu kami dengan pertanyaan atau masalah
                            yang kami
                            miliki
                        </p>
                    </div>

                </div>
                <div id="item4" class="carousel-item">
                    <div class="max-w-sm p-12 md:p-6 bg-white rounded-lg border border-gray-50">
                        <div class="flex justify-between items-center mb-4">
                            <img src="{{ asset('assets/images/noimage.jpg') }}"
                                class=" blur-mode w-16 h-16 object-center object-cover rounded-full" alt="">
                            <div class="flex items-center">
                                <ion-icon name="star" class="text-primary h-4 w-4 me-1"></ion-icon>
                                <span class="text-xs 2xl:text-sm text-primary">5.0</span>
                            </div>
                        </div>
                        <a href="#">
                            <h5 class="text-md font-medium tracking-tight text-gray-900">
                                Faisal Salim
                            </h5>
                            <span class="text-xs 2xl:text-sm -mt-2 tracking-tight text-gray-400">
                                Business Man
                            </span>
                        </a>
                        <p class="mt-3 font-normal text-gray-500 text-xs 2xl:text-sm">
                            Tim IT NaZMa sangat responsif dan selalu siap membantu kami dengan pertanyaan atau masalah
                            yang kami
                            miliki
                        </p>
                    </div>

                </div>
                <div id="item5" class="carousel-item">
                    <div class="max-w-sm p-12 md:p-6 bg-white rounded-lg border border-gray-50">
                        <div class="flex justify-between items-center mb-4">
                            <img src="{{ asset('assets/images/noimage.jpg') }}"
                                class=" blur-mode w-16 h-16 object-center object-cover rounded-full" alt="">
                            <div class="flex items-center">
                                <ion-icon name="star" class="text-primary h-4 w-4 me-1"></ion-icon>
                                <span class="text-xs 2xl:text-sm text-primary">5.0</span>
                            </div>
                        </div>
                        <a href="#">
                            <h5 class="text-md font-medium tracking-tight text-gray-900">
                                Faisal Salim
                            </h5>
                            <span class="text-xs 2xl:text-sm -mt-2 tracking-tight text-gray-400">
                                Business Man
                            </span>
                        </a>
                        <p class="mt-3 font-normal text-gray-500 text-xs 2xl:text-sm">
                            Tim IT NaZMa sangat responsif dan selalu siap membantu kami dengan pertanyaan atau masalah
                            yang kami
                            miliki
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Project --}}
    <section class="py-12">
        <p class="text-xl font-semibold tracking-tight text-black text-center">
            Proyek Kami
        </p>
        <p class="text-gray-400 text-center text-xs 2xl:text-sm">
            Kami telah berkontribusi dalam berbagai kegiatan untuk memajukan usaha <br> individu, kelompok, maupun UMKM
        </p>
        <div class="max-w-7xl mx-auto px-4 mt-8">
            <div class="carousel carousel-center md:mx-4 gap-x-8 w-full">
                <div class="carousel-item w-full lg:w-1/2">
                    <div
                        class="grid md:grid-cols-3 p-8 gap-x-8 items-start bg-white border border-gray-200 rounded-lg hover:bg-gray-100">
                        <img class="hidden md:inline-block object-cover rounded-lg md:w-52 md:h-52 lg:h-40 object-center blur-mode"
                            src="{{ asset('assets/images/hero1.jpg') }}" alt="">
                        <div class="leading-normal col-span-2">
                            <h5 class="mb-2 text-lg font-medium line-clamp-2 tracking-tight text-gray-900">
                                Noteworthy technology acquisitions 2021</h5>
                            <p class="font-normal text-gray-400 mb-4 line-clamp-2 text-xs 2xl:text-sm">
                                Pelatihan Home Business Angkatan 11 Pembisnis muda di Yogyakarta berkumpul mengupgrade
                                ilmu dan sharing pengalaman bisnisnya
                            </p>

                            <ul class="space-y-1 text-left text-gray-500 dark:text-gray-400 text-xs 2xl:text-sm">
                                <li class="flex items-center space-x-3">
                                    <ion-icon name="calendar"
                                        class="flex-shrink-0 w-3.5 h-3.5 text-gray-400"></ion-icon>
                                    <span>12 Agustus 2023</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <ion-icon name="navigate"
                                        class="flex-shrink-0 w-3.5 h-3.5 text-gray-400"></ion-icon>
                                    <span>Kabupaten Sleman, Yogyakarta</span>
                                </li>
                            </ul>
                            <button
                                class="inline-flex mt-4 items-center justify-center px-4 py-2 text-xs 2xl:text-sm font-normal text-white bg-primary rounded-full group focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 hover:bg-purple-700 active:bg-purple active:text-white focus-visible:outline-black">
                                Selengkapnya
                            </button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item w-full lg:w-1/2">
                    <div
                        class="grid md:grid-cols-3 p-8 gap-x-8 items-start bg-white border border-gray-200 rounded-lg hover:bg-gray-100">
                        <img class="hidden md:inline-block object-cover rounded-lg md:w-52 md:h-52 lg:h-40 object-center blur-mode"
                            src="{{ asset('assets/images/hero1.jpg') }}" alt="">
                        <div class="leading-normal col-span-2">
                            <h5 class="mb-2 text-lg font-medium line-clamp-2 tracking-tight text-gray-900">
                                Noteworthy technology acquisitions 2021</h5>
                            <p class="font-normal text-gray-400 mb-4 line-clamp-2 text-xs 2xl:text-sm">
                                Pelatihan Home Business Angkatan 11 Pembisnis muda di Yogyakarta berkumpul mengupgrade
                                ilmu dan sharing pengalaman bisnisnya
                            </p>

                            <ul class="space-y-1 text-left text-gray-500 dark:text-gray-400 text-xs 2xl:text-sm">
                                <li class="flex items-center space-x-3">
                                    <ion-icon name="calendar"
                                        class="flex-shrink-0 w-3.5 h-3.5 text-gray-400"></ion-icon>
                                    <span>12 Agustus 2023</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <ion-icon name="navigate"
                                        class="flex-shrink-0 w-3.5 h-3.5 text-gray-400"></ion-icon>
                                    <span>Kabupaten Sleman, Yogyakarta</span>
                                </li>
                            </ul>
                            <button
                                class="inline-flex mt-4 items-center justify-center px-4 py-2 text-xs 2xl:text-sm font-normal text-white bg-primary rounded-full group focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 hover:bg-purple-700 active:bg-purple active:text-white focus-visible:outline-black">
                                Selengkapnya
                            </button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item w-full lg:w-1/2">
                    <div
                        class="grid md:grid-cols-3 p-8 gap-x-8 items-start bg-white border border-gray-200 rounded-lg hover:bg-gray-100">
                        <img class="hidden md:inline-block object-cover rounded-lg md:w-52 md:h-52 lg:h-40 object-center blur-mode"
                            src="{{ asset('assets/images/hero1.jpg') }}" alt="">
                        <div class="leading-normal col-span-2">
                            <h5 class="mb-2 text-lg font-medium line-clamp-2 tracking-tight text-gray-900">
                                Noteworthy technology acquisitions 2021</h5>
                            <p class="font-normal text-gray-400 mb-4 line-clamp-2 text-xs 2xl:text-sm">
                                Pelatihan Home Business Angkatan 11 Pembisnis muda di Yogyakarta berkumpul mengupgrade
                                ilmu dan sharing pengalaman bisnisnya
                            </p>

                            <ul class="space-y-1 text-left text-gray-500 dark:text-gray-400 text-xs 2xl:text-sm">
                                <li class="flex items-center space-x-3">
                                    <ion-icon name="calendar"
                                        class="flex-shrink-0 w-3.5 h-3.5 text-gray-400"></ion-icon>
                                    <span>12 Agustus 2023</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <ion-icon name="navigate"
                                        class="flex-shrink-0 w-3.5 h-3.5 text-gray-400"></ion-icon>
                                    <span>Kabupaten Sleman, Yogyakarta</span>
                                </li>
                            </ul>
                            <button
                                class="inline-flex mt-4 items-center justify-center px-4 py-2 text-xs 2xl:text-sm font-normal text-white bg-primary rounded-full group focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 hover:bg-purple-700 active:bg-purple active:text-white focus-visible:outline-black">
                                Selengkapnya
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Blog --}}
    <section class="py-12 bg-white">
        <div class="max-w-7xl px-4 md:px-8 mx-auto">
            <div class="flex justify-between items-center">
                <div>
                    <p class="font-semibold tracking-tight text-black text-xl">Informasi Terbaru</p>
                    <p class="text-gray-400 text-xs 2xl:text-sm">
                        Kami melakukan press release setiap kegiatan. Jangan sampai ketinggalan
                    </p>
                </div>
                <div>
                    <button
                        class="inline-flex items-center justify-center px-3 py-2 text-xs 2xl:text-sm text-gray-400 bg-transparent border border-gray-300 hover:border-purple-600 rounded-full group focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 hover:bg-purple-700 hover:text-white active:bg-purple active:text-white focus-visible:outline-black">
                        Lihat Semua
                    </button>
                </div>
            </div>

            <div class="grid gap-6 py-12 md:grid-cols-2 lg:grid-cols-4">
                <figure>
                    <img class="w-full bg-gray-200 rounded-xl h-60 blur-mode object-cover object-center"
                        src="{{ asset('assets/images/hero1.jpg') }}" alt="">

                    <p class="mt-5 text-md font-semibold leading-6 text-black">
                        Bimbingan Teknis Strategi Pemasaran di Wilayah Sleman
                    </p>
                    <p class="mt-3 text-xs 2xl:text-sm text-gray-500 line-clamp-3">
                        Sleman – Dinas Koperasi, Usaha Kecil, dan Menengah Kabupaten Sleman kembali menyelenggarakan
                        Bimbingan…
                    </p>
                    <hr class="text-gray-300 my-4 opacity-30">
                    <p class="uppercase text-gray-400 text-xs 2xl:text-sm">12 agustus 2023</p>
                </figure>
                <figure>
                    <img class="w-full bg-gray-200 rounded-xl h-60 blur-mode object-cover object-center"
                        src="{{ asset('assets/images/hero1.jpg') }}" alt="">

                    <p class="mt-5 text-md font-semibold leading-6 text-black">
                        Bimbingan Teknis Strategi Pemasaran di Wilayah Sleman
                    </p>
                    <p class="mt-3 text-xs 2xl:text-sm text-gray-500 line-clamp-3">
                        Sleman – Dinas Koperasi, Usaha Kecil, dan Menengah Kabupaten Sleman kembali menyelenggarakan
                        Bimbingan…
                    </p>
                    <hr class="text-gray-300 my-4 opacity-30">
                    <p class="uppercase text-gray-400 text-xs 2xl:text-sm">12 agustus 2023</p>
                </figure>
                <figure>
                    <img class="w-full bg-gray-200 rounded-xl h-60 blur-mode object-cover object-center"
                        src="{{ asset('assets/images/hero2.jpg') }}" alt="">

                    <p class="mt-5 text-md font-semibold leading-6 text-black">
                        Bimbingan Teknis Strategi Pemasaran di Wilayah Sleman
                    </p>
                    <p class="mt-3 text-xs 2xl:text-sm text-gray-500 line-clamp-3">
                        Sleman – Dinas Koperasi, Usaha Kecil, dan Menengah Kabupaten Sleman kembali menyelenggarakan
                        Bimbingan…
                    </p>
                    <hr class="text-gray-300 my-4 opacity-30">
                    <p class="uppercase text-gray-400 text-xs 2xl:text-sm">12 agustus 2023</p>
                </figure>
                <figure>
                    <img class="w-full bg-gray-200 rounded-xl h-60 blur-mode object-cover object-center"
                        src="{{ asset('assets/images/hero3.jpg') }}" alt="">

                    <p class="mt-5 text-md font-semibold leading-6 text-black">
                        Bimbingan Teknis Strategi Pemasaran di Wilayah Sleman
                    </p>
                    <p class="mt-3 text-xs 2xl:text-sm text-gray-500 line-clamp-3">
                        Sleman – Dinas Koperasi, Usaha Kecil, dan Menengah Kabupaten Sleman kembali menyelenggarakan
                        Bimbingan…
                    </p>
                    <hr class="text-gray-300 my-4 opacity-30">
                    <p class="uppercase text-gray-400 text-xs 2xl:text-sm">12 agustus 2023</p>
                </figure>
            </div>
        </div>
    </section>

    {{-- Faq --}}
    <section class="py-12 max-w-2xl mx-auto">
        <p class="text-xl font-semibold tracking-tight text-black text-center">
            Pertanyaan Umum
        </p>
        <p class="text-center text-xs 2xl:text-sm text-gray-400">
            Beberapa pertanyaan yang sering diajukan untuk layanan pada website NaZMa Office.
        </p>


        <div id="accordion-arrow-icon" data-accordion="open" class="mt-8 mx-4 md:mx-0">
            <h2 id="accordion-arrow-icon-heading-2" class="rounded-lg mb-3 bg-white">
                <button type="button"
                    class="flex items-center text-xs 2xl:text-sm justify-between w-full p-5 text-left rounded-lg text-gray-500 focus:ring-4 focus:ring-gray-200"
                    data-accordion-target="#accordion-arrow-icon-body-2" aria-expanded="false"
                    aria-controls="accordion-arrow-icon-body-2">
                    <span>Apa itu website NaZMa Office?</span>
                    <ion-icon name="chevron-down-circle-outline" data-accordion-icon
                        class="shrink-0 -mr-0.5 w-6 h-6"></ion-icon>
                </button>
            </h2>
            <div id="accordion-arrow-icon-body-2" class="hidden mb-4"
                aria-labelledby="accordion-arrow-icon-heading-2">
                <div class="p-5 bg-white rounded-lg">
                    <p class="text-gray-400 text-xs 2xl:text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quae, officiis veniam
                        similique animi architecto soluta nostrum, sed quaerat fuga vitae atque ipsam et nisi quo
                        eveniet voluptatem sint dignissimos.
                    </p>
                </div>
            </div>
            <h2 id="accordion-arrow-icon-heading-3" class="rounded-lg mb-3 bg-white">
                <button type="button"
                    class="flex items-center text-xs 2xl:text-sm justify-between w-full p-5 text-left rounded-lg text-gray-500 focus:ring-4 focus:ring-gray-200"
                    data-accordion-target="#accordion-arrow-icon-body-3" aria-expanded="false"
                    aria-controls="accordion-arrow-icon-body-3">
                    <span>Kapan saja jam operasional NaZMa Office?</span>
                    <ion-icon name="chevron-down-circle-outline" data-accordion-icon
                        class="shrink-0 -mr-0.5 w-6 h-6"></ion-icon>
                </button>
            </h2>
            <div id="accordion-arrow-icon-body-3" class="hidden mb-4"
                aria-labelledby="accordion-arrow-icon-heading-3">
                <div class="p-5 bg-white rounded-lg">
                    <p class="text-gray-400 text-xs 2xl:text-sm">
                        Jam kerja admin: <br>
                        Setiap hari (Senin-Minggu) <br>
                        Jam 09:00-19:00 WIB
                    </p>
                </div>
            </div>
            <h2 id="accordion-arrow-icon-heading-4" class="rounded-lg mb-3 bg-white">
                <button type="button"
                    class="flex items-center text-xs 2xl:text-sm justify-between w-full p-5 text-left rounded-lg text-gray-500 focus:ring-4 focus:ring-gray-200"
                    data-accordion-target="#accordion-arrow-icon-body-4" aria-expanded="false"
                    aria-controls="accordion-arrow-icon-body-4">
                    <span>Bagaimana cara menghubungi NaZMa Office?</span>
                    <ion-icon name="chevron-down-circle-outline" data-accordion-icon
                        class="shrink-0 -mr-0.5 w-6 h-6"></ion-icon>
                </button>
            </h2>
            <div id="accordion-arrow-icon-body-4" class="hidden mb-4"
                aria-labelledby="accordion-arrow-icon-heading-4">
                <div class="p-5 bg-white rounded-lg">
                    <p class="text-gray-400 text-xs 2xl:text-sm">
                        Anda dapat menghubungi kami melalui email, telepon, atau mengisi form yang telah kami sediakan
                        pada halaman kontak.
                    </p>
                </div>
            </div>
            <h2 id="accordion-arrow-icon-heading-5" class="rounded-lg mb-3 bg-white">
                <button type="button"
                    class="flex items-center text-xs 2xl:text-sm justify-between w-full p-5 text-left rounded-lg text-gray-500 focus:ring-4 focus:ring-gray-200"
                    data-accordion-target="#accordion-arrow-icon-body-5" aria-expanded="false"
                    aria-controls="accordion-arrow-icon-body-5">
                    <span>Bagaimana cara memesan produk NaZMa Office?</span>
                    <ion-icon name="chevron-down-circle-outline" data-accordion-icon
                        class="shrink-0 -mr-0.5 w-6 h-6"></ion-icon>
                </button>
            </h2>
            <div id="accordion-arrow-icon-body-5" class="hidden mb-4"
                aria-labelledby="accordion-arrow-icon-heading-5">
                <div class="p-5 bg-white rounded-lg">
                    <p class="text-gray-400 text-xs 2xl:text-sm">
                        Anda dapat memesan produk kami melalui website ini, atau menghubungi kami melalui email,
                        telepon, atau mengisi form yang telah kami sediakan pada halaman kontak.
                    </p>
                </div>
            </div>
        </div>

    </section>

    @push('js-internal')
    @endpush

</x-guest-layout>
