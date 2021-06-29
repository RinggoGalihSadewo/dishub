<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS Surat -->
    <link rel="stylesheet" type="text/css" href="/css/layout/layout.css">

    <style type="text/css">
    </style>

    <title>Cetak Formulir</title>
  </head>
  <body>


    <div class="hasil">
        <div class="headerHasil">
            <!-- <img src="{{ asset('img/logo1.png') }}" width="80px" height="80px" class="logo1" > -->

            <h2>Surat Permohonan Perizinan Trayek Transportasi Darat</h2>

            <!-- <img src="{{ asset('img/logo2.png') }}" width="80px" height="80px" class="logo2"> -->
        </div>

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
            Nama: {{ $request->namaPribadi }}
            <br>
            TTL: {{ $request->ttl }}
            <br><br>
            Dengan ini mengajukan permohonan Izin Trayek / Izin Operasi untuk dan atas nama:
            <br><br>
            Nama Perusahaan: {{ $request->namaPerusahaan }}
            <br>
            Alamat Perusahaan: {{ $request->alamat }}
            <br>
            Trayek: {{ $request->trayek }}
            <br>
            Jumlah Armada: {{ $request->jmlhArmada }}
            <br>
            Plat Kendaraan: {{ $request->platKendaraan }}
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

  </body>
</html>