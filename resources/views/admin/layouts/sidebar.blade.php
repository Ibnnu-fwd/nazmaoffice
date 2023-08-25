
    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="{{ url('admin')}}" class="text-white text-3xl font-semibold uppercase hover:text-orange-600">Adminpanel</a>
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="{{ url('admin')}}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item hover:text-orange-400">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="{{ url('admin/project')}}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item hover:text-orange-400">
                <i class="fas fa-window-restore mr-3"></i>
                Projek
            </a>
            <a href="{{ url('admin/testimony')}}"class="flex items-center active-nav-link text-white py-4 pl-6 nav-item hover:text-orange-400">
                <i class="fas fa-users mr-3"></i>
                Testimoni
            </a>
            <a href="{{ url('admin/trainers')}}"class="flex items-center active-nav-link text-white py-4 pl-6 nav-item hover:text-orange-400">
                <i class="fas fa-user mr-3"></i>
                Pelatih Tersertifikasi
            </a>
            <a href="{{ url('admin/crew')}}"class="flex items-center active-nav-link text-white py-4 pl-6 nav-item hover:text-orange-400">
                <i class="fas fa-users mr-3"></i>
                Tim Kreatif
            </a>
            <a href="{{ url('admin/partnership')}}"class="flex items-center active-nav-link text-white py-4 pl-6 nav-item hover:text-orange-400">
                <i class="fas fa-users mr-3"></i>
                Partnership
            </a> 
            <a href="{{ url('admin/blog')}}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item hover:text-orange-400">
                <i class="fas fa-blog mr-3"></i>
                Blog
            </a>
            <a href="{{ url('admin/gallery')}}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item hover:text-orange-400">
                <i class="fas fa-images mr-3"></i>
                Galeri
            </a>
        </nav>
       
    </aside>