<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxl-c-plus-plus'></i>
        <span class="logo_name">Machakos uni</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="{{ url('admin/dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                {{-- <i class='bx bx-grid-alt'></i> --}}
                <img src="{{ asset('images/icons8-dashboard-64.png') }}" alt="" >
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ url('admin/lecturer') }}" class="{{ request()->is('admin/lecturer*') ? 'active' : '' }}">
                <i class='bx bx-box'></i>
                <span class="links_name">Lectures</span>
            </a>
        </li>
        <li>
            <a href="{{ url('admin/student') }}" class="{{ request()->is('admin/student*') ? 'active' : '' }}">
                <i class='bx bx-list-ul'></i>
                <span class="links_name">Students</span>
            </a>
        </li>
        <li>
            <a href="{{ url('admin/course') }}" class="{{ request()->is('admin/course*') ? 'active' : '' }}">
                <i class='bx bx-pie-chart-alt-2'></i>
                <span class="links_name">Courses</span>
            </a>
        </li>
        <li>
            <a href="{{ url('admin/school') }}" class="{{ request()->is('admin/school*') ? 'active' : '' }}">
                <i class='bx bx-message'></i>
                <span class="links_name">Schools</span>
            </a>
        </li>
        <li>
            <a href="{{ url('admin/department') }}" class="{{ request()->is('admin/department*') ? 'active' : '' }}">
                <i class='bx bx-heart'></i>
                <span class="links_name">Departments</span>
            </a>
        </li>
        <li>
            <a href="{{ url('admin/unit') }}" class="{{ request()->is('admin/unit*') ? 'active' : '' }}">
                <i class='bx bx-cog'></i>
                <span class="links_name">Units</span>
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



@yield('admin-sidebar')
