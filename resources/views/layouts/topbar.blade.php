<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop"
        class="btn btn-light d-md-none navbar-toggler-icon">
    </button>

    <!-- Topbar Search -->
    <form
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-secondary" type="button">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        @include('layouts.top-nav-items.search')
        @include('layouts.top-nav-items.alerts')
        @include('layouts.top-nav-items.messages')

        @auth
        <div class="topbar-divider d-none d-sm-block"></div>
        @include('layouts.top-nav-items.user-info')
        @endauth

    </ul>

</nav>
<!-- End of Topbar -->