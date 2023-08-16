<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet" />
    <!-- My Style -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
  />
    <!-- Logo Title Bar -->
    <link rel="icon" href="Assets/png/logo-persagi.png" type="image/x-icon">


    <title>Persagi | {{ $title }}</title>
</head>

<body>
    <!--Navbar-->
    <div class="nav-top bg-main py-2">
        <div class="container d-flex justify-content-between">
            <p class="my-auto fs-6 fw-500 nav-date">
                {{ \Carbon\Carbon::now()->isoFormat('dddd, DD MMMM YYYY, HH:mm [WIB]') }}</p>
                @if (Auth::user())
                    <a href="" data-bs-toggle="dropdown" class="text-white">
                        <img src="{{ asset('Assets/png/defaultpp.jpeg') }}" alt="" width="20px" class="rounded-circle"><span class="mx-3">{{ Auth::user()->username }}</span><img src="{{ asset('assets/png/arrow.png') }}" alt="">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ Auth::user()->name }}</h6>
                            <span>{{ Auth::user()->username }}</span>
                        </li>
                        <li> 
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a
                                class="dropdown-item d-flex align-items-center"
                                href="{{ route('logout') }}"
                            >
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul>
                @else
                <a href="/login"><button class="btn btn-main px-3 fw-medium" type="button">Masuk</button></a>
                @endif
        </div>
    </div>
    <div class="nav-mid bg-white py-3">
        <img src="Assets/png/logo-persagi.png" alt="" class="img-fluid d-block mx-auto nav-img">
        <p class="text-center text-main na-title">“ Dorong kesejahteraan gizi, dengan dukungan PERSAGI ”</p>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-main sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse txt-nav" id="navbarNavAltMarkup">
                <ul class="navbar-nav mx-auto gap-3">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'Beranda' ? 'active' : '') }}" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'Profile' ? 'active' : '') }}" href="/profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'Layanan' ? 'active' : '') }}" href="/layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'Artikel' ? 'active' : '') }}" href="/artikel">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'Event' ? 'active' : '') }}" href="/event">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'Kontak' ? 'active' : '') }}" href="/kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Main --}}
    @yield('content')
    {{-- End of main --}}


    <!--footer-->
    <footer class="bg-white text-white text-left pt-3">
        <div class="container">
            <div class="footer-content d-flex ">
                <img src="Assets/png/Logo_Persagi 1.png" alt="Logo Situs" width="50px">
                <div class="txt-f ms-2">
                    <p class="mb-0">DPC PERSAGI</p>
                    <p>KARAWANG</p>
                </div>
            </div>
        </div>

        <div class="bg-main">
            <div class="container pt-4">
                <div class="row">
                    <div class="col-md-4">
                        <p class="py-2">Lorem ipsum dolor sit amet consectetur. Dictumst tristique vitae diam quis
                            egestas magna feugiat sit vel. Cras vel ut diam facilisi feugiat eu. Et ultrices quis fames
                            nisi convallis. Tincidunt dictum fermentum tempor pellentesque arcu faucibus at.</p>
                        <div class="d-flex gap-2">
                            <p><img src="Assets/png/Vector (3).png" width="18px" alt=""></p>
                            <p class="txt-foot">Facebook</p>
                        </div>
                        <div class="d-flex gap-2">
                            <p><img src="Assets/png/Vector (4).png" width="18px" alt=""></p>
                            <p class="txt-foot">Instagram</p>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4 mt-md-0">
                        <p class="btn-art">Kontak</p>
                        <div class="d-flex gap-3">
                            <p><img src="Assets/png/Vector (1).png" alt="" width="18px"></p>
                            <p>Jalan Parahiyangan No.39, Adiarsa Bar., Kec. Karawang Bar., Karawang, Jawa Barat 41311
                            </p>
                        </div>
                        <div class="d-flex gap-3">
                            <p><img src="Assets/png/Vector (2).png" alt="" width="18px"></p>
                            <p>dpcpersagi3215@gmail.com</p>
                        </div>
                        <div class="d-flex gap-3">
                            <p><img src="Assets/png/material-symbols_call.png" alt="" width="18px"></p>
                            <p>+62852 2620 3601</p>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4 mt-md-0">
                        <div class="">
                            <p class="btn-art">Lokasi</p>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5878516681496!2d107.30447377411514!3d-6.317743861821297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977cebb9afa29%3A0x67e83add75c68c4a!2sJl.%20Parahiyangan%20No.39%2C%20Adiarsa%20Bar.%2C%20Kec.%20Karawang%20Bar.%2C%20Karawang%2C%20Jawa%20Barat%2041311!5e0!3m2!1sen!2sid!4v1691586432090!5m2!1sen!2sid"
                                width="100%" height="255" style="border:0; border-radius: 5px;"
                                allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <img src="Assets/png/Line 5.png" alt="" width="100%" class="mb-3">
                        <p class="text-center">DPC Persagi Karawang, All right reserved</p>
                        <p class="text-center">Designed and Developed by Students of Institute Technology Telkom Purwokerto</p>
                    </div>
                </div>
            </div>
        </div>
        <button id="toTopButton" class="hidden to-top-button">
            <span class="arrow">▲</span>
        </button>

    </footer>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- Initialize Swiper -->
        <script src="{{ asset('assets/js/app.js') }}"></script>
        @yield('js')
</body>
</html>
