<x-guest-layout>
    @section('title')
        Blog
    @endsection
    <section class="max-w-7xl mx-auto my-12 px-4 md:px-8 xl:px-12 2xl:px-0">
        <div class="grid">
            <div class="bg-primary rounded-2xl text-white p-8 text-center h-40 md:h-44 px-8 md:px-20">
                <h1 class="text-2xl md:text-2xl xl:text-3xl font-semibold">
                    Laman Blog
                </h1>
                <p class="text-base hidden md:block">
                    Kami mendokumentasikan dan mempublikasikannya untuk anda
                </p>
            </div>
            <form class="md:mt-6 px-4 md:px-20 xl:px-40 transform -translate-y-20 sm:-translate-y-14">
                <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-3 flex items-center pl-3 pointer-events-none">
                        <ion-icon name="search-outline" class="text-gray-300 w-6 h-6"></ion-icon>
                    </div>
                    <input type="search" id="search" nane="search"
                        class="custom-input border-none focus:border focus:border-gray-200 block w-full p-5 pl-14 text-lg text-gray-900 font-light rounded-full shadow-sm"
                        placeholder="Cari" required>
                </div>
            </form>
        </div>

        <div class="text-center gap-y-6">
            <span id="category-0" onclick="window.location.reload()"
                class="bg-orange-800 cursor-pointer
                text-white text-xs 2xl:text-md font-normal mr-2 px-2.5 py-0.5 rounded-full">Semua</span>
            @foreach ($blogCategories as $blogCategory)
                <span id="category-{{ $blogCategory->id }}" onclick="filterCategory({{ $blogCategory->id }})"
                    class="bg-transparent cursor-pointer text-gray-400 text-xs 2xl:text-md font-normal mr-2 px-2.5 py-0.5 rounded-full">
                    {{ $blogCategory->title }}
                </span>
            @endforeach
        </div>
        <div id="default-container">
            <h1 class="text-2xl font-semibold text-black tracking-tight mt-10">
                Artikel Unggulan
            </h1>

            <div class="grid md:grid-cols-2 gap-6 mt-6">
                @if ($featuredBlogs->count() > 0)
                    <?php $firstBlog = $featuredBlogs->first(); ?>
                    <a href="{{ route('user.blog.detail', $firstBlog->slug) }}">
                        <img src="{{ asset('storage/blogs/thumbnail/' . $firstBlog->thumbnail) }}"
                            class="w-full md:h-72 lg:h-96 rounded-xl object-cover object-center blur-mode mb-4"
                            alt="">
                        <p class="text-gray-400 mb-1 text-xs 2xl:text-md">
                            {{ \Carbon\Carbon::parse($firstBlog->published_date)->locale('id')->isoFormat('dddd, D MMMM Y') }}
                        </p>
                        <h1 class="text-lg font-semibold text-black tracking-tight mb-3 line-clamp-2">
                            {{ $firstBlog->title }}
                        </h1>
                        <div class="text-gray-400 line-clamp-3 text-xs 2xl:text-md">
                            {!! Str::limit($firstBlog->content, 300) !!}
                        </div>
                    </a>
                @endif


                <div class="grid grid-cols-1 gap-y-6 place-content-start">
                    @foreach ($featuredBlogs->skip(1)->take(3) as $blog)
                        <a href="{{ route('user.blog.detail', $blog->slug) }}">
                            <div
                                class="grid grid-cols-1 lg:grid-cols-3 rounded-xl border border-gray-200 p-4 md:border-0 md:p-0">
                                <img src="{{ asset('storage/blogs/thumbnail/' . $blog->thumbnail) }}"
                                    class="hidden mx-auto lg:inline-block md:w-36 md:h-36 lg:w-40 lg:h-40 blur-mode object-center object-cover rounded-lg"
                                    alt="">
                                <div class="col-span-2">
                                    <span class="text-gray-400 text-xs 2xl:text-md">
                                        {{ \Carbon\Carbon::parse($blog->published_date)->locale('id')->isoFormat('dddd, D MMMM Y') }}

                                    </span>
                                    <span class="text-base font-semibold text-black line-clamp-2 mt-2">
                                        {{ $blog->title }}
                                    </span>
                                    <div class="mt-3 text-xs 2xl:text-md text-gray-400 line-clamp-2">
                                        {!! Str::limit($blog->content, 70) !!}
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
                            <a class="max-w-full z-10" href="{{ route('user.blog.detail', $blog->slug) }}">
                                <img class="w-full bg-gray-200 rounded-lg h-52 object-cover object-center blur-mode"
                                    src="{{ asset('storage/blogs/thumbnail/' . $blog->thumbnail) }}"
                                    alt="{{ $blog->title }}" />

                                <p class="mt-5 text-md font-normal leading-6 text-gray-400">
                                    {{ \Carbon\Carbon::parse($blog->published_date)->locale('id')->isoFormat('dddd, D MMMM Y') }}
                                </p>
                                <p class="mt-3 text-base text-black font-semibold line-clamp-2">
                                    {{ $blog->title }}
                                </p>
                                <div class="mt-3 text-xs 2xl:text-md text-gray-400 line-clamp-2">
                                    {!! Str::limit($blog->content, 70) !!}
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>

        <div id="search-container"></div>
    </section>

    @push('js-internal')
        <script>
            // add loading lazy and decoding async
            const images = document.querySelectorAll('img');
            images.forEach((image) => {
                image.setAttribute('loading', 'lazy');
                image.setAttribute('decoding', 'async');
            });

            function filterCategory(category_id) {
                $.ajax({
                    type: "GET",
                    url: "{{ route('user.blog.filter', ':category_id') }}".replace(':category_id',
                        category_id),
                    success: function(response) {
                        if (response != null) {
                            $('#default-container').addClass('hidden');
                            $('#search-container').html(response);
                        } else {
                            $('#default-container').removeClass('hidden');
                            $('#search-container').html('');
                        }
                    }
                });

                // set active class
                let categories = document.querySelectorAll('[id^="category-"]');
                categories.forEach((category) => {
                    category.classList.remove('bg-orange-800');
                    category.classList.remove('text-white');
                    category.classList.add('bg-transparent');
                    category.classList.add('text-gray-400');
                });

                let category = document.getElementById('category-' + category_id);
                category.classList.remove('bg-transparent');
                category.classList.remove('text-gray-400');
                category.classList.add('bg-orange-800');
                category.classList.add('text-white');

                // scroll to top
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });

            }

            $(function() {
                $('#search').on('keypress', function(e) {
                    if (e.which == 13) {
                        e.preventDefault();
                        let search = $(this).val();
                        $.ajax({
                            type: "GET",
                            url: "{{ route('user.blog.search') }}",
                            data: {
                                search: search
                            },
                            success: function(response) {
                                if (response != null) {
                                    $('#default-container').addClass('hidden');
                                    $('#search-container').html(response);
                                } else {
                                    $('#default-container').removeClass('hidden');
                                    $('#search-container').html('');
                                }
                            }
                        });
                    }
                });

                // fix list not styled in content
                let lists = document.querySelectorAll('.content ul');
                lists.forEach((list) => {
                    list.classList.add('list-disc');
                    list.classList.add('list-inside');
                    list.classList.add('ml-4');
                });

                // fix list not styled in content
                let lists2 = document.querySelectorAll('.content ol');
                lists2.forEach((list) => {
                    list.classList.add('list-decimal');
                    list.classList.add('list-inside');
                    list.classList.add('ml-4');
                });
            });
        </script>
    @endpush
</x-guest-layout>
