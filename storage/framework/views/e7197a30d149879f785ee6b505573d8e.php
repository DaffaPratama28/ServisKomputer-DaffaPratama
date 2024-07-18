<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Komputer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Supplier</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="<?php echo e(route('Supplier.create')); ?>" class="btn btn-md btn-info mb-3">TAMBAH</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 5%">No</th>
                                    <th scope="col">Nama Supplier</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No HP</th>
                                    <th scope="col">ID Barang</th>
                                    <th scope="col" style="width: 20%">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $dataSupplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td class="text-center">
                                            <?php echo e(++$index); ?>

                                        </td>
                                        <td><?php echo e($dataSupplier->nama_supplier); ?></td>
                                        <td><?php echo e($dataSupplier->alamat); ?></td>
                                        <td><?php echo e($dataSupplier->no_hp); ?></td>
                                        <td><?php echo e($dataSupplier->id_barang); ?></td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('Supplier.destroy', $dataSupplier->id_supplier)); ?>" method="POST">
                                                <a href="<?php echo e(route('Supplier.show', $dataSupplier->id_supplier)); ?>" class="btn btn-sm btn-success">SHOW</a>
                                                <a href="<?php echo e(route('Supplier.edit', $dataSupplier->id_supplier)); ?>" class="btn btn-sm btn-primary">EDIT</a>
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="alert alert-danger">
                                        Data Supplier Belum Ada.
                                    </div>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-sm-around py-3">
                    <a href="<?php echo e(route('Customer.index')); ?>" class="btn btn-light btn-outline-primary">Data Customer</a>
                    <a href="<?php echo e(route('Pegawai.index')); ?>" class="btn btn-light btn-outline-primary">Data Pegawai</a>
                    <a href="<?php echo e(route('Pengguna.index')); ?>" class="btn btn-light btn-outline-primary">Data Pengguna</a>
                    <a href="<?php echo e(route('Barang.index')); ?>" class="btn btn-light btn-outline-primary">Data Barang</a>
                    <a href="<?php echo e(route('Komputer.index')); ?>" class="btn btn-light btn-outline-primary">Data Komputer</a>
                    <a href="<?php echo e(route('Supplier.index')); ?>" class="btn btn-primary">Data Supplier</a>
                    <a href="<?php echo e(route('Keluhan.index')); ?>" class="btn btn-light btn-outline-primary">Data Keluhan</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\Users\User\ServisKomputer\resources\views/supplier/index.blade.php ENDPATH**/ ?>