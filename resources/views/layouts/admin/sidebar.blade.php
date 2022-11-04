
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Machakos uni</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="{{ url('admin/dashboard') }}"  class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{ url('admin/lecturer') }}"  class="{{ request()->is('admin/lecturer*') ? 'active' : '' }}">
            <i class='bx bx-box' ></i>
            <span class="links_name">Lectures</span>
          </a>
        </li>
        <li>
          <a href="{{ url('admin/student') }}"  class="{{ request()->is('admin/student*') ? 'active' : '' }}">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Students</span>
          </a>
        </li>
        <li>
          <a href="{{ url('admin/course') }}"  class="{{ request()->is('admin/course*') ? 'active' : '' }}">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Courses</span>
          </a>
        </li>
        <li>
          <a href="{{ url('admin/school') }}"  class="{{ request()->is('admin/school*') ? 'active' : '' }}">
            <i class='bx bx-message' ></i>
            <span class="links_name">Schools</span>
          </a>
        </li>
        <li>
          <a href="{{ url('admin/department') }}"  class="{{ request()->is('admin/department*') ? 'active' : '' }}">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Departments</span>
          </a>
        </li>
        <li>
          <a href="{{ url('admin/unit') }}"  class="{{ request()->is('admin/unit*') ? 'active' : '' }}">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Units</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>

 

@yield('admin-sidebar')
