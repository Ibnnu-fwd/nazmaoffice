<x-app-layout>
    <x-card-container page_title="Manajemen Pengaturan Halaman Landing">
        @if ($companyLandingSetting != null)
            <form action="{{ route('admin.company-landing-setting.update') }}" method="POST" class="space-y-6"
                enctype="multipart/form-data">
                @csrf
                <div>
                    <x-input-file id="slide_image_1" name="slide_image_1" label="Gambar Slide 1" />
                    <small class="text-gray-500">Gambar sudah ada: <a
                            href="{{ asset('storage/company-landing-setting/' . $companyLandingSetting->slide_image_1) }}"
                            target="_blank">{{ $companyLandingSetting->slide_image_1 }}</a></small>
                </div>
                <div>
                    <x-input-file id="slide_image_2" name="slide_image_2" label="Gambar Slide 2" />
                    <small class="text-gray-500">Gambar sudah ada: <a
                            href="{{ asset('storage/company-landing-setting/' . $companyLandingSetting->slide_image_2) }}"
                            target="_blank">{{ $companyLandingSetting->slide_image_2 }}</a></small>
                </div>
                <div>
                    <x-input-file id="slide_image_3" name="slide_image_3" label="Gambar Slide 3" />
                    <small class="text-gray-500">Gambar sudah ada: <a
                            href="{{ asset('storage/company-landing-setting/' . $companyLandingSetting->slide_image_3) }}"
                            target="_blank">{{ $companyLandingSetting->slide_image_3 }}</a></small>
                </div>
                <x-textarea id="about_us" name="about_us" label="Tentang Kami" :value="$companyLandingSetting->about_us" />
                <x-input id="office_phone" name="office_phone" label="Nomor Telepon Kantor" :value="$companyLandingSetting->office_phone" />
                <x-input id="personal_phone" name="personal_phone" label="Nomor Telepon Personal" :value="$companyLandingSetting->personal_phone" />
                <x-input id="email" name="email" label="Email" :value="$companyLandingSetting->email" />

                <x-button-save type="submit" label="Simpan Perubahan" />
            </form>
        @else
            <form action="{{ route('admin.company-landing-setting.store') }}" method="POST"
                enctype="multipart/form-data" class="space-y-6">
                @csrf
                <x-input-file id="slide_image_1" name="slide_image_1" label="Gambar Slide 1" />
                <x-input-file id="slide_image_2" name="slide_image_2" label="Gambar Slide 2" />
                <x-input-file id="slide_image_3" name="slide_image_3" label="Gambar Slide 3" />
                <x-textarea id="about_us" name="about_us" label="Tentang Kami" />
                <x-input id="office_phone" name="office_phone" label="Nomor Telepon Kantor" />
                <x-input id="personal_phone" name="personal_phone" label="Nomor Telepon Personal" />
                <x-input id="email" name="email" label="Email" />

                <x-button-save type="submit" label="Simpan" />
            </form>
        @endif
    </x-card-container>
</x-app-layout>
