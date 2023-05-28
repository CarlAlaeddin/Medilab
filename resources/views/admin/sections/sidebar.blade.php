<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" !href="">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" !href="">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Setting -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting"
            aria-expanded="true" aria-controls="collapseSetting">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span>
        </a>
        <div id="collapseSetting" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Page :</h6>
                <a class="collapse-item" href="{{ route('admin.setting.edit') }}">Page Setting</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Pages Collapse why us -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseWhyUs" aria-expanded="true"
            aria-controls="collapseWhyUs">
            <i class="fas fa-fw fa-box"></i>
            <span>Why us Box</span>
        </a>
        <div id="collapseWhyUs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.whyUs.index') }}">Show all</a>
                <a class="collapse-item" href="{{ route('admin.whyUs.create') }}">Create new</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Pages Collapse why choose -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseWhyChoose"
            aria-expanded="true" aria-controls="collapseWhyChoose">
            <i class="fas fa-fw fa-box"></i>
            <span>Why Choose Box</span>
        </a>
        <div id="collapseWhyChoose" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.whyChoose.index') }}">Show all</a>
                <a class="collapse-item" href="{{ route('admin.whyChoose.create') }}">Create new</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Pages Collapse why choose -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsService" aria-expanded="true"
            aria-controls="collapsService">
            <i class="fas fa-fw fa-box"></i>
            <span>Services</span>
        </a>
        <div id="collapsService" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.service.index') }}">Show all</a>
                <a class="collapse-item" href="{{ route('admin.service.create') }}">Create new</a>
            </div>
        </div>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Pages Collapse why choose -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsDepartment"
            aria-expanded="true" aria-controls="collapsDepartment">
            <i class="fas fa-fw fa-box"></i>
            <span>Department</span>
        </a>
        <div id="collapsDepartment" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.department.index') }}">Show all</a>
                <a class="collapse-item" href="{{ route('admin.department.create') }}">Create new</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse why choose -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsPositionDoctor"
            aria-expanded="true" aria-controls="collapsPositionDoctor">
            <i class="fas fa-fw fa-box"></i>
            <span>Position Doctor</span>
        </a>
        <div id="collapsPositionDoctor" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.position.index') }}">Show all</a>
                <a class="collapse-item" href="{{ route('admin.position.create') }}">Create new</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse why choose -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsDoctor" aria-expanded="true"
            aria-controls="collapsDoctor">
            <i class="fas fa-fw fa-box"></i>
            <span>Doctor</span>
        </a>
        <div id="collapsDoctor" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.doctor.index') }}">Show all</a>
                <a class="collapse-item" href="{{ route('admin.doctor.create') }}">Create new</a>
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