<x-app-layout>
    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <div class="text-3xl text-black pb-6">
                <h1>Add New Creative Crew</h1>
            </div>

            <div class="w-full">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="https://nazmaoffice.com/admin/creativecrew/addCreativecrew" enctype="multipart/form-data">
                            <div class="card">
                                
                                
                                <div class="p-8">
                                    <div class="mb-4">                                                                                
                                        <label class="block mb-2 text-md font-medium text-gray-900 dark:text-white" for="user_avatar">Photo</label>
                                        <input class="block w-full text-md text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                    </div>
                                    <div class="mb-4">
                                        <label for="nama" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Nama</label>
                                        <input type="text" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="posisi" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Posisi</label>
                                        <input type="text" id="posisi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    </div>
                                </div>
                                <div class="mx-8">
                                    <x-primary-button type="submit" class="justify-center">Save</x-primary-button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>
    