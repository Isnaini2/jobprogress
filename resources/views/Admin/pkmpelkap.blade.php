<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DIVISI PELKAP</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png)" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css " type="text/css ">
    <link rel="stylesheet " href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0 " type="text/css ">
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

    <section id="testimonials" class="testimonials">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>

      <!-- ////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 2 - PKM PELKAP
/////////////////////////////////////////////////////////////////////////////////////////////-->

<section id="portfolio" class="portfolio">
    <div class="container">
      <div class="row text-center mt-5">
        <h1 class="display-3 fw-bold text-capitalize">PKM PELKAP</h1>
        <div class="heading-line"></div>
      </div>

      <form action="/pelkap"><button type="submit" class="rounded-pill btn-rounded border-primary">kembali
          <span><i class="fas fa-arrow-left"></i></span>
          </button>
      </form>
      <br>
      <div class="card mb-4">
        <div class="card-header">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">+ Tambah</button>
        </div>


<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Keterangan PKM Pelkap</th>
            <th scope="col">Gambar PKM Pelkap</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
        <?php $no = 1; ?>
        @foreach ($pkmPelkap as $pelkap )
          <tr>
            <td>{{$no++}}</td>
            <td>{{$pelkap->keterangan_pelkap}}</td>
            <td><img src="{{asset('storage/images/'.$pelkap->gambar_pelkap)}}" alt=""  style="width:250px;height:150px;"></td>
            <td>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updateModal-{{$pelkap->id}}"><i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$pelkap->id}}"><i class="far fa-trash-alt"></i></button>
            </td>
          </tr>

        @endforeach
        </tbody>
      </table>
    </div>
</div>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah PKM Pelkap</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/add-pkmpelkap" method="POST" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="modal-body">
                  <div class="form-group">
                  <label>Keterangan PKM Pelkap</label>
                  <input type="text" name="keterangan_pelkap" class="form-control" required>
                  <input type="hidden" name="id" >
                  </div>

                  <div class="form-group">
                  <label>Gambar PKM Pelkap</label>
                  <input accept="image/*" type="file" name="gambar_pelkap" class="form-control">
                  </div>
              </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
    </div>
    </div>
</div>

<!-- Update Modal -->
@foreach ($pkmPelkap as $pelkap)
<div class="modal fade" id="updateModal-{{$pelkap->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/update-pkmpelkap" method="POST" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="modal-body">
                  <div class="form-group">
                      <label>Keterangan PKM Pelkap</label>
                      <input type="text" name="keterangan_pelkap" value="{{ $pelkap->keterangan_pelkap }}" class="form-control">
                      <input type="hidden" name="id" value="{{ $pelkap ->id }}">
                  </div>

                  <div class="form-group">
                          <label>Gambar PKM Pelkap</label>
                          <input type="file" name="gambar_pelkap" value="gambar_pelkap" class="form-control">
                  </div>
              </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
    </div>
    </div>
    </div>
</div>

<div class="modal fade" id="deleteModal-{{$pelkap->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Apakah Anda yakin Menghapus Data PKM Pelkap ?
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/delete-pkmpelkap/{{$pelkap->id}}" class="btn btn-danger">Delete</a>
        </form>
    </div>
    </div>
    </div>
</div>
@endforeach
</div>
</section>

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
