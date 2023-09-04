<x-guest-layout>
    {{-- Hero --}}
    <section class="relative flex items-center w-full">
        <div class="relative flex items-center justify-center w-full px-5 py-24 mx-auto md:px-12 2xl:px-0 max-w-7xl">
            <div class="grid grid-cols-1 g lg:grid-cols-2 lg:gap-24">
                <div class="relative items-center gap-12 lg:inline-flex md:order-first">
                    <div class="max-w-xl text-center lg:text-left" data-aos="fade-right" data-aos-duration="500"
                        data-aos-delay="300">
                        <div>
                            <p class="text-danger">
                                NaZMa Event
                            </p>
                            <p class="text-2xl font-bold leading-snug mt-2 tracking-tight text-black sm:text-4xl">
                                {{ $event->title }}
                            </p>
                            <p class="max-w-xl mt-4 text-base tracking-tight text-gray-400">
                                {{ $event->description }}
                            </p>
                        </div>
                        <div class="flex items-center justify-center gap-3 mt-10 lg:flex-row lg:justify-start">
                            <a href="https://api.whatsapp.com/send?phone={{ $event->phone }}&text=Halo%20Admin%20NaZMa%20Office%2C%20saya%20ingin%20bertanya%20tentang%20{{ rawurlencode($event->title) }}"
                                target="_blank"
                                class="items-center
                                justify-center w-fit px-6 py-3 text-center text-white duration-200 bg-primary border-2
                                border-primary rounded-full inline-flex hover:bg-purple-700 hover:text-white
                                hover:border-purple-600 lg:w-auto text-md font-medium">
                                Daftar Sekarang
                            </a>
                            <a href="#content"
                                class="items-center
                                justify-center w-fit px-6 py-3 text-center text-gray-400 border-2 border-transparent duration-200 bg-gray-100
                                rounded-full inline-flex hover:bg-gray300 hover:text-gray-900
                                hover:border-gray-100 lg:w-auto text-md font-medium">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div class="order-first hidden lg:block w-full lg:mt-0" data-aos="fade-left" data-aos-duration="500"
                    data-aos-delay="300">
                    <img class="object-cover object-center w-full mx-auto lg:ml-auto rounded-2xl shadow-xl"
                        alt="hero"
                        src="{{ $event->hero_image
                            ? asset('storage/event/hero_image/' . $event->hero_image)
                            : asset('assets/images/event-default.jpg') }}">
                </div>
            </div>
        </div>

    </section>

    {{-- Study Case --}}
    <section class="py-20 bg-white" id="content" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
        <div class="max-w-3xl mx-auto px-8 lg:px-12 2xl:px-0 ">
            @if ($event->study_case != null || $event->study_case != '-')
                <div>
                    <h1 class="text-2xl font-bold tracking-tight text-gray-600">Studi Kasus:
                        {{ $event->study_case }}
                    </h1>
                    <p class="text-sm 2xl:text-md text-gray-400 mt-3">
                        {{ $event->study_case_description }}
                    </p>
                </div>
            @endif

            @if (!empty($event->eventSylabuses))
                <div class="mt-8">
                    <h1 class="text-xl font-bold tracking-tight text-gray-600">
                        Materi Yang
                        Akan Diajarkan
                    </h1>
                    <p class="text-sm 2xl:text-md text-gray-400 mt-3">
                        Materi dibuat terstruktur sehingga
                        pembelajaranmu terarah
                    </p>
                </div>

                <div class=" space-y-4 mt-6">
                    @forelse ($event->eventSylabuses as $eventSylabus)
                        <div class="flex">
                            <ion-icon name="checkmark-circle" class="text-success w-7 h-7"></ion-icon>
                            <p class="ml-2 text-gray-400 text-md">
                                {{ $eventSylabus->title }}
                            </p>
                        </div>
                    @empty
                    @endforelse
                </div>
            @endif

            {{-- <div class="">
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
            </div> --}}
        </div>
    </section>

    {{-- Information --}}
    <section class="py-20 bg-gray-50" id="content" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
        <div class="max-w-3xl mx-auto px-8 lg:px-12 2xl:px-0 ">
            @if ($event->study_case != null || $event->study_case != '-')
                <div>
                    <h1 class="text-2xl font-bold tracking-tight text-gray-600">
                        Informasi
                        dan Jadwal
                    </h1>
                    <p class="text-sm 2xl:text-md text-gray-400 mt-2">
                        Belajar lebih efektif dengan
                        jadwal yang telah disiapkan
                    </p>
                </div>
            @endif

            <section>
                <div class="relative items-center w-full mt-8">
                    <div class="grid w-full grid-cols-1 mx-auto lg:grid-cols-3 gap-8">
                        <div>
                            <div class="gap-3 lg:inline-flex lg:items-center mb-3">
                                <div
                                    class="flex items-center justify-center w-12 h-12 text-black border border-gray-100 rounded-xl bg-white">
                                    <ion-icon name="checkmark-outline" class="w-6 h-6"></ion-icon>
                                </div>
                            </div>
                            <p class="text-base font-bold leading-6 text-black lg:mt-0">
                                Registrasi
                            </p>
                            <p class="text-md mt-4 text-gray-500">
                                Waktu pendaftaran
                            </p>
                            <p class="text-md text-gray-600 font-semibold">
                                {{ \Carbon\Carbon::parse($event->start_date)->format('d F Y') .
                                    ' - ' .
                                    \Carbon\Carbon::parse($event->end_date)->format('d F Y') }}
                            </p>
                        </div>
                        <div>
                            <div class="gap-3 lg:inline-flex lg:items-center mb-3">
                                <div
                                    class="flex items-center justify-center w-12 h-12 text-black border border-gray-100 rounded-xl bg-white">
                                    <ion-icon name="calendar-outline" class="w-6 h-6"></ion-icon>
                                </div>
                            </div>
                            <p class="text-base font-bold leading-6 text-black lg:mt-0">
                                Jadwal
                            </p>
                            <p class="text-md mt-4 text-gray-500">
                                Jadwal pelakasanaan event
                            </p>
                            <p class="text-md text-gray-600 font-semibold">
                                {{ \Carbon\Carbon::parse($event->event_date)->locale('id')->isoFormat('dddd, D MMMM Y') }}
                            </p>
                        </div>
                        <div>
                            <div class="gap-3 lg:inline-flex lg:items-center mb-3">
                                <div
                                    class="flex items-center justify-center w-12 h-12 text-black border border-gray-100 rounded-xl bg-white">
                                    <ion-icon name="time-outline" class="w-6 h-6"></ion-icon>
                                </div>
                            </div>
                            <p class="text-base font-bold leading-6 text-black lg:mt-0">
                                Waktu Mulai
                            </p>
                            <p class="text-md mt-4 text-gray-500">
                                Waktu pelaksanaan event
                            </p>
                            <p class="text-md text-gray-600 font-semibold">
                                {{ \Carbon\Carbon::parse($event->event_time)->locale('id')->isoFormat('HH:mm') }} WIB
                            </p>
                        </div>
                        <div>
                            <div class="gap-3 lg:inline-flex lg:items-center mb-3">
                                <div
                                    class="flex items-center justify-center w-12 h-12 text-black border border-gray-100 rounded-xl bg-white">
                                    <ion-icon name="people-outline" class="w-6 h-6"></ion-icon>
                                </div>
                            </div>
                            <p class="text-base font-bold leading-6 text-black lg:mt-0">
                                Kapasitas
                            </p>
                            <p class="text-md mt-4 text-gray-500">
                                Maksimal peserta event
                            </p>
                            <p class="text-md text-gray-600 font-semibold">
                                {{ $event->capacity }} orang
                            </p>
                        </div>
                        <div>
                            <div class="gap-3 lg:inline-flex lg:items-center mb-3">
                                <div
                                    class="flex items-center justify-center w-12 h-12 text-black border border-gray-100 rounded-xl bg-white">
                                    <ion-icon name="compass-outline" class="w-6 h-6"></ion-icon>
                                </div>
                            </div>
                            <p class="text-base font-bold leading-6 text-black lg:mt-0">
                                Lokasi
                            </p>
                            <p class="text-md mt-4 text-gray-500">
                                Event dilaksanakan di
                            </p>
                            <p class="text-md text-gray-600 font-semibold">
                                {{ $event->location }}
                            </p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </section>

    {{-- Pricing --}}
    <section class="bg-white">
        <div class="relative items-center w-full px-4 lg:px-0 py-24 mx-auto max-w-3xl">
            <div class="grid items-start grid-cols-1 lg:grid-cols-2">
                <div class="lg:pr-6">
                    <div class="flex flex-col p-8 lg:p-0">
                        <h1 class="text-2xl text-black font-semibold">
                            Daftar
                            <span class="lg:block">
                                {{ $event->title }}
                            </span>
                        </h1>
                        <div class="max-w-lg mt-3">
                            <p class="text-md text-gray-500">
                                Langkah yang tepat sebagai investasi
                                pengetahuanmu di masa depan
                            </p>
                        </div>
                    </div>
                </div>
                <section class="flex flex-col px-6 sm:px-8 lg:py-0 bg-gray-50 rounded-2xl">
                    <h3 class="mt-5 text-base text-black font-medium">
                        {{ $event->title }}
                    </h3>
                    <p class="mt-2 text-md text-gray-500">
                        Ikuti event berkualitas untuk mengasah skill dan membangun portofolio
                    </p>
                    @if ($event->discount || $event->discount == 0)
                        <p class="order-first text-5xl font-light tracking-tight text-black">
                            <span class="text-2xl font-normal text-danger animate-pulse line-through">
                                Rp. {{ number_format($event->price, 0, ',', '.') }}
                            </span>
                            <span class="text-4xl font-bold text-black block mt-0 m-0">
                                Rp. {{ number_format($event->discount, 0, ',', '.') }}
                            </span>
                        </p>
                    @else
                        <p class="order-first text-5xl font-light tracking-tight text-black">
                            <span class="text-4xl font-bold text-black block mt-0">
                                Rp. {{ number_format($event->price, 0, ',', '.') }}
                            </span>
                        </p>
                    @endif
                    <ul role="list" class="flex flex-col mt-10 text-md text-black gap-y-3">
                        <li class="flex items-center">
                            <ion-icon class="w-5 h-5 text-success md hydrated" name="checkmark-circle"></ion-icon>
                            <span class="ml-4">
                                Sertifikat event
                            </span>
                        </li>
                        <li class="flex items-center">
                            <ion-icon class="w-5 h-5 text-success md hydrated" name="checkmark-circle"></ion-icon>
                            <span class="ml-4">
                                Modul pelatihan
                            </span>
                        </li>
                        <li class="flex items-center">
                            <ion-icon class="w-5 h-5 text-success md hydrated" name="checkmark-circle"></ion-icon>
                            <span class="ml-4">
                                Pengalaman berharga
                            </span>
                        </li>
                        <li class="flex items-center">
                            <ion-icon class="w-5 h-5 text-success md hydrated" name="checkmark-circle"></ion-icon>
                            <span class="ml-4">
                                Free coaching selama 2 minggu
                            </span>
                        </li>
                        <li class="flex items-center">
                            <ion-icon class="w-5 h-5 text-success md hydrated" name="checkmark-circle"></ion-icon>
                            <span class="ml-4">
                                Mentor dan praktisi berpengalaman
                            </span>
                        </li>
                    </ul>
                    <a class="items-center justify-center w-full px-6 py-2.5 mt-8 text-center text-white duration-200 bg-primary border-2 border-primary rounded-full inline-flex hover:border-primary focus:outline-none focus-visible:outline-primary text-md focus-visible:ring-primary"
                        aria-label="Big fish tier" href="/register">
                        Daftar Sekarang
                    </a>
                </section>
            </div>
        </div>
    </section>


    {{-- Mentor
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
    </section> --}}

    {{-- Offering --}}
    <section class="bg-gray-50 py-20">
        <div class="max-w-3xl mx-auto px-8 lg:px-12 2xl:px-0 grid md:grid-cols-3">
            <div class="col-span-2">
                <h1 class="text-xl xl:text-2xl font-bold mb-2">
                    Tiket Terbatas <br>
                    Jangan Sampai Ketinggalan
                </h1>
                <p class="text-gray-400 mb-4 lg:mb-0 text-xs 2xl:text-md">
                    Kesempatan berharga bagi individu yang ingin mengembangkan keterampilan
                    dalam merancang logo
                </p>
            </div>
            <div class="flex items-center justify-start md:justify-end mt-6 md:mt-0">
                <a href="https://api.whatsapp.com/send?phone={{ $event->phone }}&text=Halo%20Admin%20NaZMa%20Office%2C%20saya%20ingin%20bertanya%20tentang%20{{ rawurlencode($event->title) }}"
                    target="_blank"
                    class="items-center font-medium
                    justify-center w-fit px-6 py-3 text-center text-white duration-200 bg-primary border-2
                    border-primary rounded-full inline-flex hover:bg-purple-700 hover:text-white
                    hover:border-purple-600 lg:w-auto text-md">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </section>

</x-guest-layout>
