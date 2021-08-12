@extends('student.layouts.app')

@section('content')
<div class="container">
    <p class="mr-3 mb-2 heading-first">
        Find a tutor
    </p>
    <div class="row">
        <div class="col-md-3 mt-4" style="background-color: #ffffff;">

            <p class="mb-3 pt-3  ml-2"
                style="font-size: 16px;font-weight: 600;font-family: Poppins;color: #00132D;">
                Advance search</p>
            <input type="search" style="width: 100%;" class="form-control input12" data-search
                placeholder="Search">

            <span class="fa fa-search form-control-feedback"></span>

            <select class="w-100 mt-3 select-o">
                <option value="">Subject</option>
            </select>
            <select class="w-100 mt-3 select-o">
                <option value="">Location</option>
            </select>
            <select class="w-100 mt-3 select-o">
                <option value="">Rate</option>
            </select>
            <select class="w-100 mt-3 select-o">
                <option value="">Rating</option>
            </select>
            <select class="w-100 mt-3 select-o">
                <option value="">Language</option>
            </select>

        </div>
        <div class="col-md-9">
            @foreach ($tutors as $tutor)
                <div class="container mt-4 pb-4" style="background-color: white;border-radius: 8px;">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row" style="line-height: 0.8;">
                                <div class="col-md-2">
                                    <div class="popover__wrapper mt-0">
                                        <a href="../Profile/profile.html">
                                            <h2 class="popover__title">
                                                @if($tutor->picture)
                                                <img src="{{asset('assets/images/ico/hom-profile.png') }}" alt="home-profile">
                                                @else
                                                <img src="{{asset('assets/images/ico/hom-profile.png') }}" alt="home-profile">
                                                @endif
                                            </h2>
                                        </a>
                                        <div class="popover__content">
                                            <div class="col-md-12">
                                                <div class="row" style="line-height: 0.8;">
                                                    <div class="col-md-2 mt-3">
                                                        <img src="{{asset('assets/images/ico/hom-profile.png') }}"
                                                            alt="home-profile">
                                                    </div>
                                                    <div class="col-md-10 mt-4">
                                                        <div class="d-flex ml-5 ">
                                                            <p class="heading-third ml-1">
                                                                {{$tutor->fullname}}
                                                            </p>
                                                            <div class=" ml-2">
                                                                <span
                                                                    class="fa fa-star checked text-warning"></span>
                                                                <span
                                                                    class="fa fa-star checked text-warning"></span>
                                                                <span
                                                                    class="fa fa-star checked text-warning"></span>
                                                                <span
                                                                    class="fa fa-star checked text-warning"></span>
                                                                <span class="fa fa-star"></span>
                                                            </div>

                                                        </div>
                                                        <div class="row ml-4">
                                                            <div class="col-md-1 mr-2 ml-3">
                                                                <img src="{{asset('assets/images/ico/red-icon.png') }}"
                                                                    alt="red-icon">
                                                            </div>
                                                            <div class="col-md-9 m-0 p-0">
                                                                <p class="text-pro">
                                                                    {{$tutor->professional->last()->designation ?? '---'}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row  ml-4">
                                                            <div class="col-md-1 ml-3">
                                                                <img src="{{asset('assets/images/ico/location-pro.png') }}"
                                                                    alt="location-pro">
                                                            </div>
                                                            <div class="col-md-9 m-0 p-0">
                                                                <p class="heading-fifth ml-2">
                                                                    Lahore, Pakistan
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 mt-4 m-0 p-0">
                                    <div class="d-flex ml-3 ">
                                        <p class="heading-third">{{$tutor->fullname}}</p>
                                        <div class=" ml-2">
                                            <span class="fa fa-star checked text-warning"></span>
                                            <span class="fa fa-star checked text-warning"></span>
                                            <span class="fa fa-star checked text-warning"></span>
                                            <span class="fa fa-star checked text-warning"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p class="ml-3 mt-1 paragraph-text1">4.0</p>
                                        <p class="ml-3 mt-1 paragraph-text2">(25 review)</p>
                                    </div>
                                    <div class="row ml-1">
                                        <div class="col-md-1 mr-2">
                                            <img src="{{asset('assets/images/ico/red-icon.png') }}">
                                        </div>
                                        <div class="col-md-9 m-0 p-0">
                                            <p class="text-pro">  {{$tutor->professional->last()->designation ?? '---'}} at {{$tutor->professional->last()->organization ?? '---'}}</p>
                                        </div>
                                    </div>
                                    <div class="row  ml-1">
                                        <div class="col-md-1">
                                            <img src="{{asset('assets/images/ico/location-pro.png') }}">
                                        </div>
                                        <div class="col-md-9 m-0 p-0">
                                            <p class="heading-fifth ml-2"> {{$tutor->city}}, {{$tutor->country}} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 mt-4">
                                    <div class="d-flex justify-content-end">
                                        <p class="rank-text mt-1" style="position: absolute;left: -30px;">Top
                                            Rank</p>
                                        <img class="" src="{{asset('assets/images/ico/rank.png') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid mt-3">
                                <div class="row">

                                    <div class="col-md-4 m-0 p-0">
                                        <p class="heading-fifth"> Subjects</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="heading-fifth"> Language</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="heading-fifth"> Education</p>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid mt-1 pb-3">
                                <div class="row">
                                    <div class="d-flex">
                                        @foreach ($tutor->teach as $teach)
                                        <button class="color-btn-std1 ml-2 py-1">{{$teach->sub_name ?? ''}}</button>
                                        @endforeach
                                        <button class="color-btn-std ml-2">{{$tutor->language ?? ''}}</button>
                                        @foreach ($tutor->education as $edu)
                                            <button class="color-btn-std3 ml-2">{{$edu->institute->name ?? ''}}</button>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 heading-forth">About tutor</p>
                            <div class="container-fluid m-0 p-0">
                                <p class="paragraph-text1" style="opacity: 0.8;">
                                  {{$tutor->bio}}
                                </p>
                            </div>

                        </div>
                        <div class="col-md-3 pb-4" style="background-color: #ebf4ff;border-radius: 8px;">
                            <div class="text-center mt-5">
                                <p class="paragraph-text1">starting from</p>
                                <p class="" style="font-size: 64px;font-family: 'poppins';line-height: 1;">
                                    ${{$tutor->userdetail->hourly_rate ?? 0}}
                                </p>
                                <p class="paragraph-text1 mb-5" style="line-height: 1;">Per hour</p>
                                <button class="cencel-btn w-100 mt-5">Massge</button>
                                <button class="schedule-btn w-100 mt-3">Book class</button>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
