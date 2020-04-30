<?php $__env->startSection('title','Form edit anggota'); ?>

<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Edit Data anggota</h1>
            
    <form method="post" action="/children/<?php echo e($children->id); ?>">
    <?php echo method_field('patch'); ?>
    <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nik">Nik</label>
            <input type="text" class="form-control" id="nik" placeholder="Masukan nik" name="nik" value="<?php echo e($children->nik); ?>">
        </div>
        <div class="form-group">
            <label for="nama">Mama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama" value="<?php echo e($children->nama); ?>">
        </div>
        <div class="form-group">
            <label for="buku">Buku</label>
            <input type="text" class="form-control" id="buku" placeholder="Masukan buku" name="buku" value="<?php echo e($children->buku); ?>">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukan alamat" name="alamat" value="<?php echo e($children->alamat); ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="Jurusan" placeholder="Masukan email" name="email" value="<?php echo e($children->email); ?>">
        </div>
        <div class="form-group">
            <label for="handphone">Handphone</label>
            <input type="text" class="form-control" id="handphone" placeholder="Masukan handphone" name="handphone" value="<?php echo e($children->handphone); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
   
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>