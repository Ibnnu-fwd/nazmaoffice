<x-app-layout>
    <x-card-container page_title="Manajemen Acara">
        <div
            class="flex flex-col md:flex-row items-stretch md:items-center md:space-x-3 space-y-3 md:space-y-0 justify-between mx-4 py-4">
            <div class="w-full md:w-1/2">
                <label for="simple-search" class="sr-only">Cari</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                        </svg>
                    </div>
                    <input type="text" id="search" name="search" placeholder="Cari" required=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500">
                </div>
            </div>

            <div
                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                <button type="button" data-modal-target="create-modal" data-modal-toggle="create-modal"
                    id="btnAddEvent"
                    class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200">
                    <svg class="h-3.5 w-3.5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    Tambah
                </button>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="p-4">Judul</th>
                        <th scope="col" class="p-4">Kategori</th>
                        <th scope="col" class="p-4">Gambar</th>
                        <th scope="col" class="p-4">Thumbnail</th>
                        <th scope="col" class="p-4">No. Telepon</th>
                        <th scope="col" class="p-4">Studi Kasus</th>
                        <th scope="col" class="p-4">Kapasitas</th>
                        <th scope="col" class="p-4">Tgl. Pendaftaran</th>
                        <th scope="col" class="p-4">Tgl. Berakhir</th>
                        <th scope="col" class="p-4">Tgl. Event</th>
                        <th scope="col" class="p-4">Waktu</th>
                        <th scope="col" class="p-4">Harga</th>
                        <th scope="col" class="p-4">Diskon</th>
                        <th scope="col" class="p-4">Lokasi</th>
                        <th scope="col" class="p-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($events as $data)
                        <tr class="border-b hover:bg-gray-100 dark:hover:bg-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->title }}
                            </th>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->event_type ?? '-' }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                @if ($data->hero_image)
                                    <img src="{{ asset('storage/event/hero_image/' . $data->hero_image) }}"
                                        class="w-20 h-20 object-cover rounded-lg">
                                @else
                                    <span>-</span>
                                @endif
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                @if ($data->thumbnail)
                                    <img src="{{ asset('storage/event/thumbnail/' . $data->thumbnail) }}"
                                        class="w-20 h-20 object-cover rounded-lg">
                                @else
                                    <span>-</span>
                                @endif
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->phone }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ Str::limit($data->study_case, 20) }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->capacity }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->start_date }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->end_date }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->event_date }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->event_time }} WIB
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ number_format($data->price, 0, ',', '.') }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ number_format($data->discount, 0, ',', '.') }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ Str::limit($data->location, 20) }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                @if ($data->is_active)
                                    <div class="flex items-center space-x-4">
                                        {{-- <a type="button" href="{{ route('admin.event.rundown', $data->id) }}"
                                            class="py-2 px-3 flex items-center text-sm font-medium hover:text-white text-center text-orange-700 focus:outline-none bg-white rounded-lg border border-orange-700 hover:bg-orange-500 hover:text-primary-700 focus:z-10 focus:ring-4 focus:orange-orange-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5"
                                                viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                <path fill-rule="evenodd"
                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Rundown
                                        </a> --}}
                                        <a type="button" href="{{ route('admin.sylabus', $data->id) }}"
                                            class="py-2 px-3 flex items-center text-sm font-medium hover:text-white text-center text-orange-700 focus:outline-none bg-white rounded-lg border border-orange-700 hover:bg-orange-500 hover:text-primary-700 focus:z-10 focus:ring-4 focus:orange-orange-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5"
                                                viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                <path fill-rule="evenodd"
                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Silabus
                                        </a>
                                        {{-- <a type="button" href="{{ route('admin.event.speaker', $data->id) }}"
                                            class="py-2 px-3 flex items-center text-sm font-medium hover:text-white text-center text-purple-700 focus:outline-none bg-white rounded-lg border border-purple-700 hover:bg-purple-500 hover:text-primary-700 focus:z-10 focus:ring-4 focus:purple-purple-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5"
                                                viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                <path fill-rule="evenodd"
                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Pembicara
                                        </a> --}}
                                        <button type="button" data-modal-target="create-modal"
                                            data-modal-toggle="create-modal" onclick="btnEdit('{{ $data->id }}')"
                                            class="py-2 px-3 flex items-center text-sm font-medium hover:text-white text-center text-lime-700 focus:outline-none bg-white rounded-lg border border-lime-700 hover:bg-lime-800 hover:text-primary-700 focus:z-10 focus:ring-4 focus:lime-lime-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5"
                                                viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                <path fill-rule="evenodd"
                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Edit
                                        </button>
                                        <button type="button" data-modal-target="delete-modal"
                                            data-modal-toggle="delete-modal"
                                            onclick="btnDelete('{{ $data->id }}')"
                                            class="flex items-center text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5"
                                                viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Hapus
                                        </button>
                                    </div>
                                @else
                                    <button type="button" data-modal-target="activation-modal"
                                        data-modal-toggle="activation-modal"
                                        onclick="btnActivate('{{ $data->id }}')"
                                        class="py-2 px-3 flex items-center text-sm font-medium hover:text-white text-center text-lime-700 focus:outline-none bg-white rounded-lg border border-lime-700 hover:bg-lime-800 hover:text-primary-700 focus:z-10 focus:ring-4 focus:lime-lime-300">
                                        <i class="fas fa-check mr-2"></i>
                                        Aktifkan
                                    </button>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="15"
                                class="px-4 py-3 font-medium text-gray-400 whitespace-nowrap text-center">
                                Tidak ada data
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
            aria-label="Table navigation">
            <div class="pagination w-full">
                {{ $events->links() }}
            </div>
        </nav>
    </x-card-container>

    <!-- Main modal -->
    <div id="create-modal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-lg font-medium text-gray-900" id="modal-title">
                        Formulir Tambah Event
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                        data-modal-hide="create-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Tutup</span>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">

                        <x-input id="title" name="title" type="text" label="Judul" required />

                        <x-select id="event_type" name="event_type" label="Tipe Event" required>
                            <option value="">Pilih Tipe Event</option>
                            @foreach ($eventTypes as $eventType => $value)
                                <option value="{{ $eventType }}">{{ $value }}</option>
                            @endforeach
                        </x-select>

                        <x-textarea id="description" name="description" label="Deskripsi" required />

                        <x-input-file id="thumbnail" name="thumbnail" label="Thumbnail" />

                        <x-input-file id="hero_image" name="hero_image" label="Gambar Utama" />

                        <x-input id="phone" name="phone" label="No. Telepon" required />

                        <x-input id="study_case" name="study_case" label="Kasus Studi" required />

                        <x-textarea id="study_case_description" name="study_case_description"
                            label="Deskripsi Kasus Studi" required />

                        <x-input id="capacity" name="capacity" type="number" label="Kapasitas" required />

                        <x-input id="start_date" name="start_date" type="date" label="Tanggal Pendaftaran Mulai"
                            required />

                        <x-input id="end_date" name="end_date" type="date" label="Tanggal Pendaftaran Selesai"
                            required />

                        <x-input id="event_date" name="event_date" type="date" label="Tanggal Event" required />

                        <x-input id="event_time" name="event_time" type="time" label="Waktu Event" required />

                        <x-input id="price" name="price" type="number" label="Harga" required />

                        <x-textarea id="location" name="location" label="Lokasi" required />

                        <x-input id="discount" name="discount" type="number" label="Diskon" />

                    </div>

                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Simpan
                        </button>
                        <button data-modal-hide="create-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">
                            Batal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete modal -->
    <div id="delete-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full h-auto max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="delete-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Tutup</span>
                </button>
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                        fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500">
                        Apakah kamu yakin ingin menghapus blog ini?
                    </h3>
                    <form action="" method="POST">
                        @csrf
                        <button data-modal-toggle="delete-modal" type="submit"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">Ya,
                            saya yakin</button>
                        <button data-modal-toggle="delete-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Tidak,
                            batalkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Activation modal -->
    <div id="activation-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full h-auto max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="activation-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Tutup</span>
                </button>
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                        fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a
                            9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500">
                        Apakah kamu yakin ingin mengaktifkan event ini?
                    </h3>
                    <form action="" method="POST">
                        @csrf
                        <button data-modal-toggle="activation-modal" type="submit"
                            class="text-white bg-lime-600 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">Ya,
                            saya yakin</button>
                        <button data-modal-toggle="activation-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Tidak,
                            batalkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('js-internal')
        <script>
            function btnActivate(id) {
                $('#activation-modal form').attr('action', "{{ route('admin.event.activate', ':id') }}".replace(':id', id));
            }

            function btnEdit(id) {
                let url = "{{ route('admin.event.update', ':id') }}".replace(':id', id);
                $('#create-modal form').attr('action', url);
                $('#create-modal form').trigger('reset');
                $('#create-modal #modal-title').text('Formulir Edit Event');

                $.ajax({
                    url: "{{ route('admin.event.get-by-id') }}",
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id
                    },
                    dataType: 'JSON',
                    success: function(data) {

                        $('#create-modal #title').val(data.title);
                        $('#create-modal #event_type').val(data.event_type);
                        $('#create-modal #description').val(data.description);
                        $('#create-modal #phone').val(data.phone);
                        $('#create-modal #study_case').val(data.study_case);
                        $('#create-modal #study_case_description').val(data.study_case_description);
                        $('#create-modal #capacity').val(data.capacity);
                        $('#create-modal #start_date').val(data.start_date);
                        $('#create-modal #end_date').val(data.end_date);
                        $('#create-modal #event_date').val(data.event_date);
                        $('#create-modal #event_time').val(data.event_time);
                        $('#create-modal #price').val(data.price);
                        $('#create-modal #location').val(data.location);
                        $('#create-modal #discount').val(data.discount);
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: 'Gagal mengambil data',
                        })
                    }
                });
            }

            function btnDelete(id) {
                $('#delete-modal form').attr('action', "{{ route('admin.event.destroy', ':id') }}".replace(':id', id));
            }

            $(function() {
                $('#btnAddEvent').click(function(e) {
                    e.preventDefault();

                    $('#create-modal form').attr('action', "{{ route('admin.event.store') }}");
                    $('#create-modal form').trigger('reset');
                    $('#create-modal #modal-title').text('Formulir Tambah Event');
                });

                $('#search').on('keypress', function(e) {
                    if (e.which == 13) {
                        let value = $(this).val();
                        $('tbody tr').filter(function() {
                            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    }
                });

                @if (Session::has('success'))
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: '{{ Session::get('success') }}',
                    })
                @endif

                @if (Session::has('error'))
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: '{{ Session::get('error') }}',
                    })
                @endif
            });
        </script>
    @endpush
</x-app-layout>
