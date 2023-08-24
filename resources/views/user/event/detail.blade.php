<x-guest-layout>
    {{-- Hero --}}
    <section class="relative flex items-center w-full">
        <div class="relative flex items-center justify-center w-full px-5 py-24 mx-auto md:px-12 2xl:px-0 max-w-7xl">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-24">
                <div class="relative flex-col items-center gap-12 lg:inline-flex md:order-first">
                    <div class="max-w-xl text-center lg:text-left">
                        <div>
                            <p class="text-danger">
                                NaZMa Event
                            </p>
                            <p class="text-2xl font-semibold leading-snug mt-2 tracking-tight text-black sm:text-4xl">
                                Pelatihan Pembuatan Logo dan Company Profile
                            </p>
                            <p class="max-w-xl mt-4 text-base tracking-tight text-gray-400">
                                Kesempatan berharga bagi individu yang ingin mengembangkan keterampilan dalam
                                merancang logo dan menciptakan profil perusahaan yang menarik. Dalam era bisnis yang
                                kompetitif, memiliki identitas visual yang kuat dan profil perusahaan yang
                                profesional sangatlah penting
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

    {{-- Study Case --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-12 2xl:px-0">
            <h1 class="text-3xl font-medium tracking-tight text-primary">Study Case</h1>
            <h1 class="text-2xl font-medium tracking-tight text-black">
                Jelajahi Kreatifitas Untuk Tingkatkan Branding Bisnis
            </h1>
            <p class="text-md text-gray-400 xl:w-1/2 mt-3">
                Kesempatan berharga bagi individu yang ingin mengembangkan keterampilan dalam merancang logo dan
                menciptakan profil perusahaan yang menarik
            </p>

            <div class="">
                <div class="py-12 mx-auto text-left lg:max-w-7xl">
                    <div>
                        <div class="grid grid-cols-2 gap-12 lg:grid-cols-3 lg:space-y-0">
                            @for ($i = 1; $i <= 6; $i++)
                                <div>
                                    <div>
                                        <p class="text-lg font-medium leading-6 text-black">
                                            Design Brief
                                        </p>
                                    </div>
                                    <div class="mt-2 text-sm flex gap-x-3 text-gray-400 items-center">
                                        <span>
                                            Alwi Zain
                                        </span>
                                        <div class="w-2 h-2 bg-success rounded-full"></div>
                                        <span>
                                            2 Jam
                                        </span>
                                    </div>
                                    <p class="text-gray-400 mt-4 text-sm">
                                        Peserta akan belajar bagaimana menyusun brief desain yang jelas, informatif, dan
                                        membantu para desainer sesuai dengan harapan dan kebutuhan.
                                    </p>
                                </div>
                            @endfor
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
                <h2 class="mb-4 text-2xl tracking-tight font-medium text-gray-900">
                    Tim Dibalik NaZMa Office
                </h2>
                <p class=" text-gray-400 text-xs 2xl:text-md">
                    Kami adalah tim yang berdedikasi untuk mengedukasi Indonesia melalui media digital
                </p>
            </div>
            <div class="flex flex-wrap gap-8 lg:gap-16 justify-center">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="flex flex-col items-center text-center text-gray-500">
                        <img class="mx-auto mb-4 w-36 h-36 rounded-full"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                            alt="Person Avatar">
                        <h3 class="mb-1 text-2xl font-medium tracking-tight text-gray-900">
                            <a href="#">Person Name</a>
                        </h3>
                        <p>Role</p>
                        <ul class="flex justify-center mt-4 space-x-4">
                            <li>
                                <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
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
                    Tiket Terbatas <br>
                    Jangan Sampai Ketinggalan
                </h1>
                <p class="text-gray-400 2xl:w-1/2 mb-4 lg:mb-0">
                    Kesempatan berharga bagi individu yang ingin mengembangkan keterampilan dalam merancang logo
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
