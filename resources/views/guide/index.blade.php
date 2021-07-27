@extends('layout.layout')

@section('title', 'Petunjuk Teknis Pengisian Form')



@section('container')

<div class="guide" style="margin-top: 110px;">		
	<!-- <img src="/img/guide.jpeg" width="835px" height="591px"> -->
	<img src="/img/langkah1.png" width="300px" height="650px" class="guide1" data-aos="flip-left">
	<img src="/img/langkah2.png" width="300px" height="650px" class="guide2" data-aos="flip-right">
	<img src="/img/langkah3.png" width="300px" height="650px" class="guide3" data-aos="flip-left">
	<img src="/img/langkah4.png" width="300px" height="650px" class="guide4" data-aos="flip-right">
</div>

@push('scripts')

<script>
    AOS.init({
        duration: 1000,
    })
</script>

@endpush

@endsection