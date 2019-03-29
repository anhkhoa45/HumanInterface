<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/adminlte/images/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?= empty(Request::segment(2)) ? 'active' : ''; ?>">
                <a href="/admin">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="<?=  (Request::segment(2)=='users') ? 'active' : ''; ?>">
                <a href="/admin/users">
                    <i class="fa fa-user"></i> <span>Users</span>
                </a>
            </li>
            <li class="<?= (Request::segment(2)=='hospitals') ? 'active' : ''; ?>">
                <a href="/admin/hospitals">
                    <i class="fa fa-hospital-o"></i> <span>Hospitals</span>
                </a>
            </li>
        </ul>    
    </section>
    <!-- /.sidebar -->
</aside>