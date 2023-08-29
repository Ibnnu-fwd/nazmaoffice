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
                <img src="{{ asset('storage/about-page-setting/' . $aboutPage->slide_image_1) }}"
                    class="absolute block w-full -translate-x-1/2 blur-mode -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
                <div class="absolute inset-0 bg-gradient-to-l from-black/60"></div>
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
                    <h1 class="font-semibold text-xl md:text-3xl lg:text-7xl" id="header-title">
                        Tim Kami
                    </h1>
                    <p class="tracking-tight leading-6 mt-3 hidden md:inline-block">
                        Kami adalah tim yang berdedikasi untuk mengedukasi Indonesia melalui media digital dan siap
                        untuk membantu Anda dalam mengembangkan bisnis Anda dengan teknologi informasi yang tepat.
                    </p>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('storage/about-page-setting/' . $aboutPage->slide_image_2) }}"
                    class="absolute block w-full -translate-x-1/2 blur-mode -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
                <div class="absolute inset-0 bg-gradient-to-l from-black/60"></div>
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
                    <h1 class="font-semibold text-xl md:text-3xl lg:text-7xl" id="header-title">
                        Pengalaman Lebih Dari 10 Tahun
                    </h1>
                    <p class="tracking-tight leading-6 mt-3 hidden md:inline-block">
                        Kami telah berpengalaman lebih dari 10 tahun dalam mengembangkan berbagai macam aplikasi dan
                        website untuk berbagai macam kebutuhan bisnis.
                    </p>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('storage/about-page-setting/' . $aboutPage->slide_image_3) }}"
                    class="absolute block w-full -translate-x-1/2 blur-mode -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
                <div class="absolute inset-0 bg-gradient-to-l from-black/60"></div>
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
                    <h1 class="font-semibold text-xl md:text-3xl lg:text-7xl" id="header-title">
                        Kerja Sama Dengan Berbagai Perusahaan
                    </h1>
                    <p class="tracking-tight leading-6 mt-3 hidden md:inline-block">
                        Kami telah bekerja sama dengan berbagai perusahaan ternama di Indonesia untuk mengembangkan
                        bisnis mereka dengan teknologi informasi yang tepat.
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

    {{-- Milestone --}}
    <section class="bg-white py-20 px-4 md:px-8">
        <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16 text-center" data-aos="fade-up" data-aos-delay="1000">
            <h2 class="mb-4 text-xl tracking-tight font-semibold text-gray-900">
                Perjalanan Kami
            </h2>
            <p class=" text-gray-400 text-xs 2xl:text-sm">
                Tahun demi tahun, kami terus berkembang dan berinovasi <br> untuk mengedukasi berbagai kalangan bisnis
            </p>
        </div>
        <div class="max-w-7xl mx-auto" data-aos="fade-up" data-aos-delay="1000">
            <div class="grid grid-cols-1 gap-y-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 mt-8">
                @foreach ($milestones as $milestone)
                    <div class="relative" data-aos="fade-left" data-aos-delay="{{ $loop->iteration * 450 }}">
                        <div class="items-center hidden md:flex">
                            <div
                                class="z-10 flex items-center justify-center w-4 h-4 bg-orange-700 rounded-full ring-white shrink-0">
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <p class="text-xs 2xl:text-sm font-medium mb-3 text-gray-900">{{ $milestone->title }}</p>
                            <time
                                class="block mb-2 text-xs 2xl:text-md font-normal leading-none text-gray-400 ">{{ $milestone->year }}</time>
                            <p class="text-xs 2xl:text-sm font-normal text-justify text-gray-500">
                                {{ $milestone->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Teams --}}
    <section class=bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6" data-aos="fade-up"
            data-aos-delay="1000">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <h2 class="mb-4 text-xl tracking-tight font-semibold text-gray-900">
                    Tim Dibalik NaZMa Office
                </h2>
                <p class=" text-gray-400 text-xs 2xl:text-sm">
                    Kami adalah tim yang berdedikasi untuk mengedukasi Indonesia melalui media digital
                </p>
            </div>
            <div class="flex flex-row items-center justify-center gap-16 mb-8">
                @foreach ($topJob as $team)
                    <div class="text-center text-gray-500" data-aos="fade-up" data-aos-duration="500"
                        data-aos-delay="{{ $loop->iteration * 300 }}">
                        <img class="mx-auto mb-4 w-36 h-36 rounded-full"
                            src="{{ asset('storage/teams/' . $team['image']) }}" alt={{ $team['name'] }}>
                        <h3 class="mb-1 text-sm 2xl:text-sm font-medium tracking-tight text-gray-900">
                            <span>{{ $team['name'] }}</span>
                        </h3>
                        <p class="text-xs 2xl:text-sm">{{ $team['job'] }}</p>
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
            <div class="flex w-full justify-center mb-8 flex-wrap gap-16 md:gap-16">
                @foreach ($teams->where('job', '==', 'Trainer') as $team)
                    <div class="text-center text-gray-500" data-aos="fade-up" data-aos-duration="500">
                        <img class="mx-auto mb-4 w-36 h-36 rounded-full"
                            src="{{ asset('storage/teams/' . $team->image) }}" alt={{ $team->name }}>
                        <h3 class="mb-1 text-sm 2xl:text-sm font-medium tracking-tight text-gray-900">
                            <span>{{ $team->name }}</span>
                        </h3>
                        <p class="text-xs 2xl:text-sm">{{ $team->job }}</p>
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

            <div class="flex w-full justify-center mb-8 flex-wrap gap-16 md:gap-8">
                @foreach ($teams->where('job', '==', 'Kreatif') as $team)
                    <div class="text-center text-gray-500" data-aos="fade-up" data-aos-duration="500">
                        <img class="mx-auto mb-4 w-36 h-36 rounded-full"
                            src="{{ asset('storage/teams/' . $team->image) }}" alt={{ $team->name }}>
                        <h3 class="mb-1 text-sm 2xl:text-sm font-medium tracking-tight text-gray-900">
                            <span>{{ $team->name }}</span>
                        </h3>
                        <p class="text-xs 2xl:text-sm">{{ $team->job }}</p>
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
        <p class="text-xl font-semibold tracking-tight text-black text-center">
            Apa Kata Mereka
        </p>
        <div id="testimonial" class="mt-8">
            <div class="carousel carousel-center p-4 space-x-4 w-full place-content-center" data-aos="fade-up"
                data-aos-delay="1000">
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
</x-guest-layout>
