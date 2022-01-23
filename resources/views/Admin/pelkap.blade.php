@extends('root.root_divisi_admin')
@section('title', 'DIVISI PELKAP')
@section('content')
    <section id="faq" class="faq">
        <div class="container">
            <div class="row text-center">
                <h1 class="display-3 fw-bold text-uppercase">DIVISI PELKAP</h1>
                <div class="heading-line"></div>
            </div>
            <br>
            <form action="/divisi"><button type="submit" class="rounded-pill btn-rounded border-primary">kembali
                <span><i class="fas fa-arrow-left"></i></span>
                </button>
            </form>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-2 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="far fa-clipboard text-primary mb-2 " style='font-size:36px'></i>
                                <a href="/adminpelkap"><h4 class="text-uppercase m-0"><b>JOB PELKAP</b></h4></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-2 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-user-tie text-primary mb-2" style='font-size:36px'></i>
                                <a href="/pkmpelkap"><h4 class="text-uppercase m-0"><b>PKM PELKAP</b></h4></a>
                                <p>PROGRAM KERJA MANAJEMEN DIVISI PELKAP</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>
@endsection