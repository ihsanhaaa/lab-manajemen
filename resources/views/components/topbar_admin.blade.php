<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ url('/') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('dason/assets/images/Logo-Kab-Sambas.png') }}" alt="" height="60">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('dason/assets/images/Logo-Kab-Sambas-0KE-w.png') }}" alt=""
                            height="54"> <span class="logo-txt"></span>
                    </span>
                </a>

                <a href="{{ url('/') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('dason/assets/images/Logo-Kab-Sambas.png') }}" alt="" height="60">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('dason/assets/images/Logo-Kab-Sambas-0KE-w.png') }}" alt=""
                            height="54"> <span class="logo-txt"></span>
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-light-subtle border-start border-end"
                    id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    @if (Auth::user()->picture)
                        <img src="{{ Auth::user()->picture }}" alt="" height="40" style="border-radius: 50px;">
                    @else
                        <img class="rounded-circle header-profile-user"
                            src="{{ asset('dason/assets/images/users/kepala-keluarga.jpg') }}" alt="Header Avatar">
                    @endif

                    <span class="d-none d-xl-inline-block ms-1 fw-medium">Hai, {{ Auth::user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('profil.index') }}"><i
                            class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profil Saya</a>
                    <a class="dropdown-item" href="{{ route('profil.edit-password', encrypt(Auth::user()->id)) }}"><i
                            class="mdi mdi-lock font-size-16 align-middle me-1"></i> Ganti Password</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        style="color: red">
                        <i class="mdi mdi-logout font-size-16 align-middle me-1" style="color: red"></i> Keluar
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>
