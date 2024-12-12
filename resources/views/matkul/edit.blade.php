@extends('layouts.app')
@section('content')
<h1>Edit data matakuliah</h1>
<form action="{{ URL::to('/matkul/edit/'.$matkul->id)}}" method="post">
  @csrf
  <div class="form-group">
    <label for="">Kode Matkul</label>
    <input value="{{$matkul->kode_mk}}" type="text" name="kode_matkul" id="kode_matkul" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="">Nama Matkul</label>
    <input value="{{$matkul->nama_mk}}" type="text" name="nama_matkul" id="nama_matkul" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="">SKS</label>
    <input value="{{$matkul->sks}}"  type="number" name="sks" id="sks" class="form-control" required>
  </div>
  <div class="form-group mt-2">
  <button type="submit"  class="btn btn-primary">Simpan Matakuliah</button>
  </div>
</form>
@endsection