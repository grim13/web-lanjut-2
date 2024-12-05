@extends('layouts.app')
@section('content')
    <h3>Data Matakuliah dan kelas</h3>
    <ul>
    @foreach ($matkul as $item)
      <li> 
        {{ $item->kode_mk }} || {{ $item->nama_mk }} || {{ $item->sks }} SKS
        <table class="table table-bordered table-sm">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Kelas</th>
              <th>Hari</th>
              <th>Jam Mulai</th>
              <th>Jam Selesai</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($item->kelas as $keyKelas => $itemKelas)  
              <tr>
                <td>{{ $keyKelas+1 }}</td>
                <td>{{ $itemKelas->kode_kelas }}</td>
                <td>{{ $itemKelas->hari }}</td>
                <td>{{ $itemKelas->jam_mulai }}</td>
                <td>{{ $itemKelas->jam_selesai }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </li>
    @endforeach
    </ul>

    <h2>Daftar Kelas dengan ID matkul 1</h2>
    <table class="table table-bordered table-sm">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Kelas</th>
          <th>Matkul</th>
          <th>SKS</th>
          <th>Hari</th>
          <th>Jam Mulai</th>
          <th>Jam Selesai</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($kelas as $keyKelas => $itemKelas)  
          <tr>
            <td>{{ $keyKelas+1 }}</td>
            <td>{{ $itemKelas->kode_kelas }}</td>
            <td>{{ $itemKelas->matkul->nama_mk }}</td>
            <td>{{ $itemKelas->matkul->sks }}</td>
            <td>{{ $itemKelas->hari }}</td>
            <td>{{ $itemKelas->jam_mulai }}</td>
            <td>{{ $itemKelas->jam_selesai }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
@endsection