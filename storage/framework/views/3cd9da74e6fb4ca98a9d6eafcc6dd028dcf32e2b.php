<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-1">
            <img src="<?php echo e(url('images/logo.png')); ?>" class="rounded mx-auto d-block" width="400" alt="">
        </div>
        <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
            <div class="card">
              <img src="<?php echo e(url('uploads')); ?>/<?php echo e($barang->nama_gambar); ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo e($barang->nama_barang); ?></h5>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. <?php echo e(number_format($barang->harga)); ?> <br>
                    <strong>Stok :</strong> <?php echo e($barang->stok); ?> <br>
                    <hr>
                    <strong>Keterangan :</strong> <br>
                    <?php echo e($barang->keterangan); ?> 
                </p>
                <a href="<?php echo e(url('pesan')); ?>/<?php echo e($barang->id); ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pesan</a>
              </div>
            </div> 
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HL\resources\views/home.blade.php ENDPATH**/ ?>