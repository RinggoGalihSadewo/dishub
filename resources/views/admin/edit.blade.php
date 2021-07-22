@extends('layout.admin.main')

@section('title', 'Edit Form')



@section('container')

<div class="formulir">
	
	<h2>EDIT FORM SURAT PERIZINAN</h2>

	<form method="POST" action="/admin/daftar/{{ $client->id }}">

	  @method('patch')
	  @csrf

	  <div class="form-group row">
	    <label for="nama" class="col-sm-4 col-12 col-form-label">Nama Pemilik</label>
	    <div class="col-sm-8 col-12">
	      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $client->namaPribadi }}">
	      
	      @error('nama')
	      <div class="invalid-feedback">
	      	<div class="alert alert-danger" role="alert">
	      		{{ $message }}	
			</div>
	      </div>
	      @enderror

	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="email" class="col-sm-4 col-12 col-form-label">Email</label>
	    <div class="col-sm-8 col-12">
	      <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $client->email }}">
	      
	      @error('email')
	      <div class="invalid-feedback">
	      	<div class="alert alert-danger" role="alert">
			  {{ $message }}
			</div>
	      </div>
	      @enderror

	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="ttl" class="col-sm-4 col-12 col-form-label">Tempat dan Tanggal Lahir</label>
	    <div class="col-sm-8 col-12">
	      <input type="text" class="form-control @error('ttl') is-invalid @enderror" id="ttl" name="ttl" value="{{ $client->ttl }}">

	      @error('ttl')
	      <div class="invalid-feedback">
	      	<div class="alert alert-danger" role="alert">
			  {{ $message }}
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
			  {{ $message }}
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
			  {{ $message }}
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

		    <div class="col-md-6 mb-3" hidden>
		    	<label for="longtitude">Longtitude</label>
		    	<input type="text" name="longtitude" id="longtitude" class="form-control" value="{{ $client->longtitude }}">
		    </div>
		    <div class="col-md-6" hidden>
		    	<label for="lattitude">Lattitude</label>
		    	<input type="text" name="lattitude" id="lattitude" class="form-control mb-3" value="{{ $client->lattitude }}">
		    </div>
<!-- 
		    <div id="coordinates" class="coordinates">
		    </div> -->
		    
	    </div>		
	  </div>

	  <div class="form-group row">
	    <label for="jumlahArmada" class="col-sm-4 col-12 col-form-label">Jumlah Mobil	</label>
	    <div class="col-sm-8 col-12">
	      <input type="text" class="form-control @error('jmlArmada') is-invalid @enderror" id="jumlahArmada" name="jmlArmada" value="{{ $client->jmlhArmada }}">

		  @error('jmlArmada')
	      <div class="invalid-feedback">
	      	<div class="alert alert-danger" role="alert">
			  {{ $message }}
			</div>
	      </div>
	      @enderror

	    </div>
	  </div>

<!-- 	  <div class="form-group row">
	    <label for="trayek" class="col-sm-4 col-12 col-form-label">Trayek</label>
	    <div class="col-sm-8 col-12">
	      <input type="text" class="form-control @error('trayek') is-invalid @enderror" id="trayek" name="trayek" value="{{ $client->trayek }}">

	      @error('trayek')
	      <div class="invalid-feedback">
	      	<div class="alert alert-danger" role="alert">
			  {{ $message }}
			</div>
	      </div>
	      @enderror

	    </div>
	  </div> -->

	  	<div class="form-group row">  	
	    <label for="trayek" class="col-sm-4 col-12 col-form-label">Trayek</label>
	    <div class="col-sm-8 col-12">
	    <select class="select form-control" id="trayek" name="trayek">

	      <option selected>{{ $client->trayek }}</option>	
	      <option disabled style="background-color: #4366A3; color: white">KOTA BANDAR LAMPUNG</option>
	      <option>Tanjung Karang - Raja Basa (A)</option>
	      <option>Tanjung Karang - Sukaraja (B)</option>
	      <option>Sukaraja - Srengsem (C)</option>
	      <option>Tanjung Karang - Garuntang (D)</option>
	      <option>Tanjung Karang - jl. Teuku Umar (E)</option>
	      <option>Tanjung Karang - Kemiling (F)</option>
	      <option>Tanjung Karang - Sukarame (G)</option>
	      <option>Tanjung Karang - Permata Biru (H)</option>
	      <option>Tanjung Karang - Sam Ratulangi (R)</option>
	      <option>Pasar Cimeng - Lempasing (J)</option>
	      <option>Sukaraja - Lempasing (I)</option>

	      <option disabled style="background-color: #4366A3; color: white">KOTA METRO</option>
	      <option>Terminal Kota - Terminal Mulyojati</option>
	      <option>Terminal Kota - Karangrejo</option>
	      <option>Terminal Kota - Kampus - SPBU 21</option>
	      <option>Metro - Stadion Tejosari Via Jl Alamsyah</option>
	      <option>Mulyojati - Rejomulyo Via Jl Budi Utomo</option>
	      <option>Mulyojati - SMA 2 Via Jl Suprapto</option>
	      <option>Mulyojati - Metro</option>

	      <option disabled style="background-color: #4366A3; color: white">KABUPATEN LAMPUNG TENGAH</option>
	      <option>Bd Jaya - Gn Sugih - Bj Sari - Mojopahit</option>
	      <option>Gaya Baru - Cabang</option>
	      <option>Bd Jaya - Gn Sugih - Wates</option>
	      <option>Bd Jaya - Poncowati - Gn Batin</option>
	      <option>Bd Jaya - Gn Sugih - Kota Gajah</option>
	      <option>Bd Jaya - Sulusuban</option>
	      <option>Bd Jaya - Sp Mataram</option>
	      <option>Bd Jaya - Komering - Padang Ratu</option>
	      <option>Bd Jaya - Candi Rejo - Bj Ratu</option>
	      <option>Wates - Bekri - Kalirejo</option>
	      <option>Gotong Royong - Bj Sari - Metro</option>
	      <option>Wates - Metro</option>
	      <option>Trimurjo - Metro</option>
	      <option>Kota Gajah - Punggur - Metro</option>
	      <option>Kota Gajah - Raman Utara - Pekalongan</option>
	      <option>Kota Gajah - Bumi Jawa - Sukadana</option>
	      <option>Kalirejo - Sukoharjo - Pringsewu</option>

	      <option disabled style="background-color: #4366A3; color: white">KABUPATEN LAMPUNG SELATAN</option>
	      <option>Kalianda - Sidoarjo - Sidomulyo - PP</option>
	      <option>Kalianda - Canty - Way Muli - PP</option>
	      <option>Kalianda - Merak Belatung - Sidomulyo - PP</option>
	      <option>Kalianda - Gayam - Bakauheni - PP</option>
	      <option>Tegineneng - Branti - Natar - Raja Basa - PP</option>
	      <option>Sp Sebelang - Panjang - PP</option>
	      <option>Kalianda - Panjang - PP</option>
	      <option>Sidomulyo - Kota Dalam - Tanjungan - PP</option>
	      <option>Sidomulyo - Panjang - PP</option>

	      <option disabled style="background-color: #4366A3; color: white">KABUPATEN LAMPUNG TIMUR</option>
	      <option>Pekalongan - Sukadana</option>
	      <option>Purbolinggo - Sukadana</option>
	      <option>Way Jepara - Sukadana</option>
	      <option>Sekampung - Sukadana</option>
	      <option>Pekalongan - Metro</option>
	      <option>Sekampung - Metro</option>
	      <option>Wonosari - Purwosari - Metro</option>
	      <option>Mulyojati - Bantul - Metro Kibang</option>
	      <option>Purbolinggo - Pekalongan - Metro</option>
	      <option>Raman Utara - Pekalongan - Metro</option>
	      <option>Sukadana - Pekalongan - Metro</option>
	      <option>Pekalongan - Simpang - Raman Utara - Kota Gajah</option>
	      <option>Sukadana - Bumi Jawa - Kota Gajah</option>
	      <option>Purbolinggo - Raman Utara</option>
	      <option>Terminal Bunut - Labuhan Maringgai - Way Jepara</option>
	      <option>Mataram Baru - Sidomulyo - Terminal Bakauheni</option>
	      <option>Pekalongan - Metro</option>
	      <option>Pekalongan - Raman Utara</option>
	      <option>Pekalongan - Batanghari</option>
	      <option>Way Jepara - Bringin</option>
	      <option>Way Jepara - Braja Slebah</option>
	      <option>Way Jepara - Braja Luhur</option>
	      <option>Way Jepara - Sadar Sriwijaya</option>
	      <option>Way Jepara - Sumur Bandung</option>
	      <option>Raja Basa Baru - Mataram Baru - Way Jepara</option>
	      <option>Mataram Baru - Kuala</option>
	      <option>Mataram Baru - Way Mili</option>
	      <option>Mataram Baru - Bunut</option>
	      <option>Sekampung - Pugung Raharjo</option>
	      <option>Sekampung - Batang Hari</option>
	      <option>Sekampung - Metro</option>
	      <option>Sekampung - Batanghari</option>
	      <option>Sribawono - Panjang - PP</option>

	      <option disabled style="background-color: #4366A3; color: white">KABUPATEN LAMPUNG BARAT</option>
	      <option>Liwa - Way Betanding</option>
	      <option>Liwa - Sp Liwa</option>
	      <option>Liwa - Krui</option>
	      <option>Liwa - Sukarame</option>
	      <option>Liwa - Bengkunat</option>
	      <option>Way Tenong - Batu Kebayan</option>
	      <option>Liwa - Bakung</option>
	      <option>Sekincau - Sb Jaya</option>

	      <option disabled style="background-color: #4366A3; color: white">KABUPATEN LAMPUNG UTARA</option>
	      <option>Sub Terminal Kota - Sub Terminal PS Sentral</option>
	      <option>Sub Terminal Kota - Way Rarem</option>
	      <option>Sub Terminal Kota - Kebon 1V & V</option>
	      <option>Sub Terminal Kota - Ketapang - Negara Ratu</option>
	      <option>Sub Terminal Kota - Tata Karya</option>
	      <option>Sub Terminal Kota - Perumnas TI</option>
	      <option>Simpang Taruko - Jl Hi Alamsyah RPN - Sub Terminal Kota</option>
	      <option>Sub Terminal Kota - Sp Propau - Blamb Pagar</option>
	      <option>Terminal PS Sentral - CV IV</option>
	      <option>Terminal PS Sentral - Bukit Kemuning</option>
	      <option>Terminal PS Sentral - Cabang IV</option>
	      <option>Terminal PS Sentral - Subik</option>
	      <option>Terminal PS Sentral - Tanjung Raja</option>
	      <option>Sub Terminal Kota - PS Sentral - Perumnas</option>
	      <option>Simpang Propau - Daya Murni</option>
	      <option>Simpang Propau - Blambangan Pagar</option>
	      <option>Simpang Propau - Way Tebabeng</option>
	      <option>Kali Cinta - Cempaka</option>
	      <option>Kali Cinta - Dorowati</option>
	      <option>Kali Cinta - Bunga Mayang</option>
	      <option>Bukit Kemuning - Tj Raja</option>
	      <option>Sub Terminal Kota - Taruko - Perumbas - Rejosari - Sribasuki - Sub Terminal Kota</option>

	      <option disabled style="background-color: #4366A3; color: white">KABUPATEN TULANG BAWANG</option>
	      <option>Terminal Menggala - Pasar Baru PP</option>
	      <option>Terminal Menggala - Kampung Tua</option>
	      <option>Terminal Menggala - Unit II</option>

	      <option disabled style="background-color: #4366A3; color: white">KABUPATEN WAY KANAN</option>
	      <option disabled>Belum ada Trayek</option>

	      <option disabled style="background-color: #4366A3; color: white">KABUPATEN PESAWARAN</option>
	      <option>Kemiling- Gd Tataan</option>

	      <option disabled style="background-color: #4366A3; color: white">KABUPATEN TANGGAMUS</option>
	      <option>Kota Agung - Gisting - Talang Padang</option>
	      <option>Kota Agung - Wonosobo</option>
	      <option>Pringsewu - Ambarawa - Pardasuka</option>
	      <option>Pringsewu - Sukoharjo</option>
	      <option>Pringsewu - Pagelaran - Talang Padang</option>
	      <option>Pringsewu - Gading Rejo</option>
	      <option>Sukoharjo - Kalirejo</option>

	    </select>
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

