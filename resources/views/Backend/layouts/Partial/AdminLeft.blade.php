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
        <span>Dashboard </span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
<!-- Slider Item - Pages -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Slider"
        aria-expanded="true" aria-controls="Slider">
        <i class="fas fa-fw fa-user"></i>
        <span>SLIDER</span>
    </a>
    <div id="Slider" class="collapse" aria-labelledby="Slider" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Add slider</h6>
            <a class="collapse-item" href="{{url('/sliders/')}}">All slider</a>
            <a class="collapse-item" href="{{url('/sliders/create')}}">Add slider</a>
        </div>
    </div>
</li>
<hr class="sidebar-divider">
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
            <h6 class="collapse-header">Add award category</h6>
            <a class="collapse-item" href="{{url('/awardcats/')}}">All award category</a>
            <a class="collapse-item" href="{{url('/awardcats/create')}}">Add award categor</a>
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
            <h6 class="collapse-header">Add social network</h6>
            <a class="collapse-item" href="{{url('/socials/')}}">All socials</a>
            <a class="collapse-item" href="{{url('/socials/create')}}">Add socials</a>
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
            <h6 class="collapse-header">Add book shelf</h6>
            <a class="collapse-item" href="{{url('/bookshelves/')}}">All book shelf</a>
            <a class="collapse-item" href="{{url('/bookshelves/create')}}">Add book shelf</a>
            <h6 class="collapse-header">Add Almirah</h6>
            <a class="collapse-item" href="{{url('/almirahs/')}}">All almirah</a>
            <a class="collapse-item" href="{{url('/almirahs/create')}}">Add almirah</a>
            <h6 class="collapse-header">Add pdf book</h6>
            <a class="collapse-item" href="{{url('/bookpdfs/')}}">All pdf book</a>
            <a class="collapse-item" href="{{url('/bookpdfs/create')}}">Add pdf book</a>
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
            <h6 class="collapse-header">Add Donor category</h6>
            <a class="collapse-item" href="{{url('/donorcats/')}}">All donor category</a>
            <a class="collapse-item" href="{{url('/donorcats/create')}}">Add donor category</a>
        </div>
    </div>
</li>



<!-- Divider -->
<hr class="sidebar-divider">
<!-- Programme Item -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Others"
        aria-expanded="true" aria-controls="Others">
        <i class="fas fa-fw fa-user"></i>
        <span>PROGRAMME</span>
    </a>
    <div id="Others" class="collapse" aria-labelledby="Others" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Programme </h6>
            <a class="collapse-item" href="{{url('/programmes/')}}"> All programme</a>
            <a class="collapse-item" href="{{url('/programmes/create')}}">Add programme</a>
            <h6 class="collapse-header">Programme Category </h6>
            <a class="collapse-item" href="{{url('/programmecats/')}}"> All programme category</a>
            <a class="collapse-item" href="{{url('/programmecats/create')}}">Add programme category</a>
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
<hr class="sidebar-divider">
<!-- Staff Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Staff"
        aria-expanded="true" aria-controls="Staff">
        <i class="fas fa-fw fa-user"></i>
        <span>STAFF</span>
    </a>
    <div id="Staff" class="collapse" aria-labelledby="Staff" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Add Staff</h6>
            <a class="collapse-item" href="{{url('/staff/')}}">All Staff</a>
            <a class="collapse-item" href="{{url('/staff/create')}}">Add Staff</a>
        </div>
    </div>
</li>
<hr class="sidebar-divider">
<!-- Borrower  Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Borrower"
        aria-expanded="true" aria-controls="Borrower">
        <i class="fas fa-fw fa-user"></i>
        <span>BORROWER</span>
    </a>
    <div id="Borrower" class="collapse" aria-labelledby="Borrower" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Add Borrower</h6>
            <a class="collapse-item" href="{{url('/borrowers/')}}">All Borrower</a>
            <a class="collapse-item" href="{{url('/borrowers/create')}}">Add Borrower</a>
        </div>
    </div>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>


</ul>
<!-- End of Sidebar -->