<!DOCTYPE html>
<html>
<head>
	<title>Pengingat Durasi Izin Trayek Transportasi Darat</title>
	<style type="text/css">
		td:nth-child(3){
			padding-left: 5px;
		}
	</style>
</head>
<body>

    <p>Bandar Lampung, {{ $details['date'] }} </p>
    Kepada
    Yth. {{ $details['nama'] }}

	<table border="0" cellspacing="0">
		<br><br>
        <tr>
            <td>Nama Pemilik   </td> 
            <td>: </td>
            <td> {{ $details['nama'] }}</td>
        </tr>
        <tr>
            <td>Email   </td> 
            <td>: </td>
            <td> {{ $details['email'] }}</td>
        </tr>
        <tr>
            <td>Tempat dan Tanggal Lahir</td>
            <td>:</td>
            <td> {{ $details['ttl'] }}</td>
        <tr>
    </table>

    <br><br>

    Dengan detail data perizinan sebagai berikut:

    <br><br>

    <table border="0" cellspacing="0">
   
        <tr>
            <td>Nama Perusahaan</td>
            <td>: </td>
            <td>{{ $details['perusahaan'] }}</td>
        </tr>
        <tr>
            <td>Alamat Perusahaan      </td>
            <td>: </td>
            <td>{{ $details['alamat'] }}</td>
        </tr>
        <tr>
            <td>Jumlah Mobil</td>
            <td>: </td>
            <td>{{ $details['jmlArmada'] }}</td>
        </tr>
        <tr>
            <td>Trayek</td>
            <td>: </td>
            <td>{{ $details['trayek'] }}</td>
        </tr>
        <tr>
            <td>Waktu Pembuatan Surat</td>
            <td>: </td>
            <td>{{ $details['created_at'] }}</td>
        </tr>
    </table>

    <br>

    <p>Dengan batas waktu perizinan yang telah ditentukan sebelumnya, yaitu waktu maksimal perizinan hanya sampai 15 hari saja. di mohon untuk saudara/i <b>{{ $details['nama'] }}</b> untuk segera kembali, karena waktu perizinan sudah hampir habis</p>

</body>
</html>