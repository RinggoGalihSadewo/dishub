@extends('layout.admin.main')

@section('title', 'Daftar Surat Perizinan')


@section('container')



@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if (session('statusEdit'))
    <div class="alert alert-success">
        {{ session('statusEdit') }}
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

    @foreach($clients as $client)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $client->namaPribadi }}</td>
      <td>{{ $client->namaPerusahaan }}</td>
      <td>{{ $client->trayek }}</td>
      <td>
        <div class="aksi text-center">
          <a href="/admin/daftar/detail/{{ $client->id }}" class="badge badge-primary" alt="Detail" title="Detail"><i class="far fa-eye"></i></a>
          <a href="/admin/daftar/edit/{{ $client->id }}" class="badge badge-success" alt="Edit" title="Edit"><i class="fas fa-edit"></i></a>

          <a href="/admin/daftar/{{$client->id}}" class="badge badge-danger" alt="Hapus" title="Hapus"><i class="fas fa-trash"></i></a>

        </div>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

@endsection