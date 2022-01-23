@extends("root.root_job")
@section("title","JOB PROGRESS DIVISI KEUANGAN")
@section("content")
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
                @foreach ($penggunakeuangan as $Keuangan )
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$Keuangan->User_Keuangan}}</td>
                    <td>{{$Keuangan->To_Do_Keuangan}}</td>
                    <td>{{$Keuangan->Progress_Keuangan}}</td>
                    <td>
                        <input type="checkbox" id="toggle-{{ $Keuangan->id }}" data-offstyle="danger" @if($Keuangan->Done_Keuangan == "selesai") checked @endif>
                        {{-- {{$Keuangan->Done_Keuangan}} --}}
                    </td>
                    <td>{{$Keuangan->KomentarManager_Keuangan}}</td>
                    <td>{{$Keuangan->KomentarAsistenManajer_Keuangan}}</td>
                    <td>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updateModal-{{$Keuangan->id}}"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$Keuangan->id}}"><i class="far fa-trash-alt"></i></button>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Job User Keuangan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/add-userkeuangan" method="POST" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="modal-body">

                    <div class="form-group">
                        <label>User</label>
                        <input type="text" name="User_Keuangan" class="form-control" required>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>To Do</label>
                        <input type="text" name="To_Do_Keuangan" class="form-control" required>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>Progress</label>
                        <input type="text" name="Progress_Keuangan" class="form-control" required>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>Done</label>
                        <select class="form-select" aria-label="Default select example" name="Done_Keuangan" required>
                            <option value="belum" selected>Belum</option>
                            <option value="selesai">Selesai</option>
                        </select>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>Komentar Manager</label>
                        <input type="text" name="KomentarManager_Keuangan" class="form-control" readonly>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>Komentar Asisten Manajer</label>
                        <input type="text" name="KomentarAsistenManajer_Keuangan" class="form-control" readonly>
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
@foreach ($penggunakeuangan as $Keuangan )
<div class="modal fade" id="updateModal-{{$Keuangan->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/update-userkeuangan" method="POST" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <label>User</label>
                        <input type="text" name="User_Keuangan" value="{{ $Keuangan ->User_Keuangan }}" class="form-control">
                        <input type="hidden" name="id" value="{{ $Keuangan ->id }}">
                    </div>

                    <div class="form-group">
                        <label>To Do</label>
                        <input type="text" name="To_Do_Keuangan" value="{{$Keuangan ->To_Do_Keuangan }}" class="form-control">
                        <input type="hidden" name="id" value="{{ $Keuangan ->id }}">
                    </div>

                    <div class="form-group">
                        <label>Progress</label>
                        <input type="text" name="Progress_Keuangan" value="{{ $Keuangan ->Progress_Keuangan }}" class="form-control">
                        <input type="hidden" name="id" value="{{ $Keuangan->id }}">
                    </div>

                    <div class="form-group">
                        <label>Done</label>
                        <select class="form-select" aria-label="Default select example" name="Done_Keuangan" required>
                            <option value="belum" selected>Belum</option>
                            <option value="selesai">Selesai</option>
                        </select>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>Komentar Manager</label>
                        <input type="text" name="KomentarManager_Keuangan" value="{{ $Keuangan ->KomentarManager_Keuangan }}" class="form-control" readonly>
                        <input type="hidden" name="id" value="{{ $Keuangan ->id }}">
                    </div>

                    <div class="form-group">
                        <label>Komentar Asisten Manajer</label>
                        <input type="text" name="KomentarAsistenManajer_Keuangan" value="{{ $Keuangan ->KomentarAsistenManajer_Keuangan }}" class="form-control" readonly>
                        <input type="hidden" name="id" value="{{ $Keuangan ->id }}">
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

<div class="modal fade" id="deleteModal-{{$Keuangan->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Apakah Anda yakin Menghapus Data User Keuangan ?
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/delete-userkeuangan/{{$Keuangan->id}}" class="btn btn-danger">Delete</a>
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
        @foreach ($penggunakeuangan as $keuangan)
        $('#toggle-{{ $keuangan->id }}').bootstrapToggle({
            on:'Selesai',
            off:'Belum'
        });

        $('#toggle-{{ $keuangan->id }}').change(function() {
            var status = $(this).prop('checked') == true ? 'selesai' : 'belum';
            $.ajax({
                url: '/update-status-userkeuangan',
                type: 'POST',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'id': {{ $keuangan->id }},
                    'Done_Keuangan': status
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