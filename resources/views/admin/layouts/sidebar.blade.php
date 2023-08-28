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
            <p class="px-3 py-3 text-xs font-semibold text-white uppercase">Perusahaan</p>

            <x-sidebar-menu name="Dashboard" icon="fas fa-home" route="{{ route('admin.index') }}"
                active="{{ request()->routeIs('admin.index') }}" />
            <x-sidebar-menu name="Milestone" icon="fas fa-circle-notch" route="{{ route('admin.milestone') }}"
                active="{{ request()->routeIs('admin.milestone') }}" />
            <x-sidebar-menu name="Partner" icon="fas fa-users" route="{{ route('admin.partner') }}"
                active="{{ request()->routeIs('admin.partner') }}" />
            <x-sidebar-menu name="Alamat" icon="fas fa-location-arrow" route="{{ route('admin.company-address') }}"
                active="{{ request()->routeIs('admin.company-address') }}" />
            <x-sidebar-menu name="Sosial Media" icon="fas fa-heart" route="{{ route('admin.company-social-media') }}"
                active="{{ request()->routeIs('admin.company-social-media') }}" />
            <x-sidebar-menu name="Testimoni" icon="fas fa-comment" route="{{ route('admin.testimonial') }}"
                active="{{ request()->routeIs('admin.testimonial') }}" />
            <x-sidebar-menu name="Tim" icon="fas fa-user-circle" route="{{ route('admin.team') }}"
                active="{{ request()->routeIs('admin.team') }}" />
            <x-sidebar-menu name="Galeri" icon="fas fa-images" route="{{ route('admin.gallery') }}"
                active="{{ request()->routeIs('admin.gallery') }}" />
            <x-sidebar-menu name="Faq" icon="fas fa-question" route="{{ route('admin.faq') }}"
                active="{{ request()->routeIs('admin.faq') }}" />

            <p class="px-3 py-3 text-xs font-semibold text-white uppercase">Pengaturan Halaman</p>

            <x-sidebar-menu name="Landing" icon="fas fa-sticky-note"
                route="{{ route('admin.company-landing-setting') }}"
                active="{{ request()->routeIs('admin.company-landing-setting') }}" />
            <x-sidebar-menu name="Acara" icon="fas fa-sticky-note" route="{{ route('admin.event.setting') }}"
                active="{{ request()->routeIs('admin.event.setting') }}" />
            <x-sidebar-menu name="Tentang Kami" icon="fas fa-sticky-note"
                route="{{ route('admin.about-page-setting') }}"
                active="{{ request()->routeIs('admin.about-page-setting') }}" />

            <p class="px-3 py-3 text-xs font-semibold text-white uppercase">Blog</p>

            <x-sidebar-menu name="Blog" icon="fas fa-blog" route="{{ route('admin.blog') }}"
                active="{{ request()->routeIs('admin.blog') }}" />
            <x-sidebar-menu name="Kategori" icon="fas fa-sort" route="{{ route('admin.blog-category') }}"
                active="{{ request()->routeIs('admin.blog-category') }}" />

            <p class="px-3 py-3 text-xs font-semibold text-white uppercase">Acara</p>

            <x-sidebar-menu name="Acara" icon="fas fa-calendar" route="{{ route('admin.event') }}"
                active="{{ request()->routeIs('admin.event') }}" />
            <x-sidebar-menu name="Peserta" icon="fas fa-users" route="{{ route('admin.event-participant') }}"
                active="{{ request()->routeIs('admin.event-participant') }}" />

            <p class="px-3 py-3 text-xs font-semibold text-white uppercase">Layanan</p>

            <x-sidebar-menu name="Kategori" icon="fas fa-sort" route="{{ route('admin.service-category') }}"
                active="{{ request()->routeIs('admin.service-category') }}" />
            <x-sidebar-menu name="Proyek" icon="fas fa-project-diagram" route="{{ route('admin.service-project') }}"
                active="{{ request()->routeIs('admin.service-project') }}" />
            <x-sidebar-menu name="Layanan" icon="fas fa-th-large" route="{{ route('admin.service') }}"
                active="{{ request()->routeIs('admin.service') }}" />

        </ul>
    </div>
</aside>
