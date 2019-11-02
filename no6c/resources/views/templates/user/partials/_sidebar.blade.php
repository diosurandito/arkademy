


<!-- Sidebar -->
            <!--
                Sidebar Mini Mode - Display Helper classes

                Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

                Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
                Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
                Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
            -->
            <nav id="sidebar" aria-label="Main Navigation">
                <!-- Side Header -->
                <div class="content-header bg-white-5">
                    <!-- Logo -->
                    <a class="font-w600 text-dual" href="">
                        <img src="{{ asset('public/assets/media/favicons/larav.png') }}" style="width: 30px;">
                        <span class="smini-hide">
                            <span class="font-w700 font-size-h5">LARAVEL 6</span>
                        </span>
                    </a>
                    <!-- END Logo -->

                    <!-- Options -->
                    <div>
                        <!-- Color Variations -->

                        <!-- END Themes -->

                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                            <i class="fa fa-times"></i>
                        </a>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Options -->
                </div>
                <!-- END Side Header -->

                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li class="nav-main-heading text-flat"><small>Dashboard</small></li>
                        <li class="nav-main-item">
                            <a class="nav-main-link @if (Request::is('home')) active @endif" href="{{route('home')}}">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link @if (Request::is('test1')) active @endif" href="{{route('user.kontak.index')}}">
                                <i class="nav-main-link-icon fa fa-phone"></i>
                                <span class="nav-main-link-name">Test 1</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-puzzle"></i>
                                <span class="nav-main-link-name">Test 2</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link @if (Request::is('test2a')) active @endif" href="{{route('user.trans.index')}}">
                                        <i class="nav-main-link-icon fa fa-phone"></i>
                                        <span class="nav-main-link-name">Test2a</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link @if (Request::is('test2b')) active @endif" href="{{route('user.siswa.index')}}">
                                        <i class="nav-main-link-icon fa fa-phone"></i>
                                        <span class="nav-main-link-name">Test2b</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link @if (Request::is('test2c')) active @endif" href="{{route('user.kontak.index2')}}">
                                        <i class="nav-main-link-icon fa fa-phone"></i>
                                        <span class="nav-main-link-name">Test2c</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                    </ul>

                </div>
                <!-- END Side Navigation -->
            </nav>
            <!-- END Sidebar -->


  <!-- <aside class="main-sidebar">

    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header">MENU NAVIGASI</li> 

        <li><a href=""><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li><a href=""><i class="fa fa-bell"></i> <span>Konfirmasi Pemesanan</span></a></li>
        <li><a href=""><i class="fa fa-ticket"></i> <span>Data Event</span></a></li>
        <li><a href=""><i class="fa fa-user"></i> <span>Data User</span></a></li>
        <li><a href=""><i class="fa fa-user-circle-o"></i> <span>Data Penyelenggara</span></a></li>
        
      
        <li><a href="#"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li><a href="#"><i class="fa fa-cart-plus"></i> <span>Event Saya</span></a></li>
       
      </ul>
    </section>
  </aside> 
  -->