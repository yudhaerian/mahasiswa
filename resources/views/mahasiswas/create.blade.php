@extends('mahasiswas.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Tambah Mahasiswa</div>
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
                <form method="post" action="{{ route('mahasiswas.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="Nim">Nim</label>
                        <br>
                        <input type="text" name="nim" class="form-control" id="Nim" aria-describedby="Nim" >
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <br>
                        <input type="Nama" name="nama" class="form-control" id="Nama" aria-describedby="Nama" >
                    </div>
                    <div class="form-group">
                        <label for="Kelas">Kelas</label>
                        <br>
                        <input type="Kelas" name="kelas" class="form-control" id="Kelas" aria-describedby="password" >
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">Jurusan</label>
                        <br>
                        <input type="Jurusan" name="jurusan" class="form-control" id="Jurusan" aria-describedby="Jurusan" >
                    </div>
                    <div class="form-group">
                        <label for="No_Handphone">No_Handphone</label>
                        <br>
                        <input type="No_Handphone" name="no_handphone" class="form-control" id="No_Handphone" aria-describedby="No_Handphone" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <br>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="email" >
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <br>
                        <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" aria-describedby="tgl_lahir" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
 </div>
@endsection