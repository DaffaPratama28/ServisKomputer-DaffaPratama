
<?php $__env->startSection('content'); ?>
<div class="section-header">
  <h1>Tambah Keluhan</h1>
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
                    <form action="<?php echo e(route('admin.Keluhan.store')); ?>" method="POST"  >
                      <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Keluhan</label>
                            <input type="text" name="nama_keluhan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama keluhan">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            <?php $__errorArgs = ['nama_keluhan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger mt-2">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Ongkos</label>
                          <input type="text" name="ongkos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ongkos">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          <?php $__errorArgs = ['ongkos'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div class="alert alert-danger mt-2">
                              <?php echo e($message); ?>

                          </div>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">ID Komputer</label>
                            <select class="form-control" name="id_komputer" id="exampleFormControlSelect1">
                                <?php $__currentLoopData = $komputer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataKomputer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($dataKomputer->id_komputer); ?>"><?php echo e($dataKomputer->id_komputer); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             </select>
                             <?php $__errorArgs = ['id_komputer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                             <div class="alert alert-danger mt-2">
                                 <?php echo e($message); ?>

                             </div>
                             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Customer ID</label>
                            <select class="form-control" name="customer_id" id="exampleFormControlSelect1">
                                <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataCustomer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($dataCustomer->customer_id); ?>"><?php echo e($dataCustomer->customer_id); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             </select>
                             <?php $__errorArgs = ['customer_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                             <div class="alert alert-danger mt-2">
                                 <?php echo e($message); ?>

                             </div>
                             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">ID Pegawai</label>
                            <select class="form-control" name="id_pegawai" id="exampleFormControlSelect1">
                                <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataPegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($dataPegawai->id_pegawai); ?>"><?php echo e($dataPegawai->id_pegawai); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             </select>
                             <?php $__errorArgs = ['id_pegawai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                             <div class="alert alert-danger mt-2">
                                 <?php echo e($message); ?>

                             </div>
                             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>
                          <br/>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                      </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\ServisKomputer\resources\views/levelAdmin/keluhan/create.blade.php ENDPATH**/ ?>