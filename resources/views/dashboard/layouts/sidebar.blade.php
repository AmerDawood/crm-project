<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Website</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Nav Item - Pages Collapse Menu -->


    <!-- Nav Item - Utilities Collapse Menu -->


      {{-- <h1>{{ auth()->user()->type }}</h1> --}}




    @if (auth()->user()->type == 'admin')
 <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseJobs"
            aria-expanded="true" aria-controls="collapseJobs">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Jobs</span>
        </a>
        <div id="collapseJobs" class="collapse" aria-labelledby="headingJobs"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Jobs:</h6>
                <a class="collapse-item" href="{{ route('jobs.create') }}">Add Job</a>
                <a class="collapse-item" href="{{ route('jobs.index') }}">All Job</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCity"
            aria-expanded="true" aria-controls="collapseCity">
            <i class="fas fa-fw fa-wrench"></i>
            <span>City</span>
        </a>
        <div id="collapseCity" class="collapse" aria-labelledby="headingJobs"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">City:</h6>
                <a class="collapse-item" href="{{ route('cities.create') }}">Add City</a>
                <a class="collapse-item" href="{{ route('cities.index') }}">All City</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
            aria-expanded="true" aria-controls="collapseUser">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Users</span>
        </a>
        <div id="collapseUser" class="collapse" aria-labelledby="headingJobs"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Users:</h6>
                {{-- <a class="collapse-item" href="{{ route('cities.create') }}">Add City</a> --}}
                <a class="collapse-item" href="{{ route('users.index') }}">All Users</a>
            </div>
        </div>
    </li>

    @else
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseContacts"
            aria-expanded="true" aria-controls="collapseContacts">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Contacts</span>
        </a>
        <div id="collapseContacts" class="collapse" aria-labelledby="headingContacts"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Contacts:</h6>
                <a class="collapse-item" href="{{ route('contacts.create') }}">Add Contact</a>
                <a class="collapse-item" href="{{ route('contacts.index') }}">My Contact</a>
            </div>
        </div>
    </li>


    @endif



    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
