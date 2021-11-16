@extends('layouts.index')

{{-- @dd($datas) --}}

@section('container')
    <div class="container-fluid vh-100 bg-aqours self-font">
        <div class="row default-font">
            <div class="col-lg d-flex justify-content-center align-items-center" style="margin-top: 200px;">
                <h1 class="hero-text">{{ $datas['0']->unit->name }}</h1>
            </div>
            <div class="text-center">
                <div class="row justify-content-center mt-4">
                    <div class="col-4 text-end">
                        <a href="#firstyear" class="text-decoration-none year-text fs-3 fw-bold">First Year</a>
                    </div>
                    <div class="col-4">
                        <a href="#secyear" class="text-decoration-none year-text fs-3 fw-bold">Second Year</a>
                    </div>
                    <div class="col-4 text-start">
                        <a href="#thirdyear" class="text-decoration-none year-text fs-3 fw-bold">Third Year</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid self-font">
        <div class="row" id="firstyear">
            <div class="col-lg vh-100 d-flex justify-content-center align-items-center">
                <div style="border-top: 5px solid black; border-bottom: 5px solid black;">
                    <h1 style="font-size: 75px; font-weight: bold;" class="mt-5 mb-5">First Year</h1>
                </div>
            </div>
            @foreach ($datas as $data)
                @if ($data->grade == '1st Year')
                <div class="col-lg-2 vh-100" data-aos="fade-down" data-aos-easing="ease-in" data-aos-offset="500" data-aos-duration="500">
                    <a href="/{{ $data->unit->slug }}/{{ $data->slug }}">
                        <div class="card {{ $data->image['0']->name }} mt-5 border-0"></div>
                    </a>
                </div>
                @endif
            @endforeach
        </div>

        <div class="row bg-lightbrown d-flex" id="secyear">
            @foreach ($datas as $data)
                @if ($data->grade == '2nd Year')
                <div class="col-lg-2 vh-100 order-lg-0 order-1" data-aos="fade-down" data-aos-easing="ease-in" data-aos-offset="500" data-aos-duration="500">
                    <a href="/{{ $data->unit->slug }}/{{ $data->slug }}">
                        <div class="card {{ $data->image['0']->name }} mt-5 border-0"></div>
                    </a>
                </div>
                @endif
            @endforeach
            <div class="col-lg vh-100 d-flex justify-content-center align-items-center order-lg-1 order-0">
                <div style="border-top: 5px solid black; border-bottom: 5px solid black;">
                    <h1 style="font-size: 75px; font-weight: bold;" class="mt-5 mb-5">Second Year</h1>
                </div>
            </div>
        </div>
        
        <div class="row" id="thirdyear">
            <div class="col-lg vh-100 d-flex justify-content-center align-items-center">
                <div style="border-top: 5px solid black; border-bottom: 5px solid black;">
                    <h1 style="font-size: 75px; font-weight: bold;" class="mt-5 mb-5">Third Year</h1>
                </div>
            </div>
            @foreach ($datas as $data)
                @if ($data->grade == '3rd Year')
                <div class="col-lg-2 vh-100" data-aos="fade-down" data-aos-easing="ease-in" data-aos-offset="500" data-aos-duration="500">
                    <a href="/{{ $data->unit->slug }}/{{ $data->slug }}">
                        <div class="card {{ $data->image['0']->name }} mt-5 border-0"></div>
                    </a>
                </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection