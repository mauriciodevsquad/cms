<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon">
            <img src="img/logo-small-white.png" style="max-height: 25px;">
        </div>
        <div class="sidebar-brand-text mx-3">Pronto</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Management
    </div>

    <li class="nav-item">
        <a class="nav-link" href="/clients">
            <i class="fas fa-fw fa-user"></i>
            <span>Clients</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/requests">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Requests</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="/user-request-form">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Request Form</span></a>
    </li>


    <hr class="sidebar-divider d-none d-md-block">


    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
