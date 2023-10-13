<x-app-layout>
    <x-card-container page_title="Manajemen Pengaturan Halaman Landing">
        @if ($companyLandingSetting != null)
            <form action="{{ route('admin.company-landing-setting.update') }}" method="POST" class="space-y-6"
                enctype="multipart/form-data">
                @csrf
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <x-input-file id="slide_image_1" name="slide_image_1" label="Gambar Slide 1" />
                        <small class="text-gray-500">Gambar sudah ada: <a
                                href="{{ asset('storage/company-landing-setting/' . $companyLandingSetting->slide_image_1) }}"
                                target="_blank">{{ $companyLandingSetting->slide_image_1 }}</a></small>
                    </div>
                    <x-input id="title_slide_image_1" name="title_slide_image_1" label="Judul Slide 1"
                        value="{{ $companyLandingSetting->title_slide_image_1 }}" />
                    <x-textarea id="description_slide_image_1" name="description_slide_image_1"
                        label="Deskripsi Slide 1" value="{{ $companyLandingSetting->description_slide_image_1 }}" />

                </div>
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <x-input-file id="slide_image_2" name="slide_image_2" label="Gambar Slide 2" />
                        <small class="text-gray-500">Gambar sudah ada: <a
                                href="{{ asset('storage/company-landing-setting/' . $companyLandingSetting->slide_image_2) }}"
                                target="_blank">{{ $companyLandingSetting->slide_image_2 }}</a></small>
                    </div>
                    <x-input id="title_slide_image_2" name="title_slide_image_2" label="Judul Slide 2"
                        value="{{ $companyLandingSetting->title_slide_image_2 }}" />
                    <x-textarea id="description_slide_image_2" name="description_slide_image_2"
                        label="Deskripsi Slide 2" value="{{ $companyLandingSetting->description_slide_image_2 }}" />

                </div>
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <x-input-file id="slide_image_3" name="slide_image_3" label="Gambar Slide 3" />
                        <small class="text-gray-500">Gambar sudah ada: <a
                                href="{{ asset('storage/company-landing-setting/' . $companyLandingSetting->slide_image_3) }}"
                                target="_blank">{{ $companyLandingSetting->slide_image_3 }}</a></small>
                    </div>
                    <x-input id="title_slide_image_3" name="title_slide_image_3" label="Judul Slide 3"
                        value="{{ $companyLandingSetting->title_slide_image_3 }}" />
                    <x-textarea id="description_slide_image_3" name="description_slide_image_3"
                        label="Deskripsi Slide 3" value="{{ $companyLandingSetting->description_slide_image_3 }}" />

                </div>
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <x-input-file id="slide_image_4" name="slide_image_4" label="Gambar Slide 4" />
                        <small class="text-gray-500">Gambar sudah ada: <a
                                href="{{ asset('storage/company-landing-setting/' . $companyLandingSetting->slide_image_4) }}"
                                target="_blank">{{ $companyLandingSetting->slide_image_4 }}</a></small>
                    </div>
                    <x-input id="title_slide_image_4" name="title_slide_image_4" label="Judul Slide 4"
                        value="{{ $companyLandingSetting->title_slide_image_4 }}" />
                    <x-textarea id="description_slide_image_4" name="description_slide_image_4"
                        label="Deskripsi Slide 4" value="{{ $companyLandingSetting->description_slide_image_4 }}" />

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
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <x-input-file id="slide_image_1" name="slide_image_1" label="Gambar Slide 1" />
                    </div>
                    <x-input id="title_slide_image_1" name="title_slide_image_1" label="Judul Slide 1" />
                    <x-textarea id="description_slide_image_1" name="description_slide_image_1"
                        label="Deskripsi Slide 1" />
                </div>
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <x-input-file id="slide_image_2" name="slide_image_2" label="Gambar Slide 2" />
                    </div>
                    <x-input id="title_slide_image_2" name="title_slide_image_2" label="Judul Slide 2" />
                    <x-textarea id="description_slide_image_2" name="description_slide_image_2"
                        label="Deskripsi Slide 2" />
                </div>
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <x-input-file id="slide_image_3" name="slide_image_3" label="Gambar Slide 3" />
                    </div>
                    <x-input id="title_slide_image_3" name="title_slide_image_3" label="Judul Slide 3" />
                    <x-textarea id="description_slide_image_3" name="description_slide_image_3"
                        label="Deskripsi Slide 3" />
                </div>
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <x-input-file id="slide_image_4" name="slide_image_4" label="Gambar Slide 4" />
                    </div>
                    <x-input id="title_slide_image_4" name="title_slide_image_4" label="Judul Slide 4" />
                    <x-textarea id="description_slide_image_4" name="description_slide_image_4"
                        label="Deskripsi Slide 4" />
                </div>
                <x-textarea id="about_us" name="about_us" label="Tentang Kami" />
                <x-input id="office_phone" name="office_phone" label="Nomor Telepon Kantor" />
                <x-input id="personal_phone" name="personal_phone" label="Nomor Telepon Personal" />
                <x-input id="email" name="email" label="Email" />

                <x-button-save type="submit" label="Simpan" />
            </form>
        @endif
    </x-card-container>
</x-app-layout>
