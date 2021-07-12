@extends('layout.layout')

@section('title', 'Pengisan Form')



@section('container')

<div class="formulir">
	
	<h2>FORM SURAT PERIZINAN</h2>

	<form method="POST" action="/pengisian-form/hasil">

	  @csrf

	  <div class="form-group row">
	    <label for="nama" class="col-sm-4 col-12 col-form-label">Nama Pribadi</label>
	    <div class="col-sm-8 col-12">
	      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
	      
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
	      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
	      
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
	    <label for="alamat" class="col-sm-4 col-12 col-form-label">Alamat Perusahaan</label>
	    <div class="col-sm-8 col-12">
	      <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}">

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
		  		<div class="mb-3" wire:ignore id='map' style='width: 100%; height: 300px;' retur></div>
		    </div>

		    <div class="col-md-4" style="align-items: center; justify-content: center;" hidden>
		    	<label for="longtitude">Longtitude</label>
		    	<input type="text" name="longtitude" id="longtitude" class="form-control mb-3" value="Kosong">

		    	<label for="lattitude">Lattitude</label>
		    	<input type="text" name="lattitude" id="lattitude" class="form-control mb-3" value="Kosong">
		    </div>

	    </div>		
	  </div>

	  <div class="form-group row">
	    <label for="ttl" class="col-sm-4 col-12 col-form-label">TTL</label>
	    <div class="col-sm-8 col-12">
	      <input type="text" class="form-control @error('ttl') is-invalid @enderror" id="ttl" name="ttl" value="{{ old('ttl') }}">

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
	    <label for="namaPerusahaan" class="col-sm-4 col-12 col-form-label">Nama Perusahaan</label>
	    <div class="col-sm-8 col-12">
	      <input type="text" class="form-control @error('perusahaan') is-invalid @enderror" id="namaPerusahaan" name="perusahaan" value="{{ old('perusahaan') }}">
	   
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
	    <label for="trayek" class="col-sm-4 col-12 col-form-label">Trayek</label>
	    <div class="col-sm-8 col-12">
	      <input type="text" class="form-control @error('trayek') is-invalid @enderror" id="trayek" name="trayek" value="{{ old('trayek') }}">

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
	      <input type="text" class="form-control @error('jmlArmada') is-invalid @enderror" id="jumlahArmada" name="jmlArmada" value="{{ old('jmlArmada') }}">

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
	      <input type="text" class="form-control @error('plat') is-invalid @enderror" id="plat" name="plat" value="{{ old('plat') }}">

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
	      <input type="text" class="form-control @error('merk') is-invalid @enderror" id="merk" name="merk" value="{{ old('merk') }}">

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
	      <input type="text" class="form-control @error('warna') is-invalid @enderror" id="warna" name="warna" value="{{ old('warna') }}">

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
	      <input type="text" class="form-control @error('bahanBakar') is-invalid @enderror" id="bahanBakar" name="bahanBakar" value="{{ old('bahanBakar') }}">

	      @error('bahanBakar')
	      <div class="invalid-feedback">
	      	<div class="alert alert-danger" role="alert">
			  Data yang dimasukan tidak sesuai dengan aturan
			</div>
	      </div>
	      @enderror
	   
	    </div>
	  </div>

	  <button type="submit" class="btn" style="background-color: #CCAC02; color: white; margin-top: 20px;" name="submit">KIRIM</button>	  	  	  	  	  	  	  	  
	</form>

</div>


@push('scripts')
<script>

	document.addEventListener('livewire:load', () => {

	  const defaultLocation = [105.26257464716446, -5.443429907357782]

	  mapboxgl.accessToken = '{{env('MAPBOX_KEY')}}';
	  var map = new mapboxgl.Map({
	    container: 'map',
	    center: defaultLocation,
	    zoom: 11.15,
	    style: 'mapbox://styles/mapbox/streets-v11'
	  });

	  map.addControl(new mapboxgl.NavigationControl());


	  map.on('click', (e) =>{

	  	const longtitude = e.lngLat.lng;
	  	const lattitude = e.lngLat.lat;

	  	document.getElementById("longtitude").value = longtitude;
	  	document.getElementById("lattitude").value = lattitude;
	  	
	  });

	})

</script>
@endpush

@endsection


