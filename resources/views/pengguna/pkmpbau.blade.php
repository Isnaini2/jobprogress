@extends("root.root_pkm")
@section("title", "DIVISI PBAU")
@section("content")
    <section id="portfolio" class="portfolio">
        <div class="container">
          <div class="row text-center mt-5">
            <h1 class="display-3 fw-bold text-capitalize">PKM PBAU</h1>
            <div class="heading-line"></div>
          </div>

          <form action="/pbau"><button type="submit" class="rounded-pill btn-rounded border-primary">kembali
              <span><i class="fas fa-arrow-left"></i></span>
              </button>
          </form>
          <br>

          <!-- START THE PKM SDM -->
          <div class="row">
            @foreach ($PBAU as $pbau)
            <div class="col-md-12">
                   <center><img class="img-fluid" src="{{asset('storage/images/'.$pbau->gambar_pbau)}}" style="width :3000px" alt="..." /></center>
                   <br>
                   <br>
                </div>
            @endforeach
        </div>
        </div>
    </section>
@endsection
