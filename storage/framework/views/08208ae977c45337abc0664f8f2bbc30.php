
<li class="menu-header"><i class="fas fa-landmark"></i><span> Menu Utama Admin</span></li>
<li class="nav-item<?php echo e(request()->is('Pengguna') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/Pengguna')); ?>"><i class="fas fa-user-friends"></i><span> Pengguna</span></a></li>
<li class="nav-item<?php echo e(request()->is('Barang') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/Barang')); ?>"><i class="fas fa-chalkboard-teacher"></i><span>Barang</span></a></li>
<li class="nav-item<?php echo e(request()->is('Customer') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/Customer')); ?>"><i class="fas fa-book-open"></i><span>Customer</span></a></li>
<li class="nav-item<?php echo e(request()->is('Keluhan') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/Keluhan')); ?>"><i class="fas fa-users"></i><span>Keluhan</span></a></li>
<li class="nav-item<?php echo e(request()->is('Komputer') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/Komputer')); ?>"><i class="fas fa-user-graduate"></i><span>Komputer</span></a></li>
<li class="nav-item<?php echo e(request()->is('Pegawai') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/Pegawai')); ?>"><i class="fas fa-user-graduate"></i><span>Pegawai</span></a></li>
<li class="nav-item<?php echo e(request()->is('Supplier') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/Supplier')); ?>"><i class="far fa-bell"></i><span>Supplier</span></a></li><?php /**PATH C:\Users\User\ServisKomputer\resources\views/template/sidebarAdmin.blade.php ENDPATH**/ ?>