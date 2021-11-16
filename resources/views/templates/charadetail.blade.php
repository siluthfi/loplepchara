@extends('layouts.index')

@section('container')

<section class="starry-bg">
    <div class="container ff-alone">
        <div class="row d-flex mb-3">
            <h1 class="{{ $chara->divcolor }} mt-5 fw-bold p-0 lh-1 ms-md-3">{{ $chara->name }}</h1>
            <div class="col-md position-relative">
                <img src="/image/{{ $chara->unit->name }}/{{ $chara->image['0']->name }}.png" alt="" class="img-fluid" style="border: 7px solid black; box-sizing: border-box; text-decoration: none; outline: none; line-height: 0;">
                <div class="d-none d-lg-block">
                    <div class="position-absolute top-0 start-100 translate-middle" style="z-index: 100;">
                        <img src="/image/{{ $chara->unit->slug }}/icon/{{ $chara->image['1']->name }}.png" alt="" width="100" height="100" class="rounded-circle p-2 bg-light {{ $chara->image['1']->name }}">
                        {{-- <img src="/image/nijigasaki/icon/shizukuicon.png" alt="" width="100" class="rounded-circle p-2 bg-light" style="box-shadow: 3px 3px 10px 4px black;"> --}}
                    </div>
                    <div class="position-absolute top-50 end-0 translate-middle-y" style="z-index: 100;">
                        {{-- <img src="/image/{{ $chara->unit->name }}/signature/{{ $chara->image[2]->name }}.png" alt="" class="img-responsive"> --}}
                        <img src="/image/{{ $chara->unit->slug }}/signature/{{ $chara->image['2']->name }}.png" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md d-flex flex-wrap">
                <div class="me-auto">
                    <label for="" class="bg-white text-dark px-2 mb-1">Name</label>
                    <h3 class="bg-white text-dark px-2 shadow">{{ $chara->name }}</h3>
                </div>
                <div class="me-auto">
                    <label for="" class="bg-white text-dark px-2 mb-1">Kanji</label>
                    <h3 class="bg-white text-dark px-2 shadow">{{ $chara->kanji_name }}</h3>
                </div>
                <div class="me-auto">
                    <label for="" class="bg-white text-dark px-2 mb-1">Seiyuu</label>
                    <h3 class="bg-white text-dark px-2 shadow">{{ $chara->seiyuu->name }}</h3>
                </div>
                <div class="me-auto">
                    <label for="" class="bg-white text-dark px-2 mb-1">Sub Unit</label>
                    <h3 class="bg-white text-dark px-2 shadow">{{ $chara->subunit->name }}</h3>
                </div>
                <div class="me-auto">
                    <label for="" class="bg-white text-dark px-2 mb-1">Grade</label>
                    <h3 class="bg-white text-dark px-2 shadow">{{ $chara->grade }}</h3>
                </div>
                <div class="me-auto">
                    <label for="" class="bg-white text-dark px-2 mb-1">Birthday</label>
                    <h3 class="bg-white text-dark px-2 shadow">{{ $chara->birthday }}</h3>
                </div>
                <div class="me-auto">
                    <label for="" class="bg-white text-dark px-2 mb-1">Height</label>
                    <h3 class="bg-white text-dark px-2 shadow">{{ $chara->height }} cm</h3>
                </div>
            </div>
        </div>

        <div class="row my-3">
            <div class="col-md">
                <h3 class="bg-white p-2 shadow">{{ $chara->desc }}</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md my-3 d-flex justify-content-end">
                <a href="/{{ $chara->unit->slug }}" class="btn btn-secondary shadow">Back</a>
            </div>
        </div>
    </div>
</section>


@endsection