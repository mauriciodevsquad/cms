<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon">
            <img src="img/logo-small-white.png" style="max-height: 25px;">
        </div>
        <div class="sidebar-brand-text mx-3">Pronto</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Management
    </div>

    <!-- Nav Item - Clients -->
    <li class="nav-item">
        <a class="nav-link" href="/clients">
            <i class="fas fa-fw fa-user"></i>
            <span>Clients</span></a>
    </li>

    <!-- Nav Item - Requests -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('requests')}}">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Requests</span></a>
    </li>

    <!-- Nav Item - Bookings -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('bookings')}}">
            <i class="fas fa-fw fa-clock"></i>
            <span>Bookings</span></a>
    </li>

    <!-- Nav Item - Request Form -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('request-form')}}">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Request Form</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        More
    </div>


    <!-- Nav Item - Account -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('account')}}">
            <i class="fas fa-fw fa-user-circle"></i>
            <span>Account</span></a>
    </li>

    <!-- Nav Item - Settings -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('settings')}}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
