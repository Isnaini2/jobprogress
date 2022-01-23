@extends("root.root_job")
@section("title","JOB PROGRESS DIVISI IT")
@section("content")
    <section id="faq" class="faq">
        <div class="container">
            <div class="row text-center">
                <h1 class="display-3 fw-bold text-uppercase">JOB PROGRESS DIVISI IT</h1>
                <div class="heading-line"></div>
            </div>
            <br>
            <form action="/usrit"><button type="submit" class="rounded-pill btn-rounded border-primary">kembali
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
        @foreach ($penggunait as $it )
          <tr>
            <td>{{$no++}}</td>
                <td>{{$it->User_IT}}</td>
                <td>{{$it->To_Do_IT}}</td>
                <td>{{$it->Progress_IT}}</td>
                <td>
                    <input type="checkbox" id="toggle-{{ $it->id }}" data-offstyle="danger" @if($it->Done_IT == "selesai") checked @endif>
                    {{-- {{$it->Done_IT}} --}}
                </td>
                <td>{{$it->KomentarManager_IT}}</td>
                <td>{{$it->KomentarAsistenManajer_IT}}</td>
            <td>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updateModal-{{$it->id}}"><i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$it->id}}"><i class="far fa-trash-alt"></i></button>

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
        <h5 class="modal-title" id="exampleModalLabel">Tambah JOB USER IT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/add-userit" method="POST" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="modal-body">

                    <div class="form-group">
                        <label>User</label>
                        <input type="text" name="User_IT" class="form-control" required>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>To Do</label>
                        <input type="text" name="To_Do_IT" class="form-control" required>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>Progress</label>
                        <input type="text" name="Progress_IT" class="form-control" required>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>Done</label>
                        <select class="form-select" aria-label="Default select example" name="Done_IT" required>
                            <option value="belum" selected>Belum</option>
                            <option value="selesai">Selesai</option>
                        </select>
                        {{-- <input type="text" name="Done_IT" class="form-control" required> --}}
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>Komentar Manager</label>
                        <input type="text" name="KomentarManager_IT" class="form-control" readonly>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>Komentar Asisten Manajer</label>
                        <input type="text" name="KomentarAsistenManajer_IT" class="form-control" readonly>
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
@foreach ($penggunait as $it )
<div class="modal fade" id="updateModal-{{$it->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/update-userit" method="POST" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <label>User</label>
                        <input type="text" name="User_IT" value="{{ $it ->User_IT }}" class="form-control">
                        <input type="hidden" name="id" value="{{ $it ->id }}">
                    </div>

                    <div class="form-group">
                        <label>To Do</label>
                        <input type="text" name="To_Do_IT" value="{{ $it ->To_Do_IT }}" class="form-control">
                        <input type="hidden" name="id" value="{{ $it ->id }}">
                    </div>

                    <div class="form-group">
                        <label>Progress</label>
                        <input type="text" name="Progress_IT" value="{{ $it ->Progress_IT }}" class="form-control">
                        <input type="hidden" name="id" value="{{ $it->id }}">
                    </div>

                    <div class="form-group">
                        <label>Done</label>
                        <select class="form-select" aria-label="Default select example" name="Done_IT" required>
                            <option value="belum" @if($it->Done_IT == "belum") selected @endif>Belum</option>
                            <option value="selesai" @if($it->Done_IT == "selesai") selected @endif>Selesai</option>
                        </select>
                        {{-- <input type="text" name="Done_IT" value="{{ $it ->Done_IT }}" class="form-control"> --}}
                        <input type="hidden" name="id" value="{{ $it ->id }}">
                    </div>

                    <div class="form-group">
                        <label>Komentar Manager</label>
                        <input type="text" name="KomentarManager_IT" value="{{ $it ->KomentarManager_IT }}" class="form-control" readonly>
                        <input type="hidden" name="id" value="{{ $it ->id }}">
                    </div>

                    <div class="form-group">
                        <label>Komentar Asisten Manajer</label>
                        <input type="text" name="KomentarAsistenManajer_IT" value="{{ $it ->KomentarAsistenManajer_IT }}" class="form-control" readonly>
                        <input type="hidden" name="id" value="{{ $it ->id }}">
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

<div class="modal fade" id="deleteModal-{{$it->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Apakah Anda yakin Menghapus Data User IT ?
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/delete-userit/{{$it->id}}" class="btn btn-danger">Delete</a>
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
        @foreach ($penggunait as $it)
        $('#toggle-{{ $it->id }}').bootstrapToggle({
            on:'Selesai',
            off:'Belum'
        });

        $('#toggle-{{ $it->id }}').change(function() {
            var status = $(this).prop('checked') == true ? 'selesai' : 'belum';
            $.ajax({
                url: '/update-status-userit',
                type: 'POST',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'id': {{ $it->id }},
                    'Done_IT': status
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