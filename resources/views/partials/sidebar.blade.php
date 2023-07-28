<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboard') }}">
        <div class="sidebar-brand-icon">
            <i class="fa-solid fa-computer"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Hisekawa <sup>Hobby</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="fa-solid fa-house-chimney"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    <!-- Post -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa-solid fa-pen-to-square"></i>
            <span>Posts</span>
        </a>
        <div id="collapse1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Posts</h6>
                <a class="collapse-item" href="buttons.html">Create Post </a>
                <a class="collapse-item" href="buttons.html">List Post </a>
                <a class="collapse-item" href="cards.html"> Trashed Post </a>
            </div>
        </div>
    </li>
<!-- Category -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa-solid fa-bookmark"></i>
            <span>Category</span>
        </a>
        <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Category</h6>
                <a class="collapse-item" href="{{route('category.create')}}">Create Category </a>
                <a class="collapse-item" href="{{route('admin.category.index')}}"> List Category</a>
            </div>
        </div>
    </li>

<!-- Tags -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa-solid fa-tags"></i>
            <span>Tags</span>
        </a>
        <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tags</h6>
                <a class="collapse-item" href="buttons.html">Create Tag </a>
                <a class="collapse-item" href="cards.html"> List Tags</a>
            </div>
        </div>
    </li>

<!-- Users -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fa-solid fa-users"></i>
        <span>Users</span>
    </a>
    <div id="collapse4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Users</h6>
            <a class="collapse-item" href="buttons.html">Create User </a>
            <a class="collapse-item" href="cards.html"> List Users</a>
        </div>
    </div>
</li>
</ul>