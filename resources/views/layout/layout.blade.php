<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="/css/beranda/slider.css">
    <link rel="stylesheet" type="text/css" href="/css/layout/layout.css">
    <link rel="stylesheet" type="text/css" href="/css/guide/guide.css">
    <link rel="stylesheet" type="text/css" href="/css/form/form.css">
    <link rel="stylesheet" type="text/css" href="/css/map/map.css">     

    <!-- Faticon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/img/logo2.png">

    <!-- Mapbox -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css" type="text/css">

    <!-- Jquery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    @livewireStyles

    <title>@yield('title')</title>

  </head>
  <body>

    <div class="wrapper">

    <!-- Header -->

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #4366A3; border-bottom: 3px solid #CCAC02; box-shadow: 0px 3px 10px gray;">
      <a class="navbar-brand" href="{{url('/')}}">
        <img src="/img/logo1.png" class="logo1">
        <img src="/img/logo2.png" class="logo2">
        <h3 class="d-md-inline d-none">Website Perizinan Trayek Transportasi Darat</h3>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown" style="background-color: #4366A3; padding: 10px 20px 10px 20px; border-radius: 5px;">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Beranda<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{url('/petunjuk-form')}}">Petunjuk Pengisian Form</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/pengisian-form')}}">Pengisian Form</a>
          </li>
<!--           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown link
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> -->
        </ul>
      </div>
    </nav>


    @yield('container')
    {{ isset($slot) ? $slot : null }}


    <!-- Footer -->

    <footer>
        <div class="f1"> 
            <p style="color:#FFFFFF">INFORMASI DAN BANTUAN TEKNIS</p>
        </div>
        <div class="f2">
            <div >
                <p style="color:#FFFFFF"><img src="/img/location.png" width="20" height="20">     Jl.Cut Mutiah No.76 Teluk Betung Bandar Lampung</p>
            </div>
            <div class="f2p"    >
                <p style="color:#FFFFFF"><img src="/img/telp.png" width="20" height="20">     (0721) 470209</p>
            </div>
            <div>
                <p style="color:#FFFFFF"><img src="/img/mail.png" width="20" height="20">     dishubprovlampung@gmail.com</p>
            </div>
        </div>
        <div class="f3">
            <p>&copy; IF'18 KP ITERA</p>
            <p>Pelayanan Perizinan Trayek Transportasi Darat</p>
        </div>         
    </footer>

    </div>

   <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- Mapbox -->

    @livewireScripts

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>

    @stack('scripts')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/b31044d5db.js" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

    <script type="text/javascript">
        $(".select").select2();
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>