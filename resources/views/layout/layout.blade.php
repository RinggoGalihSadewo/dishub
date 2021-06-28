<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{ asset('css/beranda.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="/css/beranda/slider.css">
    <link rel="stylesheet" type="text/css" href="/css/layout/layout.css">
    <link rel="stylesheet" type="text/css" href="/css/guide/guide.css">
    <link rel="stylesheet" type="text/css" href="/css/form/form.css">   

    <!-- Faticon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/img/logo2.png">

    <title>@yield('title')</title>
  </head>
  <body>

    <div class="wrapper">

    <!-- Header -->

    <header class="header">
        <div class="logo1">
            <img src="{{ asset('img/logo1.png') }}" width="120px" height="111px" class="logo1" >
        </div>
        <div class="h1">
            <h1>WEBSITE PERIZINAN TRAYEK TRANSPORTASI DARAT</h1>
        </div>
        <div class="logo2">
            <img src="{{ asset('img/logo2.png') }}" width="120px" height="111px" class="logo2">
        </div>
    </header>



    <!-- Navbar -->

    <nav>
        <a href="{{url('/')}}" style="padding-right: 30px;">Beranda</a>
        <a href="{{url('/petunjuk-form')}}" style="padding-right: 30px;">Petunjuk Pengisian Form</a>
        <a href="{{url('/pengisian-form')}}" style="padding-right: 30px;">Pengisian form</a>
    </nav>


<!--     <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" href="#">Beranda <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="#">Petunjuk Teknis Pengisian</a>
          <a class="nav-link" href="#">Pengisian Form</a>
        </div>
      </div>
    </nav -->
    
    @yield('container')


    <!-- Footer -->

    <footer>
        <div class="f1"> 
            <p style="color:#FFFFFF">INFORMASI DAN BANTUAN TEKNIS</p>
        </div>
        <div class="f2">
            <div>
                <p style="color:#FFFFFF"><img src="/img/location.png" width="20" height="20">     Jl.Cut Mutiah No.76 Teluk Betung Bandar Lampung</p>
            </div>
            <div style="margin-right: 120px;">
                <p style="color:#FFFFFF"><img src="/img/telp.png" width="20" height="20">     (0721) 470209</p>
            </div>
            <div>
                <p style="color:#FFFFFF"><img src="/img/mail.png" width="20" height="20">     dishubprovlampung@gmail.com</p>
            </div>
        </div>
        <div class="f3">
            <p>&copy; 2021 DISHUB PROVINSI LAMPUNG</p>
            <p>Pelayanan Perizinan Trayek Transportasi Darat</p>
        </div>         
    </footer>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>