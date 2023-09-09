<x-guest-layout>
    @section('title')
        {{ $service->title }}
    @endsection
    {{-- Hero --}}
    <section class="relative flex items-center w-full">
        <div class="relative flex items-center justify-center w-full px-5 py-24 mx-auto md:px-12 2xl:px-0 max-w-7xl">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-24">
                <div class="relative flex-col items-center gap-12 lg:inline-flex md:order-first align-middle">
                    <div class="max-w-xl text-center m-auto lg:text-left items-center" data-aos="fade-right"
                        data-aos-delay="300" data-aos-duration="1000">
                        <div>
                            <p class="text-danger">
                                Layanan NaZMa Office
                            </p>
                            <p class="text-2xl font-bold leading-snug mt-2 tracking-tight text-black sm:text-4xl">
                                {{ $service->title }}
                            </p>
                            <p class="max-w-xl mt-4 text-base tracking-tight text-gray-400">
                                {{ $service->description }}
                            </p>
                        </div>
                        <div class="flex items-center justify-center gap-3 mt-10 lg:flex-row lg:justify-start">
                            @php
                                $message = "Halo Admin NaZMa Office, saya ingin bertanya tentang layanan $service->title";
                                $phone = $service->phone;
                            @endphp
                            <a href="
                            https://api.whatsapp.com/send?phone={{ $phone }}&text={{ $message }}
                            "
                                target="_blank"
                                class="items-center justify-center w-fit px-6 py-3 text-center text-white duration-200 bg-primary border-2 border-primary rounded-full inline-flex hover:bg-purple-700 hover:text-white hover:border-purple-600 lg:w-auto text-md">
                                Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                <div class="order-first hidden lg:block w-full lg:mt-0" data-aos="fade-left" data-aos-delay="300"
                    data-aos-duration="1000">
                    <img class="object-cover h-[25rem] object-center blur-mode w-full mx-auto lg:ml-auto rounded-xl"
                        alt="hero" src="{{ asset('storage/services/' . $service->hero_image) }}">
                </div>
            </div>
        </div>
    </section>

    {{-- Sub Services --}}
    @if (!empty($service->subServices))
        <section aria-labelledby="feature-five" id="feature-five" class="overflow-y-auto bg-white lg:min-h-fit">
            <div class="px-8 py-8 xl:py-24 mx-auto lg:px-16 max-w-7xl md:px-12 xl:px-0 lg:flex">
                <div class="lg:w-1/2">
                    <div class="top-0 pb-16 lg:sticky">
                        <div>
                            <div class="lg:pr-24 md:pr-12">
                                <div>
                                    <p class="text-lg capitalize font-semibold tracking-tight text-black sm:text-2xl">
                                        Kami akan membantu anda
                                    </p>
                                    <p class="max-w-xl mt-4 text-xs 2xl:text-md tracking-tight text-gray-400">
                                        Dengan layanan kami, kami akan membantu anda untuk membangun bisnis anda dengan
                                        cepat dan efisien dengan biaya yang terjangkau dan hasil yang memuaskan
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <div class="flex-shrink-0">
                        <div>
                            <ul class="grid grid-cols-1 gap-12 list-none lg:mt-0 lg:gap-24" role="list">
                                @forelse ($service->subServices as $subService)
                                    <li>
                                        <div>
                                            <p class="mt-5 text-xs 2xl:text-md font-medium leading-6 text-black">
                                                {{ $subService->title }}
                                            </p>
                                        </div>
                                        <div class="mt-2 text-xs 2xl:text-md text-gray-500">
                                            {{ $subService->description }}
                                        </div>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- Benefit --}}
    <section class="bg-white">
        <div class="relative items-center w-full px-5 py-8 xl:py-24 mx-auto md:px-12 2xl:px-0 max-w-7xl">
            <div class="w-full mx-auto text-left">
                <div class="relative flex-col items-center m-auto align-middle">
                    <div class="items-center gap-12 text-left lg:gap-24 lg:inline-flex">
                        <div class="order-first block w-full mt-12 lg:mt-0" data-aos="fade-right" data-aos-delay="300"
                            data-aos-duration="1000">
                            <img class="hidden 2xl:inline-block object-cover h-[25rem] object-center blur-mode rounded-xl w-full mx-auto bg-gray-300 border lg:ml-auto"
                                alt="hero" src="{{ asset('storage/services/' . $service->benefit_image) }}">
                        </div>
                        <div class="flex flex-col m-auto md:order-first" data-aos="fade-left" data-aos-delay="300"
                            data-aos-duration="1000">
                            <div class="max-w-xl">
                                <div>
                                    <p class="text-2xl font-bold tracking-tight text-black">
                                        Benefit Yang Anda Dapatkan
                                    </p>
                                </div>
                            </div>
                            <div class="mt-6 lg:max-w-7xl">
                                <ul role="list" class="grid grid-cols-2 gap-4 list-none lg:gap-6">
                                    @foreach ($service->serviceBenefits as $benefit)
                                        <li>
                                            <div>
                                                <p class="mt-5 text-base font-medium leading-6 text-black">
                                                    {{ $benefit->title }}
                                                </p>
                                            </div>
                                            <div class="mt-2 text-xs 2xl:text-md text-gray-500">
                                                {{ $benefit->description }}
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Project --}}
    @if (!empty($service->serviceProjects) && count($service->serviceProjects) > 0)
        <section class="">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-24 2xl:px-0">
                <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                    <h2 class="mb-4 text-2xl tracking-tight font-bold capitalize text-gray-900">
                        Proyek yang telah kami kerjakan
                    </h2>
                </div>
                <div class="grid md:grid-cols-3 xl:grid-cols-3 gap-6">
                    @forelse ($service->serviceProjects as $project)
                        <div class="bg-white border border-gray-200 rounded-lg shadow p-4" data-aos="fade-up"
                            data-aos-delay="300" data-aos-duration="1000">
                            <a>
                                <img class="rounded-xl"
                                    src="{{ asset('storage/service_project/' . $project->image_1) }}" alt="" />
                            </a>
                            <div class="mt-4 text-start">
                                <a onclick="event.preventDefault();">
                                    <h5
                                        class="mb-2 text-md 2xl:text-md font-semibold tracking-tight line-clamp-2 text-gray-900">
                                        {{ $project->title }}
                                    </h5>
                                </a>
                                <p class="font-normal text-xs 2xl:text-md text-gray-400">
                                    {{ \Carbon\Carbon::parse($project->created_at)->locale('id')->isoFormat('dddd, D MMMM Y') }}
                                </p>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </section>
    @endif

    {{-- Offering --}}
    <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-8 lg:px-12 2xl:px-0 grid md:grid-cols-2 ">
            <div data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
                <h1 class="text-2xl font-bold mb-2">
                    Kami Siap <br>
                    Membantu Anda Tumbuh
                </h1>
                <p class="text-gray-400  text-xs 2xl:text-md 2xl:w-1/2 mb-4 lg:mb-0">
                    Kesempatan berharga bagi individu yang ingin mengembangkan keterampilan dalam membangun bisnis
                </p>
            </div>
            <div class="flex items-center justify-start md:justify-end mt-6 md:mt-0" data-aos="fade-left"
                data-aos-delay="300" data-aos-duration="1000">
                @php
                    $message = "Halo Admin NaZMa Office, saya ingin bertanya tentang layanan $service->title";
                    $phone = $service->phone;
                @endphp
                <a href="
                https://api.whatsapp.com/send?phone={{ $phone }}&text=Halo%20Admin%20NaZMa%20Office%2C%20saya%20ingin%20bertanya%20tentang%20layanan%20{{ $service->phone }}
                "
                    target="_blank"
                    class="items-center 2xl:text-md justify-center w-fit px-6 py-3 text-center text-white duration-200 bg-primary border-2 border-primary rounded-full inline-flex hover:bg-purple-700 hover:text-white hover:border-purple-600 lg:w-auto text-md">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    <section class="py-12 bg-white">
        <p class="text-2xl font-bold tracking-tight text-black text-center">
            Apa Kata Mereka
        </p>
        <div id="testimonial" class="mt-8">
            <div class="carousel carousel-center p-4 space-x-4 w-full md:place-content-center" data-aos="fade-up"
                data-aos-delay="500">
                @forelse ($testimonials as $testimonial)
                    <div id="item{{ $testimonial->id }}" class="carousel-item">
                        <div class="max-w-sm p-12 md:p-6 bg-white rounded-lg border border-gray-50">
                            <div class="flex justify-between items-center mb-4">
                                <img src="{{ asset('storage/testimonial/' . $testimonial->profile_picture) }}"
                                    class=" blur-mode w-16 h-16 object-center object-cover rounded-full"
                                    alt="">
                                <div class="flex items-center">
                                    <ion-icon name="star" class="text-primary h-4 w-4 me-1"></ion-icon>
                                    <span class="text-xs 2xl:text-md text-primary">
                                        {{ number_format($testimonial->rating, 1, '.', ',') }}
                                    </span>
                                </div>
                            </div>
                            <div>
                                <h5 class="2xl:text-md font-semibold tracking-tight text-gray-900">
                                    {{ ucwords($testimonial->fullname) }}
                                </h5>
                                <span class="text-xs 2xl:text-md -mt-2 tracking-tight text-gray-400">
                                    {{ ucwords($testimonial->job) }}
                                </span>
                            </div>
                            <p class="mt-3 font-normal text-gray-500 text-xs 2xl:text-md">
                                {{ $testimonial->testimonial }}
                            </p>
                        </div>
                    </div>
                @empty
                    <p class="text-center">
                        Belum ada testimoni
                    </p>
                @endforelse
            </div>
        </div>
    </section>

</x-guest-layout>
