@extends('layout.admin.main')

@section('title','Kirim Surat Izin Prinsip')

@section('container')


<div class="formulir">
	
	<h2>KIRIM SURAT PRINSIP</h2>

	<form method="POST" action="/admin/daftar/prinsip" enctype="multipart/form-data">
		
	  @method('patch')
	  @csrf

	  <div class="form-group">
	    <label for="prinsip">Isi Deskripsi</label>
	    <textarea class="form-control" id="prinsip" rows="10" name="prinsip" value="{{ old('prinsip') }}"></textarea>
	  </div>

	  <div class="form-group">
	  	<input type="text" name="namaPribadi" value="{{ $client->namaPribadi }}" class="form-control" hidden>
	  </div>

	  <div class="form-group">
	  	<input type="email" name="email" value="{{ $client->email }}" class="form-control" hidden>
	  </div>

	  <div class="form-group">
	  	<input type="text" name="ttl" value="{{ $client->ttl }}" class="form-control" hidden>
	  </div>

	  <div class="form-group">
	  	<input type="text" name="perusahaan" value="{{ $client->namaPerusahaan }}" class="form-control" hidden>
	  </div>

	  <div class="form-group">
	  	<input type="text" name="trayek" value="{{ $client->trayek }}" class="form-control" hidden>
	  </div>

	  <div class="form-group">
	  	<input type="text" name="jmlArmada" value="{{ $client->jmlhArmada }}" class="form-control" hidden>
	  </div>

	  <div class="form-group">
	  	<input type="text" name="created_at" value="{{ $client->created_at }}" class="form-control" hidden>
	  </div>

	  <div class="form-group">
    	<label for="file">Masukan file surat prinsip</label>
    	<input type="file" class="form-control-file @error('fileSurat') is-invalid @enderror" id="file" name="fileSurat">

    	@error('fileSurat')
	      <div class="invalid-feedback">
	      	<div class="alert alert-danger" role="alert">
	      		{{ $message }}	
			</div>
	      </div>
	      @enderror
  	  </div>

	  <button type="submit" class="btn" style="background-color: #CCAC02; color: white; margin-top: 20px;" name="submit">KIRIM</button>	  	  	  	  	  	  	  	  
	</form>

</div>

@endsection