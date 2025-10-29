<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="h-100" data-simplebar>
        <!--- User box -->
        <div class="user-box text-center">
            <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="user-image">
            <p class="text-muted mt-2">
               </p>
        </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul id="side-menu">
                <li>
                    <a href="{{ url('/') }}">
                        <i data-feather="home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="#sidebarEcommerce" data-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> Patients </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('add-patient')}}"><i data-feather="plus" class="pr-0 mr-1"></i>Add
                                    New</a>
                            </li>
                            <li>
                                <a href=""><i data-feather="list" class="pr-0 mr-1"></i>Manage
                                    Partients</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarCrm" data-toggle="collapse">
                        <i data-feather="edit"></i>
                        <span> Doctor </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('add-doctor')}}"><i data-feather="plus" class="pr-0 mr-1"></i>Create doctor</a>
                            </li>
                            <li>
                                <a href=""><i data-feather="list" class="pr-0 mr-1"></i>Manage all bills</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#sidebarCrm" data-toggle="collapse">
                        <i data-feather="edit"></i>
                        <span> Medicine </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('add-medicine')}}"><i data-feather="plus" class="pr-0 mr-1"></i>Create Medicine</a>
                            </li>
                            <li>
                                <a href=""><i data-feather="list" class="pr-0 mr-1"></i>Manage all bills</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->
