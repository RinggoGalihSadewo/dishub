@extends('layout.layout')

@section('title', 'Hasil Form')

@section('container')

	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif

	<center>
	<a href="/pengisian-form/hasil/cetakPDF" class="btn" style="background-color: #CCAC02; color: white"><i class="fas fa-print"></i>  Download Hasil Surat Izin Trayek</a>
	</center>

	<div class="hasil">

		<center>
		
		<img src="{{ asset('img/KOP.png') }}">

        <!-- Untuk hosting -->
        <!-- <img src="/img/KOP.PNG" width="640px" height="118px"> -->

		</center>

		<br>

		<div class="lampiran">
			<p>Bandar Lampung, {{ $officialDate }} </p>
			Kepada
			Yth. Kepala Dinas Provinsi Lampung

			<p>di <b>Bandar Lampung</b></p>
		</div>

		<div class="isiLampiran">
			Dengan hormat,
			<br>
			Yang bertanda tangan di bawah ini:
			
			<br><br>
			
			<table border="0" cellspacing="0">
                <tr>
                    <td>Nama   </td> 
                    <td>: </td>
                    <td> {{ $request->nama }}</td>
                </tr>
                <tr>
                    <td>Email   </td> 
                    <td>: </td>
                    <td> {{ $request->email }}</td>
                </tr>
                <tr>
                    <td>TTL</td>
                    <td>:</td>
                    <td> {{ $request->ttl }}</td>
                <tr>
            </table>

			<br><br>
			Dengan ini mengajukan permohonan Izin Trayek / Izin Operasi untuk dan atas nama:
		
			<br><br>

			<table border="0" cellspacing="0">
                <tr>
                    <td>Nama Perusahaan</td>
                    <td>: </td>
                    <td>{{ $request->perusahaan }}</td>
                </tr>
                <tr>
                    <td>Alamat Perusahaan      </td>
                    <td>: </td>
                    <td>{{ $request->alamat }}</td>
                </tr>
                <tr>
                    <td>Trayek</td>
                    <td>: </td>
                    <td>{{ $request->trayek }}</td>
                </tr>
                <tr>
                    <td>Jumlah Armada</td>
                    <td>: </td>
                    <td>{{ $request->jmlArmada }}</td>
                </tr>
                <tr>
                    <td>Plat Kendaraan</td>
                    <td>: </td>
                    <td>{{ $request->plat }}</td>
                </tr>
                <tr>
                    <td>Merk Kendaraan</td>
                    <td>: </td>
                    <td>{{ $request->merk }}</td>
                </tr>
                <tr>
                    <td>Warna Kendaraan</td>
                    <td>: </td>
                    <td>{{ $request->warna }}</td>
                </tr>
                <tr>
                    <td>Bahan Bakar</td>
                    <td>: </td>
                    <td>{{ $request->bahanBakar }}</td>
                </tr>
            </table>

			<br><br>
			<p style="text-align: justify;">
			Bersama ini kami mengajukan permohonan izin Trayek / Izin Operasi dengan melampirkan persyaratan sesuai ketentuan Demikian Surat Permohonan ini telah di isi dengan sebenarnya dan apabila di kemudian hari ternyata keterangan - keterangan tersebut tidak benar, maka kami bersedia menerima sanksi / di tuntut sesuai dengan peraturan perundang - undangan yang berlaku
			</p>
            <br><br>
		</div>

        <br><br>

		<div class="paraf">
			<b>Pemohon</b>
			<br>
			<br>
			<b>(Materai 6000)</b>
            <br>
            <br>
            <br>
            <b><u>{{ $request->nama }}</u></b>
		</div>
	</div>
		    	
	<br><br>

<center>

	<h4>Alamat GPS Dinas Perhubungan Provinsi Lampung</h4>

	<div class="embed-responsive embed-responsive-16by9" style="width: 65%; height: 400px">
		
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.8874315927283!2d105.25341381448622!3d-5.434064155742303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40da30bd702e13%3A0x8a05d5fc73bcbbaa!2sLampung%20Provincial%20Transport%20Department!5e0!3m2!1sen!2sid!4v1624432836269!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

	</div> 


</center>	    	
	    	    
@endsection