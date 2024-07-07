@extends('layouts.app')
@section('content')
<form action="{{route('jurusan.update', $edit->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
        <label class="mb-1" for="">Nama Jurusan</label>
        <input value="{{$edit->nama_jurusan}}" class="form-control" name="nama_jurusan" placeholder="Masukkan Nama Jurusan">
    </div>
    <div class="form-group mb-3">
        <input type="submit" class="btn btn-primary" value="Simpan">
        <input type="reset" class="btn btn-danger" value="Batal">
        <a href="{{url()->previous()}}" class="btn btn-info text-white">Kembali</a>
    </div>
</form>
@endsection