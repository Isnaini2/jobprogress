@extends('root.root_job_admin')
@section('title','JOB PROGRRES DIVISION UMUM')
@section("css")
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

@endsection
@section('content')
    <section id="faq" class="faq">
        <div class="container">
            <div class="row text-center">
                <h1 class="display-3 fw-bold text-uppercase">JOB PROGRESS DIVISI UMUM</h1>
                <div class="heading-line"></div>
            </div>
            <br>
            <form action="/umum"><button type="submit" class="rounded-pill btn-rounded border-primary">kembali
                <span><i class="fas fa-arrow-left"></i></span>
                </button>
            </form>
            <br>
        </div>
    </section>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-end">
            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">+ Tambah</button> --}}
            <div class="d-flex align-items-center">
                <label>From</label>
                <input type="date" class="form-control" id="datefilterfrom" data-date-split-input="true">
                <label>To</label>
                <input type="date" class="form-control" id="datefilterto" data-date-split-input="true">
            </div>
        </div>

    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="datatables-reponsive" width="100%" cellspacing="0">
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
        @foreach ( $jobumum as $um )
          <tr>
            <td>{{$no++}}</td>
            <td>{{$um->User_Umum}}</td>
            <td>{{$um->To_Do_Umum}}</td>
            <td>{{$um->Progress_Umum}}</td>
            <td>{{date("d/m/Y", strtotime($um->created_at));}}</td>
            <td>{{$um->Done_Umum}}</td>
            <td>{{$um->KomentarManager_Umum}}</td>
            <td>{{$um->KomentarAsistenManajer_Umum}}</td>
            <td>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updateModal-{{$um->id}}"><i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$um->id}}"><i class="far fa-trash-alt"></i></button>

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
        <h5 class="modal-title" id="exampleModalLabel">Tambah JOB USER TPB</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/add-jobumum" method="POST" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="modal-body">

                    <div class="form-group">
                        <label>User</label>
                        <input type="text" name="User_Umum" class="form-control" readonly>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>To Do</label>
                        <input type="text" name="To_Do_Umum" class="form-control" readonly>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>Progress</label>
                        <input type="text" name="Progress_Umum" class="form-control" readonly>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>Done</label>
                        <input type="text" name="Done_Umum" class="form-control" readonly>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>Komentar Manager</label>
                        <input type="text" name="KomentarManager_Umum" class="form-control" required>
                        <input type="hidden" name="id" >
                    </div>

                    <div class="form-group">
                        <label>Komentar Asisten Manajer</label>
                        <input type="text" name="KomentarAsistenManajer_Umum" class="form-control" required>
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
    @foreach ( $jobumum as $um )
    <div class="modal fade" id="updateModal-{{$um->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/update-jobumum" method="POST" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <label>User</label>
                        <input type="text" name="User_Umum" value="{{ $um ->User_Umum}}" class="form-control" readonly>
                        <input type="hidden" name="id" value="{{ $um ->id }}">
                    </div>

                    <div class="form-group">
                        <label>To Do</label>
                        <input type="text" name="To_Do_Umum" value="{{ $um ->To_Do_Umum }}" class="form-control" readonly>
                        <input type="hidden" name="id" value="{{ $um ->id }}">
                    </div>

                    <div class="form-group">
                        <label>Progress</label>
                        <input type="text" name="Progress_Umum" value="{{ $um ->Progress_Umum }}" class="form-control" readonly>
                        <input type="hidden" name="id" value="{{ $um ->id }}">
                    </div>

                    <div class="form-group">
                        <label>Done</label>
                        <input type="text" name="Done_Umum" value="{{ $um ->Done_Umum }}" class="form-control" readonly>
                        <input type="hidden" name="id" value="{{ $um ->id }}">
                    </div>

                    <div class="form-group">
                        <label>Komentar Manager</label>
                        <input type="text" name="KomentarManager_Umum" value="{{ $um ->KomentarManager_Umum }}" class="form-control" required>
                        <input type="hidden" name="id" value="{{ $um ->id }}">
                    </div>

                    <div class="form-group">
                        <label>Komentar Asisten Manajer</label>
                        <input type="text" name="KomentarAsistenManajer_Umum" value="{{ $um ->KomentarAsistenManajer_Umum }}" class="form-control" required>
                        <input type="hidden" name="id" value="{{ $um ->id }}">
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

    <div class="modal fade" id="deleteModal-{{$um->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Apakah Anda yakin Menghapus Data User Umum ?
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/delete-jobumum/{{$um->id}}" class="btn btn-danger">Delete</a>
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
    function exportData() {
      /* Get the HTML data using Element by Id */
      var table = document.getElementById("datatables-reponsive");
    
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
        column6 = row.cells[5].innerText;
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
      link.setAttribute("download", "Job Umum.csv");
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
    
      $('#datatables-reponsive tbody tr').each(function(i, tr) {
        var val = $(tr).find("td:nth-child(5)").text();
        var dateVal = moment(val, "DD/MM/YYYY");
        var visible = (dateVal.isBetween(dateFrom, dateTo, null, [])) ? "" : "none"; // [] for inclusive
        $(tr).css('display', visible);
      });
    }
    
    $('#datefilterfrom').on("change", filterRows);
    $('#datefilterto').on("change", filterRows);
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
			// Datatables Responsive
			$("#datatables-reponsive").DataTable({
				responsive: true
			});
		});
    </script>
    

@endsection