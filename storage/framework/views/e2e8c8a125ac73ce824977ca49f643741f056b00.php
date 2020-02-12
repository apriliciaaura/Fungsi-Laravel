<?php $__env->startSection('content'); ?>

    <h1>Edit Data Mahasiswa</h1>
	     <?php if(session('Sukses')): ?>
		      <div class="alert alert-success" role="alert">
			<?php echo e(session('Sukses')); ?>

	       </div>
		   <?php endif; ?>

    <div class="row">
      <div class="col-lg-12">
        <form action="/siswa/<?php echo e($siswa->id); ?>/update" method="POST" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
              <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama" value="<?php echo e($siswa->nama); ?>">
          </div>
	
    <div class="form-group">
      <label for="exampleInputEmail1">NIM</label>
        <input name="nim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIM" value="<?php echo e($siswa->nim); ?>">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email" value="<?php echo e($siswa->email); ?>">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Jurusan</label>
        <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jurusan" value="<?php echo e($siswa->jurusan); ?>">
    </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Avatar</label>
      <input name="avatar" type="file" class="form-control">
   </div>

   <button type="submit" class="btn btn-warning">Update</button>
         </form>
      </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugas4\resources\views/siswa/edit.blade.php ENDPATH**/ ?>