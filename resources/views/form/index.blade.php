@extends('layout.layout')

@section('title', 'Pengisan Form')



@section('container')

<div class="formulir">
	
	<h2>FORM SURAT PERIZINAN</h2>

	<form method="POST" action="/pengisian-form/hasil">

	  @csrf
	  	
	  <div class="form-group row">
	    <label for="nama" class="col-sm-4 col-6 col-form-label">Nama Pribadi</label>
	    <div class="col-sm-8 col-6">
	      <input type="text" class="form-control" id="nama" name="nama">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="alamat" class="col-sm-4 col-6 col-form-label">Alamat</label>
	    <div class="col-sm-8 col-6">
	      <input type="text" class="form-control" id="alamat" name="alamat">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="ttl" class="col-sm-4 col-6 col-form-label">TTL</label>
	    <div class="col-sm-8 col-6">
	      <input type="text" class="form-control" id="ttl" name="ttl">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="namaPerusahaan" class="col-sm-4 col-6 col-form-label">Nama Perusahaan</label>
	    <div class="col-sm-8 col-6">
	      <input type="text" class="form-control" id="namaPerusahaan" name="perusahaan">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="trayek" class="col-sm-4 col-6 col-form-label">Trayek</label>
	    <div class="col-sm-8 col-6">
	      <input type="text" class="form-control" id="trayek" name="trayek">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="jumlahArmada" class="col-sm-4 col-6 col-form-label">Jumlah Armada</label>
	    <div class="col-sm-8 col-6">
	      <input type="text" class="form-control" id="jumlahArmada" name="jmlArmada">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="plat" class="col-sm-4 col-6 col-form-label">Plat Kendaraan</label>
	    <div class="col-sm-8 col-6">
	      <input type="text" class="form-control" id="plat" name="plat">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="merk" class="col-sm-4 col-6 col-form-label">Merk Kendaraan</label>
	    <div class="col-sm-8 col-6">
	      <input type="text" class="form-control" id="merk" name="merk">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="warna" class="col-sm-4 col-6 col-form-label">Warna Kendaraan</label>
	    <div class="col-sm-8 col-6">
	      <input type="text" class="form-control" id="warna" name="warna">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="bahanBakar" class="col-sm-4 col-6 col-form-label">Bahan Bakar</label>
	    <div class="col-sm-8 col-6">
	      <input type="text" class="form-control" id="bahanBakar" name="bahanBakar">
	    </div>
	  </div>
	  <button type="submit" class="btn" style="background-color: #CCAC02; color: white;" name="submit">KIRIM</button>	  	  	  	  	  	  	  	  
	</form>

</div>

@endsection

