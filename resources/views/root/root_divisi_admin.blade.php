<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
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
    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 2 - Job dan PKM
/////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <section id="testimonials" class="testimonials">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>

    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                       START SECTION 6 - THE FAQ
//////////////////////////////////////////////////////////////////////////////////////////////////////-->

@yield('content')


<br>

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
