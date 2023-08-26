<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button"
    class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-4 py-8 overflow-y-auto bg-sidebar">
        <ul class="space-y-2">
            <x-sidebar-menu name="Dashboard" icon="fas fa-home" route="{{ route('admin.index') }}"
                active="{{ request()->routeIs('admin.index') }}" />

            <p class="px-3 py-3 text-xs font-semibold text-white uppercase">Blog</p>

            <x-sidebar-menu name="Blog" icon="fas fa-blog" route="{{ route('admin.blog') }}"
                active="{{ request()->routeIs('admin.blog') }}" />
            <x-sidebar-menu name="Kategori" icon="fas fa-sort" route="{{ route('admin.blog-category') }}"
                active="{{ request()->routeIs('admin.blog-category') }}" />

            <p class="px-3 py-3 text-xs font-semibold text-white uppercase">Acara</p>

            <x-sidebar-menu name="Acara" icon="fas fa-calendar" route="{{ route('admin.event') }}"
                active="{{ request()->routeIs('admin.event') }}" />
            <x-sidebar-menu name="Konfigurasi Halaman" icon="fas fa-cog" route="{{ route('admin.event.setting') }}"
                active="{{ request()->routeIs('admin.event.setting') }}" />
        </ul>
    </div>
</aside>
