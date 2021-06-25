@extends('layout.layout')

@section('title', 'Hasil Form')

@section('container')

	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif

	<div class="hasil">
		<div class="headerHasil">
			<img src="{{ asset('img/logo1.png') }}" width="80px" height="80px" class="logo1" >

			<h2>Surat Permohonan Perizinan Trayek Transportasi Darat</h2>

            <img src="{{ asset('img/logo2.png') }}" width="80px" height="80px" class="logo2">
		</div>

		<div class="lampiran">
			<p>Bandar Lampung, {{ $request->created_at }}</p>
			Kepada
			Yth. Kepala Dinas Provinsi Lampung

			<p>di <b>Bandar Lampung</b></p>
		</div>

		<div class="isiLampiran">
			Dengan hormat,
			<br>
			Yang bertanda tangan di bawah ini:
			<br><br>
			Nama: {{ $request->nama }}
			<br>
			TTL: {{ $request->ttl }}
			<br><br>
			Dengan ini mengajukan permohonan Izin Trayek / Izin Operasi untuk dan atas nama:
			<br><br>
			Nama Perusahaan: {{ $request->perusahaan }}
			<br>
			Alamat Perusahaan: {{ $request->alamat }}
			<br>
			Trayek: {{ $request->trayek }}
			<br>
			Jumlah Armada: {{ $request->jmlArmada }}
			<br>
			Plat Kendaraan: {{ $request->plat }}
			<br>
			Merk Kendaraan: {{ $request->merk }}
			<br>
			Warna Kendaraan: {{ $request->warna }}
			<br>
			Bahan Bakar: {{ $request->bahanBakar }}
			<br><br>
			<p style="text-align: justify;">
			Bersama ini kami mengajukan permohonan izin Trayek / Izin Operasi dengan melampirkan persyaratan sesuai ketentuan Demikian Surat Permohonan ini telah di isi dengan sebenarnya dan apabila di kemudian hari ternyata keterangan - keterangan tersebut tidak benar, maka kami bersedia menerima sanksi / di tuntut sesuai dengan peraturan perundang - undangan yang berlaku
			</p>
		</div>

		<div class="paraf">
			<b>Pemohon</b>
			<br>
			<br>
			<b>(Materai 6000)</b>
		</div>
	</div>
		    
<!-- 	<center>

	<h3>Hasil Form</h3>

	<hr>

	<p><b>Nama Pribadi :</b> {{ $request->nama }}</p>
		        	 
	<p><b>Alamat Perusahaan:</b> {{ $request->alamat }}</p>
		    	
	<p><b>TTL:</b> {{ $request->ttl }}</p>
		    		    	
	<p><b>Nama Perusahaan:</b> {{ $request->perusahaan }}</p>
		    	
	<p><b>Trayek:</b> {{ $request->trayek }}</p>
		    	
	<p><b>Jumlah Armada:</b> {{ $request->jmlArmada }}</p>
		    	
	<p><b>Plat Kendaraan:</b> {{ $request->plat }}</p>
		    	
	<p><b>Merk Kendaraan:</b> {{ $request->merk }}</p>
		    	
	<p><b>Warna Kendaraan:</b> {{ $request->warna }}</p>
		    	
	<p><b>Bahan Bakar:</b> {{ $request->bahanBakar }}</p>


	<div class="embed-responsive embed-responsive-4by3" style="width: 200px; height: 200px">

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.8874315927283!2d105.25341381448622!3d-5.434064155742303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40da30bd702e13%3A0x8a05d5fc73bcbbaa!2sLampung%20Provincial%20Transport%20Department!5e0!3m2!1sen!2sid!4v1624432836269!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

  
</div> -->


</center>	    	
	    	    
@endsection