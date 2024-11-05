text/x-generic navbar_admin.blade.php ( HTML document, ASCII text, with CRLF line terminators )
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                @role('Super Admin')
                <li>
                    <a href="{{ route('home') }}">
                        <i data-feather="home"></i>
                        {{-- <span class="badge rounded-pill bg-success-subtle text-success float-end">9+</span> --}}
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data-spasial') }}">
                        <i data-feather="map"></i>
                        <span data-key="t-chat">Data Spasial</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data-profil') }}">
                        <i data-feather="activity"></i>
                        <span data-key="t-chat">Profil Keluarga</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('profil.index') }}">
                        <i data-feather="user"></i>
                        <span data-key="t-chat">Profil Saya</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('roles.index') }}">
                        <i data-feather="lock"></i>
                        <span data-key="t-chat">Peran</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('users.index') }}">
                        <i data-feather="users"></i>
                        <span data-key="t-chat">Pengguna</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('p3ke.index') }}">
                        <i data-feather="file-minus"></i>
                        <span data-key="t-chat">Data P3KE</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('data-program.index') }}">
                        <i data-feather="cast"></i>
                        <span data-key="t-chat">Data Program</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('data-kriteria.index') }}">
                        <i data-feather="list"></i>
                        <span data-key="t-chat">Data Kriteria</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="database"></i>
                        <span data-key="t-sdk">Satu Data Kemiskinan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('dashboard.sdk.index') }}">
                                <i data-feather="home"></i>
                                <span data-key="t-chat">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('data-spasial.satu-data-kemiskinan') }}">
                                <i data-feather="layers"></i>
                                <span data-key="t-chat">Data Spasial</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pendidikan.index') }}">
                                <i data-feather="book-open"></i>
                                <span data-key="t-chat">Pendidikan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('perkim.index') }}">
                                <i data-feather="map-pin"></i>
                                <span data-key="t-chat">Perkim LH</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dinsos.index') }}">
                                <i data-feather="package"></i>
                                <span data-key="t-chat">Dinsos PMD</span>
                            </a>
                        </li>

                    </ul>
                </li>

                @elseif (Auth::user()->hasRole('Admin'))
                <li>
                    <a href="{{ route('home') }}">
                        <i data-feather="home"></i>
                        {{-- <span class="badge rounded-pill bg-success-subtle text-success float-end">9+</span> --}}
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data-spasial') }}">
                        <i data-feather="map"></i>
                        <span data-key="t-chat">Data Spasial</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data-profil') }}">
                        <i data-feather="activity"></i>
                        <span data-key="t-chat">Profil Keluarga</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('profil.index') }}">
                        <i data-feather="user"></i>
                        <span data-key="t-chat">Profil Saya</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('roles.index') }}">
                        <i data-feather="lock"></i>
                        <span data-key="t-chat">Peran</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('users.index') }}">
                        <i data-feather="users"></i>
                        <span data-key="t-chat">Pengguna</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('p3ke.index') }}">
                        <i data-feather="file-minus"></i>
                        <span data-key="t-chat">Data P3KE</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('program') }}">
                        <i data-feather="cast"></i>
                        <span data-key="t-chat">Data Program</span>
                    </a>
                </li>

                @elseif (Auth::user()->hasRole('KABID'))
                <li>
                    <a href="{{ route('home') }}">
                        <i data-feather="home"></i>
                        {{-- <span class="badge rounded-pill bg-success-subtle text-success float-end">9+</span> --}}
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data-spasial') }}">
                        <i data-feather="map"></i>
                        <span data-key="t-chat">Data Spasial</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data-profil') }}">
                        <i data-feather="activity"></i>
                        <span data-key="t-chat">Profil Keluarga</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('profil.index') }}">
                        <i data-feather="user"></i>
                        <span data-key="t-chat">Profil Saya</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('roles.index') }}">
                        <i data-feather="lock"></i>
                        <span data-key="t-chat">Peran</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('users.index') }}">
                        <i data-feather="users"></i>
                        <span data-key="t-chat">Pengguna</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('p3ke.index') }}">
                        <i data-feather="file-minus"></i>
                        <span data-key="t-chat">Data P3KE</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('data-program.index') }}">
                        <i data-feather="cast"></i>
                        <span data-key="t-chat">Data Program</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('data-kriteria.index') }}">
                        <i data-feather="list"></i>
                        <span data-key="t-chat">Data Kriteria</span>
                    </a>
                </li>

                @elseif (Auth::user()->hasRole('KABAN'))
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="file-text"></i>
                        <span data-key="t-p3ke">P3KE</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        
                        <li>
                            <a href="{{ route('home') }}">
                                <i data-feather="home"></i>
                                {{-- <span class="badge rounded-pill bg-success-subtle text-success float-end">9+</span> --}}
                                <span data-key="t-dashboard">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('data-spasial') }}">
                                <i data-feather="map"></i>
                                <span data-key="t-chat">Data Spasial</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('data-profil') }}">
                                <i data-feather="activity"></i>
                                <span data-key="t-chat">Profil Keluarga</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('profil.index') }}">
                                <i data-feather="user"></i>
                                <span data-key="t-chat">Profil Saya</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('roles.index') }}">
                                <i data-feather="lock"></i>
                                <span data-key="t-chat">Peran</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('users.index') }}">
                                <i data-feather="users"></i>
                                <span data-key="t-chat">Pengguna</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('p3ke.index') }}">
                                <i data-feather="file-minus"></i>
                                <span data-key="t-chat">Data P3KE</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('data-program.index') }}">
                                <i data-feather="cast"></i>
                                <span data-key="t-chat">Data Program</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('data-kriteria.index') }}">
                                <i data-feather="list"></i>
                                <span data-key="t-chat">Data Kriteria</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="database"></i>
                        <span data-key="t-sdk">Satu Data Kemiskinan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('dashboard.sdk.index') }}">
                                <i data-feather="monitor"></i>
                                <span data-key="t-chat">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('data-spasial.satu-data-kemiskinan') }}">
                                <i data-feather="layers"></i>
                                <span data-key="t-chat">Data Spasial</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pendidikan.index') }}">
                                <i data-feather="book-open"></i>
                                <span data-key="t-chat">Pendidikan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('perkim.index') }}">
                                <i data-feather="map-pin"></i>
                                <span data-key="t-chat">Perkim LH</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dinsos.index') }}">
                                <i data-feather="package"></i>
                                <span data-key="t-chat">Dinsos PMD</span>
                            </a>
                        </li>

                    </ul>
                </li>

                @elseif (Auth::user()->hasRole('Operator Desa'))
                <li>
                    <a href="{{ route('home') }}">
                        <i data-feather="home"></i>
                        {{-- <span class="badge rounded-pill bg-success-subtle text-success float-end">9+</span> --}}
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data-profil-desa') }}">
                        <i data-feather="activity"></i>
                        <span data-key="t-chat">Profil Keluarga</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profil.index') }}">
                        <i data-feather="user"></i>
                        <span data-key="t-chat">Profil Saya</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('p3ke.index') }}">
                        <i data-feather="file-minus"></i>
                        <span data-key="t-chat">Data P3KE</span>
                    </a>
                </li>

                @elseif (Auth::user()->hasRole('Verifikator'))
                <li>
                    <a href="{{ route('home') }}">
                        <i data-feather="home"></i>
                        {{-- <span class="badge rounded-pill bg-success-subtle text-success float-end">9+</span> --}}
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                <li>
                        <a href="{{ route('data-profil-desa') }}">
                            <i data-feather="activity"></i>
                            <span data-key="t-chat">Profil Keluarga</span>
                        </a>
                    </li>
                <li>
                    <a href="{{ route('profil.index') }}">
                        <i data-feather="user"></i>
                        <span data-key="t-chat">Profil Saya</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('p3ke.index') }}">
                        <i data-feather="file-minus"></i>
                        <span data-key="t-chat">Data P3KE</span>
                    </a>
                </li>

                @elseif (Auth::user()->hasRole('Camat'))
                <li>
                    <a href="{{ route('home') }}">
                        <i data-feather="home"></i>
                        {{-- <span class="badge rounded-pill bg-success-subtle text-success float-end">9+</span> --}}
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data-profil') }}">
                        <i data-feather="activity"></i>
                        <span data-key="t-chat">Profil Keluarga</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profil.index') }}">
                        <i data-feather="user"></i>
                        <span data-key="t-chat">Profil Saya</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('p3ke.index') }}">
                        <i data-feather="file-minus"></i>
                        <span data-key="t-chat">Data P3KE</span>
                    </a>
                </li>
                @elseif (Auth::user()->hasRole('OPD DINSOS'))
                <li>
                    <a href="{{ route('home') }}">
                        <i data-feather="home"></i>
                        {{-- <span class="badge rounded-pill bg-success-subtle text-success float-end">9+</span> --}}
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profil.index') }}">
                        <i data-feather="user"></i>
                        <span data-key="t-chat">Profil Saya</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data-spasial') }}">
                        <i data-feather="map"></i>
                        <span data-key="t-chat">Data Spasial</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dinsos.index') }}">
                        <i data-feather="file-minus"></i>
                        <span data-key="t-chat">Data P3KE</span>
                    </a>
                </li>

                @elseif (Auth::user()->hasRole('OPD PERKIMTA'))
                <li>
                    <a href="{{ route('home') }}">
                        <i data-feather="home"></i>
                        {{-- <span class="badge rounded-pill bg-success-subtle text-success float-end">9+</span> --}}
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profil.index') }}">
                        <i data-feather="user"></i>
                        <span data-key="t-chat">Profil Saya</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data-spasial') }}">
                        <i data-feather="map"></i>
                        <span data-key="t-chat">Data Spasial</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('perkim.index') }}">
                        <i data-feather="file-minus"></i>
                        <span data-key="t-chat">Data P3KE</span>
                    </a>
                </li>

                @elseif (Auth::user()->hasRole('OPD DISDIK'))
                <li>
                    <a href="{{ route('home') }}">
                        <i data-feather="home"></i>
                        {{-- <span class="badge rounded-pill bg-success-subtle text-success float-end">9+</span> --}}
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data-spasial') }}">
                        <i data-feather="map"></i>
                        <span data-key="t-chat">Data Spasial</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profil.index') }}">
                        <i data-feather="user"></i>
                        <span data-key="t-chat">Profil Saya</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pendidikan.index') }}">
                        <i data-feather="file-minus"></i>
                        <span data-key="t-chat">Data P3KE</span>
                    </a>
                </li>

                @elseif (Auth::user()->hasRole('DISDUKCAPIL'))
                <li>
                    <a href="{{ route('home') }}">
                        <i data-feather="home"></i>
                        {{-- <span class="badge rounded-pill bg-success-subtle text-success float-end">9+</span> --}}
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profil.index') }}">
                        <i data-feather="user"></i>
                        <span data-key="t-chat">Profil Saya</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data-spasial') }}">
                        <i data-feather="map"></i>
                        <span data-key="t-chat">Data Spasial</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('p3ke.index') }}">
                        <i data-feather="file-minus"></i>
                        <span data-key="t-chat">Data P3KE</span>
                    </a>
                </li>

                @else
                <li>
                    <a href="{{ route('home') }}">
                        <i data-feather="home"></i>
                        {{-- <span class="badge rounded-pill bg-success-subtle text-success float-end">9+</span> --}}
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profil.index') }}">
                        <i data-feather="user"></i>
                        <span data-key="t-chat">Profil Saya</span>
                    </a>
                </li>
                @endrole

                <!-- <li>
                    <a href="{{ route('logout') }}" onclick="confirmLogout(event)" class="text-danger">
                        <i data-feather="log-out" class="text-danger"></i>
                        <span data-key="t-chat">Keluar</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li> -->

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

<script>
    function confirmLogout(event) {
        event.preventDefault(); // Menghentikan default action (pengiriman formulir) sementara menampilkan SweetAlert

        Swal.fire({
            title: 'Apakah Anda yakin ingin keluar?',
            text: 'Anda akan keluar dari sesi ini.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Keluar!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('logout-form').submit();
            }
        });
    }
</script>