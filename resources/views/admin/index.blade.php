@extends('layout.admin.main')

@section('title', 'Daftar Surat Perizinan')



@section('container')

<table class="table table-bordered">
  <thead style="background-color: #4366A3;">
    <tr>
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
          <a href="" class="badge badge-success"><i class="fas fa-edit"></i></a>
          <a href="" class="badge badge-danger"><i class="fas fa-trash"></i></a>
        </div>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

@endsection