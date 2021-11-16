@extends('layouts.index')

@section('container')
    <div class="container-fluid home-hero-img">
        <div class="row">
            <div class="col-8 vh-100 mx-auto text-white d-flex align-items-center ">
                <div class="flex-column text-center ">
                    <h1 class="display-1 bg-dark">Hello</h1>
                    <p style="text-shadow: 0 0 5px black">Fan made website</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <hr class="featurette-divider">
        <div class="row my-3">
            <div class="col-lg-7 mb-3">
                <h2 class="featurette-heading">Muse</h2>
                <p class="lead">Anime: Love Live! School Idol Project</p>
                <a href="/muse">Characters</a>
            </div>
            <div class="col-lg-5">
                <img src="/image/covermuse.jpg" alt="Cover Muse" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto shadow">
            </div>
        </div>

        <hr class="featurette-divider">
        <div class="row my-3">
            <div class="col-lg-7 order-lg-2 mb-3">
                <h2 class="featurette-heading">Aqours</h2>
                <p class="lead">Anime: Love Live! Sunshine!</p>
                <a href="/aqours">Characters</a>
            </div>
            <div class="col-lg-5 order-lg-1">
                <img src="/image/coveraqours.jpg" alt="Cover Muse" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto shadow">
            </div>
        </div>
        
        <hr class="featurette-divider">
        <div class="row my-3">
            <div class="col-lg-7 mb-3">
                <h2 class="featurette-heading">Nijigasaki High School Idol</h2>
                <p class="lead">Anime: Love Live! Nijigasaki Gakuen School Idol Doukoukai</p>
                <a href="/nijigasaki">Characters</a>
            </div>
            <div class="col-lg-5">
                <img src="/image/coverniji.jpg" alt="Cover Muse" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto shadow">
            </div>
        </div>
        <hr class="featurette-divider">
    </div>
@endsection