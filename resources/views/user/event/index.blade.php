<x-guest-layout>

    @section('title', 'Acara')

    {{-- Hero --}}
    <section class="relative flex items-center w-full">
        <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-16 max-w-7xl">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-24">
                    <div class="relative items-center gap-12 m-auto lg:inline-flex md:order-first">
                        <div class="max-w-xl text-center lg:text-left m-auto" data-aos="fade-right"
                            data-aos-duration="1000">
                            <div>
                                <p class="text-gray-400">
                                    Telah diikuti lebih dari 100+ unit usaha 🔥
                                </p>
                                <p class="text-2xl font-bold leading-snug mt-2 tracking-tight text-black sm:text-6xl">
                                    {{ $eventSetting->header_title }}
                                </p>
                                <p class="max-w-xl mt-4 text-base tracking-tight text-gray-400">
                                    {{ $eventSetting->description }}
                                </p>
                            </div>
                            <div class="flex items-center justify-center gap-3 mt-10 lg:flex-row lg:justify-start">
                                <a href="#"
                                    class="items-center justify-center w-fit px-6 py-3  text-center text-white duration-200 bg-primary border-2 border-primary rounded-full inline-flex hover:bg-purple-700 hover:text-white hover:border-purple-600 lg:w-auto text-base font-medium">
                                    Selengkapnya
                                </a>
                                {{-- <a href="#"
                                    class="inline-flex border border-gray-200 px-6 py-3 rounded-full items-center justify-center text-sm font-medium text-black duration-200 hover:text-blue-500 focus:outline-none focus-visible:outline-gray-600">
                                    Tonton Teaser <ion-icon name="play-circle-outline"
                                        class="ml-2 text-primary text-xl"></ion-icon>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="order-first hidden lg:block w-full mt-12 lg:mt-0" data-aos="fade-left"
                        data-aos-duration="1000">
                        <img class="object-cover object-center w-full mx-auto lg:ml-auto" alt="hero"
                            src="{{ asset('storage/event/setting/' . $eventSetting->hero_image) }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- List Of Event --}}
    <section class="bg-white py-24">
        <div class="max-w-md mx-auto text-center px-4 md:px-0">
            <h1 class="text-2xl font-bold text-black">
                Daftar Event
            </h1>
        </div>

        <form class="max-w-xl mx-auto mt-8 px-4 md:px-0">
            <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-3 flex items-center pl-3 pointer-events-none">
                    <ion-icon name="search-outline" class="text-gray-300 w-6 h-6"></ion-icon>
                </div>
                <input type="search" id="search" name="search"
                    class="custom-input border border-gray-200 focus:border focus:border-gray-200 block w-full p-5 pl-14 text-base font-light text-gray-900 rounded-full"
                    placeholder="Cari" required>
            </div>
        </form>

        <div class="max-w-7xl mx-auto px-8 2xl:px-0 mt-12">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto md:px-20 mt-10">
                @foreach ($events as $event)
                    <div class="max-w-sm bg-gray-50 border-slate-100 border rounded-2xl p-4 h-fit" data-aos="fade-up"
                        data-aos-duration="1000" id="event-{{ $event->id }}"
                        onclick="window.location='{{ route('user.event.detail', $event->id) }}'">
                        @if ($event->thumbnail)
                            <a href="#">
                                <img class="w-full h-52 rounded-xl blur-mode object-center object-cover"
                                    src="{{ asset('storage/event/thumbnail/' . $event->thumbnail) }}" alt="" />
                            </a>
                        @else
                            <a href="#">
                                <img class="w-full h-52 rounded-xl blur-mode object-center object-cover"
                                    src="{{ asset('assets/images/event-default.jpg') }}" alt="" />
                            </a>
                        @endif
                        <div class="mt-4">
                            <a href="#">
                                <h5 class="mb-2 text-lg font-bold tracking-tight line-clamp-2 text-gray-900">
                                    {{ $event->title }}
                                </h5>
                            </a>
                            <div class="flex items-center mt-4 text-md font-light">
                                <ion-icon name="calendar-outline" class="text-primary me-2 w-4 h-4"></ion-icon>
                                <span class="text-gray-400">
                                    {{ date('d F Y', strtotime($event->event_date)) }}
                                </span>
                            </div>
                            <div class="flex items-center text-md font-light">
                                <ion-icon name="time-outline" class="text-primary me-2 w-4 h-4"></ion-icon>
                                <span class="text-gray-400">
                                    {{ \Carbon\Carbon::parse($event->event_time)->format('H:i') }} WIB
                                </span>
                            </div>
                            <div class="text-gray-400 text-md mt-4 line-clamp-2 hover:line-clamp-3">
                                {{ $event->location }}
                            </div>
                            <div class="mt-6 flex justify-between items-end">
                                <div>
                                    @if ($event->discount === null)
                                        <p class="text-gray-400 text-xl font-semibold mt-5">
                                            Rp.{{ number_format($event->price, 0, ',', '.') }}</p>
                                    @else
                                        <p class="text-md text-danger animate-pulse line-through">
                                            Rp.{{ number_format($event->price, 0, ',', '.') }}</p>
                                        <p class="text-gray-400 text-xl font-semibold">
                                            Rp.{{ number_format($event->discount, 0, ',', '.') }}</p>
                                    @endif
                                </div>
                                <div class="flex items-center text-xs 2xl:text-md">
                                    <div class="w-3 h-3 rounded-full bg-success mr-2"></div>
                                    <span class="text-gray-400">
                                        Tersedia
                                    </span>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="flex justify-center mt-10">
                <button id="load-more"
                    class="items-center justify-center w-fit px-6 py-3 text-center text-gray-400 duration-200 bg-gray-100 rounded-full inline-flex font-medium lg:w-auto text-xs 2xl:text-base">
                    Muat Lebih Banyak
                </button>
            </div>
        </div>
    </section>

    @push('js-internal')
        <script>
            $(function() {
                $('#search').on('keyup', function() {
                    $value = $(this).val();
                    //    filter the event card
                    $('div[id^="event-"]').filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf($value) > -1)
                    });
                })
            });
        </script>
    @endpush

</x-guest-layout>
