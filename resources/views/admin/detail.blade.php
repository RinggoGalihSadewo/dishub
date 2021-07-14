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
	        	<b>Nama Pemilik:</b> {{ $client->namaPribadi }}
	        </td>
	    </tr>

	   	<tr>
	        <td>
	        	<b>Email:</b> {{ $client->email }}
	        </td>
	    </tr>

		<tr>
	    	<td>
	    		<b>Tempat dan Tanggal Lahir:</b> {{ $client->ttl }}
	    	</td>
	    </tr>

	   	<tr>
	    	<td>
	    		<b>Nama Perusahaan:</b> {{ $client->namaPerusahaan }}
	    	</td>
	    </tr>

	    <tr>
	    	<td>
	    		<b>Alamat Perusahaan:</b> {{ $client->alamat }}
	    	</td>
	    </tr>

	    <tr>
	    	<td>
	    		<b>Titik Koordinat Alamat Perusahaan: </b>

	    		@if($client->lattitude == "-5.443429907357782" && $client->longtitude == "105.26257464716446")

	    			Tidak mengisi titik koordinat ( titik default berada di Bandar Lampung )

	    		@else

	    			{{ $client->lattitude }}, {{ $client->longtitude }}

	    		@endif

	    		<div>
	    		<b>	Tempat Pengecekan Titik Koordinat:</b> 
	    			<a href="https://maps.google.com" style="color: blue; font-style: underline;" target="_blank"> https://maps.google.com</a>
	    		</div> 
	    	</td>
	    </tr>

	    <tr>
	    	<td>
	    		<b>Alamat GPS Perusahaan:</b>
	    		<div wire:ignore id='map' style='width: 100%; height: 300px;'></div>
	    	</td>
	    </tr>

	   	<tr>
	    	<td>
	    		<b>Jumlah Mobil:</b> {{ $client->jmlhArmada }}
	    	</td>
	    </tr>

	    <tr>
	    	<td>
	    		<b>Trayek:</b> {{ $client->trayek }}
	    	</td>
	    </tr>

<!-- 	    <tr>
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
	    </tr> -->

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

@push('scripts')
<script>

	document.addEventListener('livewire:load',() => {

	  var long = "{{ $client->longtitude }}";
	  var lat = "{{ $client->lattitude }}";

	  const defaultLocation = [long, lat];

	  var coordinates = document.getElementById('coordinates');

	  mapboxgl.accessToken = '{{env('MAPBOX_KEY')}}';
	  var map = new mapboxgl.Map({
	    container: 'map',
	    center: defaultLocation,
	    zoom: 11.15,
	    style: 'mapbox://styles/mapbox/streets-v11'
	  });

	  map.addControl(
		new MapboxGeocoder({
		accessToken: mapboxgl.accessToken,
		mapboxgl: mapboxgl
		})
	  );

	  var coordinates = document.getElementById('coordinates');

	  var marker = new mapboxgl.Marker({
		draggable: true
		})
		.setLngLat(defaultLocation)
		.addTo(map);
		 
		function onDragEnd() {
		
			var lngLat = marker.getLngLat();

			document.getElementById("longtitude").value = lngLat.lng;
	  		document.getElementById("lattitude").value = lngLat.lat;

	 //  	coordinates.style.display = 'block';
		// coordinates.innerHTML = 'Longitude: '+lngLat.lng + '<br />Latitude: ' + lngLat.lat;
		}
		 
		marker.on('dragend', onDragEnd);

	});

	//   map.on('click', (e) =>{

	//   	const longtitude = e.lngLat.lng;
	//   	const lattitude = e.lngLat.lat;

	//   	document.getElementById("longtitude").value = longtitude;
	//   	document.getElementById("lattitude").value = lattitude;

	//  //  	var marker = new mapboxgl.Marker()
	// 	// .setLngLat([longtitude, lattitude])
	// 	// .addTo(map);
	  	

	// })

</script>

@endpush

@endsection