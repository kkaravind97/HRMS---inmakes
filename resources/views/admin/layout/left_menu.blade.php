<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="{{route('admin.admin-dashboard')}}" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.employee.list')}}" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Employees
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.job.list')}}" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Jobs
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.complaint.list')}}" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Complaints
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('admin.leave.list')}}" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Leaves
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Logout
          </p>
        </a>
      </li>
    </ul>
  </nav>