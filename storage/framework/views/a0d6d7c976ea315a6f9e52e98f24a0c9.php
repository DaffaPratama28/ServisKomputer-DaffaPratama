
<?php $__env->startSection('content'); ?>
<div class="section-header">
  <h1>Edit Customer</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Edit Data Customer</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                <form action="<?php echo e(route('admin.Customer.update', $customers->customer_id)); ?>" method="POST" >
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('PUT'); ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Customer</label>
                            <input type="text" name="nama_customer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama" value="<?php echo e(old('nama_customer', $customers->nama_customer)); ?>">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
                            <?php $__errorArgs = ['nama_customer'];
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
                          <label for="exampleInputEmail1">Alamat</label>
                          <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan alamat" value="<?php echo e(old('alamat', $customers->alamat)); ?>">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your address with anyone else.</small>
                          <?php $__errorArgs = ['alamat'];
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
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                                <option value="<?php echo e(old('jenis_kelamin', $customers->jenis_kelamin)); ?>"><?php echo e(old('jenis_kelamin', $customers->jenis_kelamin)); ?></option>
                                <option value="L">Laki-laki</option>
                                 <option value="P">Perempuan</option>
                             </select>
                             <?php $__errorArgs = ['jenis_kelamin'];
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

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\ServisKomputer\resources\views/levelAdmin/customers/edit.blade.php ENDPATH**/ ?>