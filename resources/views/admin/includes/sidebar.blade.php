<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('assets/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ auth()->user()->name; }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview    {{ ( request()->is('admin/generalSettings*') || request()->is('admin/finance_calender*') || request()->is('admin/branches*') || request()->is('admin/ShiftsTypes*') || request()->is('admin/departements*')  || request()->is('admin/jobs_categories*') || request()->is('admin/Qualifications*') || request()->is('admin/occasions*')) ? 'menu-open':'' }} ">
          <a href="#" class="nav-link {{ ( request()->is('admin/generalSettings*') || request()->is('admin/finance_calender*') || request()->is('admin/branches*') || request()->is('admin/ShiftsTypes*') || request()->is('admin/departements*') || request()->is('admin/jobs_categories*')  || request()->is('admin/Qualifications*') ||request()->is('admin/occasions*')  ) ? 'active':'' }} ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
             قائمة الضبط
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin_panel_settings.index') }}" class="nav-link {{ (request()->is('admin/generalSettings*'))?'active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>الضبط العام</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('finance_calender.index') }}" class="nav-link  {{ (request()->is('admin/finance_calender*'))?'active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p> السنوات المالية</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('branches.index') }}" class="nav-link  {{ (request()->is('admin/branches*'))?'active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>  الفروع</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('ShiftsTypes.index') }}" class="nav-link  {{ (request()->is('admin/ShiftsTypes*'))?'active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>  انواع الشفتات</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('departements.index') }}" class="nav-link  {{ (request()->is('admin/departements*'))?'active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>   ادارات الموظفين</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('jobs_categories.index') }}" class="nav-link  {{ (request()->is('admin/jobs_categories*'))?'active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>     وظائف الموظفين</p>
              </a>
            </li>
           
            <li class="nav-item">
              <a href="{{ route('Qualifications.index') }}" class="nav-link  {{ (request()->is('admin/Qualifications*'))?'active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>     مؤهلات الموظفين</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('occasions.index') }}" class="nav-link  {{ (request()->is('admin/occasions*'))?'active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>      المناسبات الرسمية</p>
              </a>
            </li>

          </ul>
        </li>
       
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>