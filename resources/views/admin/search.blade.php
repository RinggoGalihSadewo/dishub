@extends('layout.admin.main')

@section('title', 'Daftar Surat Perizinan')


@section('container')

<div class="search">

  <form method="GET" action="/admin/daftar/cari" class="form-inline">
    
    @csrf

    <div class="form-group" id="search">
      <input type="text" class="form-control" id="search" name="search" placeholder="Masukan nama pribadi atau nama perusahaan" autofocus>
    </div>

    <button type="submit" class="btn text-white" id="btnSearch"><i class="fas fa-search"></i> Cari</button>

  </form>

</div>

@if (session('status'))
    <div class="alert alert-success">
        <i class="fas fa-user-plus"></i> {{ session('status') }}
    </div>
@endif

@if (session('email'))
    <div class="alert alert-success">
        <i class="fas fa-bell"></i> {{ session('email') }}
    </div>
@endif

@if (session('statusEdit'))
    <div class="alert alert-success">
        <i class="fas fa-edit"></i> {{ session('statusEdit') }}
    </div>
@endif

@if (session('statusHapus'))
    <div class="alert alert-success">
        <i class="fas fa-trash"></i> {{ session('statusHapus') }}
    </div>
@endif

<table class="table table-bordered">
  <thead style="background-color: #4366A3;">
    <tr class="text-white">
      <th scope="col">NO</th>
      <th scope="col">Nama Pribadi</th>
      <th scope="col">Nama Perusahaan</th>
      <th scope="col">Trayek</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

    @foreach($clients as $key => $client)
    <tr>
      <th scope="row">{{ $clients->firstItem() + $key }}</th>
      <td>{{ $client->namaPribadi }}</td>
      <td>{{ $client->namaPerusahaan }}</td>
      <td>{{ $client->trayek }}</td>
      <td>
        <div class="aksi text-center">
          <a href="/admin/daftar/detail/{{ $client->id }}" class="badge badge-primary" alt="Detail" title="Detail"><i class="far fa-eye"></i></a>
          
          <a href="/admin/daftar/edit/{{ $client->id }}" class="badge badge-success" alt="Edit" title="Edit"><i class="fas fa-edit"></i></a>

          <a href="/admin/daftar/prinsip/{{ $client->id }}" class="badge badge-warning" alt="Kirim Surat Prinsip" title="Kirim Surat Prinsip"><i class="fas fa-file-alt text-white"></i></a>

          <a href="/admin/daftar/kirim-notifikasi/{{$client->id}}" class="badge badge-info" alt="Kirim Notifikasi" title="kirim Notifikasi" onclick="return confirm('Ingin mengirimkan pesan notifikasi ke {{ $client->namaPribadi }} ?')"><i class="fas fa-bell"></i></a>

          <a href="/admin/daftar/hapus/{{$client->id}}" class="badge badge-danger" alt="Hapus" title="Hapus"><i class="fas fa-trash" onclick="return confirm('Ingin menghapus data {{ $client->namaPribadi }} ?')"></i></a>
        </div>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

<div class="links">    
  {{ $clients->links() }}
</div>   

@endsection