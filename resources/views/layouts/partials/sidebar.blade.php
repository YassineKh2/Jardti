<!-- Left Sidebar Start -->
<div class="app-sidebar-menu">
    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <div class="logo-box mt-3">
                <a href="#" class="logo logo-light">
                   
                </a>
                <a href="#" class="logo logo-dark ">
                <img src="{{ asset('images/Jardti.png') }}" alt="Logo" width="140" height="60">

                </a>
            </div>

            <ul id="side-menu">

                <li class="menu-title mt-5">Menu</li>

                <li>
                    <a href="#sidebarDashboards" data-bs-toggle="collapse">
                        <i data-feather="home"></i>
                        <span> Dashboard </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarDashboards">
                        <ul class="nav-second-level">
                            
                            <li>
                                <a href="/statistics/products" class="tp-link">Products Stats</a>
                            </li>
                            <li>
                                <a href="/statistics/orders" class="tp-link">Orders Stats</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="/products">
                        <i data-feather="archive"></i>
                        <span> Products </span>

                    </a>

                </li>
                <li>
                    <a href="/orders">
                        <i data-feather="shopping-cart"></i>
                        <span> Orders </span>

                    </a>

                </li>

                
             

              
                  
                <li>
    <a href="#sidebarEvents" data-bs-toggle="collapse">
        <i data-feather="calendar"></i>
        <span> Events </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarEvents">
        <ul class="nav-second-level">
            <li>
            <a class="tp-link" href="{{ route('events.index') }}">All Events</a>
            </li>
            <li>
                <a class="tp-link" href="{{ route('events.create') }}">Create Event</a>
            </li>
           
            <li>
            <a class="tp-link" href="{{ route('event-categories.index') }}">Event Categories</a>
            </li>
        </ul>
    </div>
</li>

                
                <li>
                    <a href="{{ route('calendar') }}" class="tp-link">
                        <i data-feather="calendar"></i>
                        <span> Calendar </span>
                    </a>
                </li>
                 


                <li>
                    <a href="#sidebarShop" data-bs-toggle="collapse">
                        <i data-feather="shopping-cart"></i>
                        <span> Shop </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarShop">
                        <ul class="nav-second-level">
                            <li>
                                <a href="/back/shop/categories" class="tp-link">Categories</a>
                            </li>
                            <li>
                                <a href="/back/shop/items" class="tp-link">Items</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
    <a href="#sidebarCourses" data-bs-toggle="collapse">
        <i data-feather="book"></i> <!-- Assuming "book" icon for courses -->
        <span> Courses </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarCourses">
        <ul class="nav-second-level">
            <!-- Link to Course Categories -->
            <li>
                <a href="/back/course-categories" class="tp-link">Course Categories</a>
            </li>
            <!-- Link to Courses -->
            <li>
                <a href="/back/courses" class="tp-link">Courses</a>
            </li>
        </ul>
    </div>
</li>

                
                
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
</div>
<!-- Left Sidebar End -->