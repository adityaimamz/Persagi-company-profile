<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">




    <!-- My Style -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!-- Logo Title Bar -->
    <link rel="icon" href="Assets/png/logo-persagi.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <title>Persagi</title>
</head>

<body>
    <!--Navbar-->
    <div class="nav-top bg-main py-2">
        <div class="container d-flex justify-content-between">
            <p class="my-auto fs-6 fw-500">{{ \Carbon\Carbon::now()->isoFormat('dddd, DD MMMM YYYY, HH:mm [WIB]') }}</p>
            <button class="btn btn-main px-3 fw-medium" type="button">
                Masuk
            </button>
        </div>
    </div>
    <div class="nav-mid bg-white py-3">
        <img src="Assets/png/logo-persagi.png" alt="" class="img-fluid d-block mx-auto">
        <p class="text-center text-main">“ Dorong kesejahteraan gizi, dengan dukungan PERSAGI ”</p>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-main sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse txt-nav " id="navbarNavAltMarkup">
                <ul class="navbar-nav mx-auto gap-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron bg-center">
        <div class="container pt-5">
            <h1 class="text-center " style="font-size: 48px; font-weight: 700; color: #0C385F;">
                Selamat datang di DPC Persagi Karawang
            </h1>
            <h2 class="text-center mt-3 h2-small">Kami hadir dengan bangga sebagai Persatuan Ahli Gizi Indonesia Cabang
                Karawang.
                Bersama-sama, kami mengajak Anda untuk meraih kesehatan optimal melalui informasi terkini
                seputar gizi, serta layanan unggulan yang dirancang khusus untuk masyarakat Karawang.</h2>
            <img src="Assets/png/hero.png" alt="" class="img-fluid d-block mx-auto my-5">
            <button type="button" class="btn btn-lg button-lg d-block mx-auto">Layanan Utama Persagi</button>
        </div>
        <div class="d-flex justify-content-center gap-5 bg-center pb-7">
            <div class="card card-jumbotron">
                <div class="card-body">
                    <lottie-player src="https://lottie.host/f74a3e49-2b73-49ca-9a4e-045721bd37fb/Up1U9xfEYZ.json"
                        background="transparent" speed="1" style="width: 230px; height: 180px;" loop
                        autoplay class="mx-auto"></lottie-player>
                        <p class="text-main text-center fs-5 fw-bolder">Status Gizi</p>
                </div>
            </div>
            <div class="card card-jumbotron">
                <div class="card-body">
                    <lottie-player src="https://lottie.host/ec8387c7-9cc8-40f2-a609-2fb1f7bd70f7/oXUG2XSH9J.json"
                        background="transparent" speed="1" style="width: 230px; height: 180px;" loop
                        autoplay class="mx-auto"></lottie-player>
                        <p class="text-main text-center fs-5 fw-bolder">Konsultasi</p>

                </div>
            </div>

            <div class="card card-jumbotron">
                <div class="card-body">
                    <lottie-player src="https://lottie.host/7720c2ff-dad3-4202-b2aa-3c76427fdad4/S89oGx1Sjk.json"
                        background="transparent" speed="1" style="width: 230px; height: 180px;" loop
                        autoplay class="mx-auto"></lottie-player>
                        <p class="text-main text-center fs-5 fw-bolder">Pendaftaran Anggota</p>

                </div>
            </div>
        </div>
    </div>
    </div>


    <section class="bg-white pb-3">
        <div class="container mb-5">
            <div class="Artikel d-flex justify-content-center py-5 ">Artikel
            </div>
            <!-- Caraousel -->
            <div class="swiper mySwiper py-3">
                <div class="swiper-wrapper">
                    <div class="card swiper-slide" style="width: 18rem;">
                        <img src="Assets/png/artikel-1 1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card swiper-slide" style="width: 18rem;">
                        <img src="Assets/png/artikel-1 1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card swiper-slide" style="width: 18rem;">
                        <img src="Assets/png/artikel-1 1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card swiper-slide" style="width: 18rem;">
                        <img src="Assets/png/artikel-1 1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
            <div>

            </div><button class="btn btn-outline-art d-flex mx-auto mt-5 ">
                Lihat Artikel Lainnya
            </button>

        </div>
        </div>
    </section>

    <!--Event-->
    <section class="" style="background-color: #E1F3FF;">
        <div class="container">
            <div class="Artikel d-flex justify-content-center py-5">Event</div>
            <div class="d-flex justify-content-evenly">
                <button class="btn btn-primary btn-web">Webinar</button>
                <button class="btn btn-secondary btn-l">Lomba</button>
            </div>
            <!--carousel Evnt-->
            <!-- Swiper -->
            <div class="swiper mySwiper2 py-5 ">
                <div class="swiper-wrapper">
                    <div class="card swiper-slide d-flex gap-3 card-lg">
                        <div class="row">
                            <div class="col-4">
                                <img src="Assets/png/Snapinsta 1.png" class="" alt="...">
                            </div>
                            <div class="col">
                                <div class="pt-3">
                                    <h5 class="">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide d-flex gap-3 card-lg">
                        <div class="row">
                            <div class="col-4">
                                <img src="Assets/png/Snapinsta 1.png" class="" alt="...">
                            </div>
                            <div class="col">
                                <div class="pt-3">
                                    <h5 class="">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div>
                    <button class="btn btn-outline-art d-flex mx-auto mt-5">
                        Lihat Event Lainnya
                    </button>
                </div>

            </div>
            <div class="swiper-pagination"></div>

        </div>
    </section>


    <!--footer-->
    <footer class="bg-white text-white text-left pt-4">
        <div class="container">
            <div class="footer-content d-flex ">
                <img src="Assets/png/Logo_Persagi 1.png" alt="Logo Situs" width="50px">
                <div class="txt-f ms-4">
                    <p>DPC PERSAGI</p>
                    <p>KARAWANG</p>
                </div>
            </div>
        </div>


        <div class="bg-main pt-4">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-4">
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


                    <div class="col-4 ps-5">
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
                    <div class="col-4 d-flex justify-content-end">
                        <div class="">
                            <p class="btn-art">Lokasi</p>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5878516681496!2d107.30447377411514!3d-6.317743861821297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977cebb9afa29%3A0x67e83add75c68c4a!2sJl.%20Parahiyangan%20No.39%2C%20Adiarsa%20Bar.%2C%20Kec.%20Karawang%20Bar.%2C%20Karawang%2C%20Jawa%20Barat%2041311!5e0!3m2!1sen!2sid!4v1691586432090!5m2!1sen!2sid"
                                width="300" height="255" style="border:0; border-radius: 5px;"
                                allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <img src="Assets/png/Line 5.png" alt="" width="1170px" class="mb-3">
                    <p class="text-center">DPC Persagi Karawang, All right reserved</p>
                    <p class="text-center">Designed and Developed by </p>
                </div>
            </div>
        </div>

    </footer>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

    <script>
        var swiper2 = new Swiper(".mySwiper2", {
            slidesPerView: 2,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
