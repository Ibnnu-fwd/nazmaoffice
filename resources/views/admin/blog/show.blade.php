<x-app-layout>
    <section class="py-8 bg-sidebar">
        <div class="max-w-4xl mx-auto px-8 lg:px-0">
            <p class="text-white text-md">
                {{ $blog->blogCategory->title ?? '-' }}
            </p>
            <div class="grid md:grid-cols-2 mt-3">
                <h1 class="text-3xl font-semibold leading-tight text-white">
                    {{ $blog->title }}
                </h1>
                <div class="mt-2 md:mt-0 md:place-self-end text-xs 2xl:text-sm">
                    <p class="text-white">
                        {{ $blog->author_name }}
                    </p>
                    <p class="text-gray-200">
                        {{ date('d F Y', strtotime($blog->created_at)) }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="md:w-1/2 mx-auto mt-10 px-8 lg:px-0">
        <img src="{{ asset('storage/blogs/main-image/' . $blog->main_image) }}"
            class="w-full h-48 md:h-96 object-cover object-center blur-mode rounded-xl" alt="">
        <p class="mt-8 leading-6 text-justify -tracking-tight text-sm">
            {!! $blog->content !!}
        </p>
    </section>
</x-app-layout>
