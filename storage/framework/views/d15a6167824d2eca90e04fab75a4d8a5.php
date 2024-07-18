
<?php $__env->startSection('content'); ?>
<div class="section-header">
  <h1>Halaman Pengguna</h1>
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
                    <form action="<?php echo e(route('admin.Komputer.store')); ?>" method="POST" >
                      <?php echo csrf_field(); ?>
                      <div class="form-group py-2">
                        <label for="exampleInputEmail1">ID Komputer</label>
                        <input type="text" name="id_komputer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="komIDxxxxx">
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
                      <div class="form-group py-2">
                        <label for="exampleFormControlSelect1">Merek</label>
                        <select class="form-control" name="merek" id="exampleFormControlSelect1">
                          <option value="asus">Asus</option>
                          <option value="acer">Acer</option>
                          <option value="dell">Dell</option>
                          <option value="lain">Lain</option>
                         </select>
                         <?php $__errorArgs = ['merek'];
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
                        <div class="form-group py-2">
                            <label for="exampleInputEmail1">Kelengkapan</label>
                            <input type="text" name="kelengkapan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan kelengkapan">
                            <?php $__errorArgs = ['kelengkapan'];
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
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                          </div>
                      </form>
       
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\ServisKomputer\resources\views/levelAdmin/komputer/create.blade.php ENDPATH**/ ?>