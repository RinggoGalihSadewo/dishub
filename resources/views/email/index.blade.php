<!DOCTYPE html>
<html>
<head>
	<title>Pengingat Durasi Izin Trayek Transportasi Darat</title>
</head>
<body>

<table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>Nama   </td> 
                    <td>: </td>
                    <td> {{ $details['nama'] }}</td>
                </tr>
                <tr>
                    <td>Email   </td> 
                    <td>: </td>
                    <td> {{ $details['email'] }}</td>
                </tr>
                <tr>
                    <td>TTL</td>
                    <td>:</td>
                    <td> {{ $details['ttl'] }}</td>
                <tr>
            </table>
            <br>
            Dengan ini mengajukan permohonan Izin Trayek / Izin Operasi untuk dan atas nama:
            <br><br>

            <table border="0" cellpadding="0" cellspacing="0">
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
                    <td>Trayek</td>
                    <td>: </td>
                    <td>{{ $details['trayek'] }}</td>
                </tr>
                <tr>
                    <td>Jumlah Armada</td>
                    <td>: </td>
                    <td>{{ $details['jmlArmada'] }}</td>
                </tr>
                <tr>
                    <td>Plat Kendaraan</td>
                    <td>: </td>
                    <td>{{ $details['plat'] }}</td>
                </tr>
                <tr>
                    <td>Merk Kendaraan</td>
                    <td>: </td>
                    <td>{{ $details['merk'] }}</td>
                </tr>
                <tr>
                    <td>Warna Kendaraan</td>
                    <td>: </td>
                    <td>{{ $details['warna'] }}</td>
                </tr>
                <tr>
                    <td>Bahan Bakar</td>
                    <td>: </td>
                    <td>{{ $details['bahanBakar'] }}</td>
                </tr>
                <tr>
                    <td>Waktu Pembuatan Surat</td>
                    <td>: </td>
                    <td>{{ $details['created_at'] }}</td>
                </tr>
            </table>

</body>
</html>