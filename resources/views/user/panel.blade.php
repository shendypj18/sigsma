<li class="nav-item dropdown no-arrow">
  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
    <img src="/uploads/{{Auth::user()->photo}}" class="img-profile rounded-circle fa-user">
  </a>
  <!-- Dropdown - User Information -->
  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
   <div class="dropdown-divider"></div>
       <a href="{{ route('logout') }}"
         onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         {{ csrf_field() }}
     </form>
  </div>
</li>
