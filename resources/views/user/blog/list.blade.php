<section class="flex items-center w-full">
    <div class="relative items-center w-full">

        @if ($blogs->count() > 0)
            <div class="grid grid-cols-2 gap-x-6 gap-y-8 mt-8 md:grid-cols-2 lg:grid-cols-4">
                @forelse ($blogs as $blog)
                    <a class="max-w-full z-10" href="{{ route('user.blog.detail', $blog->slug) }}">
                        <img class="w-full bg-gray-200 rounded-lg h-52 object-cover object-center blur-mode"
                            src="{{ asset('storage/blogs/thumbnail/' . $blog->thumbnail) }}" alt="{{ $blog->title }}" />

                        <p class="mt-5 text-sm font-normal leading-6 text-gray-400">
                            {{ \Carbon\Carbon::parse($blog->published_date)->locale('id')->isoFormat('dddd, D MMMM Y') }}
                        </p>
                        <p class="mt-3 text-base text-black font-semibold line-clamp-2">
                            {{ $blog->title }}
                        </p>
                        <div class="mt-3 text-xs 2xl:text-base text-gray-400 line-clamp-2">
                            {!! Str::limit($blog->content, 70) !!}
                        </div>
                    </a>
                @empty
                @endforelse
            </div>
        @else
            <div class="flex flex-col items-center justify-center w-full h-96">
                <p class="mt-5 text-base font-semibold text-gray-400">
                    Belum ada blog yang ditulis
                </p>
            </div>
        @endif
    </div>
</section>
