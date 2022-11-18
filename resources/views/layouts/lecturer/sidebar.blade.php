
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Machakos uni</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="{{ url('lecturer/dashboard') }}" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{ url('lecturer/my-units') }}">
            <i class='bx bx-box' ></i>
            <span class="links_name">My lectures</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Courses</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Classes</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Timetable</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favorites</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <form method="POST" action="{{ route('logout') }}">
              @csrf
              <div class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      this.closest('form').submit(); "
                      role="button">
                      <i class='bx bx-log-out'></i>

                      {{ __('Log Out') }}
                  </a>
              </div>
          </form>
      </li>
      </ul>
  </div>

 

@yield('lecturer-sidebar')
