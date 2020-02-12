@extends('layouts.master')
@section('content')

    <h1>Edit Data Mahasiswa</h1>
	     @if(session('Sukses'))
		      <div class="alert alert-success" role="alert">
			{{session('Sukses')}}
	       </div>
		   @endif

    <div class="row">
      <div class="col-lg-12">
        <form action="/siswa/{{$siswa->id}}/update" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
              <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama" value="{{$siswa->nama}}">
          </div>
	
    <div class="form-group">
      <label for="exampleInputEmail1">NIM</label>
        <input name="nim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIM" value="{{$siswa->nim}}">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email" value="{{$siswa->email}}">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Jurusan</label>
        <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jurusan" value="{{$siswa->jurusan}}">
    </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Avatar</label>
      <input name="avatar" type="file" class="form-control">
   </div>

   <button type="submit" class="btn btn-warning">Update</button>
         </form>
      </div>
  </div>
@endsection