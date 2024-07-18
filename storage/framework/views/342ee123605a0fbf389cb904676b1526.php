
<?php $__env->startSection('content'); ?>
<div class="section-header">
  <h1>Halaman Keluhan</h1>
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
                    <div class="card-body">
                        <h3><?php echo e($keluhan->nama_keluhan); ?></h3>
                        <p><?php echo e($keluhan->ongkos); ?></p>
                        <p><?php echo e($keluhan->id_komputer); ?></p>
                        <p><?php echo e($keluhan->customer_id); ?></p>
                        <p><?php echo e($keluhan->id_pegawai); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\ServisKomputer\resources\views/levelAdmin/keluhan/show.blade.php ENDPATH**/ ?>