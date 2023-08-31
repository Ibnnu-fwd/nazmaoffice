<x-app-layout>
    <x-card-container page_title="Manajemen Layanan">
        <div
            class="flex flex-col md:flex-row items-stretch md:items-center md:space-x-3 space-y-3 md:space-y-0 justify-between py-4">
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
                <button type="button" data-modal-target="create-modal" data-modal-toggle="create-modal" id="btnAdd"
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
                        <th scope="col" class="p-4">Kategori</th>
                        <th scope="col" class="p-4">Icon</th>
                        <th scope="col" class="p-4">Warna Icon</th>
                        <th scope="col" class="p-4">Judul</th>
                        <th scope="col" class="p-4">No. Telefon</th>
                        <th scope="col" class="p-4">Hero</th>
                        <th scope="col" class="p-4">Tujuan</th>
                        <th scope="col" class="p-4">Tautan Teaser</th>
                        <th scope="col" class="p-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($services as $data)
                        <tr class="border-b hover:bg-gray-100 dark:hover:bg-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->serviceCategory->title ?? '-' }}
                            </th>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {!! $data->icon !!}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {!! $data->icon_color !!}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->title }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->phone }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                <a target="_blank" href="{{ asset('storage/services/' . $data->hero_image) }}">
                                    <i class="fas fa-eye text-blue-700 hover:underline"></i>
                                </a>
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                <a target="_blank" href="{{ asset('storage/services/' . $data->benefit_image) }}">
                                    <i class="fas fa-eye text-blue-700 hover:underline"></i>
                                </a>
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                <a href="{{ $data->teaser_link }}" target="_blank"
                                    class="text-blue-700 hover:underline">
                                    {{ $data->teaser_link }}
                                </a>
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                @if ($data->is_active)
                                    <div class="flex items-center space-x-4">
                                        <x-button-edit label="Testimoni"
                                            onclick="window.location.href='{{ route('admin.service.testimonial', $data->id) }}'" />
                                        <x-button-edit label="Sub Layanan"
                                            onclick="window.location.href='{{ route('admin.sub-service', $data->id) }}'" />
                                        <x-button-edit label="Benefit"
                                            onclick="window.location.href='{{ route('admin.service.benefit', $data->id) }}'" />
                                        <x-button-edit label="Edit" onclick="btnEdit('{{ $data->id }}')"
                                            modal="create-modal" />
                                        <x-button-delete label="Hapus" onclick="btnDelete('{{ $data->id }}')"
                                            modal="delete-modal" />
                                    </div>
                                @else
                                    <x-button-edit label="Aktifkan" onclick="btnRecover('{{ $data->id }}')"
                                        modal="recover-modal" />
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-4 py-3 text-center">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
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
                        Formulir Tambah Layanan
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

                        <x-select id="service_category_id" name="service_category_id" label="Kategori" required>
                            @foreach ($serviceCategories as $serviceCategory)
                                <option value="{{ $serviceCategory->id }}">
                                    {{ $serviceCategory->title }}
                            @endforeach
                        </x-select>

                        <x-input id="title" name="title" label="Judul" required />

                        <x-input id="icon" name="icon" label="Icon" required />

                        <x-input id="icon_color" name="icon_color" label="Warna Icon" required />

                        <x-textarea id="description" name="description" label="Deskripsi" required />

                        <x-input id="phone" name="phone" label="No. Telefon" required />

                        <x-input-file id="hero_image" name="hero_image" label="Hero" required />

                        <x-input-file id="benefit_image" name="benefit_image" label="Tujuan" required />

                        <x-input id="teaser_link" name="teaser_link" label="Tautan Teaser" />

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
                        Apakah kamu yakin ingin menghapus kategori ini?
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

    <!-- Recover modal -->
    <div id="recover-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full h-auto max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="recover-modal">
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
                        Apakah kamu yakin ingin mengaktifkan kategori ini?
                    </h3>
                    <form action="" method="POST">
                        @csrf
                        <button data-modal-toggle="recover-modal" type="submit"
                            class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">Ya,
                            saya yakin</button>
                        <button data-modal-toggle="recover-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Tidak,
                            batalkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('js-internal')
        <script>
            function btnEdit(id) {
                let url = "{{ route('admin.service.update', ':id') }}".replace(':id', id);
                $('#create-modal form').attr('action', url);
                $('#create-modal form').trigger('reset');
                $('#create-modal #modal-title').text('Formulir Edit Layanan');

                $.ajax({
                    url: "{{ route('admin.service.get-by-id') }}",
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id
                    },
                    dataType: 'JSON',
                    success: function(data) {
                        // remove attribute required from input file
                        $('#create-modal form').find('input[type="file"]').removeAttr('required');
                        $('#service_category_id').val(data.service_category_id);
                        $('#title').val(data.title);
                        $('#icon').val(data.icon);
                        $('#icon_color').val(data.icon_color);
                        $('#description').val(data.description);
                        $('#phone').val(data.phone);
                        $('#teaser_link').val(data.teaser_link);
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
                $('#delete-modal form').attr('action', "{{ route('admin.service.destroy', ':id') }}".replace(':id',
                    id));
            }

            function btnRecover(id) {
                $('#recover-modal form').attr('action', "{{ route('admin.service.recover', ':id') }}".replace(':id',
                    id));
            }

            $(function() {
                $('#btnAdd').click(function(e) {
                    e.preventDefault();
                    // add attribute required to input file
                    $('#create-modal form').find('input[type="file"]').attr('required', true);
                    $('#create-modal form').attr('action', "{{ route('admin.service.store') }}");
                    $('#create-modal form').trigger('reset');
                    $('#create-modal #modal-title').text('Formulir Tambah Layanan');
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
