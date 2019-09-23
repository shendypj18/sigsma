<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SIG Sekolah</title>

  <!-- Custom fonts for this template-->
  <link href="{{URL::to('sig/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{URL::to('sig/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <link href="{{URL::to('sig/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->

    <!-- Page Wrapper -->
    <div id="wrapper">

      <!-- Sidebar -->
      @include('user.menu')
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <!-- Nav Item - Alerts -->


              <!-- Nav Item - Messages -->


              <!-- Nav Item - User Information -->
              @include('user.panel')
            </ul>

          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tabel perhitungan</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Perhitungan</h6>
    @include('admin.notif')
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Sekolah</th>
            <th>Jarak</th>
            <th>kuota</th>
            <th>Passing Grade</th>
            {{-- <th>Bobot Jarak</th>
            <th>Bobot kuota</th>
            <th>Bobot Passing Grade</th>
            <th>normalisasi jarak</th>
            <th>normalisasi kuota</th>
            <th>normalisasi grade</th>
            <th>V1 jarak</th>
            <th>V1 kuota</th>
            <th>V1 grade</th> --}}
            <th>hasil Rekomendasi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($view as $data)
        <tr>
          <td></td>
          
          {{-- <td>{{ $data['nama_sekolah'] }}</td>
          <td>{{ $data['bobot'] }}</td>
          <td>{{ $data['value'] }} meter</td>
          <td>{{ $data['kuota'] }}</td> --}}
          <td>{{ $data['nama_sekolah'] }}</td>
          <td>{{ $data['value'] }} meter</td>
          <td>{{ $data['kuota'] }} Siswa</td>
          <td>{{ $data['grade'] }}</td>
          {{-- <td>{{ $data['bobot'] }}</td>
          <td>{{ $data['b_kuota'] }}</td>
          <td>{{ $data['b_grade'] }}</td>
          <td>{{ $data['n_jarak'] }}</td>
          <td>{{ $data['n_kuota'] }}</td>
          <td>{{ $data['n_grade'] }}</td>
          <td>{{ $data['h_jarak'] }}</td>
          <td>{{ $data['h_kuota'] }}</td>
          <td>{{ $data['h_grade'] }}</td> --}}
          <td>{{ $data['hasil'] }} %</td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
            <!-- Page Heading -->


            <!-- Content Row -->

        <!-- End of Main Content -->

        <!-- Footer -->

        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin logout?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Silahkan klik logout.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
  {{-- <script type="text/javascript">
    $(document).ready(function() {
    $('#dataTable').DataTable( {
        "order": [[ 14, "desc" ]]
    } );
} );

  </script> --}}
  <!-- Bootstrap core JavaScript-->
  <script src="{{URL::to('sig/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::to('sig/vendor/jquery/jquery.js')}}"></script>
  <script src="{{URL::to('sig/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{URL::to('sig/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <script src="{{URL::to('sig/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{URL::to('sig/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <script src="{{URL::to('sig/js/demo/datatables-demo.js')}}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{URL::to('sig/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
