@props(['page-title' => ''])

<div class="relative w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Desktop Header -->
    <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
        <div class="w-1/2"></div>
        <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">

            <button x-show="isOpen" @click="isOpen = false"
                class="h-full w-full fixed inset-0 cursor-default z-40"></button>
            <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                <a href="#" class="block px-4 py-2 account-link hover:text-white">Akun</a>
                <a href="#" class="block px-4 py-2 account-link hover:text-white">Bantuan</a>
                <a href="#" class="block px-4 py-2 account-link hover:text-white">Keluar</a>
            </div>
        </div>
    </header>

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <div class="bg-white dark:bg-gray-800 mb-4 relative shadow-md sm:rounded-lg overflow-hidden">
                <h1 class="text-base text-center text-blue-950 pb-3 py-3">
                    {{ $pageTitle }}
                </h1>
            </div>

            <!-- Start block -->
            <section class="antialiased">
                <div class="mx-auto max-w-screen-2xl">
                    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                        <div class="md:space-x-3 space-y-3 md:space-y-0 justify-between mx-4 py-4 border-t">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </section>
            <!-- End block -->
        </main>
    </div>
</div>
