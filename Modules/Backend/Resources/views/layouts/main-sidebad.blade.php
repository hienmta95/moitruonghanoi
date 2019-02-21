<?php

if (! function_exists('active_route')) {
    /**
     * Return the "active" class if current route is matched.
     *
     * @param  string|array $route
     * @param  string $output
     * @return string|null
     */
    function active_route($route)
    {
        $output = 'active';
        if ($route == 1) {
            $route = [
                'backend.user.index','backend.user.show',
                'backend.user.create','backend.user.edit',

                'backend.slide.index','backend.slide.show',
                'backend.slide.create','backend.slide.edit',

                'backend.lienhe.index','backend.lienhe.show',
                'backend.lienhe.create','backend.lienhe.edit',

                'backend.tintuc.index','backend.tintuc.show',
                'backend.tintuc.create','backend.tintuc.edit',
            ];
        }

        if ($route == 2) {
            $route = [
                'backend.loaicongnghe.index','backend.loaicongnghe.show',
                'backend.loaicongnghe.create','backend.loaicongnghe.edit',
                'backend.congnghe.index','backend.congnghe.show',
                'backend.congnghe.create','backend.congnghe.edit',

                'backend.dashboard'
            ];
        }

        if ($route == 3) {
            $route = [
                'backend.loaiduan.index','backend.loaiduan.show',
                'backend.loaiduan.create','backend.loaiduan.edit',
                'backend.duan.index','backend.duan.show',
                'backend.duan.create','backend.duan.edit',
            ];
        }

        if ($route == 4) {
            $route = [
                'backend.loaisanpham.index','backend.loaisanpham.show',
                'backend.loaisanpham.create','backend.loaisanpham.edit',
                'backend.sanpham.index','backend.sanpham.show',
                'backend.sanpham.create','backend.sanpham.edit',
            ];
        }

        if (is_array($route)) {
            if (call_user_func_array('Route::is', $route)) {
                return $output;
            }
        } else {
            if (\Route::is($route)) {
                return $output;
            }
        }
        return '';
    }
}

?>


<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset("/images/spicemart-icon.png")}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Hello, {{ Auth::guard('web')->user()->username }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">

        <!-- User management data -->
        <li class="treeview {{ active_route(1) }}">
            <a href="#">
                <i class="glyphicon glyphicon-cog"></i>
                <span>Quản lý chung</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ active_route('backend.slide.*') }}"><a href="{{ route('backend.slide.index') }}">» Slide</a></li>
                <li class="{{ active_route('backend.user.*') }}"><a href="{{ route('backend.user.index') }}">» Admins </a></li>
                <li class="{{ active_route('backend.lienhe.*') }}"><a href="{{ route('backend.lienhe.index') }}">» Liên hệ </a></li>
                <li class="{{ active_route('backend.tintuc.*') }}"><a href="{{ route('backend.tintuc.index') }}">» Tin tức </a></li>
            </ul>
        </li>
        <!-- End User management data -->

        <!-- User management data -->
        <li class="treeview {{ active_route(2) }}">
            <a href="#">
                <i class="glyphicon glyphicon-calendar"></i>
                <span>Quản lý công nghệ</span>
                <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ active_route('backend.loaicongnghe.*') }}"><a href="{{ route('backend.loaicongnghe.index') }}">» Loại công nghệ</a></li>
                <li class="{{ active_route('backend.congnghe.*') }}{{ active_route('backend.dashboard') }}"><a href="{{ route('backend.congnghe.index') }}">» Công nghệ</a></li>
            </ul>
        </li>
        <!-- End User management data -->

        <!-- User management data -->
        <li class="treeview {{ active_route(4) }}">
            <a href="#">
                <i class="glyphicon glyphicon-list"></i>
                <span>Quản lý sản phẩm</span>
                <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ active_route('backend.loaisanpham.*') }}"><a href="{{ route('backend.loaisanpham.index') }}">» Loại sản phẩm</a></li>
                <li class="{{ active_route('backend.sanpham.*') }}"><a href="{{ route('backend.sanpham.index') }}">» Sản phẩm</a></li>
            </ul>
        </li>
        <!-- End User management data -->

        <!-- User management data -->
        <li class="treeview {{ active_route(3) }}">
            <a href="#">
                <i class="glyphicon glyphicon-briefcase"></i>
                <span>Quản lý dự án</span>
                <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ active_route('backend.loaiduan.*') }}"><a href="{{ route('backend.loaiduan.index') }}">» Loại dự án</a></li>
                <li class="{{ active_route('backend.duan.*') }}"><a href="{{ route('backend.duan.index') }}">» Dự án </a></li>
            </ul>
        </li>
        <!-- End User management data -->

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
