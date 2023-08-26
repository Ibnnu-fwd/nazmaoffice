<x-app-layout>
    <x-card-container page_title="Manajeman Halaman (Event)">
        @if ($setting == null)
            <form action="{{ route('admin.event.setting.new') }}" method="POST" enctype="multipart/form-data"
                class="grid xl:grid-cols-2 gap-x-6">
                @csrf
                <div class="space-y-6">
                    <x-input id="header_title" name="header_title" label="Judul Header" placeholder="Masukkan judul halaman"
                        value="" required />

                    <x-textarea id="description" name="description" label="Deskripsi"
                        placeholder="Masukkan deskripsi halaman" required />

                    <x-input-file id="hero_image" name="hero_image" label="Gambar Header" value="" required />

                    <x-button-save type="submit" />
                </div>
                <div>
                    <p class="text-xs 2xl:text-sm text-gray-400 mb-4">
                        Preview Gambar Header
                    </p>

                    <img src="" class="w-96 h-60 rounded-xl object-contain object-center border border-gray-100"
                        alt="Gambar Header">
                </div>
            </form>
        @else
            <form action="{{ route('admin.event.setting.update') }}" method="POST" enctype="multipart/form-data"
                class="grid xl:grid-cols-2 gap-x-6">
                @csrf
                <div class="space-y-6">
                    <x-input id="header_title" name="header_title" label="Judul Header"
                        placeholder="Masukkan judul halaman" value="{{ $setting->header_title }}" required />

                    <x-textarea id="description" name="description" label="Deskripsi"
                        placeholder="Masukkan deskripsi halaman" required
                        value="{{ $setting->description }}"></x-textarea>

                    <x-input-file id="hero_image" name="hero_image" label="Gambar Header" value="" />

                    <x-button-save type="submit" />
                </div>
                <div>
                    <p class="text-xs 2xl:text-sm text-gray-400 mb-4">
                        Preview Gambar Header
                    </p>

                    <img src="{{ asset('storage/event/setting/' . $setting->hero_image) }}"
                        class="w-96 h-60 rounded-xl object-contain object-center border border-gray-100"
                        alt="Gambar Header">
                </div>
            </form>
        @endif
    </x-card-container>

    @push('js-internal')
        <script>
            $(function() {
                $('#hero_image').on('change', function() {
                    let file = $(this).get(0).files;
                    let reader = new FileReader();
                    reader.readAsDataURL(file[0]);
                    reader.addEventListener("load", function(e) {
                        let image = e.target.result;
                        $('img').attr('src', image);
                    });
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
