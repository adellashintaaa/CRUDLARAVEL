<?php $__env->startSection('title','Detail Students'); ?>

<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Detail Students</h1>
            <div class="row no-gutters">
              
            <div class="card text-white bg-secondary mb-3" style="max-width: 540px;">
            
            <div class="card-header">Detail</div>
            <div class="row no-gutters">
            <div class="col-md-4">
            </div>
              
              <div class="col-md-8">
                
                <div class="card-body">
            
              <h4 class="card-title"><b><?php echo e($children->nik); ?></b></h4>
              <p class="card-text"><?php echo e($children->nama); ?></p>
              <p class="card-text"><?php echo e($children->alamat); ?></p>
              <p class="card-text"><?php echo e($children->buku); ?></p>
              <p class="card-text"><?php echo e($children->email); ?></p>
              <p class="card-text"><?php echo e($children->handphone); ?></p>


              <a href="<?php echo e($children->id); ?>/edit" class="btn btn-primary">Edit</a>
              
              <form action="<?php echo e($children->id); ?>" method="post" class="d-inline">
              <?php echo method_field('delete'); ?>
              <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              <a href="/children" class="card-link"><b>Back<<</b></a>
            </div>
          </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
   
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>