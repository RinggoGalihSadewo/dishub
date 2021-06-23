@extends('layout.layout')

@section('title', 'Hasil Form')



@section('container')

	    
<center>

<h3>Hasil Form</h3>

<hr>

<p><b>Nama Pribadi :</b> {{ $request->nama }}</p>
	        	 
<p><b>Alamat:</b> {{ $request->alamat }}</p>
	    	
<p><b>TTL:</b> {{ $request->ttl }}</p>
	    		    	
<p><b>Nama Perusahaan:</b> {{ $request->perusahaan }}</p>
	    	
<p><b>Trayek:</b> {{ $request->trayek }}</p>
	    	
<p><b>Jumlah Armada:</b> {{ $request->jmlArmada }}</p>
	    	
<p><b>Plat Kendaraan:</b> {{ $request->plat }}</p>
	    	
<p><b>Merk Kendaraan:</b> {{ $request->merk }}</p>
	    	
<p><b>Warna:</b> {{ $request->warna }}</p>
	    	
<p><b>Bahan Bakar:</b> {{ $request->bahanBakar }}</p>


<div class="embed-responsive embed-responsive-4by3" style="width: 200px; height: 200px">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.8874315927283!2d105.25341381448622!3d-5.434064155742303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40da30bd702e13%3A0x8a05d5fc73bcbbaa!2sLampung%20Provincial%20Transport%20Department!5e0!3m2!1sen!2sid!4v1624432836269!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

  
</div>


</center>	    	
	    	    

@endsection