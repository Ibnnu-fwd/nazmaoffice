<x-guest-layout>
    {{-- Hero --}}
    <section class="relative flex items-center w-full">
        <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 2xl:px-0 max-w-7xl">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-24">
                    <div class="relative items-center gap-12 m-auto lg:inline-flex md:order-first">
                        <div class="max-w-xl text-center lg:text-left" data-aos="fade-right" data-aos-duration="1000">
                            <div>
                                <p
                                    class="text-2xl font-semibold leading-snug mt-2 tracking-tight text-black md:text-4xl xl:text-6xl">
                                    Bangun Bisnis Anda <br>
                                    Bersama Kami
                                </p>
                                <p class="max-w-xl mt-4 text-base tracking-tight text-gray-400">
                                    Kami menyediakan berbagai layanan untuk membantu membangun bisnis anda tumbuh
                                </p>
                            </div>
                            <div class="flex items-center justify-center gap-3 mt-10 lg:flex-row lg:justify-start">
                                <a href="#benefit"
                                    class="items-center justify-center w-fit px-8 py-3  text-center text-white duration-200 bg-primary border-2 border-primary rounded-full inline-flex hover:bg-purple-700 hover:text-white hover:border-purple-600 lg:w-auto text-md">
                                    Jelajahi
                                </a>
                                {{-- <a href="#"
                                    class="inline-flex border border-gray-200 px-6 py-3 rounded-full items-center justify-center text-md text-black duration-200 hover:text-blue-500 focus:outline-none focus-visible:outline-gray-600">
                                    Tonton Teaser <ion-icon name="play-circle-outline"
                                        class="ml-2 text-primary text-xl"></ion-icon>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="order-first hidden lg:flex w-full mt-12 lg:mt-0 justify-end" data-aos="fade-left"
                        data-aos-duration="1000">
                        <img class="object-contain blur-mode object-center h-[500px]" alt="hero"
                            src="{{ asset('assets/images/service-hero.svg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Benefit --}}
    <section class="bg-white" id="benefit">
        <div class="relative items-center w-full px-5 py-24 mx-auto md:px-12 2xl:px-0 max-w-7xl lg:py-24">
            <div>
                <div class="max-w-2xl mx-auto">
                    <p class="text-xl font-semibold tracking-tight text-black text-center">
                        Percayakan Pada Kami <br>
                        Membantu Bisnis Anda
                    </p>
                </div>
            </div>
            <div class="mt-10">
                <div class="max-w-xl py-12 mx-auto text-left lg:max-w-7xl">
                    <div>
                        <div class="grid grid-cols-2 gap-12 lg:grid-cols-4 lg:space-y-0">
                            <div data-aos="fade-up" data-aos-duration="1000">
                                <div>
                                    <div
                                        class="flex items-center justify-center w-12 h-12 bg-primary text-white rounded-lg">
                                        <ion-icon name="pricetag-outline" class="text-2xl"></ion-icon>
                                    </div>
                                    <p class="mt-4 text-lg font-medium leading-6 text-black">
                                        Terjangkau
                                    </p>
                                </div>
                                <div class="mt-4 text-xs 2xl:text-sm text-gray-500">
                                    Dapatkan tawaran berbagai pilihan produk dengan harga yang terjangkau untuk semua
                                    kalangan
                                </div>
                            </div>

                            <div data-aos="fade-up" data-aos-duration="1000">
                                <div>
                                    <div
                                        class="flex items-center justify-center w-12 h-12 bg-primary text-white rounded-lg">
                                        <ion-icon name="shield-checkmark-outline" class="text-2xl"></ion-icon>
                                    </div>
                                    <p class="mt-4 text-lg font-medium leading-6 text-black">
                                        Terpercaya
                                    </p>
                                </div>
                                <div class="mt-4 text-xs 2xl:text-sm text-gray-500">
                                    Kami telah beroperasi lebih dari 15 tahun dan telah berhasil membantu ratusan UMKM
                                    untuk berkembang dan naik level
                                </div>
                            </div>

                            <div data-aos="fade-up" data-aos-duration="1000">
                                <div>
                                    <div
                                        class="flex items-center justify-center w-12 h-12 bg-primary text-white rounded-lg">
                                        <ion-icon name="ribbon-outline" class="text-2xl"></ion-icon>
                                    </div>
                                    <p class="mt-4 text-lg font-medium leading-6 text-black">
                                        Profesional
                                    </p>
                                </div>
                                <div class="mt-4 text-xs 2xl:text-sm text-gray-500">
                                    Nazma Office memiliki mentor dan staff bersertifikasi dan berpengalaman di
                                    bidangnya.
                                </div>
                            </div>

                            <div data-aos="fade-up" data-aos-duration="1000">
                                <div>
                                    <div
                                        class="flex items-center justify-center w-12 h-12 bg-primary text-white rounded-lg">
                                        <ion-icon name="checkmark-done-outline" class="text-2xl"></ion-icon>
                                    </div>
                                    <p class="mt-4 text-lg font-medium leading-6 text-black">
                                        Kepuasan Klien
                                    </p>
                                </div>
                                <div class="mt-4 text-xs 2xl:text-sm text-gray-500">
                                    Lebih dari 90% pelanggan terdahulu merasa puas dengan produk yang kami tawarkan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

                    <div x-data="{ tab: '{{ $serviceCategories->first()->id }}' }">
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
                                    data-aos="fade-up" data-aos-duration="1000"
                                    data-aos-delay="{{ $loop->iteration * 300 }}">
                                    <main class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                                        @foreach ($serviceCategory->services as $service)
                                            <div class="max-w-sm p-6 bg-white rounded-lg shadow-sm">
                                                <div
                                                    class="w-14 h-14 md:w-12 md:h-12 p-2 border border-gray-200 rounded-md">
                                                    <ion-icon name="{{ $service->icon }}" class=""
                                                        style="color: {{ $service->icon_color }} !important;"
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

    {{-- Schedule --}}
    <section class="bg-white">
        <div class="relative items-center w-full px-5 pt-24 mx-auto md:px-12 2xl:px-0 max-w-7xl lg:py-24">
            <div>
                <div class="max-w-2xl mx-auto">
                    <p class="text-xl font-semibold tracking-tight text-black text-center">
                        Jadwal Proyek NaZMa
                    </p>
                </div>
            </div>
            <div class="mt-10">
                <div class="max-w-xl py-12 mx-auto text-left lg:max-w-7xl">
                    <div>
                        <div class="grid grid-cols-2 gap-8 lg:grid-cols-4 lg:space-y-0">
                            @foreach ($serviceProjects as $key => $value)
                                <div data-aos="fade-up" data-aos-duration="1000">
                                    <div>
                                        <div
                                            class="flex items-center justify-center text-xs 2xl:text-sm font-medium w-full py-3
                                        {{ $loop->first == 1 ? 'bg-primary text-white' : 'bg-gray-200 text-gray-400 hover:bg-primary hover:text-white' }} rounded-full">
                                            {{ $key }}
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        @foreach ($value as $project)
                                            <div class="max-w-sm bg-white border border-gray-200 rounded-xl  p-4 mb-6">
                                                <div class="">
                                                    <a href="#">
                                                        <h5
                                                            class="mb-2 text-xs 2xl:text-sm font-medium tracking-tight line-clamp-2 text-gray-900">
                                                            {{ $project->title }}
                                                        </h5>
                                                    </a>
                                                    <p class="mb-3 text-xs 2xl:text-sm font-normal text-gray-500">
                                                        @if ($project->due_at)
                                                            <p
                                                                class="mb-3 text-xs 2xl:text-sm font-normal text-gray-500">
                                                                {{ date('d F Y', strtotime($project->taken_at)) }} -
                                                                {{ date('d F Y', strtotime($project->due_at)) }}
                                                            </p>
                                                        @else
                                                            <p
                                                                class="mb-3 text-xs 2xl:text-sm font-normal text-gray-500">
                                                                {{ date('d F Y', strtotime($project->taken_at)) }}
                                                            </p>
                                                        @endif
                                                    </p>
                                                    <div class="mt-6 flex justify-between">
                                                        <div
                                                            class="py-1.5 px-5 text-xs 2xl:text-sm rounded-full bg-gray-100 text-gray-400">
                                                            {{ $project->tag }}
                                                        </div>
                                                        <div class="flex items-center">
                                                            <div class="w-3 h-3 rounded-full bg-success mr-2"></div>
                                                            <span class="text-gray-400 text-xs 2xl:text-sm">
                                                                {{ $project->status }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-guest-layout>
