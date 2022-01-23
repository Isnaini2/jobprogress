@extends("root.root_pkm")
@section("title", "DIVISI TPB")
@section("content")
    <section id="portfolio" class="portfolio">
        <div class="container">
          <div class="row text-center mt-5">
            <h1 class="display-3 fw-bold text-capitalize">PKM TPB</h1>
            <h1><bold>(TRANSFORMASI PENGEMBANGAN BISNIS)</bold></h1>
            <div class="heading-line"></div>
          </div>

          <form action="/tpb"><button type="submit" class="rounded-pill btn-rounded border-primary">kembali
              <span><i class="fas fa-arrow-left"></i></span>
              </button>
          </form>
          <br>

          <!-- START THE PKM SDM -->
          <div class="row">
            @foreach ($TPB  as $tpb)
            <div class="col-md-12">
                   <center><img class="img-fluid" src="{{asset('storage/images/'.$tpb->gambar_tpb)}}" style="width :3000px" alt="..." /></center>
                   <br>
                   <br>
            </div>
            @endforeach
            </div>
        </div>
      </section>
@endsection