@extends('layout/layout')


@section('title','Beranda')


@section('container')


<!-- Slider -->

<div class="slider" style="margin-top: 110px; ">
    <div id="my-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#my-carousel" data-slide-to="1"></li>
            <li data-target="#my-carousel" data-slide-to="2"></li>           
        </ol>
        <center>
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="5000">
                <img class="d-block w-100" src="/img/slider2.JPG" alt="" width="1300" height="550" style="object-fit: cover; object-position: 80% 90%;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/img/blur2.JPEG" alt="" width="1300" height="550" style="object-fit: cover; ">
            </div>   
            <div class="carousel-item" data-interval="5000">
                <img class="d-block w-100" src="/img/blur1.JPEG" alt="" width="1300" height="550" style="object-fit: cover; object-position: 80% 100%;">
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


    <div class="penjelasan" data-aos="fade-up">

        <p>OSS / Sistem Pelayanan Perizinan Berusaha Terintegrasi Secara Elektronik
        <p>"Kemudahan berusaha dalam berbagai skala turut didorong Pemerintah dengan reformasi struktural, termasuk dengan reformasi
        sistem perizinan. Penerapan Pelayanan Terpadu Satu Pintu (PTSP) dan Online Single Submission (OSS) diharapkan efektif mengurangi birokrasi dan mempermudah para pelaku usaha. Pemerintah sudah menjalankan Online Single Submission (OSS) sebagai sistem yang mengintegrasikan seluruh pelayanan perizinan berusaha yang menjadi kewenangan Menteri/Pimpinan Lembaga, Gubernur, atau Bupati/Walikota yang dilakukan secara elektronik. Melalui reformasi sistem perizinan, kita mendorong standardisasi menjadikan birokrasi perizinan di tingkat pusat dan daerah lebih mudah, lebih cepat, dan juga lebih terintegrasi."
        </p>
        <p>Joko Widodo, 16 Agustus 2018</p>
    </div>

    <div class="parallax-window mt-5" data-parallax="scroll" data-image-src="/img/a.jpg" ></div>

    <center>
    <div class="mt-5" data-aos="fade-right">
    <h4>Alamat GPS Dinas Perhubungan Provinsi Lampung</h4>

    <div class="embed-responsive embed-responsive-16by9" style="width: 65%; height: 400px">
        
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.8874315927283!2d105.25341381448622!3d-5.434064155742303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40da30bd702e13%3A0x8a05d5fc73bcbbaa!2sLampung%20Provincial%20Transport%20Department!5e0!3m2!1sen!2sid!4v1624432836269!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div> 
    </div>
    </center>

</div>

@push('scripts')

<script>
    
    $('.parallax-window').parallax({imageSrc: '/img/a.jpg'});

</script>

<script>

    AOS.init({
        duration: 1000,
    })

</script>



@endpush

@endsection


