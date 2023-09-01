<x-guest-layout>
    @section('title')
        {{ $blog->title }}
    @endsection

    <section class="py-8 bg-primary">
        <div class="max-w-4xl mx-auto px-8 lg:px-0">
            <p class="text-white text-md">
                {{ $blog->blogCategory->title }}
            </p>
            <div class="grid md:grid-cols-3 mt-3">
                <div class="col-span-2">
                    <h1 class="text-3xl font-semibold leading-tight text-white">
                        {{ $blog->title }}
                    </h1>
                    <p class="text-gray-200 mt-4 text-xs 2xl:text-md">
                        {{ $blog->tag }}
                    </p>
                </div>
                <div class="mt-2 md:mt-0 md:place-self-end text-xs 2xl:text-md">
                    <p class="text-white">
                        {{ $blog->author_name }}
                    </p>
                    <p class="text-gray-200">
                        {{ date('d F Y', strtotime($blog->published_date)) }}
                    </p>

                    <p class="text-white mt-8">
                        {{ $viewCount }}
                        <strong>
                            Pengunjung
                        </strong>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-4xl mx-auto mt-10 px-8 lg:px-0">
        <img src="{{ asset('storage/blogs/main-image/' . $blog->main_image) }}"
            class="w-full h-48 md:h-[500px] object-cover object-center blur-mode rounded-xl" alt="">
        <div class="mt-8 leading-6 text-justify -tracking-tight text-sm 2xl:text-md">
            {!! $blog->content !!}
        </div>

        <hr class="text-gray-200 my-24">

        <h1 class="font-semibold text-center text-2xl text-black tracking-tight">
            Artikel Terkait
        </h1>
        <section class="flex items-center justify-center w-full my-12">
            <div class="relative items-center justify-center w-full">
                <div class="grid grid-cols-2 gap-x-6 gap-y-8 mt-8 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($blogs as $data)
                        <a href="{{ route('user.blog.detail', $data->slug) }}">
                            <img class="w-full bg-gray-200 h-40 rounded-lg object-cover object-center blur-mode"
                                src="{{ asset('storage/blogs/thumbnail/' . $data->thumbnail) }}" alt=""
                                width="1310" height="873">

                            <p class="mt-5 text-md font-normal leading-6 text-gray-400">
                                {{ date('d F Y', strtotime($data->published_date)) }}
                            </p>
                            <p class="mt-3 text-md text-black font-semibold line-clamp-2">
                                {{ $data->title }}
                            </p>
                            <div class="mt-3 text-xs 2xl:text-md text-gray-400 line-clamp-2">
                                {!! $data->content !!}
                            </div>
                        </a>
                    @endforeach
                </div>
                @if ($blogs->count() > 3)
                    <div onclick="window.location.href='{{ route('user.blog.detail', $blogs->last()->slug) }}'"
                        class="grid grid-cols-1 mt-10 md:grid-cols-2 lg:grid-cols-3 gap-6 rounded-xl border border-gray-200 p-4 md:border-0 md:p-0">
                        <img src="{{ asset('assets/images/hero2.jpg') }}"
                            class="hidden h-52 mx-auto lg:inline-block object-center object-cover blur-mode rounded-lg"
                            alt="">
                        <div class="col-span-2">
                            <span class="text-gray-400 text-sm">
                                {{ date('d F Y', strtotime($blogs->last()->published_date)) }}
                            </span>
                            <span class="text-lg font-semibold text-black line-clamp-2 mt-2">
                                {{ $blogs->last()->title }}
                            </span>
                            <p class="text-gray-400 line-clamp-2 mt-2 text-xs 2xl:text-md">
                                {!! $blogs->last()->content !!}
                            </p>
                            <div class="flex gap-x-2 items-center mt-5">
                                {{-- <img src="{{ asset('assets/images/hero1.jpg') }}"
                                    class="w-8 h-8 rounded-full object-cover object-center blur-mode" alt=""> --}}
                                <p class="text-sm">
                                    {{ $blogs->last()->author_name }}
                                </p>
                            </div>
                            <div class="flex items-center md:hidden text-primary mt-4">Selengkapnya <ion-icon
                                    name="chevron-forward-outline"></ion-icon>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>
    </section>
</x-guest-layout>
