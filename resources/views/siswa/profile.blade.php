@extends('layouts.master')
@section('content')
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
										<center><img src="{{$siswa->getAvatar()}}" class="img-circle" alt="Avatar"></center>
										<center><h3 class="name">{{$siswa->nama}}</h3></center>
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
											<center><li>NIM : <span>{{$siswa->nim}}</span></li></center>
											<br>
											<center><li>Email : <span>{{$siswa->email}}</span></li></center>
											<br>
											<center><li>Jurusan : <span>{{$siswa->jurusan}}</span></li></center>
										</ul>
									</div>
									
									<div class="text-center"><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning">Edit Profile</a></div>
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
											@foreach($siswa->matkul as $matkul)
											<tr>
												<td>{{$matkul->kode}}</td>
												<td>{{$matkul->nama_matkul}}</td>
												<td>{{$matkul->semester}}</td>
												<td>{{$matkul->pivot->nilai}}</td>
											</tr>
											@endforeach
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
@stop