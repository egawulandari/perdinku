<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ Route('admin.dashboard') }}"><img src="../assets/img/Logo_ars_2015.png" alt="logo" width="100"></a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="{{ Route('admin.dashboard') }}"><img src="../assets/img/Logo_ars_2015.png" alt="logo" width="30"></a>
  </div>
  <ul class="sidebar-menu">
      <li class="menu-header">Admin</li>
      <li class="{{ Request::route()->getName() == 'admin.dashboard' ? ' active' : '' }}"><a class="nav-link" href="{{ Url('admin') }}"><i class="fa fa-columns"></i> <span>Data Pengguna</span></a></li>
    </ul>
</aside>
