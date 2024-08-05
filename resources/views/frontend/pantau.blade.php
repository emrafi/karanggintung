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
        <section class="text-center container">
            <div class="row py-lg-3">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h4 class="fw-light">Pemantauan CCTV Desa Karanggintung</h4>
                    {{-- <p class="lead text-muted">Something short and leading about the collection below—its contents, the
                        creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it
                        entirely.</p> --}}
                </div>
            </div>
        </section>

        <div class="album py-1 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em"></text>
                            </svg> --}}
                            <video id="video" autoplay="true" controls="controls"
                                type='application/x-mpegURL'></video>
                            <div class="card-body">
                                <h5 class="card-title text-center">Camera 1</h5>
                                <p class="card-text">Perempatan jalan Sulawesi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em"></text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title text-center">Camera 2</h5>
                                <p class="card-text">Perempatan jalan Sulawesi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em"></text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title text-center">Camera 3</h5>
                                <p class="card-text">Perempatan jalan Sulawesi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em"></text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title text-center">Camera 4</h5>
                                <p class="card-text">Perempatan jalan Sulawesi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em"></text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title text-center">Camera 5</h5>
                                <p class="card-text">Perempatan jalan Sulawesi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em"></text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title text-center">Camera 6</h5>
                                <p class="card-text">Perempatan jalan Sulawesi</p>
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

    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> --}}

    <script>
        if (Hls.isSupported()) {
            var video = document.getElementById('video');
            var hls = new Hls();
            // bind them together
            hls.attachMedia(video);
            hls.on(Hls.Events.MEDIA_ATTACHED, function() {
                // console.log("video and hls.js are now bound together !");
                hls.loadSource("http://192.1xx.x.1xx:8080/playlist.m3u8");
                hls.on(Hls.Events.MANIFEST_PARSED, function(event, data) {});
            });
        }
    </script>
</body>

</html>
