<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS Surat -->
    <link rel="stylesheet" type="text/css" href="/css/layout/layout.css">

    <style type="text/css">
        /*.hasil{
            width: 100%;
            height: 100%;
            border: 1px solid black;

        }
        .headerHasil{
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 1px solid black;
            width: 100%;
            height: 200px;
        }*/
    </style>

    <title>Cetak Formulir</title>
  </head>
  <body>


    <div class="hasil">
        <div class="headerHasil">
            <center>
            <img src="{{ storage_path('app/public/KOP.PNG') }}" class="logo1" >

            <!-- Untuk hosting -->
            <!-- <img src="{{ asset('img/KOP.PNG') }}" class="logo1"> -->

            <!-- <h2>Surat Permohonan Perizinan Trayek Transportasi Darat</h2> -->
<!-- 
            <img src="{{ storage_path('app/public/logo2.png') }}" width="80px" height="80px" class="logo2"> -->
            </center>
        </div>

        <br><br>

        <div class="lampiran">
            <p style="position: absolute; right: 0px;">Bandar Lampung, {{ $officialDate }} </p>
            <br>
            <p style="position: absolute; right: 0px;">Kepada
            Yth. Kepala Bidang Transportasi Darat 
            <br>
            Dinas Perhubungan Provinsi Lampung<br>
            di <b>Bandar Lampung</p>
        </div>

        <br><br><br><br>

        <div class="isiLampiran">
            Dengan hormat,
            <br>
            Yang bertanda tangan di bawah ini:
            <br><br>
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>Nama Pemilik  </td> 
                    <td>: </td>
                    <td> {{ $request->namaPribadi }}</td>
                </tr>
                <tr>
                    <td>Email   </td> 
                    <td>: </td>
                    <td> {{ $request->email }}</td>
                </tr>
                <tr>
                    <td>Tempat dan Tanggal Lahir</td>
                    <td>:</td>
                    <td> {{ $request->ttl }}</td>
                <tr>
            </table>
            <br>
            Dengan ini mengajukan permohonan Izin prinsip trayek Angkutan Kota:
            <br><br>

            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>Nama Perusahaan</td>
                    <td>: </td>
                    <td>{{ $request->namaPerusahaan }}</td>
                </tr>
                <tr>
                    <td>Alamat Perusahaan      </td>
                    <td>: </td>
                    <td>{{ $request->alamat }}</td>
                </tr>
                <tr>
                    <td>Jumlah Mobil</td>
                    <td>: </td>
                    <td>{{ $request->jmlhArmada }}</td>
                </tr>
                <tr>
                    <td>Trayek</td>
                    <td>: </td>
                    <td>{{ $request->trayek }}</td>
                </tr>
            </table>

            <p style="text-align: justify;">
            Bersama ini kami mengajukan permohonan izin prinsip trayek Angkutan Kota dengan melampirkan persyaratan sesuai ketentuan Demikian Surat Permohonan ini telah di isi dengan sebenarnya dan apabila di kemudian hari ternyata keterangan - keterangan tersebut tidak benar, maka kami bersedia menerima sanksi / di tuntut sesuai dengan peraturan perundang - undangan yang berlaku
            </p>
        </div>

        <br><br><br><br><br>

        <div class="paraf" style="position: absolute; right: 0px; text-align: center" >
            <b>Pemohon</b>
            <br>
            <br>
            <br>
            <b>(Materai 10000)</b>
            <br>
            <br>
            <br>
            <b><u>{{ $request->namaPribadi }}</u></b>
        </div>
    </div>

  </body>
</html>