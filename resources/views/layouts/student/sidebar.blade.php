
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Machakos uni</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="{{ url('student/dashboard') }}" class="{{ request()->is('student/dashboard')?'active':'' }} {{ request()->is('homepage')?'active':'' }}">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{ url('student/my-units') }}"  class="{{ request()->is('student/my-units')?'active':'' }}">
            <i class='bx bx-box' ></i>
            <span class="links_name">My units</span>
          </a>
        </li>
        <li>
          <a href="{{ url('student/course/details') }}" class="{{ request()->is('student/course/details')?'active':'' }}">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">My course details</span>
          </a>
        </li>
        <li>
          <a href="{{ url('student/examinations') }}" class="{{ request()->is('student/examinations')?'active':'' }}">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Examinations</span>
          </a>
        </li>
        <li>
          <a href="{{ url('student/assignments') }}" class="{{ request()->is('student/assignments')?'active':'' }}">
            <i class='bx bx-message' ></i>
            <span class="links_name">Assignments</span>
          </a>
        </li>
        <li>
          <a href="{{ url('student/classes') }}" class="{{ request()->is('student/classes')?'active':'' }}">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Classes</span>
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
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit(); " role="button">
                     <i class='bx bx-log-out'></i>
    
                    {{ __('Log Out') }}
                </a>
            </div>
        </form>
        </li>
      </ul>
  </div>

 

@yield('student-sidebar')
