
<?php $__env->startSection('content'); ?>
<div class="section-header">
  <h1>Halaman Pegawai</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="<?php echo e(route('admin.Pegawai.create')); ?>" class="btn btn-md btn-info mb-3">TAMBAH</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%">No</th>
                                <th scope="col">Nama Pegawai</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Status</th>
                                <th scope="col" style="width: 20%">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $dataPegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center">
                                        <?php echo e(++$index); ?>

                                    </td>
                                    <td><?php echo e($dataPegawai->nama_pegawai); ?></td>
                                    <td><?php echo e($dataPegawai->alamat); ?></td>
                                    <td><?php echo e($dataPegawai->jenis_kelamin); ?></td>
                                    <td><?php echo e($dataPegawai->jabatan); ?></td>
                                    <td><?php echo e($dataPegawai->status); ?></td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('admin.Pegawai.destroy', $dataPegawai->id_pegawai)); ?>" method="POST">
                                            <a href="<?php echo e(route('admin.Pegawai.show', $dataPegawai->id_pegawai)); ?>" class="btn btn-sm btn-success">SHOW</a>
                                            <a href="<?php echo e(route('admin.Pegawai.edit', $dataPegawai->id_pegawai)); ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="alert alert-danger">
                                    Data Pegawai Belum Ada.
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

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\ServisKomputer\resources\views/levelAdmin/pegawai/index.blade.php ENDPATH**/ ?>