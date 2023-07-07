<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="novus logo" class="rounded-circle" src="img/novusagrologo.png"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">  
                            {{-- {{Auth::user()->name }}  --}}
                        </span>
                        {{-- <span class="text-muted text-xs block">{{ Auth::user()->email }} <b class="caret"></b></span> --}}
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                    
                        <li class="dropdown-divider"></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li>
                <a href="/home"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span></a>
            </li>
            <li class=" ">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Product / Store front </span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('product/create')}}"> Create Product </a></li>
                    <li class=" "><a href="{{ url('product')}}"> All Product </a></li>
                    
                </ul>
            </li>
           
         
           
            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Logistics Management</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{url('order')}}"> All Orders </a></li>
                    <li><a href="#"> Manage Pickup Locations </a></li>
                    <li><a href="#"> Create Logistic Partner</a></li>
                    <li><a href="#"> Manage Transactions </a></li>
                    <li><a href="#"> Delivery/ Payment Management </a></li>
                    <li><a href="#"> Delivery/ Payment History </a></li>
                </ul>
            </li>
            @can('manage-user', Auth::user() )
            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">User Management</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('admin')}}">All Users</a></li>
                    <li><a href="{{ url('admin')}}"> Field Managers </a></li>
                    <li><a href="{{ url('admin')}}"> Outlet Manager Assignment </a></li>
                </ul>
            </li>
            @endcan 
            @can('manage-roles-and-permissions', Auth::user() )
            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Role Management</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('role')}}"> Roles</a></li>
                    {{-- <li><a href="graph_rickshaw.html">Rickshaw Charts</a></li> --}}
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Permission Management </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('permission')}}"> Permission</a></li>
                    {{-- <li><a href="graph_rickshaw.html">Rickshaw Charts</a></li> --}}
                </ul>
            </li>
            @endcan

        </ul>

    </div>
</nav>
