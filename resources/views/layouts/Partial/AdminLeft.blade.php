 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Pronoyee<sup>Admin</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard cc</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Add option
</div>

<!-- Award Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Award"
        aria-expanded="true" aria-controls="Award">
        <i class="fas fa-fw fa-user"></i>
        <span>AWARD</span>
    </a>
    <div id="Award" class="collapse" aria-labelledby="Award" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Add award</h6>
            <a class="collapse-item" href="{{url('/awards/')}}">All award</a>
            <a class="collapse-item" href="{{url('/awards/create')}}">Add award</a>
        </div>
    </div>
</li>
<!-- Writer Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Writer"
        aria-expanded="true" aria-controls="Writer">
        <i class="fas fa-fw fa-user"></i>
        <span>WRITER</span>
    </a>
    <div id="Writer" class="collapse" aria-labelledby="Writer" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Add writer</h6>
            <a class="collapse-item" href="{{url('/writers/')}}">All writer</a>
            <a class="collapse-item" href="{{url('/writers/create')}}">Add writer</a>
            <h6 class="collapse-header">Add time period</h6>
            <a class="collapse-item" href="{{url('/timeperiods/')}}">All timeperiod</a>
            <a class="collapse-item" href="{{url('/timeperiods/create')}}">Add time period</a>
        </div>
    </div>
</li>
<!-- Book Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Book"
        aria-expanded="true" aria-controls="Book">
        <i class="fas fa-fw fa-user"></i>
        <span>BOOK</span>
    </a>
    <div id="Book" class="collapse" aria-labelledby="Book" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Add book</h6>
            <a class="collapse-item" href="{{url('/books/')}}">All book</a>
            <a class="collapse-item" href="{{url('/books/create')}}">Add book</a>
            <h6 class="collapse-header">Add book category</h6>
            <a class="collapse-item" href="{{url('/bookcats/')}}">All book category</a>
            <a class="collapse-item" href="{{url('/bookcats/create')}}">Add book category</a>
            <h6 class="collapse-header">Add language</h6>
            <a class="collapse-item" href="{{url('/languages/')}}">All language</a>
            <a class="collapse-item" href="{{url('/languages/create')}}">Add language</a>
            <h6 class="collapse-header">Add publication</h6>
            <a class="collapse-item" href="{{url('/publications/')}}">All publication</a>
            <a class="collapse-item" href="{{url('/publications/create')}}">Add publication</a>

        </div>
    </div>
    
</li>
<!-- Writup Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Writup"
        aria-expanded="true" aria-controls="Writup">
        <i class="fas fa-fw fa-user"></i>
        <span>WRITUP</span>
    </a>
    <div id="Writup" class="collapse" aria-labelledby="Writup" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Add Writup</h6>
            <a class="collapse-item" href="{{url('/writups/')}}">All writup</a>
            <a class="collapse-item" href="{{url('/writups/create')}}">Add writup</a>
        </div>
    </div>
</li>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Countries Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Country"
        aria-expanded="true" aria-controls="Country">
        <i class="fas fa-fw fa-user"></i>
        <span>COUNTRIES</span>
    </a>
    <div id="Country" class="collapse" aria-labelledby="Country" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Add Country</h6>
            <a class="collapse-item" href="{{url('/countries/')}}">All country</a>
            <a class="collapse-item" href="{{url('/countries/create')}}">Add country</a>
            <h6 class="collapse-header">Add State</h6>
            <a class="collapse-item" href="{{url('/states/')}}">All state</a>
            <a class="collapse-item" href="{{url('/states/create')}}">Add state</a>
            <h6 class="collapse-header">Add City</h6>
            <a class="collapse-item" href="{{url('/cities/')}}">All city</a>
            <a class="collapse-item" href="{{url('/cities/create')}}">Add city</a>
        </div>
    </div>
</li>
<!-- Donor Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Donor"
        aria-expanded="true" aria-controls="Donor">
        <i class="fas fa-fw fa-user"></i>
        <span>DONOR</span>
    </a>
    <div id="Donor" class="collapse" aria-labelledby="Donor" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Add Donor</h6>
            <a class="collapse-item" href="{{url('/donors/')}}">All donor</a>
            <a class="collapse-item" href="{{url('/donors/create')}}">Add donor</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Menu Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Menu"
        aria-expanded="true" aria-controls="Menu">
        <i class="fas fa-fw fa-user"></i>
        <span>MENUS</span>
    </a>
    <div id="Menu" class="collapse" aria-labelledby="Menu" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu </h6>
            <a class="collapse-item" href="{{url('/menus/')}}"> All menu</a>
            <a class="collapse-item" href="{{url('/menus/create')}}">Add Menu</a>
            <h6 class="collapse-header">Sub-menu</h6>
            <a class="collapse-item" href="{{url('submenus')}}"> All sub-menu</a>
            <a class="collapse-item" href="{{url('/submenus/create')}}">Add sub-menu</a>
        </div>
    </div>
</li> 
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Menu Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Category"
        aria-expanded="true" aria-controls="Category">
        <i class="fas fa-fw fa-user"></i>
        <span>CATEGORIES</span>
    </a>
    <div id="Category" class="collapse" aria-labelledby="Category" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Category </h6>
            <a class="collapse-item" href="{{url('/categories/')}}"> All categories</a>
            <a class="collapse-item" href="{{url('/categories/create')}}">Add category</a>
            <h6 class="collapse-header">Sub-category</h6>
            <a class="collapse-item" href="{{url('subcategories')}}"> All sub-category</a>
            <a class="collapse-item" href="{{url('/subcategories/create')}}">Add sub-category</a>
        </div>
    </div>
</li> 
<!-- Divider -->
<hr class="sidebar-divider">
<!-- Menu Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Others"
        aria-expanded="true" aria-controls="Others">
        <i class="fas fa-fw fa-user"></i>
        <span>OTHERS</span>
    </a>
    <div id="Others" class="collapse" aria-labelledby="Others" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Programme </h6>
            <a class="collapse-item" href="{{url('/programmes/')}}"> All programme</a>
            <a class="collapse-item" href="{{url('/programmes/create')}}">Add programme</a>
        </div>
    </div>
</li> 
<!-- Divider -->
<hr class="sidebar-divider">
<!-- Pichouse Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Pichouse"
        aria-expanded="true" aria-controls="Pichouse">
        <i class="fas fa-fw fa-user"></i>
        <span>PICHOUSE</span>
    </a>
    <div id="Pichouse" class="collapse" aria-labelledby="Pichouse" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Add Pichouse</h6>
            <a class="collapse-item" href="{{url('/pichouses/')}}">All Pichouse</a>
            <a class="collapse-item" href="{{url('/pichouses/create')}}">Add Pichouse</a>
        </div>
    </div>
</li>
<hr class="sidebar-divider">
<!-- Ptube Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Ptube"
        aria-expanded="true" aria-controls="Ptube">
        <i class="fas fa-fw fa-user"></i>
        <span>PTUBE</span>
    </a>
    <div id="Ptube" class="collapse" aria-labelledby="Ptube" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Add Ptube</h6>
            <a class="collapse-item" href="{{url('/ptubes/')}}">All Ptube</a>
            <a class="collapse-item" href="{{url('/ptubes/create')}}">Add Ptube</a>
        </div>
    </div>
</li>
<!-- Heading -->
<div class="sidebar-heading">
    Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
        </div>
    </div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->
<div class="sidebar-card d-none d-lg-flex">
    <img class="sidebar-card-illustration mb-2" src="AdminContent/img/undraw_rocket.svg" alt="...">
    <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
</div>

</ul>
<!-- End of Sidebar -->