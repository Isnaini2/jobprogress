@extends("root.root_pkm")
@section("title", "DIVISI KEUANGAN")
@section("content")
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row text-center mt-5">
            <h1 class="display-3 fw-bold text-capitalize">PKM KEUANGAN</h1>
            <div class="heading-line"></div>
        </div>

        <form action="/userkeuangan"><button type="submit" class="rounded-pill btn-rounded border-primary">kembali
            <span><i class="fas fa-arrow-left"></i></span>
            </button>
        </form>
        <br>

        <!-- START THE PKM Keuangan -->
        <div class="row">
            @foreach ($keuangan as $kua)
            <div class="col-md-12">
                <center><img class="img-fluid" src="{{asset('storage/images/'.$kua->gambar_keuangan)}}" style="width :3000px" alt="..." /></center>
                <br>
                <br>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
