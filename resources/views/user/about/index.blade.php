<x-guest-layout>
    @push('css-internal')
        <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />
    @endpush

    {{-- Hero --}}
    <div id="indicators-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-48 overflow-hidden rounded-lg md:rounded-none md:h-[488px] mx-4 md:mx-0">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="{{ asset('assets/images/hero1.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 blur-mode -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
                <div class="absolute inset-0 bg-gradient-to-l from-black/60"></div>
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
                    <h1 class="font-semibold text-xl md:text-3xl lg:text-5xl">
                        Kami Berkembang
                        <br>Dan Bekerja Bersama
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
                <img src="{{ asset('assets/images/hero2.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 blur-mode -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('assets/images/hero3.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 blur-mode -translate-y-1/2 top-1/2 left-1/2"
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

    {{-- Milestone --}}
    <section class="bg-white py-20 px-4 md:px-8">
        <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16 text-center">
            <h2 class="mb-4 text-xl tracking-tight font-semibold text-gray-900">
                Perjalanan Kami
            </h2>
            <p class=" text-gray-400 text-xs 2xl:text-sm">
                Tahun demi tahun, kami terus berkembang dan berinovasi <br> untuk mengedukasi berbagai kalangan bisnis
            </p>
        </div>
        <div class="max-w-7xl mx-auto">
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
                        <h3 class="text-xs 2xl:text-md font-normal text-gray-900 ">{{$milestone->title}}</h3>
                        <time class="block mb-2 text-xs 2xl:text-sm font-normal leading-none text-gray-400 ">{{$milestone->year}}</time>
                        <p class="text-xs 2xl:text-sm font-normal text-gray-500">{{$milestone->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Teams --}}
    <section class=bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <h2 class="mb-4 text-xl tracking-tight font-semibold text-gray-900">
                    Tim Dibalik NaZMa Office
                </h2>
                <p class=" text-gray-400 text-xs 2xl:text-sm">
                    Kami adalah tim yang berdedikasi untuk mengedukasi Indonesia melalui media digital
                </p>
            </div>
            <div class="grid gap-8 lg:gap-16 md:grid-cols-2 max-w-md mx-auto mb-16">
                @foreach ($teams as $team)
                <div class="text-center text-gray-500">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full"
                        src="{{ asset('storage/teams/' . $team->image) }}"
                        alt={{$team->name}}>
                    <h3 class="mb-1 text-sm 2xl:text-xl font-semibold tracking-tight text-gray-900">
                        <a href="#">{{$team->name}}</a>
                    </h3>
                    <p class="text-xs 2xl:text-sm">{{$team->job}}</p>
                    <ul class="flex justify-center mt-4 space-x-4">
                        <li>
                            <a href={{$team->facebook}} class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href={{$team->twitter}} class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                    d="M22,3.999c-0.78,0.463-2.345,1.094-3.265,1.276c-0.027,0.007-0.049,0.016-0.075,0.023c-0.813-0.802-1.927-1.299-3.16-1.299 c-2.485,0-4.5,2.015-4.5,4.5c0,0.131-0.011,0.372,0,0.5c-3.353,0-5.905-1.756-7.735-4c-0.199,0.5-0.286,1.29-0.286,2.032 c0,1.401,1.095,2.777,2.8,3.63c-0.314,0.081-0.66,0.139-1.02,0.139c-0.581,0-1.196-0.153-1.759-0.617c0,0.017,0,0.033,0,0.051 c0,1.958,2.078,3.291,3.926,3.662c-0.375,0.221-1.131,0.243-1.5,0.243c-0.26,0-1.18-0.119-1.426-0.165 c0.514,1.605,2.368,2.507,4.135,2.539c-1.382,1.084-2.341,1.486-5.171,1.486H2C3.788,19.145,6.065,20,8.347,20 C15.777,20,20,14.337,20,8.999c0-0.086-0.002-0.266-0.005-0.447C19.995,8.534,20,8.517,20,8.499c0-0.027-0.008-0.053-0.008-0.08 c-0.003-0.136-0.006-0.263-0.009-0.329c0.79-0.57,1.475-1.281,2.017-2.091c-0.725,0.322-1.503,0.538-2.32,0.636 C20.514,6.135,21.699,4.943,22,3.999z"
                                    clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href={{$team->instagram}}
                                class="text-gray-400 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                    d="M 8 3 C 5.239 3 3 5.239 3 8 L 3 16 C 3 18.761 5.239 21 8 21 L 16 21 C 18.761 21 21 18.761 21 16 L 21 8 C 21 5.239 18.761 3 16 3 L 8 3 z M 18 5 C 18.552 5 19 5.448 19 6 C 19 6.552 18.552 7 18 7 C 17.448 7 17 6.552 17 6 C 17 5.448 17.448 5 18 5 z M 12 7 C 14.761 7 17 9.239 17 12 C 17 14.761 14.761 17 12 17 C 9.239 17 7 14.761 7 12 C 7 9.239 9.239 7 12 7 z M 12 9 A 3 3 0 0 0 9 12 A 3 3 0 0 0 12 15 A 3 3 0 0 0 15 12 A 3 3 0 0 0 12 9 z"
                                    clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href={{$team->linkedin}} class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                    d="M19,3H5C3.895,3,3,3.895,3,5v14c0,1.105,0.895,2,2,2h14c1.105,0,2-0.895,2-2V5C21,3.895,20.105,3,19,3z M9,17H6.477v-7H9 V17z M7.694,8.717c-0.771,0-1.286-0.514-1.286-1.2s0.514-1.2,1.371-1.2c0.771,0,1.286,0.514,1.286,1.2S8.551,8.717,7.694,8.717z M18,17h-2.442v-3.826c0-1.058-0.651-1.302-0.895-1.302s-1.058,0.163-1.058,1.302c0,0.163,0,3.826,0,3.826h-2.523v-7h2.523v0.977 C13.93,10.407,14.581,10,15.802,10C17.023,10,18,10.977,18,13.174V17z"
                                    clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                @endforeach
            </div>
            <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($teams as $team)
                <div class="text-center text-gray-500">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full"
                        src="{{ asset('storage/teams/' . $team->image) }}"
                        alt={{$team->name}}>
                    <h3 class="mb-1 text-sm 2xl:text-xl font-semibold tracking-tight text-gray-900">
                        <a href="#">{{$team->name}}</a>
                    </h3>
                    <p class="text-xs 2xl:text-sm">{{$team->job}}</p>
                    <ul class="flex justify-center mt-4 space-x-4">
                        <li>
                            <a href={{$team->facebook}} class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href={{$team->twitter}} class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                    d="M22,3.999c-0.78,0.463-2.345,1.094-3.265,1.276c-0.027,0.007-0.049,0.016-0.075,0.023c-0.813-0.802-1.927-1.299-3.16-1.299 c-2.485,0-4.5,2.015-4.5,4.5c0,0.131-0.011,0.372,0,0.5c-3.353,0-5.905-1.756-7.735-4c-0.199,0.5-0.286,1.29-0.286,2.032 c0,1.401,1.095,2.777,2.8,3.63c-0.314,0.081-0.66,0.139-1.02,0.139c-0.581,0-1.196-0.153-1.759-0.617c0,0.017,0,0.033,0,0.051 c0,1.958,2.078,3.291,3.926,3.662c-0.375,0.221-1.131,0.243-1.5,0.243c-0.26,0-1.18-0.119-1.426-0.165 c0.514,1.605,2.368,2.507,4.135,2.539c-1.382,1.084-2.341,1.486-5.171,1.486H2C3.788,19.145,6.065,20,8.347,20 C15.777,20,20,14.337,20,8.999c0-0.086-0.002-0.266-0.005-0.447C19.995,8.534,20,8.517,20,8.499c0-0.027-0.008-0.053-0.008-0.08 c-0.003-0.136-0.006-0.263-0.009-0.329c0.79-0.57,1.475-1.281,2.017-2.091c-0.725,0.322-1.503,0.538-2.32,0.636 C20.514,6.135,21.699,4.943,22,3.999z"
                                    clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href={{$team->instagram}}
                                class="text-gray-400 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                    d="M 8 3 C 5.239 3 3 5.239 3 8 L 3 16 C 3 18.761 5.239 21 8 21 L 16 21 C 18.761 21 21 18.761 21 16 L 21 8 C 21 5.239 18.761 3 16 3 L 8 3 z M 18 5 C 18.552 5 19 5.448 19 6 C 19 6.552 18.552 7 18 7 C 17.448 7 17 6.552 17 6 C 17 5.448 17.448 5 18 5 z M 12 7 C 14.761 7 17 9.239 17 12 C 17 14.761 14.761 17 12 17 C 9.239 17 7 14.761 7 12 C 7 9.239 9.239 7 12 7 z M 12 9 A 3 3 0 0 0 9 12 A 3 3 0 0 0 12 15 A 3 3 0 0 0 15 12 A 3 3 0 0 0 12 9 z"
                                    clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href={{$team->linkedin}} class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                    d="M19,3H5C3.895,3,3,3.895,3,5v14c0,1.105,0.895,2,2,2h14c1.105,0,2-0.895,2-2V5C21,3.895,20.105,3,19,3z M9,17H6.477v-7H9 V17z M7.694,8.717c-0.771,0-1.286-0.514-1.286-1.2s0.514-1.2,1.371-1.2c0.771,0,1.286,0.514,1.286,1.2S8.551,8.717,7.694,8.717z M18,17h-2.442v-3.826c0-1.058-0.651-1.302-0.895-1.302s-1.058,0.163-1.058,1.302c0,0.163,0,3.826,0,3.826h-2.523v-7h2.523v0.977 C13.93,10.407,14.581,10,15.802,10C17.023,10,18,10.977,18,13.174V17z"
                                    clip-rule="evenodd"/>
                                </svg>
                            </a>
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
        <div id="testimonial">
            <div class="carousel carousel-center p-4 space-x-4 w-full">
                @foreach ($testimonials as $testimonial)
                <div id="item1" class="carousel-item">
                    <div class="max-w-sm p-12 md:p-6 bg-white rounded-lg border border-gray-50">
                        <div class="flex justify-between items-center mb-4">
                            <img src="{{ asset('storage/testimonial/' . $testimonial->profile_picture) }}"
                                class=" blur-mode w-16 h-16 object-center object-cover rounded-full" alt="">
                            <div class="flex items-center">
                                <ion-icon name="star" class="text-primary h-4 w-4 me-1"></ion-icon>
                                <span class="text-xs 2xl:text-sm text-primary">{{$testimonial->rating}}.0</span>
                            </div>
                        </div>
                        <a href="#">
                            <h5 class="text-md font-medium tracking-tight text-gray-900">
                                {{$testimonial->fullname}}
                            </h5>
                            <span class="text-xs 2xl:text-sm -mt-2 tracking-tight text-gray-400">
                                {{$testimonial->job}}
                            </span>
                        </a>
                        <p class="mt-3 font-normal text-gray-500 text-xs 2xl:text-sm">
                            {{$testimonial->testimonial}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>
