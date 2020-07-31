<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        @if(auth()->user()->company)
            @if(auth()->user()->company->logo)
                <img src="{{auth()->user()->company->logo}}" alt="Logo" class="brand-image img-circle elevation-3"style="opacity: .8">
                <span class="brand-text font-weight-light">{{auth()->user()->company->user->name}}</span>
            @endif
        @else

            <span class="brand-text font-weight-light">Admin Panel</span>

        @endif


    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview">
                    <a href="{{route('home')}}" class="nav-link @if(request()->is('admin/dashboard')) active @endif">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                    </a>
                </li>

                @role('admin_company')
                    <li class="nav-item has-treeview ">
                        <a href="{{route('clients.index')}}" class="nav-link @if(request()->is('admin/clients*')) active @endif">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Clients
                                {{-- <i class="right fas fa-angle-left"></i> --}}
                            </p>
                        </a>
                    </li>
                @endrole

                @role('super_admin')
                    <li class="nav-item has-treeview">
                        <a href="{{route('companies.index')}}" class="nav-link @if(request()->is('admin/companies*')) active @endif">
                            <i class="nav-icon fas fa-industry"></i>
                            <p>
                                Companies
                                {{-- <i class="right fas fa-angle-left"></i> --}}
                            </p>
                        </a>
                    </li>
                @endrole


                <li class="nav-header">Configurations</li>
                @role('admin_company')
                    <li class="nav-item has-treeview">
                        <a href="{{route('company.profile')}}" class="nav-link @if(request()->is('admin/profile*')) active @endif">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>
                @endrole

                <li class="nav-item has-treeview">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>


