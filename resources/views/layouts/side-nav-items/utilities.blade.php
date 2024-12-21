<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item @if(are_utilities()) active @endif">
    <a class="nav-link @if(are_utilities()) '' @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="bi bi-tools"></i>
        <span>Utilities</span>
    </a>
    <div id="collapseUtilities" class="collapse @if(are_utilities()) show @endif" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item @if(is_active('colors')) active @endif" href="{{ url('/colors') }}">Colors</a>
            <a class="collapse-item @if(is_active('borders')) active @endif" href="{{ url('/borders') }}">Borders</a>
            <a class="collapse-item @if(is_active('animations')) active @endif" href="{{ url('/animations') }}">Animations</a>
            <a class="collapse-item @if(is_active('other')) active @endif" href="{{ url('/other') }}">Other</a>
        </div>
    </div>
</li>