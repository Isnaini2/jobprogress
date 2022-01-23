@extends("root.root_job")
@section("title","JOB PROGRESS DIVISI KEUANGAN")
@section("content")
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">+ Tambah</button>
            <div class="d-flex align-items-center">
                <label>From</label>
                <input type="date" class="form-control" id="datefilterfrom" data-date-split-input="true">
                <label>To</label>
                <input type="date" class="form-control" id="datefilterto" data-date-split-input="true">
            </div>
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
                    <th scope="col">Periode</th>
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
                    <td>{{date("d/m/Y", strtotime($Keuangan->created_at));}}</td>
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
    <button class="btn btn-success" onclick="exportData()">Export as csv</button>
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

<script>
    function exportData() {
      /* Get the HTML data using Element by Id */
      var table = document.getElementById("dataTable");
    
      /* Declaring array variable */
      var rows = [];
    
      var arrstatus = [''];
    
      // query selector input type checkbox
      var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        // looping checkbox
        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                // push to array
                arrstatus.push("Selesai");
            } else {
                arrstatus.push("Belum");
            }
        });
        console.log(arrstatus)
    
    
    
      //iterate through rows of table
      for (var i = 0, row; (row = table.rows[i]); i++) {
        //   get row with style display none
        if (row.style.display === "none") {
          continue;
        }
        //rows would be accessed using the "row" variable assigned in the for loop
        //Get each cell value/column from the row
        column1 = row.cells[0].innerText;
        column2 = row.cells[1].innerText;
        column3 = row.cells[2].innerText;
        column4 = row.cells[3].innerText;
        column5 = row.cells[4].innerText;
        if(i==0){
            column6 = row.cells[5].innerText;
        } else {
            column6 = arrstatus[i];
        }
        column7 = row.cells[6].innerText;
        column8 = row.cells[7].innerText;
    
        /* add a new records in the array */
        rows.push([column1, column2, column3, column4, column5, column6, column7, column8]);
      }
      csvContent = "data:text/csv;charset=utf-8,";
      /* add the column delimiter as comma(,) and each row splitted by new line character (\n) */
      rows.forEach(function (rowArray) {
        row = rowArray.join(";");
        csvContent += row + "\r\n";
      });
    
      /* create a hidden <a> DOM node and set its download attribute */
      var encodedUri = encodeURI(csvContent);
      var link = document.createElement("a");
      link.setAttribute("href", encodedUri);
      link.setAttribute("download", "Job Keuangan.csv");
      document.body.appendChild(link);
      /* download the data file named "Stock_Price_Report.csv" */
      link.click();
    }
    </script>
    
    
    <script>
        function filterRows() {
      var from = $('#datefilterfrom').val();
      var to = $('#datefilterto').val();
    
      if (!from && !to) { // no value for from and to
        return;
      }
    
      from = from || '1970-01-01'; // default from to a old date if it is not set
      to = to || '2999-12-31';
    
      var dateFrom = moment(from);
      var dateTo = moment(to);
    
      $('#dataTable tbody tr').each(function(i, tr) {
        var val = $(tr).find("td:nth-child(5)").text();
        var dateVal = moment(val, "DD/MM/YYYY");
        var visible = (dateVal.isBetween(dateFrom, dateTo, null, [])) ? "" : "none"; // [] for inclusive
        $(tr).css('display', visible);
      });
    }
    
    $('#datefilterfrom').on("change", filterRows);
    $('#datefilterto').on("change", filterRows);
    </script>

@endsection