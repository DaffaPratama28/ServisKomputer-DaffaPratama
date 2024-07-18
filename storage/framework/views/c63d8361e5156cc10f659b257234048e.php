<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Masukan Data Komputer</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="<?php echo e(route('Pegawai.update', $pegawai->id_pegawai)); ?>" method="POST" >
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('PUT'); ?>
                          <div class="form-group py-2">
                            <label for="exampleInputEmail1">Nama Pegawai</label>
                            <input type="text" name="nama_pegawai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama" value="<?php echo e(old('nama_pegawai', $pegawai->nama_pegawai)); ?>">
                            <?php $__errorArgs = ['nama_pegawai'];
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
                                <label for="exampleInputEmail1">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan alamat" value="<?php echo e(old('alamat', $pegawai->alamat)); ?>">
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
                              <div class="form-group py-2">
                                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                                    <option value="<?php echo e(old('jenis_kelamin', $pegawai->jenis_kelamin)); ?>"><?php echo e(old('jenis_kelamin', $pegawai->jenis_kelamin)); ?> </option>
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
                              <div class="form-group py-2">
                                <label for="exampleFormControlSelect1">Jabatan</label>
                                <select class="form-control" name="jabatan" id="exampleFormControlSelect1" value="<?php echo e(old('id_komputer', $pegawai->jabatan)); ?>">
                                    <option value="<?php echo e(old('jabatan', $pegawai->jabatan)); ?>"><?php echo e(old('jabatan', $pegawai->jabatan)); ?> </option>
                                    <option value="Teknisi">Teknisi</option>
                                  <option value="Admin">Admin</option>
                                  <option value="SPG">SPG</option>
                                 </select>
                                 <?php $__errorArgs = ['jabatan'];
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
                                <label for="exampleFormControlSelect1">Status</label>
                                <select class="form-control" name="status" id="exampleFormControlSelect1" value="<?php echo e(old('id_komputer', $pegawai->status)); ?>">
                                    <option value="<?php echo e(old('status', $pegawai->status)); ?>"><?php echo e(old('status', $pegawai->status)); ?> </option>
                                    <option value="aktif">Aktif</option>
                                  <option value="tidak_aktif">Tidak aktif</option>
                                 </select>
                                 <?php $__errorArgs = ['status'];
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
</body>
</html><?php /**PATH C:\Users\User\ServisKomputer\resources\views/pegawai/edit.blade.php ENDPATH**/ ?>