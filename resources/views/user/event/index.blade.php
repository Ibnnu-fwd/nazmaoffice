<x-guest-layout>

    {{-- Hero --}}
    <section class="relative flex items-center w-full">
        <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-16 max-w-7xl">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-24">
                    <div class="relative items-center gap-12 m-auto lg:inline-flex md:order-first">
                        <div class="max-w-xl text-center lg:text-left m-auto">
                            <div>
                                <p class="text-gray-400">
                                    Telah diikuti lebih dari 100+ unit usaha 🔥
                                </p>
                                <p
                                    class="text-2xl font-semibold leading-snug mt-2 tracking-tight text-black sm:text-6xl">
                                    Lebih Dari <br>
                                    Sekedar Event
                                </p>
                                <p class="max-w-xl mt-4 text-base tracking-tight text-gray-400">
                                    Tumbuh bersama untuk menghadapi tantangan ekonomi dan perkembangan bisnis
                                </p>
                            </div>
                            <div class="flex items-center justify-center gap-3 mt-10 lg:flex-row lg:justify-start">
                                <a href="#"
                                    class="items-center justify-center w-fit px-6 py-3  text-center text-white duration-200 bg-primary border-2 border-primary rounded-full inline-flex hover:bg-purple-700 hover:text-white hover:border-purple-600 lg:w-auto text-sm">
                                    Selengkapnya
                                </a>
                                <a href="#"
                                    class="inline-flex border border-gray-200 px-6 py-3 rounded-full items-center justify-center text-sm font-medium text-black duration-200 hover:text-blue-500 focus:outline-none focus-visible:outline-gray-600">
                                    Tonton Teaser <ion-icon name="play-circle-outline"
                                        class="ml-2 text-primary text-xl"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="order-first hidden lg:block w-full mt-12 aspect-square lg:mt-0">
                        <img class="object-cover object-center w-full mx-auto lg:ml-auto" alt="hero"
                            src="{{ asset('assets/images/event-hero.svg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- List Of Event --}}
    <section class="bg-white py-24">
        <div class="max-w-md mx-auto text-center px-4 md:px-0">
            <h1 class="text-xl font-semibold text-black">
                Dokumentasi Kegiatan
            </h1>
        </div>

        <form class="max-w-xl mx-auto mt-8 px-4 md:px-0">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-3 flex items-center pl-3 pointer-events-none">
                    <ion-icon name="search-outline" class="text-gray-300 w-6 h-6"></ion-icon>
                </div>
                <input type="search" id="default-search"
                    class="custom-input border border-gray-200 focus:border focus:border-gray-200 block w-full p-5 pl-14 text-md font-light text-gray-900 rounded-full"
                    placeholder="Cari" required>
            </div>
        </form>

        <div class="max-w-7xl mx-auto px-8 2xl:px-0">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto md:px-20 mt-10">
                @foreach($events as $event)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow p-4">
                        <a href="{{route('user.event.detail', $event->id)}}">
                            <img class="w-full h-52 rounded-xl blur-mode" src="{{ asset('storage/event/thumbnail/' . $event->thumbnail) }}" alt="" />
                        <div class="mt-4">
                            <a href="#">
                                <h5 class="mb-2 text-lg font-semibold tracking-tight line-clamp-2 text-gray-900">
                                    {{$event->title}}
                                </h5>
                            </a>
                            <div class="flex items-center mt-4 text-xs 2xl:text-sm">
                                <ion-icon name="calendar-outline" class="text-primary me-2"></ion-icon>
                                <span class="text-gray-400">
                                    {{date('d F Y', strtotime($event->event_date))}}
                                </span>
                            </div>
                            <div class="flex items-center  text-xs 2xl:text-sm">
                                <ion-icon name="time-outline" class="text-primary me-2"></ion-icon>
                                <span class="text-gray-400">
                                    {{date('H:i'),strtotime(($event->event_time))}} WIB
                                </span>
                            </div>
                            <div class="mt-6 flex justify-between items-end">
                                <div>
                                    @if ($event->discount === null)
                                    <p class="text-gray-400 text-lg font-semibold mt-5">Rp.{{ number_format($event->price, 0, ',', '.') }}</p>
                                    @else
                                    <p class="text-sm text-danger animate-pulse line-through">Rp.{{ number_format($event->price, 0, ',', '.') }}</p>
                                    <p class="text-gray-400 text-lg font-semibold">Rp.{{ number_format($event->discount, 0, ',', '.') }}</p>
                                    @endif
                                </div>
                                <div class="flex items-center text-xs 2xl:text-sm">
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
                <button
                    class="items-center justify-center w-fit px-6 py-3  text-center text-gray-400 duration-200 bg-gray-100 rounded-full inline-flex lg:w-auto text-xs 2xl:text-sm">
                    Muat Lebih Banyak
                </button>
            </div>
        </div>
    </section>

</x-guest-layout>
