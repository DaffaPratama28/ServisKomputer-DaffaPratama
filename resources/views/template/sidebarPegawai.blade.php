
<li class="menu-header"><i class="fas fa-landmark"></i><span> Menu Utama Pegawai</span></li>
<li class="nav-item{{ request()->is('view') ? ' active' : '' }}"><a href="{{ url('/pegawai/Barang') }}"><i class="fas fa-user-friends"></i><span>Barang</span></a></li>
<li class="nav-item{{ request()->is('view') ? ' active' : '' }}"><a href="{{ url('/pegawai/Komputer') }}"><i class="fas fa-user-friends"></i><span>Komputer</span></a></li>