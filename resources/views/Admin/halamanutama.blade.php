<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JOB PROGRRES DIVISION</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- ////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 1 - THE NAVBAR SECTION
/////////////////////////////////////////////////////////////////////////////////////////////-->
    <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <form action="/logout"><button type="submit" class="rounded-pill btn-rounded border-primary">Logout
                        <span>
                            <center><i class="fas fa-sign-out-alt"></i></center>
                        </span>
                    </button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>

    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                            START SECTION 2 - THE INTRO SECTION
/////////////////////////////////////////////////////////////////////////////////////////////////////-->

    <section id="home" class="intro-section">
        <div class="container">
            <div class="row align-items-center text-white">
                <!-- START THE CONTENT FOR THE INTRO  -->
                <div class="col-md-6 intros text-start">
                    <h1 class="display-2">
                        <center><span class="display-2--intro">JOB PROGRESS DIVISION</span></center>
                    </h1>
                    <br>
                  <div class="d-grid gap-2 col-6 mx-auto">
                    <a class="btn btn-light" href="#Divisi" role="button"><h5><b>Choose Your Division</b></h5></a>
                    </div>
                </div>

                <!-- START THE CONTENT FOR THE VIDEO -->
                <div class="col-md-6 intros text-end">
                    <div class="video-box">
                        <img src="images/arts/intro-section-illustration.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>

    <!-- //////////////////////////////////////////////////////////////////////////////////////////////
                             START SECTION 3 - JOB PROGRESS
////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <div class="container">
        <div class="row text-center">
            <h1 class="display-3 fw-bold">JOBPRO PT PELABUHAN INDONESIA (PERSERO) REGIONAL 4</h1>
            <div class="heading-line mb-1"></div>
        </div>

        <!-- START THE CONTENT FOR THE SERVICES  -->
        <section id="Divisi" class="services"></section>
        <div class="container">
            <div class="row">
                {{-- SDM --}}
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <h3 class="display-3--title mt-1">Divisi SDM</h3>
                            <p class="lh-lg">
                                Divisi yang memiliki job....
                            </p>
                            <center>
                            <form action="/sdm"><button type="submit" class="rounded-pill btn-rounded border-primary">Lanjut
                                <span><i class="fas fa-arrow-right"></i></span>
                                </button>
                            </form>
                            </center>
                        </div>
                    </div>
                </div>

                 {{-- UMUM --}}
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <h3 class="display-3--title mt-1">Divisi Umum</h3>
                            <p class="lh-lg">
                                Divisi yang memiliki job
                            </p>
                            <center>
                                <form action="/umum"><button type="submit" class="rounded-pill btn-rounded border-primary">Lanjut
                                    <span><i class="fas fa-arrow-right"></i></span>
                                    </button>
                                </form>
                            </center>
                        </div>
                    </div>
                </div>

                 {{-- IT --}}
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <h3 class="display-3--title mt-1">Divisi IT</h3>
                            <p class="lh-lg">
                                Divisi yang memiliki job....
                            </p>
                            <center>
                                <form action="/it"><button type="submit" class="rounded-pill btn-rounded border-primary">Lanjut
                                    <span><i class="fas fa-arrow-right"></i></span>
                                    </button>
                                </form>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section id="SDM" class="services"></section>
        <div class="container">
            <div class="row">
         {{-- PELKAP --}}
         <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
                <div class="card-body text-center">
                    <h3 class="display-3--title mt-1">Divisi Pelkap</h3>
                    <p class="lh-lg">
                        Divisi yang memiliki job....
                    </p>
                    <center>
                        <form action="/pelkap"><button type="submit" class="rounded-pill btn-rounded border-primary">Lanjut
                            <span><i class="fas fa-arrow-right"></i></span>
                            </button>
                        </form>
                    </center>
                </div>
            </div>
        </div>

        {{-- TPB --}}
        <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
                <div class="card-body text-center">
                    <h3 class="display-3--title mt-1">Divisi TPB</h3>
                    <p class="lh-lg">
                        Divisi yang memiliki job....
                    </p>
                    <center>
                        <form action="/tpb"><button type="submit" class="rounded-pill btn-rounded border-primary">Lanjut
                            <span><i class="fas fa-arrow-right"></i></span>
                            </button>
                        </form>
                    </center>
                </div>
            </div>
        </div>

        {{-- PBAU --}}
        <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
                <div class="card-body text-center">
                    <h3 class="display-3--title mt-1">Divisi PBAU</h3>
                    <p class="lh-lg">
                        Divisi yang memiliki job....
                    </p>
                    <center>
                        <form action="/pbau"><button type="submit" class="rounded-pill btn-rounded border-primary">Lanjut
                            <span><i class="fas fa-arrow-right"></i></span>
                            </button>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>


        <section id="SDM" class="services"></section>
        <div class="container">
            <div class="row">
        {{-- KEUANGAN --}}
        <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
                <div class="card-body text-center">
                    <h3 class="display-3--title mt-1">Divisi Keuangan</h3>
                    <p class="lh-lg">
                        Divisi yang memiliki job....
                    </p>
                    <center>
                        <form action="/keuangan"><button type="submit" class="rounded-pill btn-rounded border-primary">Lanjut
                            <span><i class="fas fa-arrow-right"></i></span>
                            </button>
                        </form>
                    </center>
                </div>
            </div>
        </div>
        <br>
    </div>
</div>

        <!-- BACK TO TOP BUTTON  -->
        <a href="#" class="shadow btn-primary rounded-circle back-to-top">
            <i class="fas fa-chevron-up"></i>
        </a>

        <script src="assets/vendors/js/glightbox.min.js"></script>

        <script type="text/javascript">
            const lightbox = GLightbox({
                'touchNavigation': true,
                'href': 'https://www.youtube.com/watch?v=J9lS14nM1xg',
                'type': 'video',
                'source': 'youtube', //vimeo, youtube or local
                'width': 900,
                'autoPlayVideos': 'true',
            });
        </script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
