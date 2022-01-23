@extends("root.root_job")
@section("title","JOB PROGRESS DIVISI PELKAP")
@section("content")

    <section id="faq" class="faq">
        <div class="container">
            <div class="row text-center">
                <h1 class="display-3 fw-bold text-uppercase">JOB PROGRESS DIVISI PELKAP</h1>
                <div class="heading-line"></div>
            </div>
            <br>
            <form action="/usrpelkap"><button type="submit" class="rounded-pill btn-rounded border-primary">kembali
                <span><i class="fas fa-arrow-left"></i></span>
                </button>
            </form>
            <br>
        </div>
    </section>

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
            <th scope="col">User</th>
            <th scope="col">To Do</th>
            <th scope="col">Progress</th>
            <th scope="col">Done</th>
            <th scope="col">Komentar Manager</th>
            <th scope="col">Komentar Asisten Manajer</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
        @foreach ( $penggunapelkap as  $Pelkap )
          <tr>
            <td>{{$no++}}</td>
                <td>{{$Pelkap->User_Pelkap}}</td>
                <td>{{$Pelkap->To_Do_Pelkap}}</td>
                <td>{{$Pelkap->Progress_Pelkap}}</td>
                <td>
                    <input type="checkbox" id="toggle-{{ $Pelkap->id }}" data-offstyle="danger" @if($Pelkap->Done_Pelkap == "selesai") checked @endif>
                </td>
                <td>{{$Pelkap->KomentarManager_Pelkap}}</td>
                <td>{{$Pelkap->KomentarAsistenManajer_Pelkap}}</td>
            <td>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updateModal-{{$Pelkap->id}}"><i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$Pelkap->id}}"><i class="far fa-trash-alt"></i></button>

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
        <h5 class="modal-title" id="exampleModalLabel">Tambah JOB USER PELKAP</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/add-jobpelkap" method="POST" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="modal-body">

                    <div class="form-group">
                        <label>User</label>
                        <input type="text" name="User_Pelkap" class="form-control" required>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>To Do</label>
                        <input type="text" name="To_Do_Pelkap" class="form-control" required>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>Progress</label>
                        <input type="text" name="Progress_Pelkap" class="form-control" required>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>Done</label>
                        <select class="form-select" aria-label="Default select example" name="Done_Pelkap" required>
                            <option value="belum" selected>Belum</option>
                            <option value="selesai">Selesai</option>
                        </select>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>Komentar Manager</label>
                        <input type="text" name="KomentarManager_Pelkap" class="form-control" readonly>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>Komentar Asisten Manajer</label>
                        <input type="text" name="KomentarAsistenManajer_Pelkap" class="form-control" readonly>
                        <input type="hidden" name="id" >
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
@foreach ($penggunapelkap as $Pelkap )
<div class="modal fade" id="updateModal-{{$Pelkap->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/update-jobpelkap" method="POST" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <label>User</label>
                        <input type="text" name="User_Pelkap" value="{{ $Pelkap ->User_Pelkap }}" class="form-control">
                        <input type="hidden" name="id" value="{{ $Pelkap ->id }}">
                    </div>

                    <div class="form-group">
                        <label>To Do</label>
                        <input type="text" name="To_Do_Pelkap" value="{{ $Pelkap ->To_Do_Pelkap }}" class="form-control">
                        <input type="hidden" name="id" value="{{ $Pelkap ->id }}">
                    </div>

                    <div class="form-group">
                        <label>Progress</label>
                        <input type="text" name="Progress_Pelkap" value="{{ $Pelkap ->Progress_Pelkap }}" class="form-control">
                        <input type="hidden" name="id" value="{{ $Pelkap->id }}">
                    </div>

                    <div class="form-group">
                        <label>Done</label>
                        <select class="form-select" aria-label="Default select example" name="Done_Pelkap" required>
                            <option value="belum" selected>Belum</option>
                            <option value="selesai">Selesai</option>
                        </select>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>Komentar Manager</label>
                        <input type="text" name="KomentarManager_Pelkap" value="{{ $Pelkap ->KomentarManager_Pelkap }}" class="form-control" readonly>
                        <input type="hidden" name="id" value="{{ $Pelkap ->id }}">
                    </div>

                    <div class="form-group">
                        <label>Komentar Asisten Manajer</label>
                        <input type="text" name="KomentarAsistenManajer_Pelkap" value="{{ $Pelkap ->KomentarAsistenManajer_Pelkap }}" class="form-control" readonly>
                        <input type="hidden" name="id" value="{{ $Pelkap ->id }}">
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

<div class="modal fade" id="deleteModal-{{$Pelkap->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Apakah Anda yakin Menghapus Data User Pelkap ?
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/delete-jobpelkap/{{$Pelkap->id}}" class="btn btn-danger">Delete</a>
        </form>
    </div>
    </div>
    </div>
</div>
@endforeach
</div>
</section>
@endsection

@section('script')
<script>
    $(function() {
        @foreach ($penggunapelkap as $Pelkap)
        $('#toggle-{{ $Pelkap->id }}').bootstrapToggle({
            on:'Selesai',
            off:'Belum'
        });

        $('#toggle-{{ $Pelkap->id }}').change(function() {
            var status = $(this).prop('checked') == true ? 'selesai' : 'belum';
            $.ajax({
                url: '/update-status-userpelkap',
                type: 'POST',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'id': {{ $Pelkap->id }},
                    'Done_Pelkap': status
                },
                success: function(data) {
                    console.log(data);
                }
            });
        });

        @endforeach
    })
</script>
@endsection