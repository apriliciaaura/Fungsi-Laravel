@extends('layouts.master')
@section('content')
@if(session('Sukses'))
	<div class="alert alert-success" role="alert">
		{{session('Sukses')}}
	</div>
@endif
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
       	{{csrf_field()}}
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
	@foreach($data_siswa as $siswa)
	<tr>
		<td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama}}</a></td>
		<td>{{$siswa->nim}}</td>
		<td>{{$siswa->email}}</td>
		<td>{{$siswa->jurusan}}</td>
		<td><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
			<a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')">Delete</a></td>
	</tr>
	@endforeach
</table>
@endsection