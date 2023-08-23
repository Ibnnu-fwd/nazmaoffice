<x-guest-layout>
    <section class="my-24">
        <div class="max-w-md mx-auto text-center px-4 md:px-0">
            <h1 class="text-2xl md:text-4xl font-medium text-black">
                Dokumentasi Kegiatan
            </h1>
            <p class="text-gray-400 text-xs 2xl:text-md">
                Rangkaian peristiwa tahun ke tahun yang telah kami lewati
            </p>
        </div>

        <form class="max-w-xl mx-auto mt-8 px-4 md:px-0">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-3 flex items-center pl-3 pointer-events-none">
                    <ion-icon name="search-outline" class="text-gray-300 w-6 h-6"></ion-icon>
                </div>
                <input type="search" id="default-search"
                    class="custom-input border-none focus:border focus:border-gray-200 block w-full p-5 pl-14 text-lg text-gray-900 font-light rounded-full"
                    placeholder="Cari" required>
            </div>
        </form>

        <div>
            <div class="flex justify-between items-center px-10 md:px-24 lg:px-20 xl:px-44 mt-16">
                <h1 class="text-gray-300 text-4xl font-bold">2023</h1>
                <ion-icon class="text-gray-300 text-5xl" name="chevron-down-circle-outline"></ion-icon>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto md:px-20 mt-10">
                @for ($i = 1; $i <= 9; $i++)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow p-6">
                        <a href="#">
                            <img class="rounded-xl" src="{{ asset('assets/images/hero2.jpg') }}" alt="" />
                        </a>
                        <div class="mt-4">
                            <a href="#">
                                <h5 class="mb-2 text-2lg font-medium tracking-tight line-clamp-2 text-gray-900">
                                    Bimbingan Teknis Strategi Pemasaran di Wilayah Sleman
                                </h5>
                            </a>
                            <p class="font-normal text-gray-400">
                                12 Agustus 2023
                            </p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div>
            <div class="flex justify-between items-center md:px-48 mt-16">
                <h1 class="text-gray-300 text-4xl font-bold">2022</h1>
                <ion-icon class="text-gray-300 text-5xl" name="chevron-down-circle-outline"></ion-icon>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto md:px-20 mt-10">
                @for ($i = 1; $i <= 9; $i++)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow p-6">
                        <a href="#">
                            <img class="rounded-xl" src="{{ asset('assets/images/hero2.jpg') }}" alt="" />
                        </a>
                        <div class="mt-4">
                            <a href="#">
                                <h5 class="mb-2 text-2lg font-medium tracking-tight line-clamp-2 text-gray-900">
                                    Bimbingan Teknis Strategi Pemasaran di Wilayah Sleman
                                </h5>
                            </a>
                            <p class="font-normal text-gray-400">
                                12 Agustus 2023
                            </p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
</x-guest-layout>
