<x-guest-layout>
    <section class="my-24">
        <div class="max-w-md mx-auto text-center px-4 md:px-0">
            <h1 class="text-2xl md:text-4xl font-semibold text-black">
                Dokumentasi Kegiatan
            </h1>
            <p class="text-gray-400 text-xs 2xl:text-md">
                Rangkaian peristiwa tahun ke tahun yang telah kami lewati
            </p>
        </div>

        <form class="max-w-xl mx-auto mt-8 px-4 md:px-0">
            <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-3 flex items-center pl-3 pointer-events-none">
                    <ion-icon name="search-outline" class="text-gray-300 w-6 h-6"></ion-icon>
                </div>
                <input type="search" id="search"
                    class="custom-input border-none focus:border focus:border-gray-200 block w-full p-5 pl-14 text-lg text-gray-900 font-light rounded-full"
                    placeholder="Cari" required>
            </div>
        </form>

        @foreach ($groupedGalleries as $year => $galleries)
            <div>
                <div class="flex justify-between items-center md:px-48 mt-16">
                    <h1 class="text-gray-300 text-4xl font-bold">{{ $year }}</h1>
                    <ion-icon class="text-gray-300 text-5xl" name="chevron-down-circle-outline"></ion-icon>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto md:px-20 mt-10">
                    @foreach ($galleries as $gallery)
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow p-4"
                            data-gallery-id="{{ $gallery->id }}">
                            <a href="#">
                                <img class="w-full h-52 rounded-xl blur-mode"
                                    src="{{ asset('storage/gallery/' . $gallery->image) }}" alt="" />
                            </a>
                            <div class="mt-4">
                                <a href="#">
                                    <h5 class="mb-2 text-2lg font-semibold tracking-tight line-clamp-2 text-gray-900">
                                        {{ $gallery->title }}
                                    </h5>
                                </a>
                                <p class="font-normal text-gray-400">
                                    {{ date('d F Y', strtotime($gallery->created_at)) }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </section>

    @push('js-internal')
        <script>
            $(function() {
                $('#search').on('keyup', function() {
                    let value = $(this).val().toLowerCase();
                    $('.grid > div').filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
    @endpush
</x-guest-layout>
