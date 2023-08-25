<x-guest-layout>
    {{-- Hero --}}
    <section class="relative flex items-center w-full">
        <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 2xl:px-0 max-w-7xl">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-24">
                    <div class="relative items-center gap-12 m-auto lg:inline-flex md:order-first">
                        <div class="max-w-xl text-center lg:text-left">
                            <div>
                                <p
                                    class="text-2xl font-semibold leading-snug mt-2 tracking-tight text-black md:text-4xl xl:text-6xl">
                                    Bangun Bisnismu <br>
                                    Bersama Kami
                                </p>
                                <p class="max-w-xl mt-4 text-base tracking-tight text-gray-400">
                                    Kami menyediakan berbagai layanan untuk membantu membangun bisnismu tumbuh
                                </p>
                            </div>
                            <div class="flex items-center justify-center gap-3 mt-10 lg:flex-row lg:justify-start">
                                <a href="#"
                                    class="items-center justify-center w-fit px-8 py-3  text-center text-white duration-200 bg-primary border-2 border-primary rounded-full inline-flex hover:bg-purple-700 hover:text-white hover:border-purple-600 lg:w-auto text-md">
                                    Jelajahi
                                </a>
                                <a href="#"
                                    class="inline-flex border border-gray-200 px-6 py-3 rounded-full items-center justify-center text-md text-black duration-200 hover:text-blue-500 focus:outline-none focus-visible:outline-gray-600">
                                    Tonton Teaser <ion-icon name="play-circle-outline"
                                        class="ml-2 text-primary text-xl"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="order-first hidden lg:flex w-full mt-12 lg:mt-0 justify-end">
                        <img class="object-contain blur-mode object-center h-[500px]" alt="hero"
                            src="{{ asset('assets/images/service-hero.svg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Benefit --}}
    <section class="bg-white">
        <div class="relative items-center w-full px-5 py-24 mx-auto md:px-12 2xl:px-0 max-w-7xl lg:py-24">
            <div>
                <div class="max-w-2xl mx-auto">
                    <p class="text-2xl font-medium tracking-tight text-black text-center">
                        Percayakan Pada Kami <br>
                        Membantu Bisnismu
                    </p>
                </div>
            </div>
            <div class="mt-10">
                <div class="max-w-xl py-12 mx-auto text-left lg:max-w-7xl">
                    <div>
                        <div class="grid grid-cols-2 gap-12 lg:grid-cols-4 lg:space-y-0">
                            @for ($i = 1; $i <= 4; $i++)
                                <div>
                                    <div>
                                        <div
                                            class="flex items-center justify-center w-12 h-12 bg-primary text-white rounded-lg">
                                            <ion-icon name="cloud-upload-outline" class="text-2xl"></ion-icon>
                                        </div>
                                        <p class="mt-4 text-lg font-medium leading-6 text-black">
                                            Real-time Sync
                                        </p>
                                    </div>
                                    <div class="mt-4 text-base text-gray-500">
                                        Anda akan menemukan diskusi-diskusi yang mendalam tentang berbagai topik menarik
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section>
        <p class="text-2xl font-medium text-black text-center pt-12 mb-6 mx-2 md:mx-0">
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
                                    class="inline-block px-8 py-2.5 text-md rounded-full text-white bg-primary"
                                    :class="{ '  text-white bg-primary': tab === 'tab1' }">
                                    Produk Teknologi Informasi
                                </a>
                            </li>
                            <li class="-mb-px">
                                <a @click.prevent="tab = 'tab2'" href="#"
                                    class="inline-block px-8 py-2.5 text-md rounded-full text-gray-400"
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
                                            <h5 class="mb-2 mt-4 text-md font-medium tracking-tight text-gray-900">
                                                Jasa Pendidikan Komputer (Teknologi Informasi dan Komunikasi) Swasta
                                            </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-500 text-xs 2xl:text-md">
                                            Kursus untuk menambah keahlian dalam bidang komputer, teknologi informasi,
                                            dan komunikasi.
                                        </p>
                                        <a href="#"
                                            class="inline-flex mt-4 items-center text-blue-600 hover:underline">
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
                                            <h5 class="mb-2 mt-4 text-md font-medium tracking-tight text-gray-900">
                                                Aktivitas Jasa Multimedia Lainnya
                                            </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-500 text-xs 2xl:text-md">
                                            Layanan konvergen radio dan televisi, video, audio, teks, grafik dan data
                                            yang disalurkan melalui jaringan protokol internet.
                                        </p>
                                        <a href="#"
                                            class="inline-flex mt-4 items-center text-blue-600 hover:underline">
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
                                            <h5 class="mb-2 mt-4 text-md font-medium tracking-tight text-gray-900">
                                                Aktivitas Teknologi Informasi dan Jasa Komputer Lainnya
                                            </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-500 text-xs 2xl:text-md">
                                            Pemulihan kerusakan, instalasi personal komputer dan perangkat lunak, serta
                                            manajemen insiden dan digital forensic.
                                        </p>
                                        <a href="#"
                                            class="inline-flex mt-4 items-center text-blue-600 hover:underline">
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
                                            <h5 class="mb-2 mt-4 text-md font-medium tracking-tight text-gray-900">
                                                Aktivitas Jasa Informasi Lainnya YTDL
                                            </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-500 text-xs 2xl:text-md">
                                            Jasa informasi berbasis telepon, pencarian informasi atas dasar balas jasa
                                            atau kontrak dan jasa kliping berita, dan lain-lain.
                                        </p>
                                        <a href="#"
                                            class="inline-flex mt-4 items-center text-blue-600 hover:underline">
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
                                            <h5 class="mb-2 mt-4 text-md font-medium tracking-tight text-gray-900">
                                                Aktivitas Pengembangan Aplikasi Perdagangan Melalui Internet
                                                (E-Commerce)
                                            </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-500 text-xs 2xl:text-md">
                                            Pengembangan aplikasi perdagangan, konsultasi, analisis dan pemograman
                                            aplikasi melalui internet.
                                        </p>
                                        <a href="#"
                                            class="inline-flex mt-4 items-center text-blue-600 hover:underline">
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

    {{-- Schedule --}}
    <section class="bg-white">
        <div class="relative items-center w-full px-5 pt-24 mx-auto md:px-12 2xl:px-0 max-w-7xl lg:py-24">
            <div>
                <div class="max-w-2xl mx-auto">
                    <p class="text-2xl font-medium tracking-tight text-black text-center">
                        Jadwal Proyek NaZMa
                    </p>
                </div>
            </div>
            <div class="mt-10">
                <div class="max-w-xl py-12 mx-auto text-left lg:max-w-7xl">
                    <div>
                        <div class="grid grid-cols-2 gap-8 lg:grid-cols-4 lg:space-y-0">
                            @for ($i = 1; $i <= 4; $i++)
                                <div>
                                    <div>
                                        <div
                                            class="flex items-center justify-center w-full py-3
                                            {{ $i == 1 ? 'bg-primary text-white' : 'bg-gray-200 text-gray-400 ' }} rounded-full">
                                            Agustus
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        @for ($j = 1; $j <= 6; $j++)
                                            <div class="max-w-sm bg-white border border-gray-200 rounded-xl  p-4 mb-6">
                                                <div class="">
                                                    <a href="#">
                                                        <h5
                                                            class="mb-2 text-lg font-medium tracking-tight line-clamp-2 text-gray-900">
                                                            Bimbingan Teknis Strategi Pemasaran di Wilayah Sleman
                                                        </h5>
                                                    </a>
                                                    <div class="mt-6 flex justify-between">
                                                        <div
                                                            class="py-1.5 px-5 text-sm rounded-full bg-gray-100 text-gray-400">
                                                            Website
                                                        </div>
                                                        <div class="flex items-center">
                                                            <div class="w-3 h-3 rounded-full bg-success mr-2"></div>
                                                            <span class="text-gray-400 text-sm">
                                                                12 Agustus 2021
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-guest-layout>
