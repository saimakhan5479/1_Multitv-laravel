


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        {{--  <img src="{{ asset('admin_assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">  --}}
        <img  src="https://portal.dcodax.com/user-uploads/app-logo/263a801764152fea4adba517ab99993f.png" class="brand-image " style="opacity: .8" alt="Logo">
        <span class="brand-text "><h4>Livetv</h4></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid" viewBox="0 0 16 16">
                            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                          </svg>
                        <p class="menu-title">Dashboard</p>
                        </a>
                </li>


                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('category.category_smt_show') }}">
                    <i class="fa fa-film menu-icon" aria-hidden="true"></i>
                       <p class="menu-title">Category</p>
                    </a>
                </li>




                <li class="nav-item">
                    <a class="nav-link" href="{{ route('content.content_show') }}">

                        <i   class="fa-light fas fa-tv menu-icon" aria-hidden="true"></i>
                           <p class="menu-title">Content</p>
                        </a>
                </li>



                 <li class="nav-item">
                    <a href="{{ route('banner.banner_show') }}" class="nav-link">
                          <i class="fa fa-columns menu-icon" aria-hidden="true"></i>
                        <p>Banner</p>
                    </a>
                </li>



                <li class="nav-item">
                    <a class="nav-link" href="{{ route('feedback.feedback_show') }}">
                        <i class="fa fa-bars menu-icon" aria-hidden="true"></i>
                      <p class="menu-title">Feedback</p>
                      </a>
                </li>



                <li class="nav-item">
                    <a class="nav-link" href="{{ route('report.report_show') }}">
                        <i class="fa fa-file menu-icon" aria-hidden="true"></i>
                      <p class="menu-title">Report</p>
                      </a>
                </li>



                <li class="nav-item">
                    <a class="nav-link" href="{{ route('notification.notification_show') }}">
                        <i class="fa fa-bell menu-icon" aria-hidden="true"></i>
                      <p class="menu-title">Notification</p>
                      </a>
                </li>


                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('setting.setting_show') }}">
                      <i class="fa fa-cog menu-icon" aria-hidden="true"></i>
                    <p class="menu-title">Ad Setting</p>
                    </a>
                </li>
 {{--



                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-tv"></i>
                        <p>content</p>
                    </a>
                </li>
  --}}


                    {{--
                </li>
                <li class="nav-item">
                    <a href="brands.html" class="nav-link">
                        <svg class="h-6 nav-icon w-6 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                          </svg>
                        <p>Brands</p>
                    </a>
                </li>



                  <li class="nav-item">
                    <a href="subcategory.html" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Sub Category</p>
                    </a>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <!-- <i class="nav-icon fas fa-tag"></i> -->
                        <i class="fas fa-truck nav-icon"></i>
                        <p>Shipping</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="orders.html" class="nav-link">
                        <i class="nav-icon fas fa-shopping-bag"></i>
                        <p>Orders</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="discount.html" class="nav-link">
                        <i class="nav-icon  fa fa-percent" aria-hidden="true"></i>
                        <p>Discount</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="users.html" class="nav-link">
                        <i class="nav-icon  fas fa-users"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages.html" class="nav-link">
                        <i class="nav-icon  far fa-file-alt"></i>
                        <p>Pages</p>
                    </a>
                </li>  --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
 </aside>
