<!-- partial:partials/_navbar.html -->
<nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
        <a class="navbar-brand brand-logo-mini" href="index.html"><img
                src="backend_admin/assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button"
            data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>

        <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
              <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" action="{{ url('/search') }}" method="get">
                @csrf
                <input type="text" class="form-control" name="search" id="search" placeholder="Search products" style="color: white">
                <button type="submit" class="btn btn-info">Search</button>
              </form>
            </li>
        </ul>

        <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item d-none d-lg-block">
                <x-app-layout>

                </x-app-layout>
            </li>



        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
        </button>
    </div>
</nav>

<!-- partial -->
