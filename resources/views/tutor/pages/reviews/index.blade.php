@extends('tutor.layouts.app')

@section('content')
<section>
    <div class="content-wrapper " style="overflow: hidden;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <p  class="mr-3 heading-first">
                         Reviews
                    </p>
                </div>
            </div>

            <div class="row bg-white ml-2 mr-2">
                <div class="col-md-6">
                    <div class="row">
                        
                        <div class="col-md-2 col-6 pr-0">
                            <a href="#">
                                    <img src="{{asset ('assets/images/ico/Square-white.jpg')}}" alt="" class="profile-img w-100" style="height:70px;">
                            </a>
                        
                        </div>
                        <div class="col-md-4 col-6">
                            <a href="#" class="decoration-none">
                                <h3 class="mb-0">Student Name</h3>
                            </a>
                            <p class="mb-0">
                                <small>
                                    <img src="{{asset('assets/images/ico/red-icon.png')}}" alt="" class="">  {{$tutor->designation ?? '---'}}
                                </small>
                            </p>
                            <p class="mb-0">
                                <small>
                                    <img src="{{asset('assets/images/ico/location-pro.png')}}" alt="" class="">{{ $tutor->city != NULL ? $tutor->city.' , ' : '---' }} {{ $tutor->country != NULL ? $tutor->country: '---' }}
                                </small>
                            </p>
                        </div>
                        <div class="col-md-6 col-12">
                            <p class="mb-0">
                                <i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star "></i>
                                <i class="fa fa-star "></i>
                                <i class="fa fa-star "></i>
                                <i class="fa fa-star "></i> 1.0
                                <small class="text-grey">(0 reviews)</small>
                            </p>
                            <p>
                                <small>
                                        3 hours tutoring in (this subject) 
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
  
@endsection