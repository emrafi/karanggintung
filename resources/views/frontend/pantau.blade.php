<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Karanggintung | Pantau</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
                    <strong>Home</strong>
                </a>
            </div>
        </div>
    </header>

    <main>
        <section class="text-center container mt-3">
            <div class="col-12">
                <div class="p-5 mb-4 bg-danger bg-gradient text-white rounded-3">
                    <div class="container-fluid py-1">
                        <div class="row">
                            <div class="col-sm-12 d-block d-md-none">
                                <img src="frontend/imgs/header_image.svg" alt="" class="w-100 img-fluid">
                            </div>
                            <div class="col-12 col-md-8 mt-3 text-center align-content-center">
                                <h1 class="display-5 fw-bold">Live CCTV Desa Karanggintung</h1>
                                <p class="fs-4">
                                    Web ini berfungsi untuk menampilkan live streaming CCTV Desa Karanggintung.
                                </p>
                            </div>
                            <div class="col-md-4 d-none d-md-block">
                                <img src="frontend/imgs/header_image.svg" alt="" class="w-100 img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="album py-1 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Kamera - SD N 2</h5>
                                    <img src="http://karanggintung.com:7700/video_feed?ip=192.168.193.104&source=rtsp://admin:1nd1H0m3@192.168.0.6:554/Streaming/Channels/102/"
                                        alt="" class="img fluid w-100 rounded">
                                    {{-- <div class="d-grid gap-2 mt-3"><a href="" class="btn btn-danger">Lihat
                                            CCTV</a></div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Kamera - Pertigaan Adhyaksa</h5>
                                    <img src="http://karanggintung.com:7700/video_feed?ip=192.168.193.104&source=rtsp://admin:1nd1H0m3@192.168.0.3:554/Streaming/Channels/102/"
                                        alt="" class="img fluid w-100 rounded">
                                    {{-- <div class="d-grid gap-2 mt-3"><a href="" class="btn btn-danger">Lihat
                                            CCTV</a></div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Kamera - Dukuh Kenyuk</h5>
                                    <img src="http://karanggintung.com:7700/video_feed?ip=192.168.193.104&source=rtsp://admin:1nd1H0m3@192.168.0.2:554/Streaming/Channels/102"
                                        alt="" class="img fluid w-100 rounded">
                                    {{-- <div class="d-grid gap-2 mt-3"><a href="" class="btn btn-danger">Lihat
                                                CCTV</a></div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Kamera - Tugu Gewok</h5>
                                    <img src="http://karanggintung.com:7700/video_feed?ip=192.168.193.104&source=rtsp://admin:1nd1H0m3@192.168.0.7:554/Streaming/Channels/102"
                                        alt="" class="img fluid w-100 rounded">
                                    {{-- <div class="d-grid gap-2 mt-3"><a href=""
                                                    class="btn btn-danger">Lihat
                                                    CCTV</a></div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Kamera - Pertigaan RT 8 RW 2</h5>
                                    <img src="http://karanggintung.com:7700/video_feed?ip=192.168.193.104&source=rtsp://admin:1nd1H0m3@192.168.0.4:554/Streaming/Channels/102"
                                        alt="" class="img fluid w-100 rounded">
                                    {{-- <div class="d-grid gap-2 mt-3"><a href=""
                                                        class="btn btn-danger">Lihat
                                                        CCTV</a></div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Kamera - Arah Pandak</h5>
                                    <img src="http://karanggintung.com:7700/video_feed?ip=192.168.193.104&source=rtsp://admin:1nd1H0m3@192.168.0.5:554/Streaming/Channels/102"
                                        alt="" class="img fluid w-100 rounded">
                                    {{-- <div class="d-grid gap-2 mt-3"><a href=""
                                                            class="btn btn-danger">Lihat
                                                            CCTV</a></div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">Pantauan CCTV ini milik pemerintah desa Karanggintung, penyalahgunaan akan ditindak
                sesuai hukum yang berlaku.</p>
        </div>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
