<!-- Nav Item - Components Collapse Menu -->
<li class="nav-item @if(are_components()) active @endif">
    <a class="nav-link @if(are_components()) '' @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="bi bi-gear"></i>
        <span>Components</span>
    </a>
    <div id="collapseTwo" class="collapse @if(are_components()) show @endif" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item @if(is_active('buttons')) active @endif" href="{{ url('/buttons') }}">Buttons</a>
            <a class="collapse-item @if(is_active('cards')) active @endif" href="{{ url('/cards') }}">Cards</a>
            <a class="collapse-item @if(is_active('alerts')) active @endif" href="{{ url('/alerts') }}">Alerts</a>
            <a class="collapse-item @if(is_active('models')) active @endif" href="{{ url('/models') }}">Models</a><!-- Step 1: Adding a Component - Models::Listing -->
        </div>
    </div>
</li>