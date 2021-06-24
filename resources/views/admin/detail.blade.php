@extends('layout.admin.main')

@section('title', 'Detail Data')


@section('container')

<!-- <ul class="list-group list-group-flush">
  <li class="list-group-item" style="background-color: #4366a3; color: white;"><h4>Detail Data Perizinan Trayek Transportasi Darat</h4></li>
  <li class="list-group-item"><b>Nama Pribadi :</b> {{ $client->namaPribadi }}</li>
  <li class="list-group-item"><b>Alamat:</b> {{ $client->alamat }}</li>
  <li class="list-group-item"><b>TTL:</b> {{ $client->ttl }}</li>
  <li class="list-group-item"><b>Nama Perusahaan:</b> {{ $client->namaPerusahaan }}</li>
  <li class="list-group-item"><b>Trayek:</b> {{ $client->trayek }}</li>
  <li class="list-group-item"><b>Jumlah Armada:</b> {{ $client->jmlhArmada }}</li>
  <li class="list-group-item"><b>Plat Kendaraan:</b> {{ $client->platKendaraan }}</li>
  <li class="list-group-item"><b>Merk Kendaraan:</b> {{ $client->merk }}</li>
  <li class="list-group-item"><b>Warna:</b> {{ $client->warna }}</li>
  <li class="list-group-item"><b>Bahan Bakar:</b> {{ $client->bahanBakar }}</li>    
</ul> -->


	<table class="table table-bordered">
	  <thead style="background-color: #4366A3;">
	    <tr class="text-white">
	      <th scope="col"><h4>Detail Data Perizinan Trayek Transportasi Darat</h4></th>
	    </tr>
	  </thead>
	  <tbody>

	    <tr>
	        <td>
	        	<b>Nama Pribadi :</b> {{ $client->namaPribadi }}
	        </td>
	    </tr>

	    <tr>
	    	<td>
	    		<b>Alamat:</b> {{ $client->alamat }}
	    	</td>
	    </tr>

		<tr>
	    	<td>
	    		<b>TTL:</b> {{ $client->ttl }}
	    	</td>
	    </tr>

	    <tr>
	    	<td>
	    		<b>Nama Perusahaan:</b> {{ $client->namaPerusahaan }}
	    	</td>
	    </tr>

	    <tr>
	    	<td>
	    		<b>Trayek:</b> {{ $client->trayek }}
	    	</td>
	    </tr>

	    <tr>
	    	<td>
	    		<b>Jumlah Armada:</b> {{ $client->jmlhArmada }}
	    	</td>
	    </tr>

	    <tr>
	    	<td>
	    		<b>Plat Kendaraan:</b> {{ $client->platKendaraan }}
	    	</td>
	    </tr>

	    <tr>
	    	<td>
	    		<b>Merk Kendaraan:</b> {{ $client->merk }}
	    	</td>
	    </tr>

	    <tr>
	    	<td>
	    		<b>Warna Kendaraan:</b> {{ $client->warna }}
	    	</td>
	    </tr>

	    <tr>
	    	<td>
	    		<b>Bahan Bakar:</b> {{ $client->bahanBakar }}
	    	</td>
	    </tr>	    

	  </tbody>
	</table>


@endsection