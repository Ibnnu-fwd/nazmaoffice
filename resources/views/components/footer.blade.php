{{-- Footer --}}
<footer class="bg-white mt-10">
    <div class="px-4 py-12 mx-auto max-w-7xl lg:px-12 2xl:px-0">
        <div class="grid md:grid-cols-2 gap-12 md:gap-28">
            <div>
                @php
                    $companyLandingSetting = \App\Models\CompanyLandingSetting::first();
                @endphp
                <div class="mb-8">
                    <h1 class="font-semibold text-lg text-black mb-2">NaZMa Office</h1>
                    <p class="text-gray-400 text-xs 2xl:text-md">
                        {{ $companyLandingSetting->about_us }}
                    </p>
                </div>

                <div class="mb-3">
                    <h1 class="font-semibold text-xs 2xl:text-md text-black">No. Telepon Kantor</h1>
                    <p class="text-gray-400 text-xs 2xl:text-md">
                        {{ $companyLandingSetting->office_phone }}
                    </p>
                </div>

                <div class="mb-3">
                    <h1 class="font-semibold text-xs 2xl:text-md text-black">No. Handphone</h1>
                    <p class="text-gray-400 text-xs 2xl:text-md">
                        {{ $companyLandingSetting->personal_phone }}
                    </p>
                </div>

                <div class="mb-3">
                    <h1 class="font-semibold text-xs 2xl:text-md text-black">Email</h1>
                    <p class="text-gray-400 text-xs 2xl:text-md">
                        {{ $companyLandingSetting->email }}
                    </p>
                </div>
            </div>
            <div>
                <div class="mb-6">
                    <h1 class="font-semibold text-xs 2xl:text-md text-black">Alamat</h1>
                    @php
                        $companyAddresses = \App\Models\CompanyAddress::all();
                    @endphp
                    <ul class="list-disc list-inside mt-6 list">
                        @forelse ($companyAddresses as $companyAddress)
                            <li class="md:pl-6 mb-2">
                                <span class="font-medium text-black text-xs 2xl:text-md">
                                    {{ $companyAddress->title }}
                                </span>
                                <p class="text-gray-400 pl-5 text-xs 2xl:text-md">
                                    <a href="{{ $companyAddress->link }}" target="_blank">
                                        {{ $companyAddress->address }}
                                    </a>
                                </p>
                            </li>
                        @empty
                        @endforelse
                    </ul>
                </div>

                <div>
                    <h1 class="font-semibold text-xs 2xl:text-md text-black">Ikut Kami</h1>
                    <div class="flex gap-2 mt-3" id="social-media">
                        @php
                            $companySocialMedias = \App\Models\CompanySocialMedia::all();
                        @endphp

                        @foreach ($companySocialMedias as $companySocialMedia)
                            <a href="{{ $companySocialMedia->link }}" target="_blank">
                                {!! $companySocialMedia->icon !!}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-primary py-4">
        <p class="text-center text-white text-xs 2xl:text-md">
            CV. NaZMa Office. <br>
            Yogyakarta, Indonesia
        </p>
    </div>
</footer>
