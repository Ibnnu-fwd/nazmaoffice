<x-guest-layout>
    <section class="py-8 bg-primary">
        <div class="max-w-4xl mx-auto px-8 lg:px-0">
            <p class="text-white text-md">Teknologi</p>
            <div class="grid md:grid-cols-2 mt-3">
                <h1 class="text-3xl font-medium leading-tight text-white">
                    BIMTEK Packaging, Design, dan Branding di Wilayah Sleman
                </h1>
                <div class="mt-2 md:mt-0 md:place-self-end text-md">
                    <p class="text-white">Moh Ibnu Abdurrohman Sutio</p>
                    <p class="text-gray-200">
                        20 Agustus 2021
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-4xl mx-auto mt-10 px-8 lg:px-0">
        <img src="{{ asset('assets/images/hero1.jpg') }}"
            class="w-full h-48 md:h-96 object-cover object-center blur-mode rounded-xl" alt="">
        <p class="mt-8 leading-6 text-justify">
            Sleman – Dinas Koperasi, Usaha Kecil, dan Menengah Kabupaten Sleman kembali menyelenggarakan Bimbingan
            Teknis (BIMTEK) bagi para pelaku UMKM di wilayah Sleman khususnya Kapanewon Gamping dan Kapanewon Moyudan.
            BIMTEK yang dilaksanakan selama 2 hari pada Senin (10/07) dan Selasa (11/07) di Hotel Crystal Lotus,
            Yogyakarta ini mengangkat tema Packaging, Design, dan Branding. <br>

            Berbagai macam sektor UMKM ikut berpartisipasi dalam BIMTEK kali ini, baik dari sektor kuliner, fashion,
            craft/kerajinan hingga pertanian/tanaman. BIMTEK diselenggarakan dalam dua kelas berbeda sesuai kapanewon
            masing-masing UMKM dengan setiap kelasnya terdapat 20-21 peserta. Kegiatan BIMTEK dibuka oleh Sekretaris
            Dinas Koperasi dan Usaha Kecil Menengah Kabupaten Sleman yakni Ibu Siti Istiqomah Tjatur Sulistiyaningtyas,
            S.T., M.T. serta didampingi oleh Subkoor Jaringan Usaha dan Kemitraan Ibu Sri Wara Nusadari, S.E., M.M. <br>

            Kegiatan BIMTEK pada Kapanewon Moyudan dibuka oleh Bapak Panewu Moyudan yaitu Bapak Harsonowasono, S.IP., MA
            yang berharap dengan adanya kegiatan BIMTEK ini Kapanewon Moyudan tidak tertinggal dengan kapanewon lainnya
            dan dapat meningkatkan branding sehingga produk UMKM di Kapanewon Moyudan lebih dikenal masyarakat serta
            dapat meningkatkan penjualan produknya. <br>

            Kegiatan BIMTEK mencakup materi yang berkaitan dengan Packaging, Design, dan Branding seperti Mind Mapping
            SWOT Analysis, Strategi Inovatif dalam Packaging untuk Meningkatkan Penjualan, Geurilla Marketing, serta
            Desain Logo, Typography & Feeds. BIMTEK dilaksanakan secara teorikal dan praktikal yang keduanya memiliki
            harapan seusai BIMTEK para pelaku UMKM bisa menerapkan langsung ilmu yang diperoleh pada usahanya
            masing-masing.
        </p>

        <hr class="text-gray-200 my-24">

        <h1 class="font-medium text-center text-2xl text-black tracking-tight">
            Artikel Terkait
        </h1>
        <section class="flex items-center w-full my-12">
            <div class="relative items-center w-full">
                <div class="grid grid-cols-2 gap-x-6 gap-y-8 mt-8 md:grid-cols-2 lg:grid-cols-3">
                    @for ($i = 1; $i <= 3; $i++)
                        <figure>
                            <img class="w-full bg-gray-200 rounded-lg object-cover object-center blur-mode"
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
                <div
                    class="grid grid-cols-1 mt-10 md:grid-cols-2 lg:grid-cols-3 gap-6 rounded-xl border border-gray-200 p-4 md:border-0 md:p-0">
                    <img src="{{ asset('assets/images/hero2.jpg') }}"
                        class="hidden mx-auto lg:inline-block object-center object-cover blur-mode rounded-lg"
                        alt="">
                    <div class="col-span-2">
                        <span class="text-gray-400 text-sm">20 Agustus 2023</span>
                        <span class="text-lg font-medium text-black line-clamp-2 mt-2">
                            Bimbingan Teknis Strategi Pemasaran di Wilayah Sleman
                        </span>
                        <p class="text-gray-400 line-clamp-2 mt-2 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus quaerat iste
                            perspiciatis totam. Perspiciatis ipsum alias expedita cupiditate quaerat, laudantium dolorum
                            nisi nostrum quibusdam dolor, sint nobis. Voluptatibus, nesciunt.
                        </p>
                        <div class="flex gap-x-2 items-center mt-5">
                            <img src="{{ asset('assets/images/hero1.jpg') }}"
                                class="w-8 h-8 rounded-full object-cover object-center blur-mode" alt="">
                            <p class="text-sm">
                                Moh Ibnu Abdurrohman Sutio
                            </p>
                        </div>
                        <div class="flex items-center md:hidden text-primary mt-4">Selengkapnya <ion-icon
                                name="chevron-forward-outline"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</x-guest-layout>
