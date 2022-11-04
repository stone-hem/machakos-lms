
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Machakos uni</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{ url('admin/lecturer') }}">
            <i class='bx bx-box' ></i>
            <span class="links_name">Lectures</span>
          </a>
        </li>
        <li>
          <a href="{{ url('admin/students') }}">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Students</span>
          </a>
        </li>
        <li>
          <a href="{{ url('admin/courses') }}">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Courses</span>
          </a>
        </li>
        <li>
          <a href="{{ url('admin/schools') }}">
            <i class='bx bx-message' ></i>
            <span class="links_name">Schools</span>
          </a>
        </li>
        <li>
          <a href="{{ url('admin/departments') }}">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Departments</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
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
