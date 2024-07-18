
<?php $__env->startSection('content'); ?>
<div class="section-header">
  <h1>Halaman Barang</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="<?php echo e(route('admin.Barang.create')); ?>" class="btn btn-md btn-info mb-3">TAMBAH</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%">No</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Merek</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Satuan</th>
                                <th scope="col" style="width: 20%">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $dataBarang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center">
                                        <?php echo e(++$index); ?>

                                    </td>
                                    <td><?php echo e($dataBarang->nama_barang); ?></td>
                                    <td><?php echo e($dataBarang->merek); ?></td>
                                    <td><?php echo e($dataBarang->harga); ?></td>
                                    <td><?php echo e($dataBarang->stok); ?></td>
                                    <td><?php echo e($dataBarang->satuan); ?></td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('admin.Barang.destroy', $dataBarang->id_barang)); ?>" method="POST">
                                            <a href="<?php echo e(route('admin.Barang.show', $dataBarang->id_barang)); ?>" class="btn btn-sm btn-success">SHOW</a>
                                            <a href="<?php echo e(route('admin.Barang.edit', $dataBarang->id_barang)); ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="alert alert-danger">
                                    Data Barang Belum Ada.
                                </div>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    
                </div>
            </div>
            <div class="d-flex flex-row justify-content-sm-around py-3">
                
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\ServisKomputer\resources\views/levelAdmin/barang/index.blade.php ENDPATH**/ ?>