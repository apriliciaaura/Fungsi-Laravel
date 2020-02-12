<?php $__env->startSection('content'); ?>
<?php if(session('Sukses')): ?>
	<div class="alert alert-success" role="alert">
		<?php echo e(session('Sukses')); ?>

	</div>
<?php endif; ?>
	<div class="row">
		<div class="col-6">
		<br>
			<h1>DATA MAHASISWA</h1>
		</div>

	<div class="col-6">
	<!-- Button trigger modal -->
	<br><br>
	<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">Tambah Data Mahasiswa</button>

<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  		<div class="modal-dialog" role="document">
   			 <div class="modal-content">
     			 <div class="modal-header">
       				 <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
     			</div>

    <div class="modal-body">
        <form action="/siswa/create" method="POST" enctype="multipart/form-data">
       	<?php echo e(csrf_field()); ?>

  			<div class="form-group">
   				 <label for="exampleInputEmail1">Nama</label>
   					 <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap">
  			</div>

	<div class="form-group">
    	<label for="exampleInputEmail1">NIM</label>
   		 <input name="nim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIM">
  	</div>

    <div class="form-group">
    	<label for="exampleInputEmail1">Email</label>
    		<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email">
  	</div>

  	<div class="form-group">
   		 <label for="exampleInputEmail1">Jurusan</label>
    		<input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jurusan">
  	</div>

  	<div class="form-group">
    	<label for="exampleInputEmail1">Avatar</label>
      		<input name="avatar" type="file" class="form-control">
    </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       		 <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<table class="table table-hover">
	<tr>
		<th>Nama</th>
		<th>NIM</th>
		<th>Email</th>
		<th>Jurusan</th>
		<th>Aksi</th>
	</tr>
	<?php $__currentLoopData = $data_siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><a href="/siswa/<?php echo e($siswa->id); ?>/profile"><?php echo e($siswa->nama); ?></a></td>
		<td><?php echo e($siswa->nim); ?></td>
		<td><?php echo e($siswa->email); ?></td>
		<td><?php echo e($siswa->jurusan); ?></td>
		<td><a href="/siswa/<?php echo e($siswa->id); ?>/edit" class="btn btn-warning btn-sm">Edit</a>
			<a href="/siswa/<?php echo e($siswa->id); ?>/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')">Delete</a></td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugas4\resources\views/siswa/index.blade.php ENDPATH**/ ?>