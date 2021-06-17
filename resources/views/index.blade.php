@extends('layout/layout')


@section('title','Beranda')


@section('container')


<!-- Slider -->

<div class="slider">
    <div id="my-carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#my-carousel" data-slide-to="1"></li>
            <li data-target="#my-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="5000">
                <img class="d-block w-100" src="/img/slider1.jpg" alt="First slide" width="1280" height="450">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="h5" style="font-size: 44px; font-style: bold; text-shadow: 2px 2px black;">SELAMAT DATANG</h5>
                <p style="font-size: 20px; font-style: bold; text-shadow: 2px 2px black;" class="h4">WEBSITE PERIZINAN TRAYEK TRANSPORTASI DARAT</p>
              </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/img/slider2.jpg" alt="Second slide" width="1280" height="450">
            </div>
            <div class="carousel-item" data-interval="5000">
                <img class="d-block w-100" src="/img/slider3.jpg" alt="Third slide" width="1280" height="450">
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
</div>

@endsection


