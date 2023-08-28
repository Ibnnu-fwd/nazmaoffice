<x-app-layout>
    <x-card-container page_title="Manajemen Pengaturan Halaman Tentang Kami">
        @if ($aboutPageSetting != null)
            <form action="{{ route('admin.about-page-setting.update') }}" method="POST" class="space-y-6"
                enctype="multipart/form-data">
                @csrf
                <div>
                    <x-input-file id="slide_image_1" name="slide_image_1" label="Gambar Slide 1" />
                    <small class="text-gray-500">Gambar sudah ada: <a
                            href="{{ asset('storage/about-page-setting/' . $aboutPageSetting->slide_image_1) }}"
                            target="_blank">{{ $aboutPageSetting->slide_image_1 }}</a></small>
                </div>
                <div>
                    <x-input-file id="slide_image_2" name="slide_image_2" label="Gambar Slide 2" />
                    <small class="text-gray-500">Gambar sudah ada: <a
                            href="{{ asset('storage/about-page-setting/' . $aboutPageSetting->slide_image_2) }}"
                            target="_blank">{{ $aboutPageSetting->slide_image_2 }}</a></small>
                </div>
                <div>
                    <x-input-file id="slide_image_3" name="slide_image_3" label="Gambar Slide 3" />
                    <small class="text-gray-500">Gambar sudah ada: <a
                            href="{{ asset('storage/about-page-setting/' . $aboutPageSetting->slide_image_3) }}"
                            target="_blank">{{ $aboutPageSetting->slide_image_3 }}</a></small>
                </div>

                <x-button-save type="submit" label="Simpan Perubahan" />
            </form>
        @else
            <form action="{{ route('admin.about-page-setting.store') }}" method="POST" enctype="multipart/form-data"
                class="space-y-6">
                @csrf
                <x-input-file id="slide_image_1" name="slide_image_1" label="Gambar Slide 1" required />
                <x-input-file id="slide_image_2" name="slide_image_2" label="Gambar Slide 2" required />
                <x-input-file id="slide_image_3" name="slide_image_3" label="Gambar Slide 3" required />

                <x-button-save type="submit" label="Simpan" />
            </form>
        @endif
    </x-card-container>

    @push('js-internal')
        <script>
            @if (Session::has('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '{{ Session::get('success') }}',
                    showConfirmButton: false,
                    timer: 3000
                })
            @endif

            @if (Session::has('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: '{{ Session::get('error') }}',
                    showConfirmButton: false,
                    timer: 3000
                })
            @endif
        </script>
    @endpush
</x-app-layout>
