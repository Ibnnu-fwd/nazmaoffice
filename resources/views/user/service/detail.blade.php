<x-guest-layout>
    {{-- Hero --}}
    <section class="relative flex items-center w-full">
        <div class="relative flex items-center justify-center w-full px-5 py-24 mx-auto md:px-12 2xl:px-0 max-w-7xl">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-24">
                <div class="relative flex-col items-center gap-12 lg:inline-flex md:order-first align-middle">
                    <div class="max-w-xl text-center m-auto lg:text-left items-center">
                        <div>
                            <p class="text-danger">
                                Layanan NaZMa Office
                            </p>
                            <p class="text-2xl font-semibold leading-snug mt-2 tracking-tight text-black sm:text-4xl">
                                Pelatihan Pembuatan Logo dan Company Profile
                            </p>
                            <p class="max-w-xl mt-4 text-base tracking-tight text-gray-400">
                                Kursus untuk menambah keahlian dalam bidang komputer, teknologi informasi, dan
                                komunikasi.
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
                <div class="order-first hidden lg:block w-full lg:mt-0">
                    <img class="object-cover object-center w-full mx-auto lg:ml-auto rounded-xl" alt="hero"
                        src="{{ asset('assets/images/hero1.jpg') }}">
                </div>
            </div>
        </div>

    </section>

    {{-- Benefit --}}
    <section class="bg-white">
        <div class="relative items-center w-full px-5 py-24 mx-auto md:px-12 2xl:px-0 max-w-7xl">
            <div class="w-full mx-auto text-left">
                <div class="relative flex-col items-center m-auto align-middle">
                    <div class="items-center gap-12 text-left lg:gap-24 lg:inline-flex">
                        <div class="flex flex-col m-auto md:order-first">
                            <div class="max-w-xl">
                                <div>
                                    <p class="text-2xl font-medium tracking-tight text-black">
                                        Benefit Yang Anda Dapatkan
                                    </p>
                                </div>
                            </div>
                            <div class="mt-6 lg:max-w-7xl">
                                <ul role="list" class="grid grid-cols-2 gap-4 list-none lg:gap-6">
                                    @for ($i = 1; $i <= 4; $i++)
                                        <li>
                                            <div>
                                                <p class="mt-5 text-lg font-medium leading-6 text-black">
                                                    Developer experience
                                                </p>
                                            </div>
                                            <div class="mt-2 text-base text-gray-500">
                                                Plus, our platform is constantly evolving to meet the
                                                changing needs of the tech industry, ensuring you'll always
                                                be ahead.
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <div class="order-first block w-full mt-12 lg:mt-0">
                            <img class="object-cover object-center rounded-xl w-full mx-auto bg-gray-300 border lg:ml-auto"
                                alt="hero" src="{{ asset('assets/images/hero3.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Project --}}
    <section class="">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-24 2xl:px-0">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <h2 class="mb-4 text-2xl tracking-tight font-medium text-gray-900">
                    Proyek yang telah kami kerjakan
                </h2>
            </div>
            <div class="grid md:grid-cols-4 gap-6">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="bg-white border border-gray-200 rounded-lg shadow p-4">
                        <a href="#">
                            <img class="rounded-xl" src="{{ asset('assets/images/hero2.jpg') }}" alt="" />
                        </a>
                        <div class="mt-4 text-start">
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

    {{-- Offering --}}
    <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-8 lg:px-12 2xl:px-0 grid md:grid-cols-2 ">
            <div>
                <h1 class="text-2xl xl:text-3xl font-medium mb-2">
                    Kami Siap <br>
                    Membantu Anda Tumbuh
                </h1>
                <p class="text-gray-400 2xl:w-1/2 mb-4 lg:mb-0">
                    Kesempatan berharga bagi individu yang ingin mengembangkan keterampilan dalam membangun bisnis
                </p>
            </div>
            <div class="flex items-center justify-start md:justify-end mt-6 md:mt-0">
                <a href="#"
                    class="items-center justify-center w-fit px-6 py-3 text-center text-white duration-200 bg-primary border-2 border-primary rounded-full inline-flex hover:bg-purple-700 hover:text-white hover:border-purple-600 lg:w-auto text-md">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </section>

</x-guest-layout>
