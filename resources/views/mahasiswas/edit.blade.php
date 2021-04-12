@extends('mahasiswas.layout')

@section('content')

<div class="container mt-5">
 <div class="row justify-content-center align-items-center">
   <div class="card" style="width: 24rem;">
      <div class="card-header">Edit Mahasiswa</div>
      <div class="card-body">
         @if ($errors->any())
         <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
               @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
         @endif
         <form method="post" action="{{ route('mahasiswas.update', $Mahasiswa->nim) }}" id="myForm">
         @csrf
         @method('PUT')
            <div class="form-group">
               <label for="Nim">Nim</label>
               <br>
               <input type="text" name="nim" class="form-control" id="Nim" value="{{ $Mahasiswa->nim }}" aria describedby="Nim" >
            </div>
            <div class="form-group">
               <label for="Nama">Nama</label>
               <br>
               <input type="text" name="nama" class="form-control" id="Nama" value="{{ $Mahasiswa->nama }}" aria describedby="Nama" >
            </div>
            <div class="form-group">
               <label for="Kelas">Kelas</label>
               <br>
               <input type="Kelas" name="kelas" class="form-control" id="Kelas" value="{{ $Mahasiswa->kelas }}" aria describedby="Kelas" >
            </div>
            <div class="form-group">
               <label for="Jurusan">Jurusan</label>
               <br>
               <input type="Jurusan" name="jurusan" class="form-control" id="Jurusan" value="{{ $Mahasiswa->jurusan }}" aria describedby="Jurusan" >
            </div>
            <div class="form-group">
               <label for="No_Handphone">No_Handphone</label>
               <br>
               <input type="No_Handphone" name="no_handphone" class="form-control" id="No_Handphone" value="{{ $Mahasiswa->no_handphone }}" aria describedby="No_Handphone" >
            </div>
            <div class="form-group">
               <label for="email">Email</label>
               <br>
               <input type="Email" name="email" class="form-control" id="email" value="{{ $Mahasiswa->email }}" aria describedby="email" >
            </div>
            <div class="form-group">
               <label for="tgl_lahir">Tanggal Lahir</label>
               <br>
               <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="{{ $Mahasiswa->tgl_lahir }}" aria describedby="tgl_lahir" >
            </div>
               <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
      </div>
    </div>
</div>
   @endsection