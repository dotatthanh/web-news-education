<div class="vertical-menu">

    <div data-simplebar="" class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Quản lý</li>

                @can('Xem danh sách danh mục')
                <li>
                    <a href="{{ route('categories.index') }}" class=" waves-effect">
                        <i class="bx bx-task"></i>
                        <span>Danh mục</span>
                    </a>
                </li>
                @endcan

                @can('Xem danh sách tin tức')
                <li>
                    <a href="{{ route('news.index') }}" class=" waves-effect">
                        <i class="bx bx-news"></i>
                        <span>Tin tức</span>
                    </a>
                </li>
                @endcan

                @can('Xem danh sách tài khoản', 'Xem danh sách vai trò', 'Xem danh sách quyền')
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-cog"></i><span class="badge badge-pill badge-info float-right">03</span>
                        <span>Cài đặt</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @can('Xem danh sách tài khoản')
                        <li><a href="{{ route('users.index') }}">Tài khoản</a></li>
                        @endcan
                        @can('Xem danh sách vai trò')
                        <li><a href="{{ route('roles.index') }}">Vai trò</a></li>
                        @endcan
                        @can('Xem danh sách quyền')
                        <li><a href="{{ route('permissions.index') }}">Quyền</a></li>
                        @endcan
                    </ul>
                </li>
                @endcan

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>