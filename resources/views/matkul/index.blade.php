@extends('layouts.app')
@section('content')
    <h3>Data Matakuliah dan kelas</h3>
    @if (session('message'))
      <div class="alert alert-success">
          {{ session('message') }}
      </div>
    @endif
    <a href="{{ URL::to('matkul/add')}}" class="btn btn-primary">Tambah Matkul</a>
    <ul>
    @foreach ($matkul as $item)
      <li> 
        {{ $item->kode_mk }} || {{ $item->nama_mk }} || {{ $item->sks }} SKS 
        <button onclick="hapusMatakuliah({{$item->id}})" class="btn btn-danger btn-sm">hapus</button>
         | 
        <a href="{{URL::to('matkul/edit/'.$item->id)}}" class="btn btn-info btn-sm">edit</a>
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
@section('js')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script lang="js">
    function hapusMatakuliah(id) {
      Swal.fire({
        title: "Apakah anda yakin data ini dihapus?",
        showCancelButton: true,
        confirmButtonText: "Hapus",
        denyButtonText: `Cancel`
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          window.location.href = '{{ URL::to("matkul/delete")}}/'+id;
        }
      });
    }
  </script>
@endsection