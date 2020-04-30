<?php $__env->startSection('title','Form Anggota Perpustakaan'); ?>

<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Anggota Perpustakaan</h1>
            
    <form method="post" action="/children">
    <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nik">Nik</label>
            <input type="text" class="form-control" id="nik" placeholder="Masukan nik" name="nik" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukan alamat" name="alamat">
        </div>
        <div class="form-group">
            <label for="buku">Buku</label>
            <input type="text" class="form-control" id="buku" placeholder="Masukan buku" name="buku">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Masukan email" name="email">
        </div>
        <div class="form-group">
            <label for="handphone">Handphone</label>
            <input type="text" class="form-control" id="handphone" placeholder="Masukan handphone" name="handphone">
        </div>
        <button type="submit" class="btn btn-primary">create</button>
    </form>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
   
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>