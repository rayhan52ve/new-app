<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" style="height: 95vh;">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <!-- User Menu Start -->
            <div class="text-center">

                <img class="profile w-50" style="border-radius: 50%" alt="profile"
                    src="{{ asset('dashboard/assets/images/users/avatar.png') }}" />
                <h3>Sajid Rayhan</h3>
                <a href="" title="Edit Profile">Change Profile</a>
            </div>
            <hr>
            <!-- User Menu End -->
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('dashboard') }}" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('category.index') }}" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                            class="hide-menu">Category</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('sub-category.index') }}" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                            class="hide-menu">Sub Category</span></a></li>


            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <div class="sidebar-footer">
        <div class="row">
            <div class="col-4 link-wrap">
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="Settings"
                    data-original-title="Settings"><i class="ti-settings"></i></a>
            </div>
            <div class="col-4 link-wrap">
                <!-- item-->
                <a href="https://mail.google.com/" class="link" data-toggle="tooltip" title="Gmail"
                    data-original-title="Email"><i class="mdi mdi-gmail"></i></a>
            </div>
            <div class="col-4 link-wrap">
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="Sign Out"
                    data-original-title="Sign Out"><i class="mdi mdi-power"></i></a>
            </div>
        </div>
    </div>
</aside>
