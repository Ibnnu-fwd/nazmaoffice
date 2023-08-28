<x-guest-layout>
    {{-- Hero --}}
    <section class="relative flex items-center w-full">
        <div class="relative flex items-center justify-center w-full px-5 py-24 mx-auto md:px-12 2xl:px-0 max-w-7xl">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-24">
                <div class="relative items-center gap-12 lg:inline-flex md:order-first">
                    <div class="max-w-xl text-center lg:text-left" data-aos="fade-right" data-aos-duration="500"
                        data-aos-delay="300">
                        <div>
                            <p class="text-danger">
                                NaZMa Event
                            </p>
                            <p class="text-2xl font-semibold leading-snug mt-2 tracking-tight text-black sm:text-4xl">
                                {{ $event->title }}
                            </p>
                            <p class="max-w-xl mt-4 text-base tracking-tight text-gray-400">
                                {{ $event->description }}
                            </p>
                        </div>
                        <div class="flex items-center justify-center gap-3 mt-10 lg:flex-row lg:justify-start">
                            <a href="#"
                                class="items-center justify-center w-fit px-6 py-3 text-center text-white duration-200 bg-primary border-2 border-primary rounded-full inline-flex hover:bg-purple-700 hover:text-white hover:border-purple-600 lg:w-auto text-md">
                                Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                <div class="order-first hidden lg:block w-full lg:mt-0" data-aos="fade-left" data-aos-duration="500"
                    data-aos-delay="300">
                    <img class="object-cover object-center w-full mx-auto lg:ml-auto rounded-2xl" alt="hero"
                        src="{{ asset('assets/images/hero1.jpg') }}">
                </div>
            </div>
        </div>

    </section>

    {{-- Study Case --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-12 2xl:px-0">
            <h1 class="text-2xl font-semibold tracking-tight text-primary">Studi Kasus:</h1>
            <h1 class="text-xl font-medium tracking-tight text-black">
                {{ $event->study_case }}
            </h1>
            <p class="text-xs 2xl:text-sm text-gray-400 xl:w-1/2 mt-3">
                {{ $event->study_case_description }}
            </p>

            <div class="">
                <div class="py-12 mx-auto text-left lg:max-w-7xl">
                    <div>
                        <div class="grid grid-cols-2 gap-12 lg:grid-cols-3 lg:space-y-0">
                            @foreach ($event->eventRundowns as $rundown)
                                <div data-aos="fade-up" data-aos-duration="500"
                                    data-aos-delay="{{ $loop->iteration * 300 }}">
                                    <div>
                                        <p class="text-lg font-semibold leading-6 text-black">
                                            {{ $rundown->title }}
                                        </p>
                                    </div>
                                    <div class="mt-2 text-sm flex gap-x-3 text-gray-400 items-center">
                                        <span>
                                            {{ $rundown->speaker }}
                                        </span>
                                        <div class="w-2 h-2 bg-success rounded-full"></div>
                                        <span>
                                            {{ \Carbon\Carbon::parse($rundown->start_time)->format('H:i') .
                                                ' - ' .
                                                \Carbon\Carbon::parse($rundown->end_time)->format('H:i') }}
                                        </span>
                                    </div>
                                    <p class="text-gray-400 mt-4 text-sm">
                                        {{ $rundown->description }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Mentor --}}
    <section class="">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-24 lg:px-6">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <h2 class="mb-4 text-xl tracking-tight font-semibold text-gray-900">
                    Pembicara Event
                </h2>
                <p class=" text-gray-400 text-xs 2xl:text-sm">
                    Dibimbing oleh mentor yang berpengalaman dibidangnya
                </p>
            </div>
            <div class="flex flex-wrap gap-8 lg:gap-16 justify-center">
                @foreach ($event->eventSpeakers as $speaker)
                    <div class="flex flex-col items-center text-center text-gray-500" data-aos="fade-up"
                        data-aos-duration="500" data-aos-delay="{{ $loop->iteration * 300 }}">
                        <img class="mx-auto mb-4 w-36 h-36 rounded-full"
                            src="{{ asset('storage/event/speaker/' . $speaker->image) }}" alt="Person Avatar">
                        <h3 class="mb-1 text-lg font-semibold tracking-tight text-gray-900">
                            {{ $speaker->name }}
                        </h3>
                        <p class="text-md">
                            {{ $speaker->position }}
                        </p>
                        <ul class="flex justify-center mt-4 space-x-4">
                            @if ($speaker->facebook)
                                <li>
                                    <a href="{{ $speaker->facebook }}"
                                        class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                                        <ion-icon name="logo-facebook"></ion-icon>
                                    </a>
                                </li>
                            @endif

                            @if ($speaker->instagram)
                                <li>
                                    <a href="{{ $speaker->instagram }}"
                                        class="text-[#e1306c] hover:text-gray-900 dark:hover:text-white">
                                        <ion-icon name="logo-instagram"></ion-icon>
                                    </a>
                                </li>
                            @endif

                            @if ($speaker->linkedin)
                                <li>
                                    <a href="{{ $speaker->linkedin }}"
                                        class="text-[#0077b5] hover:text-gray-900 dark:hover:text-white">
                                        <ion-icon name="logo-linkedin"></ion-icon>
                                    </a>
                                </li>
                            @endif

                            @if ($speaker->twitter)
                                <li>
                                    <a href="{{ $speaker->twitter }}"
                                        class="text-[#1da1f2] hover:text-gray-900 dark:hover:text-white">
                                        <ion-icon name="logo-twitter"></ion-icon>
                                    </a>
                                </li>
                            @endif

                            @if ($speaker->youtube)
                                <li>
                                    <a href="{{ $speaker->youtube }}"
                                        class="text-[#ff0000] hover:text-gray-900 dark:hover:text-white">
                                        <ion-icon name="logo-youtube"></ion-icon>
                                    </a>
                                </li>
                            @endif

                            @if ($speaker->tiktok)
                                <li>
                                    <a href="{{ $speaker->tiktok }}"
                                        class="text-[#000000] hover:text-gray-900 dark:hover:text-white">
                                        <ion-icon name="logo-tiktok"></ion-icon>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Offering --}}
    <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-8 lg:px-12 2xl:px-0 grid md:grid-cols-2 ">
            <div>
                <h1 class="text-xl xl:text-xl font-semibold mb-2">
                    Tiket Terbatas <br>
                    Jangan Sampai Ketinggalan
                </h1>
                <p class="text-gray-400 2xl:w-1/2 mb-4 lg:mb-0 text-xs 2xl:text-sm">
                    Kesempatan berharga bagi individu yang ingin mengembangkan keterampilan dalam merancang logo
                </p>
            </div>
            <div class="flex items-center justify-start md:justify-end mt-6 md:mt-0">
                <a href="#"
                    class="items-center text-xs 2xl:text-sm justify-center w-fit px-6 py-3 text-center text-white duration-200 bg-primary border-2 border-primary rounded-full inline-flex hover:bg-purple-700 hover:text-white hover:border-purple-600 lg:w-auto text-md">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </section>

</x-guest-layout>
