<!-- Nav Item - Charts -->
<li class="nav-item @if(Request::is('charts')) active @endif">
    <a class="nav-link" href="{{ url('/charts') }}">
        <i class="bi bi-graph-up"></i>
        <span>Charts</span>
    </a>
</li>