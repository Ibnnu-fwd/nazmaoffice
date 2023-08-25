<aside class="relative bg-sidebar w-64 hidden sm:block shadow-xl">
    <div class="py-4 text-center">
        <a href="{{ url('admin') }}" class="text-white text-lg font-semibold uppercase hover:text-orange-600">
            Admin Panel
        </a>
    </div>
    <nav class="text-white text-xs 2xl:text-sm font-medium">
        <a href="{{ url('admin') }}"
            class="flex items-center active-nav-link  py-4 pl-6 nav-item hover:text-orange-400 {{ request()->routeIs('admin.index') ? 'text-orange-400' : 'text-white' }}">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="{{ url('admin/project') }}"
            class="flex items-center active-nav-link  py-4 pl-6 nav-item hover:text-orange-400 {{ request()->routeIs('admin.project') ? 'text-orange-400' : 'text-white' }}">
            <i class="fas fa-window-restore mr-3"></i>
            Projek
        </a>
        <a
            href="{{ url('admin/testimony') }}"class="flex items-center active-nav-link  py-4 pl-6 nav-item hover:text-orange-400 {{ request()->routeIs('admin.testimony') ? 'text-orange-400' : 'text-white' }}">
            <i class="fas fa-users mr-3"></i>
            Testimoni
        </a>
        <a
            href="{{ url('admin/trainers') }}"class="flex items-center active-nav-link  py-4 pl-6 nav-item hover:text-orange-400 {{ request()->routeIs('admin.trainers') ? 'text-orange-400' : 'text-white' }}">
            <i class="fas fa-user mr-3"></i>
            Pelatih Tersertifikasi
        </a>
        <a
            href="{{ url('admin/crew') }}"class="flex items-center active-nav-link  py-4 pl-6 nav-item hover:text-orange-400 {{ request()->routeIs('admin.crew') ? 'text-orange-400' : 'text-white' }}">
            <i class="fas fa-users mr-3"></i>
            Tim Kreatif
        </a>
        <a
            href="{{ url('admin/partnership') }}"class="flex items-center active-nav-link  py-4 pl-6 nav-item hover:text-orange-400 {{ request()->routeIs('admin.partnership') ? 'text-orange-400' : 'text-white' }}">
            <i class="fas fa-users mr-3"></i>
            Partnership
        </a>
        <a href="{{ route('admin.blog-category') }}"
            class="flex items-center active-nav-link py-4 pl-6 nav-item hover:text-orange-400 {{ request()->routeIs('admin.blog-category') ? 'text-orange-400' : 'text-white' }}">
            <i class="fas fa-blog mr-3"></i>
            Kategori Blog
        </a>
        <a href="{{ route('admin.blog') }}"
            class="flex items-center active-nav-link  py-4 pl-6 nav-item hover:text-orange-400 {{ request()->routeIs('admin.blog.*') ? 'text-orange-400' : 'text-white' }}">
            <i class="fas fa-blog mr-3"></i>
            Blog
        </a>
        <a href="{{ url('admin/gallery') }}"
            class="flex items-center active-nav-link  py-4 pl-6 nav-item hover:text-orange-400 {{ request()->routeIs('admin.gallery') ? 'text-orange-400' : 'text-white' }}">
            <i class="fas fa-images mr-3"></i>
            Galeri
        </a>
        <a href="{{ url('admin/event') }}"
            class="flex items-center active-nav-link  py-4 pl-6 nav-item hover:text-orange-400 {{ request()->routeIs('admin.event') ? 'text-orange-400' : 'text-white' }}">
            <i class="fas fa-puzzle-piece mr-3"></i>
            Acara
        </a>
    </nav>

</aside>
