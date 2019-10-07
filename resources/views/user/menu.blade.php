<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">User Panel </div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="/dashboard">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Home</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Data Sekolah
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
  <a class="nav-link" href="{{route('user.datasekolah')}}">
      <i class="fas fa fa-university"></i>
      <span>Sekolah</span>
    </a>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-table"></i>
        <span>Rekomendasi Sekolah</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">

        <a class="collapse-item" href="{{url('rekomendasi')}}">Rute Sekolah</a>
        <a class="collapse-item" href="{{route('user.petasebaransekolah')}}">Peta Sebaran Sekolah</a> 
        <a class="collapse-item" href="{{route('user.perhitungan')}}">Hasil Rekomendasi </a>
      </div>
    </div>
    </li>



  <!-- Divider -->


  <!-- Heading -->

  <!-- Divider -->


  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
