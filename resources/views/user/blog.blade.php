<x-guest-layout>
    <section class="max-w-7xl mx-auto my-12 px-4 md:px-8 xl:px-12 2xl:px-0">
        <div class="grid">
            <div class="bg-primary rounded-2xl text-white p-8 text-center h-40 md:h-44 px-8 md:px-20">
                <h1 class="text-2xl md:text-4xl xl:text-4xl font-medium">
                    Laman Blog
                </h1>
                <p class="text-md hidden md:block">
                    Kami mendokumentasikan dan mempublikasikannya untuk kamu
                </p>
            </div>
            <form class="md:mt-6 px-4 md:px-20 xl:px-40 transform -translate-y-20 sm:-translate-y-14">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-3 flex items-center pl-3 pointer-events-none">
                        <ion-icon name="search-outline" class="text-gray-300 w-6 h-6"></ion-icon>
                    </div>
                    <input type="search" id="default-search"
                        class="custom-input border-none focus:border focus:border-gray-200 block w-full p-5 pl-14 text-lg text-gray-900 font-light rounded-full shadow-sm"
                        placeholder="Cari" required>
                </div>
            </form>
        </div>

        <div class="text-center gap-y-6">
            <span class="bg-orange-800 text-white text-md font-normal mr-2 px-2.5 py-0.5 rounded-full">Semua</span>
            <span
                class="bg-transparent text-gray-400 text-md font-normal mr-2 px-2.5 py-0.5 rounded-full">Teknologi</span>
            <span class="bg-transparent text-gray-400 text-md font-normal mr-2 px-2.5 py-0.5 rounded-full">Budaya</span>
            <span
                class="bg-transparent text-gray-400 text-md font-normal mr-2 px-2.5 py-0.5 rounded-full">Politik</span>
            <span class="bg-transparent text-gray-400 text-md font-normal mr-2 px-2.5 py-0.5 rounded-full">Event</span>
            <span
                class="bg-transparent text-gray-400 text-md font-normal mr-2 px-2.5 py-0.5 rounded-full">Fenomena</span>
        </div>

        <h1 class="text-2xl font-medium text-black tracking-tight mt-10">
            Featured Artikel
        </h1>
        <div class="grid md:grid-cols-2 gap-6 mt-6">
            <a href="">
                <img src="{{ asset('assets/images/hero1.jpg') }}"
                    class="w-full md:h-72 lg:h-96 rounded-xl object-cover object-center mb-4" alt="">
                <p class="text-gray-400 mb-1">12 Agustus 2023</p>
                <h1 class="text-2xl font-medium text-black tracking-tight mb-3 line-clamp-2">
                    BIMTEK Packaging, Design, dan Branding di Wilayah Sleman
                </h1>
                <p class="text-gray-400 line-clamp-3">
                    Sleman – Dinas Koperasi, Usaha Kecil, dan Menengah Kabupaten Sleman kembali menyelenggarakan
                    Bimbingan…
                </p>
            </a>
            <div class="grid grid-cols-1 gap-y-6 place-content-start">
                <div class="grid grid-cols-1 lg:grid-cols-3 rounded-xl border border-gray-200 p-4 md:border-0 md:p-0">
                    <img src="{{ asset('assets/images/hero2.jpg') }}"
                        class="hidden mx-auto lg:inline-block md:w-36 md:h-36 lg:w-40 lg:h-40 object-center object-cover rounded-lg"
                        alt="">
                    <div class="col-span-2">
                        <span class="text-gray-400 text-sm">20 Agustus 2023</span>
                        <span class="text-lg font-medium text-black line-clamp-2 mt-2">
                            Bimbingan Teknis Strategi Pemasaran di Wilayah Sleman
                        </span>
                        <p class="text-gray-400 line-clamp-2 mt-2">
                            Sleman – Dinas Koperasi, Usaha Kecil, dan Menengah Kabupaten Sleman...
                        </p>
                        <div class="flex items-center md:hidden text-primary mt-4">Selengkapnya <ion-icon
                                name="chevron-forward-outline"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 rounded-xl border border-gray-200 p-4 md:border-0 md:p-0">
                    <img src="{{ asset('assets/images/hero2.jpg') }}"
                        class="hidden mx-auto lg:inline-block md:w-36 md:h-36 lg:w-40 lg:h-40 object-center object-cover rounded-lg"
                        alt="">
                    <div class="col-span-2">
                        <span class="text-gray-400 text-sm">20 Agustus 2023</span>
                        <span class="text-lg font-medium text-black line-clamp-2 mt-2">
                            Bimbingan Teknis Strategi Pemasaran di Wilayah Sleman
                        </span>
                        <p class="text-gray-400 line-clamp-2 mt-2">
                            Sleman – Dinas Koperasi, Usaha Kecil, dan Menengah Kabupaten Sleman...
                        </p>
                        <div class="flex items-center md:hidden text-primary mt-4">Selengkapnya <ion-icon
                                name="chevron-forward-outline"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 rounded-xl border border-gray-200 p-4 md:border-0 md:p-0">
                    <img src="{{ asset('assets/images/hero2.jpg') }}"
                        class="hidden mx-auto lg:inline-block md:w-36 md:h-36 lg:w-40 lg:h-40 object-center object-cover rounded-lg"
                        alt="">
                    <div class="col-span-2">
                        <span class="text-gray-400 text-sm">20 Agustus 2023</span>
                        <span class="text-lg font-medium text-black line-clamp-2 mt-2">
                            Bimbingan Teknis Strategi Pemasaran di Wilayah Sleman
                        </span>
                        <p class="text-gray-400 line-clamp-2 mt-2">
                            Sleman – Dinas Koperasi, Usaha Kecil, dan Menengah Kabupaten Sleman...
                        </p>
                        <div class="flex items-center md:hidden text-primary mt-4">Selengkapnya <ion-icon
                                name="chevron-forward-outline"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="text-2xl font-medium text-black tracking-tight mt-10">
            Artikel Terbaru
        </h1>

        <section class="flex items-center w-full">
            <div class="relative items-center w-full">

                <div class="grid grid-cols-2 gap-x-6 gap-y-8 mt-8 md:grid-cols-2 lg:grid-cols-4">
                    @for ($i = 1; $i <= 6; $i++)
                        <figure>
                            <img class="w-full bg-gray-200 rounded-lg object-cover object-center"
                                src="{{ asset('assets/images/hero1.jpg') }}" alt="" width="1310"
                                height="873">

                            <p class="mt-5 text-sm font-normal leading-6 text-gray-400">
                                12 Agustus 2023
                            </p>
                            <p class="mt-3 text-md text-black font-medium line-clamp-2">
                                Your design portfolio website shouldn’t just be a portfolio
                            </p>
                            <p class="mt-3 text-md text-gray-400 line-clamp-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla deserunt sapiente quas
                                quam
                                ducimus, culpa voluptatibus voluptatem esse, distinctio, odio iure.
                            </p>
                        </figure>
                    @endfor
                </div>

            </div>
        </section>
    </section>

    @push('js-internal')
        <script>
            // add loading lazy and decoding async
            const images = document.querySelectorAll('img');
            images.forEach((image) => {
                image.setAttribute('loading', 'lazy');
                image.setAttribute('decoding', 'async');
            });
        </script>
    @endpush
</x-guest-layout>
