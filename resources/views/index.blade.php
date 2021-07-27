@extends('layout/layout')


@section('title','Beranda')


@section('container')


<!-- Slider -->

<div class="slider">
    <div id="my-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#my-carousel" data-slide-to="1"></li>
            <li data-target="#my-carousel" data-slide-to="2"></li>
     <!--        <li data-target="#my-carousel" data-slide-to="4"></li> -->              
        </ol>
        <center>
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="5000">
                <img class="d-block w-80" src="/img/slider1.JPG" alt="" width="1280" height="450">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="h5" style="font-size: 44px; font-style: bold; text-shadow: 2px 2px black;">SELAMAT DATANG</h5>
                <p style="font-size: 20px; font-style: bold; text-shadow: 2px 2px black;" class="h4">Dinas Perhubungan Provinsi Lampung</p>
              </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-80" src="/img/slider2.JPG" alt="" width="1280" height="450">
            </div>   
            <div class="carousel-item" data-interval="5000">
                <img class="d-block w-80" src="/img/slider3.JPG" alt="" width="1280" height="450">
            </div>
        </div>
        <a class="carousel-control-prev" href="#my-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#my-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </center>


    <div class="penjelasan">

        <p>OSS / Sistem Pelayanan Perizinan Berusaha Terintegrasi Secara Elektronik
        <p>"Kemudahan berusaha dalam berbagai skala turut didorong Pemerintah dengan reformasi struktural, termasuk dengan reformasi
        sistem perizinan. Penerapan Pelayanan Terpadu Satu Pintu (PTSP) dan Online Single Submission (OSS) diharapkan efektif mengurangi birokrasi dan mempermudah para pelaku usaha. Pemerintah sudah menjalankan Online Single Submission (OSS) sebagai sistem yang mengintegrasikan seluruh pelayanan perizinan berusaha yang menjadi kewenangan Menteri/Pimpinan Lembaga, Gubernur, atau Bupati/Walikota yang dilakukan secara elektronik. Melalui reformasi sistem perizinan, kita mendorong standardisasi menjadikan birokrasi perizinan di tingkat pusat dan daerah lebih mudah, lebih cepat, dan juga lebih terintegrasi."
        </p>
        <p>Joko Widodo, 16 Agustus 2018</p>
        
    </div>

</div>

@endsection


