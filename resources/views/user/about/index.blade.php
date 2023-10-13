<x-guest-layout>
    @section('title', 'Tentang Kami')
    @push('css-internal')
        <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />

        <style>
            @import url('https://fonts.cdnfonts.com/css/damion');

            #header-title {
                font-family: 'Damion', cursive;
                line-height: 1.2;
            }
        </style>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @endpush


    {{-- Hero --}}
    <div id="indicators-carousel" class="relative max-w-7xl mx-4 xl:mx-auto my-12" data-carousel="static"
        data-aos="fade-up">
        <!-- Carousel wrapper -->
        <div
            class="carousel-container relative h-48 overflow-hidden shadow-2xl rounded-lg md:rounded-3xl md:h-[488px] mx-4 md:mx-0">
            <div class="swiper-wrapper">
                <!-- Item 1 -->
                @if (isset($aboutPage->slide_image_1))
                    <div class="hidden duration-700 ease-in-out swiper-slide" data-carousel-item="active">
                        <img src="{{ asset('storage/about-page-setting/' . $aboutPage->slide_image_1) }}"
                            class="absolute block w-full -translate-x-1/2 blur-mode -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                        <div class="absolute inset-0 bg-gradient-to-l from-black/60"></div>
                        <div
                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
                            <h1 class="font-semibold text-2xl md:text-3xl lg:text-7xl" id="header-title">
                                {{ $aboutPage->title_slide_image_1 ?? '-' }}
                            </h1>
                            <p class="tracking-tight leading-6 mt-3 hidden md:inline-block text-xs 2xl:text-md">
                                {{ $aboutPage->description_slide_image_1 }}
                            </p>
                        </div>
                    </div>
                @endif
                <!-- Item 2 -->
                @if (isset($aboutPage->slide_image_2))
                    <div class="hidden duration-700 ease-in-out swiper-slide" data-carousel-item>
                        <img src="{{ asset('storage/about-page-setting/' . $aboutPage->slide_image_2) }}"
                            class="absolute block w-full -translate-x-1/2 blur-mode -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                        <div class="absolute inset-0 bg-gradient-to-l from-black/60"></div>
                        <div
                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
                            <h1 class="font-semibold text-2xl md:text-3xl lg:text-7xl" id="header-title">
                                {{ $aboutPage->title_slide_image_2 ?? '-' }}
                            </h1>
                            <p class="tracking-tight leading-6 mt-3 hidden md:inline-block text-xs 2xl:text-md">
                                {{ $aboutPage->description_slide_image_2 ?? '-' }}
                            </p>
                        </div>
                    </div>
                @endif
                <!-- Item 3 -->
                @if (isset($aboutPage->slide_image_3))
                    <div class="hidden duration-700 ease-in-out swiper-slide" data-carousel-item>
                        <img src="{{ asset('storage/about-page-setting/' . $aboutPage->slide_image_3) }}"
                            class="absolute block w-full -translate-x-1/2 blur-mode -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                        <div class="absolute inset-0 bg-gradient-to-l from-black/60"></div>
                        <div
                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
                            <h1 class="font-semibold text-2xl md:text-3xl lg:text-7xl" id="header-title">
                                {{ $aboutPage->title_slide_image_3 ?? '-' }}
                            </h1>
                            <p class="tracking-tight leading-6 mt-3 hidden md:inline-block text-xs 2xl:text-md">
                                {{ $aboutPage->description_slide_image_3 ?? '-' }}
                            </p>
                        </div>
                    </div>
                @endif
                <!-- Item 4 -->
                @if (isset($aboutPage->slide_image_4))
                    <div class="hidden duration-700 ease-in-out swiper-slide" data-carousel-item>
                        <img src="{{ asset('storage/about-page-setting/' . $aboutPage->slide_image_4) }}"
                            class="absolute block w-full -translate-x-1/2 blur-mode -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                        <div class="absolute inset-0 bg-gradient-to-l from-black/60"></div>
                        <div
                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
                            <h1 class="font-semibold text-2xl md:text-3xl lg:text-7xl" id="header-title">
                                {{ $aboutPage->title_slide_image_4 ?? '-' }}
                            </h1>
                            <p class="tracking-tight leading-6 mt-3 hidden md:inline-block text-xs 2xl:text-md">
                                {{ $aboutPage->description_slide_image_4 ?? '-' }}
                            </p>
                        </div>
                    </div>
                @endif
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
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 opacity-10 hover:opacity-100 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
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
            class="absolute top-0 right-0 z-30 flex opacity-10 hover:opacity-100 items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
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

    {{-- Milestone --}}
    <section class="bg-white py-20 px-4 md:px-8">
        <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16 text-center" data-aos="fade-up" data-aos-delay="1000">
            <h2 class="mb-4 text-2xl tracking-tight font-bold text-gray-900">
                Perjalanan Kami
            </h2>
            <p class=" text-gray-400 text-xs 2xl:text-md">
                Tahun demi tahun, kami terus berkembang dan berinovasi <br> untuk mengedukasi berbagai kalangan bisnis
            </p>
        </div>
        <div class="max-w-7xl mx-auto" data-aos="fade-up" data-aos-delay="500">
            <div class="grid grid-cols-1 gap-y-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 mt-8">
                @foreach ($milestones as $milestone)
                    <div class="relative">
                        <div class="items-center hidden md:flex">
                            <div
                                class="z-10 flex items-center justify-center w-4 h-4 bg-orange-700 rounded-full ring-white shrink-0">
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <p class="text-xs 2xl:text-md font-medium mb-3 text-gray-900">{{ $milestone->title }}</p>
                            <time
                                class="block mb-2 text-xs 2xl:text-md font-normal leading-none text-gray-400 ">{{ $milestone->year }}</time>
                            <p class="text-xs 2xl:text-md font-normal text-justify text-gray-500">
                                {{ $milestone->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Vision --}}

    <section>
        <div
            class="flex flex-col justify-center flex-1 px-8 py-8 mx-auto lg:py-24 md:px-12 lg:flex-none lg:px-24 max-w-7xl">
            <div class="max-w-2xl mx-auto text-center">
                <div>
                    <p class="text-2xl font-bold tracking-tight text-black sm:text-2xl">
                        Visi
                    </p>
                    <p class="max-w-xl mt-4 text-md tracking-tight text-gray-600">
                        "Menjadi perusahaan IT dan Management Consulting yang inspiratif, berkualitas
                        dan barokah pada tahun 2024"
                    </p>
                </div>
                <div class="mb-6 mt-20">
                    <p class="text-2xl font-bold tracking-tight text-black sm:text-2xl">
                        Misi
                    </p>
                </div>
            </div>

            <section class="flex items-center w-full">
                <div class="relative items-center w-full">

                    <div class="flex flex-wrap justify-center">
                        <div class="w-full md:w-1/2 lg:w-1/3 text-center p-4">
                            <figure>
                                <p class="mt-3 text-md text-gray-600">
                                    Memberikan layanan IT dan Manajemen Consulting serta pengembangan lain yang
                                    berkualitas
                                </p>
                            </figure>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 text-center p-4">
                            <figure>
                                <p class="mt-3 text-md text-gray-600">
                                    Memberikan value (nilai) tambah pada setiap produk dan jasa yang diberikan oleh
                                    NaZMa.
                                </p>
                            </figure>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 text-center p-4">
                            <figure>
                                <p class="mt-3 text-md text-gray-600">
                                    Membuat sistemasi bisnis yang efektif, efisien, nyaman, dan terintegrasi baik secara
                                    offline dan online.
                                </p>
                            </figure>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 text-center p-4">
                            <figure>
                                <p class="mt-3 text-md text-gray-600">
                                    Selalu memberikan layanan pada customer dengan berprinsip “We’ll finish it with
                                    excellence” dengan target kepuasan pelanggan.
                                </p>
                            </figure>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 text-center p-4">
                            <figure>
                                <p class="mt-3 text-md text-gray-600">
                                    Bekerja sama dan bersinergi dengan berbagai institusi, komunitas, perusahaan,
                                    kampus, dan masyarakat untuk meningkatkan kinerja dan layanan perusahaan.
                                </p>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </section>


    {{-- Teams --}}
    <section class=bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6" data-aos="fade-up"
            data-aos-delay="1000">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <h2 class="mb-4 text-2xl tracking-tight font-bold text-gray-900">
                    Tim Dibalik NaZMa Office
                </h2>
                <p class=" text-gray-400 text-xs 2xl:text-md">
                    Kami adalah tim yang berdedikasi untuk mengedukasi Indonesia dan siap
                    untuk membantu dalam mengembangkan bisnis dengan teknologi informasi yang tepat.
                </p>
            </div>
            <div class="flex flex-row items-center justify-center gap-4 mb-8">
                @foreach ($topJob as $team)
                    <div class="text-center text-gray-500" data-aos="fade-up" data-aos-duration="500"
                        data-aos-delay="{{ $loop->iteration * 300 }}">
                        <img class="mx-auto mb-4 w-36 h-36 rounded-full"
                            src="{{ asset('storage/teams/' . $team['image']) }}" alt={{ $team['name'] }}>
                        <h3 class="mb-1 text-sm 2xl:text-md font-medium tracking-tight text-gray-900">
                            <span>{{ $team['name'] }}</span>
                        </h3>
                        <p class="text-xs 2xl:text-md">{{ $team['job'] }}</p>
                        <ul class="flex justify-center mt-4 space-x-4">
                            @if ($team['facebook'])
                                <li>
                                    <a href="{{ $team['facebook'] }}" class="text-gray-400 hover:text-gray-900">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                            @endif
                            @if ($team['twitter'])
                                <li>
                                    <a href="{{ $team['twitter'] }}" class="text-gray-400 hover:text-gray-900">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                            @endif
                            @if ($team['instagram'])
                                <li>
                                    <a href="{{ $team['instagram'] }}" class="text-gray-400 hover:text-gray-900">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            @endif
                            @if ($team['linkedin'])
                                <li>
                                    <a href="{{ $team['linkedin'] }}" class="text-gray-400 hover:text-gray-900">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                @endforeach
            </div>
            <div class="flex w-full justify-center mb-8 flex-wrap gap-4 md:gap-16">
                @foreach ($teams->where('job', '==', 'Trainer') as $team)
                    <div class="text-center text-gray-500" data-aos="fade-up" data-aos-duration="500">
                        <img class="mx-auto mb-4 w-36 h-36 rounded-full"
                            src="{{ asset('storage/teams/' . $team->image) }}" alt={{ $team->name }}>
                        <h3 class="mb-1 text-sm 2xl:text-md font-medium tracking-tight text-gray-900">
                            <span>{{ $team->name }}</span>
                        </h3>
                        <p class="text-xs 2xl:text-md">{{ $team->job }}</p>
                        <ul class="flex justify-center mt-4 space-x-4">
                            <li>
                                @if ($team->facebook)
                                    <a href="{{ $team->facebook }}" class="text-gray-400 hover:text-gray-900">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                @endif
                            </li>
                            <li>
                                @if ($team->twitter)
                                    <a href="{{ $team->twitter }}" class="text-gray-400 hover:text-gray-900">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                @endif
                            </li>
                            <li>
                                @if ($team->instagram)
                                    <a href="{{ $team->instagram }}" class="text-gray-400 hover:text-gray-900">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                @endif
                            </li>
                            <li>
                                @if ($team->linkedin)
                                    <a href="{{ $team->linkedin }}" class="text-gray-400 hover:text-gray-900">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                @endif
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>

            <div class="flex w-full justify-center mb-8 flex-wrap gap-4 md:gap-8">
                @foreach ($teams->where('job', '==', 'Kreatif') as $team)
                    <div class="text-center text-gray-500" data-aos="fade-up" data-aos-duration="500">
                        <img class="mx-auto mb-4 w-36 h-36 rounded-full"
                            src="{{ asset('storage/teams/' . $team->image) }}" alt={{ $team->name }}>
                        <h3 class="mb-1 text-sm 2xl:text-md font-medium tracking-tight text-gray-900">
                            <span>{{ $team->name }}</span>
                        </h3>
                        <p class="text-xs 2xl:text-md">{{ $team->job }}</p>
                        <ul class="flex justify-center mt-4 space-x-4">
                            <li>
                                @if ($team->facebook)
                                    <a href="{{ $team->facebook }}" class="text-gray-400 hover:text-gray-900">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                @endif
                            </li>
                            <li>
                                @if ($team->twitter)
                                    <a href="{{ $team->twitter }}" class="text-gray-400 hover:text-gray-900">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                @endif
                            </li>
                            <li>
                                @if ($team->instagram)
                                    <a href="{{ $team->instagram }}" class="text-gray-400 hover:text-gray-900">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                @endif
                            </li>
                            <li>
                                @if ($team->linkedin)
                                    <a href="{{ $team->linkedin }}" class="text-gray-400 hover:text-gray-900">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                @endif
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    <section class="py-12 bg-white">
        <p class="text-2xl font-bold tracking-tight text-black text-center">
            Apa Kata Mereka
        </p>
        <div id="testimonial" class="mt-8">
            <div class="carousel carousel-center p-4 space-x-4 w-full md:place-content-center" data-aos="fade-up"
                data-aos-delay="500">
                @foreach ($testimonials as $testimonial)
                    <div id="item{{ $testimonial->id }}" class="carousel-item">
                        <div class="max-w-sm p-12 md:p-6 bg-white rounded-lg border border-gray-50">
                            <div class="flex justify-between items-center mb-4">
                                <img src="{{ asset('storage/testimonial/' . $testimonial->profile_picture) }}"
                                    class=" blur-mode w-16 h-16 object-center object-cover rounded-full"
                                    alt="">
                                <div class="flex items-center">
                                    <ion-icon name="star" class="text-primary h-4 w-4 me-1"></ion-icon>
                                    <span class="text-xs 2xl:text-md text-primary">
                                        {{ number_format($testimonial->rating, 1, '.', ',') }}
                                    </span>
                                </div>
                            </div>
                            <div>
                                <h5 class="2xl:text-md font-semibold tracking-tight text-gray-900">
                                    {{ ucwords($testimonial->fullname) }}
                                </h5>
                                <span class="text-xs 2xl:text-md -mt-2 tracking-tight text-gray-400">
                                    {{ ucwords($testimonial->job) }}
                                </span>
                            </div>
                            <p class="mt-3 font-normal text-gray-500 text-xs 2xl:text-md">
                                {{ $testimonial->testimonial }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @push('js-internal')
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <script>
            let swiper = new Swiper(".swiper-container", {
                slidesPerView: "auto",
                spaceBetween: 2,
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 50,
                    },
                },
            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var mySwiper = new Swiper('.carousel-container', {
                    direction: 'horizontal',
                    loop: true,
                    autoplay: {
                        delay: 5000, // Adjust this value to set the delay time in milliseconds
                    },
                });
            });
        </script>
    @endpush
</x-guest-layout>
