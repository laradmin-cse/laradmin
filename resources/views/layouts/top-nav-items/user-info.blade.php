<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="me-2 d-none d-lg-inline text-gray-600 small fw-bold">
            {{auth()->user()->name}}
        </span>
        <img class="img-profile rounded-circle"
            src="{{asset('assets/svg/profile.svg')}}">
    </a>

    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
        aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#">
            <i class="bi bi-person-circle me-2"></i>
            Profile
        </a>
        <a class="dropdown-item" href="#">
            <i class="bi bi-wrench-adjustable-circle me-2"></i>
            Settings
        </a>
        <a class="dropdown-item" href="#">
            <i class="bi bi-list-stars me-2"></i>
            Activity Log
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="bi bi-box-arrow-right me-2"></i>
            Logout
        </a>
    </div>
</li>