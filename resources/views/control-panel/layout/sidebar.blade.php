<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li class="@yield('test')">
                <a href="{!! url('control-panel/test') !!}">
                    <i class="fa fa-th"></i> <span>Test</span>
                </a>
            </li>

            <li class="@yield('slider-images')">
                <a href="{!! url('control-panel/slider-images') !!}">
                    <i class="fa fa-th"></i> <span>Slider Images</span>
                </a>
            </li>

            <li class="@yield('general')">
                <a href="{!! url('control-panel/general-contents') !!}">
                    <i class="fa fa-th"></i> <span>General Content</span>
                </a>
            </li>

            <li class="@yield('projects')">
                <a href="{!! url('control-panel/projects') !!}">
                    <i class="fa fa-th"></i> <span>Projects</span>
                </a>
            </li>

            <li class="@yield('project-types')">
                <a href="{!! url('control-panel/project-types') !!}">
                    <i class="fa fa-th"></i> <span>Project Types</span>
                </a>
            </li>
            <li class="@yield('newss')">
                <a href="{!! url('control-panel/news') !!}">
                    <i class="fa fa-th"></i> <span>News</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>