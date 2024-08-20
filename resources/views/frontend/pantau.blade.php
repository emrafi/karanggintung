<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
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

        <div class="album py-1">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <div class="text-center">
                            <div class="btn-group flex-wrap" role="group" data-toggle="buttons">
                                <button type="button" onclick="change1()" class="btn btn-outline-secondary">SD N
                                    2</button>
                                <button type="button" onclick="change2()" class="btn btn-outline-secondary">Pertigaan
                                    Adhyaksa</button>
                                <button type="button" onclick="change3()" class="btn btn-outline-secondary">Dukuh
                                    Kenyuk</button>
                                <button type="button" onclick="change4()" class="btn btn-outline-secondary">Tugu
                                    Gewok</button>
                                <button type="button" onclick="change5()"class="btn btn-outline-secondary">Pertigaan
                                    RT8/2</button>
                                <button type="button" onclick="change6()"class="btn btn-outline-secondary">Arah
                                    Pandak</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <div class="card-body p-1 mt-4">
                            <img id="source"
                                src="https://cctv.karanggintung.com/video_feed_full?ip=192.168.193.104&source=rtsp://admin:1nd1H0m3@192.168.0.6:554/Streaming/Channels/102/"
                                alt="" class="img fluid w-100 rounded embed-responsive-item">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-muted">
        <div class="container">
            <div class="row text-center p-2">
                <div class="col-12">
                    <p class="">Pantauan CCTV ini milik pemerintah desa Karanggintung, penyalahgunaan akan
                        ditindak
                        sesuai hukum yang berlaku.</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">
                    <p class="mb-1">
                        <a href="#">kembali ke atas</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const s = document.getElementById('source');

        function change1() {
            s.src =
                "https://cctv.karanggintung.com/video_feed_full?ip=192.168.193.104&source=rtsp://admin:1nd1H0m3@192.168.0.6:554/Streaming/Channels/102/";
        }

        function change2() {
            s.src =
                "https://cctv.karanggintung.com/video_feed_full?ip=192.168.193.104&source=rtsp://admin:1nd1H0m3@192.168.0.3:554/Streaming/Channels/102/";
        }

        function change3() {
            s.src =
                "https://cctv.karanggintung.com/video_feed_full?ip=192.168.193.104&source=rtsp://admin:1nd1H0m3@192.168.0.2:554/Streaming/Channels/102/";
        }

        function change4() {
            s.src =
                "https://cctv.karanggintung.com/video_feed_full?ip=192.168.193.104&source=rtsp://admin:1nd1H0m3@192.168.0.7:554/Streaming/Channels/102/";
        }

        function change5() {
            s.src =
                "https://cctv.karanggintung.com/video_feed_full?ip=192.168.193.104&source=rtsp://admin:1nd1H0m3@192.168.0.4:554/Streaming/Channels/102/";
        }

        function change6() {
            s.src =
                "https://cctv.karanggintung.com/video_feed_full?ip=192.168.193.104&source=rtsp://admin:1nd1H0m3@192.168.0.5:554/Streaming/Channels/102/";
        }

        window.onload = function() {
            let btns = Array.from(document.querySelectorAll('.btn btn-outline-secondary'));
            let activeButton = null;

            // The button which would be used to add 'active' class to
            // all the buttons.
            let allButton = document.querySelector('#All');

            const handleClick = (e) => {
                e.preventDefault();
                e.currentTarget.classList.add('active');
                // Checks that the activeButton is defined (initially it's null).
                // Also checks that the button that was clicked is not the button which is
                // already active to avoid removing the active class on double click.
                if (activeButton != null && activeButton != e.currentTarget) {
                    activeButton.classList.remove('active');
                }
                activeButton = e.currentTarget;
            }
            if (btns != null) {
                btns.forEach(node => {
                    node.addEventListener('click', handleClick)
                });
            } else {
                console.warn(`#SampleEl Object or Element Does not exists or not yet loaded.`)
            }

            // Listen to a click event from the "allButton" and when it's clicked,
            // loop through the buttons array and add 'active' class to all buttons
            // in it.
            if (allButton != null) {
                allButton.addEventListener('click', function() {
                    btns.forEach(btn => {
                        btn.classList.add('active');
                    })
                });
            } else {
                console.warn(`#allButton Object or Element Does not exists or not yet loaded.`)
            }
        }
    </script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
