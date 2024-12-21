<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item @if(are_pages()) active @endif">
    <a class="nav-link @if(are_pages()) '' @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="bi bi-file-earmark"></i>
        <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse @if(are_pages()) show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">SignIn Screens:</h6>
            <a class="collapse-item @if(is_active('signin')) active @endif" href="{{ url('/signin') }}">signin</a>
            <a class="collapse-item @if(is_active('signup')) active @endif" href="{{ url('/signup') }}">signup</a>
            <a class="collapse-item @if(is_active('forgot-password')) active @endif" href="{{ url('/forgot-password') }}">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item @if(is_active('404')) active @endif" href="{{ url('/404') }}">404 Page</a>
            <a class="collapse-item @if(is_active('blank')) active @endif" href="{{ url('/blank') }}">Blank Page</a>
        </div>
    </div>
</li>