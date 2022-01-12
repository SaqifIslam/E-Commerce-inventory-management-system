<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-blue-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-1 pb-1 mb-1 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name ?? '' }}</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar-blue flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-ticket-alt"></i>
                        <p>
                            Inventory
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview navbar-light-blue">
                        <li class="nav-item">
                            <a href="{{ route('categories.index')}}" class="nav-link">
                                <i class="far fa-square nav-icon"></i>
                                <p>Category List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('brands.index')}}" class="nav-link">
                                <i class="far fa-square nav-icon"></i>
                                <p>Brands List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('sizes.index')}}" class="nav-link">
                                <i class="far fa-square nav-icon"></i>
                                <p>Sizes List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('products.index')}}" class="nav-link">
                                <i class="far fa-square nav-icon"></i>
                                <p>Products</p>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
