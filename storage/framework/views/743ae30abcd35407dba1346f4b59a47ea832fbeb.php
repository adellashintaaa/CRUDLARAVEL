<?php $__env->startSection('title','Data anggota perpustakaan'); ?>

<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row">
        <div class="col-15">
            <h1 class="mt-3">Data anggota perpustakaan</h1>
            
            <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            
            <table class="table table-dark">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Npm</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenjang</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">jurusan</th>
                    <th scope="col">email</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>    
                <tbody>
                <?php $__currentLoopData = $children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <th scope="row"><?php echo e($loop->iteration); ?></th>
                    <td><?php echo e($children->nik); ?></td>
                    <td><?php echo e($children->nama); ?></td>
                    <td><?php echo e($children->alamat); ?></td>
                    <td><?php echo e($children->buku); ?></td>
                    <td><?php echo e($children->email); ?></td>
                    <td><?php echo e($children->handphone); ?></td>
                    <td>
                    <a href="/children/<?php echo e($children->id); ?>" class="badge badge-info">Detail</a>
                    </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
            
        

            <a href="/children/create" class="btn btn-primary my-3">create</a>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
   
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>