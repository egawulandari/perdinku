<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ Route('sdm.dashboard') }}"><img src="../assets/img/Logo_ars_2015.png" alt="logo" width="100"></a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ Route('sdm.dashboard') }}"><img src="../assets/img/Logo_ars_2015.png" alt="logo" width="30"></a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Divisi - SDM</li>
      <li class="{{ Request::route()->getName() == 'sdm.dashboard' ? ' active' : '' }}"><a class="nav-link" href="{{ Url('sdm') }}"><i class="fa fa-columns"></i> <span>Pengajuan Perdin</span></a></li>
      <li class="{{ Request::route()->getName() == 'sdm.master-kota' ? ' active' : '' }}"><a class="nav-link" href="{{ Url('sdm/master-kota') }}"><i class="fa fa-columns"></i> <span>Master Kota</span></a></li>
    </ul>
</aside>
