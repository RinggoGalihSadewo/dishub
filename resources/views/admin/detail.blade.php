@extends('layout.admin.main')

@section('title', 'Detail Data')


@section('container')

	<table class="table table-bordered">
	  <thead style="background-color: #4366A3;">
	    <tr class="text-white">
	      <th scope="col"><h4>Detail Data Perizinan Trayek Transportasi Darat</h4></th>
	    </tr>
	  </thead>
	  <tbody>

	    <tr>
	        <td>
	        	<b>Nama Pribadi:</b> {{ $client->namaPribadi }}
	        </td>
	    </tr>

	   	<tr>
	        <td>
	        	<b>Email:</b> {{ $client->email }}
	        </td>
	    </tr>

	    <tr>
	    	<td>
	    		<b>Alamat Perusahaan:</b> {{ $client->alamat }}
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

	   	<tr>
	    	<td>
	    		<b>Tanggal dan Waktu Pembuatan Perizinan:</b> {{ $client->created_at }}
	    	</td>
	    </tr>

	    <tr>
	    	<td>
	    		<b>Data Terakhir di Update:</b> {{ $client->updated_at }}
	    	</td>
	    </tr>		    

	  </tbody>
	</table>


@endsection