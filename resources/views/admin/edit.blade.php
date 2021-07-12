@extends('layout.admin.main')

@section('title', 'Edit Form')



@section('container')

<div class="formulir">
	
	<h2>EDIT FORM SURAT PERIZINAN</h2>

	<form method="POST" action="/admin/daftar/{{ $client->id }}">

	  @method('patch')
	  @csrf

	  <div class="form-group row">
	    <label for="nama" class="col-sm-4 col-12 col-form-label">Nama Pribadi</label>
	    <div class="col-sm-8 col-12">
	      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $client->namaPribadi }}">
	      
	      @error('nama')
	      <div class="invalid-feedback">
	      	<div class="alert alert-danger" role="alert">
			  Data yang dimasukan tidak sesuai dengan aturan
			</div>
	      </div>
	      @enderror

	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="email" class="col-sm-4 col-12 col-form-label">Email</label>
	    <div class="col-sm-8 col-12">
	      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $client->email }}">
	      
	      @error('email')
	      <div class="invalid-feedback">
	      	<div class="alert alert-danger" role="alert">
			  Data yang dimasukan tidak sesuai dengan aturan
			</div>
	      </div>
	      @enderror

	    </div>
	  </div>	  

	  <div class="form-group row">
	    <label for="namaPerusahaan" class="col-sm-4 col-12 col-form-label">Nama Perusahaan</label>
	    <div class="col-sm-8 col-12">
	      <input type="text" class="form-control @error('perusahaan') is-invalid @enderror" id="namaPerusahaan" name="perusahaan" value="{{ $client->namaPerusahaan }}">
	   
	      @error('perusahaan')
	      <div class="invalid-feedback">
	      	<div class="alert alert-danger" role="alert">
			  Data yang dimasukan tidak sesuai dengan aturan
			</div>
	      </div>
	      @enderror

	    </div>
	  </div>
	  
	  <div class="form-group row">
	    <label for="alamat" class="col-sm-4 col-12 col-form-label">Alamat Perusahaan</label>
	    <div class="col-sm-8 col-12">
	      <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ $client->alamat }}">

	      @error('alamat')
	      <div class="invalid-feedback">
	      	<div class="alert alert-danger" role="alert">
			  Data yang dimasukan tidak sesuai dengan aturan
			</div>
	      </div>
	      @enderror
	    </div>	
	  </div>

	  <div class="form-group-row">
	  	<div class="row">
		  	<div class="col-md-12">
		  		<label for="map">Alamat GPS Perusahaan (Opsional)</label>
		  		<label for="map">
		  			<small>*Jika nama lokasi yang dicari tidak ada, coba cari dengan berdasarkan nama jalan / nama kecamatan dan lain - lain. Cara penggunaan: Pada icon point warna biru, tekan dan arahkan icon tersebut ke tempat tujuan</small>
		  		</label>
		  		<div class="mb-3" wire:ignore id='map' style='width: 100%; height: 300px;'></div>
		    </div>

		    <div class="col-md-6 mb-3">
		    	<label for="longtitude">Longtitude</label>
		    	<input type="text" name="longtitude" id="longtitude" class="form-control" value="{{ $client->longtitude }}" >
		    </div>

		    <div class="col-md-6">
		    	<label for="lattitude">Lattitude</label>
		    	<input type="text" name="lattitude" id="lattitude" class="form-control mb-3" value="{{ $client->lattitude }}" >		    
		    </div>
<!-- 
		    <div id="coordinates" class="coordinates">
		    </div> -->
		    
	    </div>		
	  </div>


	  <div class="form-group row">
	    <label for="ttl" class="col-sm-4 col-12 col-form-label">TTL</label>
	    <div class="col-sm-8 col-12">
	      <input type="text" class="form-control @error('ttl') is-invalid @enderror" id="ttl" name="ttl" value="{{ $client->ttl }}">

	      @error('ttl')
	      <div class="invalid-feedback">
	      	<div class="alert alert-danger" role="alert">
			  Data yang dimasukan tidak sesuai dengan aturan
			</div>
	      </div>
	      @enderror

	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="trayek" class="col-sm-4 col-12 col-form-label">Trayek</label>
	    <div class="col-sm-8 col-12">
	      <input type="text" class="form-control @error('trayek') is-invalid @enderror" id="trayek" name="trayek" value="{{ $client->trayek }}">

	      @error('trayek')
	      <div class="invalid-feedback">
	      	<div class="alert alert-danger" role="alert">
			  Data yang dimasukan tidak sesuai dengan aturan
			</div>
	      </div>
	      @enderror

	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="jumlahArmada" class="col-sm-4 col-12 col-form-label">Jumlah Armada</label>
	    <div class="col-sm-8 col-12">
	      <input type="text" class="form-control @error('jmlArmada') is-invalid @enderror" id="jumlahArmada" name="jmlArmada" value="{{ $client->jmlhArmada }}">

		  @error('jmlArmada')
	      <div class="invalid-feedback">
	      	<div class="alert alert-danger" role="alert">
			  Data yang dimasukan tidak sesuai dengan aturan
			</div>
	      </div>
	      @enderror

	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="plat" class="col-sm-4 col-12 col-form-label">Plat Kendaraan</label>
	    <div class="col-sm-8 col-12">
	      <input type="text" class="form-control @error('plat') is-invalid @enderror" id="plat" name="plat" value="{{ $client->platKendaraan }}">

	      @error('plat')
	      <div class="invalid-feedback">
	      	<div class="alert alert-danger" role="alert">
			  Data yang dimasukan tidak sesuai dengan aturan
			</div>
	      </div>
	      @enderror
	  
	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="merk" class="col-sm-4 col-12 col-form-label">Merk Kendaraan</label>
	    <div class="col-sm-8 col-12">
	      <input type="text" class="form-control @error('merk') is-invalid @enderror" id="merk" name="merk" value="{{ $client->merk }}">

	      @error('merk')
	      <div class="invalid-feedback">
	      	<div class="alert alert-danger" role="alert">
			  Data yang dimasukan tidak sesuai dengan aturan
			</div>
	      </div>
	      @enderror

	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="warna" class="col-sm-4 col-12 col-form-label">Warna Kendaraan</label>
	    <div class="col-sm-8 col-12">
	      <input type="text" class="form-control @error('warna') is-invalid @enderror" id="warna" name="warna" value="{{ $client->warna }}">

	      @error('warna')
	      <div class="invalid-feedback">
	      	<div class="alert alert-danger" role="alert">
			  Data yang dimasukan tidak sesuai dengan aturan
			</div>
	      </div>
	      @enderror

	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="bahanBakar" class="col-sm-4 col-12 col-form-label">Bahan Bakar</label>
	    <div class="col-sm-8 col-12">
	      <input type="text" class="form-control @error('bahanBakar') is-invalid @enderror" id="bahanBakar" name="bahanBakar" value="{{ $client->bahanBakar }}">

	      @error('bahanBakar')
	      <div class="invalid-feedback">
	      	<div class="alert alert-danger" role="alert">
			  Data yang dimasukan tidak sesuai dengan aturan
			</div>
	      </div>
	      @enderror
	   
	    </div>
	  </div>

	  <button type="submit" class="btn" style="background-color: #CCAC02; color: white; margin-top: 20px;" name="submit">SIMPAN</button>	  	  	  	  	  	  	  	  
	</form>

</div>


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

