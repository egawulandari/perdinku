<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ Route('user.dashboard') }}"><img src="../assets/img/Logo_ars_2015.png" alt="logo" width="100"></a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="{{ Route('user.dashboard') }}"><img src="../assets/img/Logo_ars_2015.png" alt="logo" width="30"></a>
  </div>
  <ul class="sidebar-menu">
      <li class="menu-header">User</li>
      <li class="{{ Request::route()->getName() == 'user.dashboard' ? ' active' : '' }}"><a class="nav-link" href="{{ Url('user') }}"><i class="fa fa-columns"></i> <span>PerdinKu</span></a></li>
    </ul>
</aside>
