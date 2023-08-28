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
    <div id="indicators-carousel" class="relative max-w-7xl mx-auto my-12" data-carousel="static" data-aos="fade-up">
        <!-- Carousel wrapper -->
        <div class="relative h-48 overflow-hidden shadow-2xl rounded-lg md:rounded-3xl md:h-[488px] mx-4 md:mx-0">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="{{ asset('storage/company-landing-setting/' . $companyLandingSetting->slide_image_1) }}"
                    class="absolute block w-full -translate-x-1/2 blur-mode -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
                <div class="absolute inset-0 bg-gradient-to-l from-black/60"></div>
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
                    <h1 class="font-semibold text-xl md:text-3xl lg:text-7xl" id="header-title">
                        We'll Finish It
                        <br>With Exellence
                    </h1>
                    <p class="tracking-tight leading-6 mt-3 hidden md:inline-block">
                        Namun, kalau kamu mau belajar sambil berkarya, suka tantangan, siap mengikuti perubahan dengan
                        cepat, ingin berinovasi dan punya visi yang sama dalam mengedukasi Indonesia, maka kami adalah
                        tempat yang tepat untukmu berkembang
                    </p>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('storage/company-landing-setting/' . $companyLandingSetting->slide_image_2) }}"
                    class="absolute block w-full -translate-x-1/2 blur-mode -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
                <div class="absolute inset-0 bg-gradient-to-l from-black/60"></div>
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
                    <h1 class="font-semibold text-xl md:text-3xl lg:text-7xl" id="header-title">
                        Dengan Kualitas Terbaik
                    </h1>
                    <p class="tracking-tight leading-6 mt-3 hidden md:inline-block">
                        Kami adalah perusahaan yang bergerak di bidang jasa konsultan IT dan layanan manajemen. Kami
                        siap membantu Anda dalam mengembangkan bisnis Anda dengan teknologi informasi yang tepat.
                    </p>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('storage/company-landing-setting/' . $companyLandingSetting->slide_image_3) }}"
                    class="absolute block w-full -translate-x-1/2 blur-mode -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
                <div class="absolute inset-0 bg-gradient-to-l from-black/60"></div>
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
                    <h1 class="font-semibold text-xl md:text-3xl lg:text-7xl" id="header-title">
                        Team Profesional
                    </h1>
                    <p class="tracking-tight leading-6 mt-3 hidden md:inline-block">
                        Kami memiliki tim yang berpengalaman dan profesional dalam bidangnya masing-masing. Kami
                        siap membantu Anda dalam mengembangkan bisnis Anda dengan teknologi informasi yang tepat.
                    </p>
                </div>
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
        <div data-aos="fade-up" data-aos-duration="1000">
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
        </div>
    </section>

    {{-- Services --}}
    <section>
        <p class="text-xl font-semibold text-black text-center pt-12 mb-6 mx-2 md:mx-0" data-aos="fade-up">
            Layanan Yang Kami Miliki
        </p>
        <div class="items-center px-8 mx-auto max-w-7xl lg:px-16 md:px-12">
            <div class="justify-center w-full lg:p-10 max-auto">
                <div class="justify-center w-full text-center">

                    <div x-data="{ tab: '{{ $serviceCategories->first()->id }}' }">'
                        <ul class="md:flex gap-3 text-gray-500 justify-center">
                            <li class="-mb-px">
                                <a @click.prevent="tab = '{{ $serviceCategories->first()->id }}'" href="#"
                                    class="inline-block px-8 py-2.5 text-xs 2xl:text-sm rounded-full text-white bg-primary"
                                    :class="{ '  text-white bg-primary': tab === '{{ $serviceCategories->first()->id }}' }">
                                    {{ $serviceCategories->first()->title }}
                                </a>
                            </li>

                            {{-- loop except 1 --}}
                            @foreach ($serviceCategories->skip(1) as $serviceCategory)
                                <li class="-mb-px">
                                    <a @click.prevent="tab = '{{ $serviceCategory->id }}'" href="#"
                                        class="inline-block px-8 py-2.5 text-xs 2xl:text-sm rounded-full text-white bg-gray-200"
                                        :class="{ '  text-white bg-primary': tab === '{{ $serviceCategory->id }}' }">
                                        {{ $serviceCategory->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="py-4 pt-4 text-left content mt-8">
                            <!-- show tab1 only -->
                            @foreach ($serviceCategories as $serviceCategory)
                                <div x-show="tab==='{{ $serviceCategory->id }}'" class="text-gray-500"
                                    data-aos="fade-up" data-aos-duration="1000">
                                    <main class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                                        @foreach ($serviceCategory->services as $service)
                                            <div class="max-w-sm p-6 bg-white rounded-lg shadow-sm">
                                                <div
                                                    class="w-14 h-14 md:w-12 md:h-12 p-2 border border-gray-200 rounded-md">
                                                    <ion-icon name="{{ $service->icon }}"
                                                        class="text-{{ $service->icon_color }}-600"
                                                        size="large"></ion-icon>
                                                </div>
                                                <a href="{{ route('user.service.detail', $service->id) }}">
                                                    <h5
                                                        class="mb-2 mt-4 text-xs 2xl:text-sm font-semibold tracking-tight text-gray-900">
                                                        {{ $service->title }}
                                                    </h5>
                                                </a>
                                                <p class="mb-3 font-normal text-gray-500 text-xs 2xl:text-sm">
                                                    {{ $service->description }}
                                                </p>
                                                <a href="{{ route('user.service.detail', $service->id) }}"
                                                    class="inline-flex mt-4 items-center text-primary hover:underline text-xs 2xl:text-sm">
                                                    Selengkapnya
                                                    <ion-icon name="chevron-forward-outline" class="text-primary ml-2"
                                                        size="small"></ion-icon>
                                                </a>
                                            </div>
                                        @endforeach
                                    </main>
                                </div>
                            @endforeach
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
                        <div class="flex flex-col m-auto md:order-first" data-aos="fade-right">
                            <div class="max-w-xl">
                                <div>
                                    <p class="text-xl font-semibold tracking-tight text-black">
                                        Tentang Kami
                                    </p>
                                </div>
                            </div>
                            <div class="mt-6 lg:max-w-7xl" data-aos="fade-right" data-aos-duration="1000">
                                <p class="text-gray-400 text-xs 2xl:text-sm">
                                    {{ $companyLandingSetting->about_us }}
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
                        <div class="order-first block w-full mt-8 lg:mt-0" data-aos="fade-left"
                            data-aos-duration="1000">
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
                    <div class="mt-6 grid gap-5 md:gap-0.5 md:grid-flow-col lg:mt-8" data-aos="fade-up">
                        @foreach ($partners as $partner)
                            <div class="flex justify-center col-span-1 px-8">
                                <img class="max-h-12 blur-mode"
                                    src="{{ asset('storage/partner/' . $partner->image) }}"
                                    class="w-full h-20 object-cover object-center" alt=" logo">
                            </div>
                        @endforeach
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
        <div id="testimonial" class="mt-8">
            <div class="carousel carousel-center p-4 space-x-4 w-full place-content-center" data-aos="fade-up"
                data-aos-duration="1000">
                @foreach ($testimonials as $testimonial)
                    <div id="item{{ $testimonial->id }}" class="carousel-item">
                        <div class="max-w-sm p-12 md:p-6 bg-white rounded-lg border border-gray-50">
                            <div class="flex justify-between items-center mb-4">
                                <img src="{{ asset('storage/testimonial/' . $testimonial->profile_picture) }}"
                                    class=" blur-mode w-16 h-16 object-center object-cover rounded-full"
                                    alt="">
                                <div class="flex items-center">
                                    <ion-icon name="star" class="text-primary h-4 w-4 me-1"></ion-icon>
                                    <span class="text-xs 2xl:text-sm text-primary">
                                        {{ number_format($testimonial->rating, 1, '.', ',') }}
                                    </span>
                                </div>
                            </div>
                            <div>
                                <h5 class="text-md font-medium tracking-tight text-gray-900">
                                    {{ ucwords($testimonial->fullname) }}
                                </h5>
                                <span class="text-xs 2xl:text-sm -mt-2 tracking-tight text-gray-400">
                                    {{ ucwords($testimonial->job) }}
                                </span>
                            </div>
                            <p class="mt-3 font-normal text-gray-500 text-xs 2xl:text-sm">
                                {{ $testimonial->testimonial }}
                            </p>
                        </div>
                    </div>
                @endforeach
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
        <div class="max-w-7xl mx-auto px-4 mt-16">
            <div class="carousel carousel-center space-x-2 gap-x-8 w-full" data-aos="fade-up"
                data-aos-duration="1000">
                @foreach ($serviceProjects as $serviceProject)
                    <div class="carousel-item w-full lg:w-1/2">
                        <div
                            class="grid md:grid-cols-3 p-8 gap-x-8 items-start bg-white border border-gray-200 rounded-lg hover:bg-gray-100">
                            <img class="hidden md:inline-block object-cover rounded-lg md:w-52 md:h-52 lg:h-40 object-center blur-mode"
                                src="{{ asset('assets/images/hero1.jpg') }}" alt="">
                            <div class="leading-normal col-span-2">
                                <h5 class="mb-2 text-lg font-medium line-clamp-2 tracking-tight text-gray-900">
                                    {{ $serviceProject->title }}
                                </h5>
                                <p class="font-normal text-gray-400 mb-4 line-clamp-3 text-xs 2xl:text-sm">
                                    {{ $serviceProject->description }}
                                </p>

                                <ul class="space-y-1 text-left text-gray-500 dark:text-gray-400 text-xs 2xl:text-sm">
                                    <li class="flex items-center space-x-3">
                                        <ion-icon name="calendar"
                                            class="flex-shrink-0 w-3.5 h-3.5 text-gray-400"></ion-icon>
                                        <span>
                                            {{ date('d F Y', strtotime($serviceProject->taken_at)) }}
                                        </span>
                                    </li>
                                    <li class="flex items-center space-x-3">
                                        <ion-icon name="navigate"
                                            class="flex-shrink-0 w-3.5 h-3.5 text-gray-400"></ion-icon>
                                        <span>
                                            {{ $serviceProject->location }}
                                        </span>
                                    </li>
                                </ul>
                                <button
                                    class="inline-flex mt-4 items-center justify-center px-4 py-2 text-xs 2xl:text-sm font-normal text-white bg-primary rounded-full group focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 hover:bg-purple-700 active:bg-purple active:text-white focus-visible:outline-black">
                                    Selengkapnya
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Blog --}}
    <section class="py-12 bg-white">
        <div class="max-w-7xl px-4 md:px-8 mx-auto">
            <div class="flex justify-between items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <p class="font-semibold tracking-tight text-black text-xl">Informasi Terbaru</p>
                    <p class="text-gray-400 text-xs 2xl:text-sm">
                        Kami melakukan press release setiap kegiatan. Jangan sampai ketinggalan
                    </p>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000">
                    <a href="{{ route('user.blog') }}"
                        class="inline-flex items-center justify-center px-3 py-2 text-xs 2xl:text-sm text-gray-400 bg-transparent border border-gray-300 hover:border-purple-600 rounded-full group focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 hover:bg-purple-700 hover:text-white active:bg-purple active:text-white focus-visible:outline-black">
                        Lihat Semua
                    </a>
                </div>
            </div>

            <div class="grid gap-6 py-12 md:grid-cols-2 lg:grid-cols-4" data-aos="fade-up" data-aos-duration="1000">
                @forelse ($blogs as $blog)
                    <a href="{{ route('user.blog.detail', $blog->slug) }}">
                        <img class="w-full bg-gray-200 rounded-xl h-60 blur-mode object-cover object-center"
                            src="{{ asset('storage/blogs/thumbnail/' . $blog->thumbnail) }}" alt="">

                        <p class="mt-5 text-md font-semibold leading-6 text-black">
                            {{ $blog->title }}
                        </p>
                        <div class="mt-3 text-xs 2xl:text-sm text-gray-500 line-clamp-3">
                            {!! $blog->content !!}
                        </div>
                        <hr class="text-gray-300 my-4 opacity-30">
                        <p class="uppercase text-gray-400 text-xs 2xl:text-sm">
                            {{ date('d F Y', strtotime($blog->published_date)) }}
                        </p>
                    </a>
                @empty
                    <p class="text-center text-gray-400 text-xs 2xl:text-sm">
                        Belum ada blog
                    </p>
                @endforelse
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
            @forelse ($faqs as $faq)
                <h2 id="accordion-arrow-icon-heading-{{ $faq->id }}" class="rounded-lg mb-3 bg-white"
                    data-aos="fade-up" data-aos-duration="1000">
                    <button type="button"
                        class="flex items-center text-xs 2xl:text-sm justify-between w-full p-5 text-left rounded-lg text-gray-500 focus:ring-4 focus:ring-gray-200"
                        data-accordion-target="#accordion-arrow-icon-body-{{ $faq->id }}" aria-expanded="false"
                        aria-controls="accordion-arrow-icon-body-{{ $faq->id }}">
                        <span>{{ $faq->question }}</span>
                        <ion-icon name="chevron-down-circle-outline" data-accordion-icon
                            class="shrink-0 -mr-0.5 w-6 h-6"></ion-icon>
                    </button>
                </h2>
                <div id="accordion-arrow-icon-body-{{ $faq->id }}" class="hidden mb-4"
                    aria-labelledby="accordion-arrow-icon-heading-{{ $faq->id }}">
                    <div class="p-5 bg-white rounded-lg">
                        <p class="text-gray-400 text-xs 2xl:text-sm">
                            {{ $faq->answer }}
                        </p>
                    </div>
                </div>
            @empty
            @endforelse
        </div>

    </section>

    @push('js-internal')
    @endpush

</x-guest-layout>
