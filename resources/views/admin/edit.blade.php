@extends('layout.admin.main')

@section('title', 'Edit Form')



@section('container')

<div class="formulir">
	
	<h2>EDIT FORM SURAT PERIZINAN</h2>

	<form method="POST" action="/admin/daftar">

	  @csrf

	  <div class="form-group row">
	    <label for="nama" class="col-sm-4 col-6 col-form-label">Nama Pribadi</label>
	    <div class="col-sm-8 col-6">
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
	    <label for="alamat" class="col-sm-4 col-6 col-form-label">Alamat</label>
	    <div class="col-sm-8 col-6">
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


	  <div class="form-group row">
	    <label for="ttl" class="col-sm-4 col-6 col-form-label">TTL</label>
	    <div class="col-sm-8 col-6">
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
	    <label for="namaPerusahaan" class="col-sm-4 col-6 col-form-label">Nama Perusahaan</label>
	    <div class="col-sm-8 col-6">
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
	    <label for="trayek" class="col-sm-4 col-6 col-form-label">Trayek</label>
	    <div class="col-sm-8 col-6">
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
	    <label for="jumlahArmada" class="col-sm-4 col-6 col-form-label">Jumlah Armada</label>
	    <div class="col-sm-8 col-6">
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
	    <label for="plat" class="col-sm-4 col-6 col-form-label">Plat Kendaraan</label>
	    <div class="col-sm-8 col-6">
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
	    <label for="merk" class="col-sm-4 col-6 col-form-label">Merk Kendaraan</label>
	    <div class="col-sm-8 col-6">
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
	    <label for="warna" class="col-sm-4 col-6 col-form-label">Warna Kendaraan</label>
	    <div class="col-sm-8 col-6">
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
	    <label for="bahanBakar" class="col-sm-4 col-6 col-form-label">Bahan Bakar</label>
	    <div class="col-sm-8 col-6">
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

	  <button type="submit" class="btn" style="background-color: #CCAC02; color: white;" name="submit">SIMPAN</button>	  	  	  	  	  	  	  	  
	</form>

</div>

@endsection
