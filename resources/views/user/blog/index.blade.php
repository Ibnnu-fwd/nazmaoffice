<x-guest-layout>
    <section class="max-w-7xl mx-auto my-12 px-4 md:px-8 xl:px-12 2xl:px-0">
        <div class="grid">
            <div class="bg-primary rounded-2xl text-white p-8 text-center h-40 md:h-44 px-8 md:px-20">
                <h1 class="text-2xl md:text-2xl xl:text-3xl font-semibold">
                    Laman Blog
                </h1>
                <p class="text-md hidden md:block">
                    Kami mendokumentasikan dan mempublikasikannya untuk kamu
                </p>
            </div>
            <form class="md:mt-6 px-4 md:px-20 xl:px-40 transform -translate-y-20 sm:-translate-y-14">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-3 flex items-center pl-3 pointer-events-none">
                        <ion-icon name="search-outline" class="text-gray-300 w-6 h-6"></ion-icon>
                    </div>
                    <input type="search" id="default-search"
                        class="custom-input border-none focus:border focus:border-gray-200 block w-full p-5 pl-14 text-lg text-gray-900 font-light rounded-full shadow-sm"
                        placeholder="Cari" required>
                </div>
            </form>
        </div>

        <div class="text-center gap-y-6">
            <span
                class="bg-orange-800 text-white text-xs 2xl:text-sm font-normal mr-2 px-2.5 py-0.5 rounded-full">Semua</span>
            <span
                class="bg-transparent text-gray-400 text-xs 2xl:text-sm font-normal mr-2 px-2.5 py-0.5 rounded-full">Teknologi</span>
            <span
                class="bg-transparent text-gray-400 text-xs 2xl:text-sm font-normal mr-2 px-2.5 py-0.5 rounded-full">Budaya</span>
            <span
                class="bg-transparent text-gray-400 text-xs 2xl:text-sm font-normal mr-2 px-2.5 py-0.5 rounded-full">Politik</span>
            <span
                class="bg-transparent text-gray-400 text-xs 2xl:text-sm font-normal mr-2 px-2.5 py-0.5 rounded-full">Event</span>
            <span
                class="bg-transparent text-gray-400 text-xs 2xl:text-sm font-normal mr-2 px-2.5 py-0.5 rounded-full">Fenomena</span>
        </div>

        <h1 class="text-2xl font-semibold text-black tracking-tight mt-10">
            Artikel Unggulan
        </h1>

        <div class="grid md:grid-cols-2 gap-6 mt-6">
            @if ($blogs->count() > 0)
            <?php $firstBlog = $blogs->first(); ?>
            <a href="{{route('user.blog.detail', $firstBlog->id)}}">
                <img src="{{ asset('storage/blogs/thumbnail/' . $firstBlog->thumbnail) }}"
                class="w-full md:h-72 lg:h-96 rounded-xl object-cover object-center blur-mode mb-4" alt="">
                <p class="text-gray-400 mb-1 text-xs 2xl:text-sm">{{date('d F Y', strtotime($firstBlog->created_at))}}</p>
                <h1 class="text-xl font-semibold text-black tracking-tight mb-3 line-clamp-2">
                    {{ $firstBlog->title }}
                </h1>
                <div class="text-gray-400 line-clamp-3 text-xs 2xl:text-md">
                    {!!$firstBlog->content!!}
                </div>
            </a>
            @endif

                
            <div class="grid grid-cols-1 gap-y-6 place-content-start">
                @foreach($blogs->take(3) as $blog )

                <a href="{{route('user.blog.detail', $blog->id)}}">
                    <div class="grid grid-cols-1 lg:grid-cols-3 rounded-xl border border-gray-200 p-4 md:border-0 md:p-0">
                        <img src="{{ asset('storage/blogs/thumbnail/' . $blog->thumbnail) }}"
                            class="hidden mx-auto lg:inline-block md:w-36 md:h-36 lg:w-40 lg:h-40 blur-mode object-center object-cover rounded-lg"
                            alt="">
                        <div class="col-span-2">
                            <span class="text-gray-400 text-xs 2xl:text-sm">{{date('d F Y', strtotime($blog->created_at))}}</span>
                            <span class="text-md font-medium text-black line-clamp-2 mt-2">
                                {{$blog->title}}
                            </span>
                            <div class="mt-3 text-xs 2xl:text-sm text-gray-400 line-clamp-2">
                                {!!$blog->content!!}
                            </div>
                            <div class="flex items-center md:hidden text-primary mt-4">Selengkapnya <ion-icon
                                    name="chevron-forward-outline"></ion-icon>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>

        <h1 class="text-2xl font-semibold text-black tracking-tight mt-20">
            Artikel Terbaru
        </h1>

        <section class="flex items-center w-full">
            <div class="relative items-center w-full">

                <div class="grid grid-cols-2 gap-x-6 gap-y-8 mt-8 md:grid-cols-2 lg:grid-cols-4">
                    @foreach ($blogs as $blog)
                    <figure class="max-w-full z-10">
                        <img class="w-full bg-gray-200 rounded-lg h-52 object-cover object-center blur-mode"
                            src="{{ asset('storage/blogs/thumbnail/' . $blog->thumbnail) }}" alt="{{$blog->title}}" />
                    
                        <p class="mt-5 text-sm font-normal leading-6 text-gray-400">
                            {{date('d F Y', strtotime($blog->created_at))}}
                        </p>
                        <p class="mt-3 text-md text-black font-semibold line-clamp-2">
                            {{$blog->title}}
                        </p>
                        <div class="mt-3 text-xs 2xl:text-sm text-gray-400 line-clamp-2">
                            {!! $blog->content !!}
                        </div>
                    </figure>
                    
                    @endforeach
                </div>
            </div>
        </section>
    </section>

    @push('js-internal')
        <script>
            // add loading lazy and decoding async
            const images = document.querySelectorAll('img');
            images.forEach((image) => {
                image.setAttribute('loading', 'lazy');
                image.setAttribute('decoding', 'async');
            });
        </script>
    @endpush
</x-guest-layout>
