<section class="flex items-center w-full">
    <div class="relative items-center w-full">

        <div class="grid grid-cols-2 gap-x-6 gap-y-8 mt-8 md:grid-cols-2 lg:grid-cols-4">
            @forelse ($blogs as $blog)
                <a class="max-w-full z-10" href="{{ route('user.blog.detail', $blog->slug) }}">
                    <img class="w-full bg-gray-200 rounded-lg h-52 object-cover object-center blur-mode"
                        src="{{ asset('storage/blogs/thumbnail/' . $blog->thumbnail) }}" alt="{{ $blog->title }}" />

                    <p class="mt-5 text-sm font-normal leading-6 text-gray-400">
                        {{ date('d F Y', strtotime($blog->created_at)) }}
                    </p>
                    <p class="mt-3 text-md text-black font-semibold line-clamp-2">
                        {{ $blog->title }}
                    </p>
                    <div class="mt-3 text-xs 2xl:text-sm text-gray-400 line-clamp-2">
                        {!! $blog->content !!}
                    </div>
                </a>
            @empty
                {{-- alert empty --}}
                <div class="mt-4 text-center">
                    <a href="#" onclick="event.preventDefault();">
                        <h5 class="mb-2 text-md 2xl:text-md font-semibold tracking-tight line-clamp-2 text-gray-900">
                            Belum ada proyek
                        </h5>
                    </a>
                </div>
            @endforelse
        </div>
    </div>
</section>
