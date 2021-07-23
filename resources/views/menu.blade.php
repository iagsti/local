<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow-sm mb-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <i class="bi bi-building"></i>
            LOCAIS @yield('title')
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-5 ms-auto d-flex justify-content-center">
                <li class="me-3">
                    <a href="/" class="nav-link {{ Route::currentRouteName() == 'local.home' ? 'active' : '' }}">
                        <i class="d-block mx-auto mb-1 bi bi-house"
                            style="font-size: 1.5rem; width: 24px; height: 24px;"></i>
                        Home
                    </a>
                </li>
                <li class="me-3">
                    <a href="{{ route('local.create') }}"
                        class="nav-link {{ Route::currentRouteName() == 'local.create' ? 'active' : '' }}">
                        <i class="d-block mx-auto mb-1 bi bi-file-plus"
                            style="font-size: 1.5rem; width: 24px; height: 24px;"></i>
                        Adicionar
                    </a>
                </li>
                <li>
                    <a href="{{ route('local.index') }}"
                        class="nav-link {{ Route::currentRouteName() == 'local.index' ? 'active' : '' }}">
                        <i class="d-block mx-auto mb-1 bi bi-list"
                            style="font-size: 1.5rem; width: 24px; height: 24px;"></i>
                        Listar
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
