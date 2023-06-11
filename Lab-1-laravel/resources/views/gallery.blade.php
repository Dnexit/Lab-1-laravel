@extends('layouts.default')
@section('title', 'галерея')
@section('content')
    <main class="main">
        <div class="wrapper_gallery">
            <div class="gallery"></div>
        </div>
    </main>
    <div class="overlay none">
        <div class="overlay__arrow overlay__arrow--left"></div>
        <img class="overlay__photo" src="img/gallery/(4).jpg">
        <div class="overlay__arrow overlay__arrow--right"></div>
    </div>
    <script src="js/gallery.js" defer></script>
@endsection
