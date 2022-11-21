  <nav>
    <div class="sidebar-button">
      <i class='bx bx-menu sidebarBtn'></i>
      <span class="dashboard">Lecturer</span>
    </div>
   
    <div class="profile-details">
      <img src="images/profile.jpg" alt="">
      <span class="admin_name">{{ Auth::user()->name }}</span>
      <i class='bx bx-chevron-down' ></i>
    </div>
  </nav>


  @yield('lecturer-nav')