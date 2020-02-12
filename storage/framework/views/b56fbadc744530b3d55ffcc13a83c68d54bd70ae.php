<?php $__env->startSection('content'); ?>
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<center><img src="<?php echo e($siswa->getAvatar()); ?>" class="img-circle" alt="Avatar"></center>
										<center><h3 class="name"><?php echo e($siswa->nama); ?></h3></center>
										<center><span class="online-status status-available">Available</span><center>
									</div>
									
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->

								



								<div class="profile-detail">
									<div class="profile-info">
										<br><br>
										<center><h4 class="heading">Data Diri</h4></center>
										<ul class="list-unstyled list-justify">
											<center><li>NIM : <span><?php echo e($siswa->nim); ?></span></li></center>
											<br>
											<center><li>Email : <span><?php echo e($siswa->email); ?></span></li></center>
											<br>
											<center><li>Jurusan : <span><?php echo e($siswa->jurusan); ?></span></li></center>
										</ul>
									</div>
									
									<div class="text-center"><a href="/siswa/<?php echo e($siswa->id); ?>/edit" class="btn btn-warning">Edit Profile</a></div>
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<br><br>
							<div class="panel">
								<div class="panel-heading">
									<center><h3 class="panel-title">Mata Kuliah</h3></center>
								</div>
								<br>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Kode</th>
												<th>Nama</th>
												<th>Semester</th>
												<th>Nilai</th>
											</tr>
										</thead>
										<tbody>
											<?php $__currentLoopData = $siswa->matkul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matkul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td><?php echo e($matkul->kode); ?></td>
												<td><?php echo e($matkul->nama_matkul); ?></td>
												<td><?php echo e($matkul->semester); ?></td>
												<td><?php echo e($matkul->pivot->nilai); ?></td>
											</tr>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</tbody>
									</table>
								</div>
							</div>

							
								
				
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugas4\resources\views/siswa/profile.blade.php ENDPATH**/ ?>