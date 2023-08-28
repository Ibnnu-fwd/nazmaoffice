<x-app-layout>
    <x-card-container page_title="Manajemen Proyek">
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
                        <th scope="col" class="p-4">Layanan</th>
                        <th scope="col" class="p-4">Judul</th>
                        <th scope="col" class="p-4">Tgl. Kesepakatan</th>
                        <th scope="col" class="p-4">Tgl. Penyelesaian</th>
                        <th scope="col" class="p-4">Pelanggan</th>
                        <th scope="col" class="p-4">No. Telefon</th>
                        <th scope="col" class="p-4">Status</th>
                        <th scope="col" class="p-4">Harga</th>
                        <th scope="col" class="p-4">Gambar 1</th>
                        <th scope="col" class="p-4">Gambar 2</th>
                        <th scope="col" class="p-4">Gambar 3</th>
                        <th scope="col" class="p-4">Tag</th>
                        <th scope="col" class="p-4">Deskripsi</th>
                        <th scope="col" class="p-4">Lokasi</th>
                        <th scope="col" class="p-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($serviceProjects as $data)
                        <tr class="border-b hover:bg-gray-100 dark:hover:bg-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->service->title ?? '-' }}
                            </th>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->title }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->taken_at ? date('d-m-Y', strtotime($data->taken_at)) : '-' }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->due_at ? date('d-m-Y', strtotime($data->due_at)) : '-' }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->customer_name }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->customer_phone }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->status }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ number_format($data->price, 0, ',', '.') }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                @if ($data->image_1)
                                    <a href="{{ asset('storage/service_project/' . $data->image_1) }}" target="_blank"
                                        class="text-primary underline">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                @endif
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                @if ($data->image_2)
                                    <a href="{{ asset('storage/service_project/' . $data->image_2) }}" target="_blank"
                                        class="text-primary underline">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                @endif
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                @if ($data->image_3)
                                    <a href="{{ asset('storage/service_project/' . $data->image_3) }}" target="_blank"
                                        class="text-primary underline">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                @endif
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->tag }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ Str::limit($data->description, 20) }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $data->location ?? '-' }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                <div class="flex items-center space-x-4">
                                    <x-button-edit label="Edit" onclick="btnEdit('{{ $data->id }}')"
                                        modal="create-modal" />
                                    <x-button-delete label="Hapus" onclick="btnDelete('{{ $data->id }}')"
                                        modal="delete-modal" />
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="13"
                                class="px-4 py-3 font-medium text-gray-400 whitespace-nowrap text-center">
                                Data tidak ditemukan
                            </td>
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
                        Formulir Tambah Proyek
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

                        <x-select id="service_id" name="service_id" label="Layanan" required>
                            <option value="">Pilih Layanan</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->title }}</option>
                            @endforeach
                        </x-select>

                        <x-input id="title" name="title" label="Judul" required />

                        <x-input id="taken_at" name="taken_at" label="Tgl. Kesepakatan" type="date" required />

                        <x-input id="due_at" name="due_at" label="Tgl. Penyelesaian" type="date" />

                        <x-input id="customer_name" name="customer_name" label="Pelanggan" />

                        <x-input id="customer_phone" name="customer_phone" label="No. Telefon" />

                        <x-select id="status" name="status" label="Status" required>
                            <option value="">Pilih Status</option>
                            <option value="Proses">Proses</option>
                            <option value="Selesai">Selesai</option>
                            <option value="Belum Selesai">Belum Selesai</option>
                        </x-select>

                        <x-input id="price" name="price" label="Harga" type="number" required />

                        <x-input-file id="image_1" name="image_1" label="Gambar 1" />

                        <x-input-file id="image_2" name="image_2" label="Gambar 2" />

                        <x-input-file id="image_3" name="image_3" label="Gambar 3" />

                        <x-input id="tag" name="tag" label="Tag" required />

                        <x-textarea id="description" name="description" label="Deskripsi" required />

                        <x-input id="location" name="location" label="Lokasi" />

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

    @push('js-internal')
        <script>
            function btnEdit(id) {
                let url = "{{ route('admin.service-project.update', ':id') }}".replace(':id', id);
                $('#create-modal form').attr('action', url);
                $('#create-modal form').trigger('reset');
                $('#create-modal #modal-title').text('Formulir Edit Proyek');

                $.ajax({
                    url: "{{ route('admin.service-project.get-by-id') }}",
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id
                    },
                    dataType: 'JSON',
                    success: function(data) {
                        $('#create-modal #service_id').val(data.service_id);
                        $('#create-modal #title').val(data.title);
                        $('#create-modal #taken_at').val(data.taken_at);
                        $('#create-modal #due_at').val(data.due_at);
                        $('#create-modal #customer_name').val(data.customer_name);
                        $('#create-modal #customer_phone').val(data.customer_phone);
                        $('#create-modal #status').val(data.status);
                        $('#create-modal #price').val(data.price);
                        $('#create-modal #tag').val(data.tag);
                        $('#create-modal #description').val(data.description);
                        $('#create-modal #location').val(data.location);
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
                $('#delete-modal form').attr('action', "{{ route('admin.service-project.destroy', ':id') }}".replace(':id',
                    id));
            }
            $(function() {
                $('#btnAdd').click(function(e) {
                    e.preventDefault();
                    $('#create-modal form').attr('action', "{{ route('admin.service-project.store') }}");
                    $('#create-modal form').trigger('reset');
                    $('#create-modal #modal-title').text('Formulir Tambah Proyek');
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
