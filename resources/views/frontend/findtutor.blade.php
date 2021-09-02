@extends('layouts.app')

@section('content')
<style>
</style>
    <link href="{{ asset('assets/css/booknow.css') }}" rel="stylesheet">
<section class="section-main section-main-std mt-5 pb-5">
    <div class="container-fluid ">
        <div class="row mt-5">
            <div class="col-md-12 text-center    mt-5">
                    <span class="text-work text-work-top" style="line-height: 1;">
                        <span class="text-how">
                            Find a
                        </span>
                        Tutor
                    </span>
                    <span class="there-text shows">
                        There are many variations of passages available, but
                        the majority have suffered alteration in some form.
                    </span>
                    <span class="there-text none" style="line-height: 1.6;">
                        There are many variations of passages available, but<br />
                        the majority have suffered alteration in some form.
                    </span>
                </div>
        </div>

        <div class=" row mt-3">
            <div class="col-md-2"></div>
                <div class="col-md-8 bg-subject">
                    <div class="">
                        <select name="" id="" class="input-subject">
                            <option value="">Select Subject</option>
                        </select>
                        <input type="submit" class="input-submite w-25" value="Find a Tutor">
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>

        <div class="row mar-left-right mt-5">
            <div class="col-md-3 bg-white-range">
                <div class="d-flex mt-3">
                    <p class="text-fliter">Filters</p>
                    <a href="#" class="ml-auto mt-2">
                        <img class="" src="../assets/images/blog/Group 5487.png" height="18px">
                        Reset
                    </a>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3 bg-white-range">
                <!-- col-bg -->
                <div class="d-flex">
                    <p class="mt-3 text-sort">
                        Sort by Tutorvy rank
                    </p>

                    <a href="">
                       <img src="../assets/images/arrow-Right Circle.png" height="10px"
                        style="position: absolute;right: 20px;top: 45px;" />
                    </a>
                    <a href="">
                       <img src="../assets/images/Stroke-arrow.png" height="10px"
                        style="position: absolute;right: 20px;top: 25px;" />
                    </a>
                    
                </div>
            </div>
        </div>

        <div class="row mar-left-right">
            <div class="col-md-3 bg-white filteration">
                 <!--TAB4-->
                 <div class="bottom-line mt-3 panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <p class="panel-title">
                            <a class="range-text collapsed " data-toggle="collapse" data-parent="#accordion"
                                href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Location
                            </a>
                        </p>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse show" role="tabpanel"
                        aria-labelledby="headingTree">
                        <div class="panel-body">
                            <div class="pb-4">
                                <div class="col align-self-start m-0 p-0">
                                    <select class="form-control-md form-select" id="locat" aria-label=".form-select-md example">
                                        <option disabled selected>Choose a location</option>
                                        <option value="Lahore">Lahore</option>
                                        <option value="Karachi">Karachi</option>
                                        <option value="Islamabad">Islamabad</option>
                                        <option value="Quetta">Quetta</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
<!--Tab Try-->
               
                <!--Tab1-->
                <div class="panel panel-default mb-3 bottom-line">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <p class="panel-title">
                            <a class="collapsed range-text" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseone" aria-expanded="false" aria-controls="collapseTwo">
                                Price Range
                            </a>
                        </p>
                    </div>
                    <div id="collapseone" class="panel-collapse collapse show pb-3" role="tabpanel"
                        aria-labelledby="headingOne">
                        <div class="panel-body">

                            <div class="row">
                                <b>
                                    <div class="col align-self-start">
                                        $10-$55555
                                    </div>
                                </b>
                            </div>
                            <div class="">
                                <div class="range-slider">
                                    <input class="range-slider__range w-100" type="range" id="range" value="100" min="0"
                                        max="500">
                                    <span class="range-slider__value"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--tab2-->
                <div class="panel panel-default mt-3 bottom-line">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <p class="panel-title">
                            <a class="collapsed range-text" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Rating
                            </a>
                        </p>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse " role="tabpanel"
                        aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating_filter" id="rating_filter" value="1" >
                                        <label class="form-check-label" for="rating_filter">
                                        <p>
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i> 
                                        </p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating_filter" id="rating_filter" value="1" >
                                        <label class="form-check-label" for="rating_filter">
                                        <p>
                                            <i class="fa fa-star text-yellow"></i>
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i> 
                                        </p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating_filter" id="rating_filter" value="2" >
                                        <label class="form-check-label" for="rating_filter">
                                        <p>
                                            <i class="fa fa-star text-yellow"></i>
                                            <i class="fa fa-star text-yellow"></i>
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i> 
                                        </p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating_filter" id="rating_filter" value="3" >
                                        <label class="form-check-label" for="rating_filter">
                                        <p>
                                            <i class="fa fa-star text-yellow"></i>
                                            <i class="fa fa-star text-yellow"></i>
                                            <i class="fa fa-star text-yellow"></i>
                                            <i class="fa fa-star "></i> 
                                        </p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating_filter" id="rating_filter" value="4" checked>
                                        <label class="form-check-label" for="rating_filter">
                                        <p>
                                            <i class="fa fa-star text-yellow"></i>
                                            <i class="fa fa-star text-yellow"></i>
                                            <i class="fa fa-star text-yellow"></i>
                                            <i class="fa fa-star text-yellow"></i> 
                                        </p>
                                        </label>
                                    </div>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                </div>
                <!--TAb3-->
                <div class="bottom-line mt-3 panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <p class="panel-title">
                            <a class="range-text collapsed " data-toggle="collapse" data-parent="#accordion"
                                href="#collapseTry" aria-expanded="false" aria-controls="collapseTry">
                                Language
                            </a>
                        </p>
                    </div>
                    <div id="collapseTry" class="panel-collapse collapse " role="tabpanel"
                        aria-labelledby="headingTree">
                        <div class="panel-body">
                            <div class="pb-4">
                                <div class="col align-self-start m-0 p-0">
                                    <select class="form-control-md form-select" id="locat" aria-label=".form-select-md example">
                                        <option disabled selected>Choose a Language</option>
                                        <option value="Udu">Udu</option>
                                        <option value="English">English</option>
                                        <option value="Arabic">Arabic</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
               
                <!--TAB5-->
                <div class="bottom-line mt-3 panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <p class="panel-title">
                            <a class="range-text collapsed " data-toggle="collapse" data-parent="#accordion"
                                href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Gender
                            </a>
                        </p>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse " role="tabpanel"
                        aria-labelledby="headingTree">
                        <div class="panel-body">
                            <div class="pb-4">
                                <div class="col align-self-start m-0 p-0">
                                    <div class="row ml-1">
                                        <div class="form-check col-sm-4">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check col-sm-4">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Female
                                            </label>
                                        </div>
                                        <div class="form-check col-sm-4">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Others
                                            </label>
                                        </div>
                                    </div>
                                   
                                    <!-- <select class="form-control-md" id="locat" aria-label=".form-select-md example">
                                        <option disabled selected>Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--TAB4-->
                <div class="bottom-line mt-3 panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <p class="panel-title">
                            <a class="range-text collapsed " data-toggle="collapse" data-parent="#accordion"
                                href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Availability
                            </a>
                        </p>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse " role="tabpanel"
                        aria-labelledby="headingTree">
                        <div class="panel-body">
                            <div class="pb-4">
                                <div class="col align-self-start m-0 p-0">
                                    <div class="row ml-1">
                                        <div class="form-check col-sm-4">
                                            <input class="form-check-input" type="radio" name="availability" id="availability1">
                                            <label class="form-check-label" for="availability1">
                                                Online
                                            </label>
                                        </div>
                                        <div class="form-check col-sm-4">
                                            <input class="form-check-input" type="radio" name="availability" id="availability2" checked>
                                            <label class="form-check-label" for="availability2">
                                                Offline
                                            </label>
                                        </div>
                                        <div class="form-check col-sm-4">
                                            <input class="form-check-input" type="radio" name="availability" id="availability2" checked>
                                            <label class="form-check-label" for="availability2">
                                                All
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 mb-3" id="tutor">
                @foreach ($tutors as $i => $tutor)
                    <div class="card  mb-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-2 col-6">
                                                    <img src="../assets/images/logo/boy.jpg" alt="" class="round-border">
                                                </div>
                                                <div class="col-md-6 col-6">
                                                    <h3>{{ $tutor->fullname }}</h3>
                                                    <p class="mb-0"><img src="../assets/images/ico/red-icon.png" alt=""
                                                            class="">
                                                        {{ $tutor->professional->first()->designation ?? '---' }} at
                                                        {{ $tutor->professional->first()->organization ?? '---' }} </p>
                                                    <p><img src="../assets/images/ico/location-pro.png" alt="" class="">
                                                        {{ $tutor->city }},
                                                        {{ $tutor->country }}
                                                    </p>
                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <p>
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i> 4.0
                                                        <small class="text-grey">(25 reviews)</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <p><span class="text-green pr-3">Top Ranked</span> <span class="rank_icon"><img
                                                        src="../assets/images/ico/rank.png" alt=""></span> </p>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <p class="mb-2">Subject</p>
                                            <p>
                                                @foreach ($tutor->teach as $subject)
                                                    <span class="info-1 info">{{ $subject->first()->subject->name }}</span>
                                                @endforeach
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="mb-2">Languages</p>
                                            <p>
                                                <span class="info-1 info lingo"> {{ $tutor->language }}</span>

                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="mb-2">Education</p>
                                            <p>
                                                @foreach ($tutor->education as $edu)
                                                    <span
                                                        class="info-1 info edu d-inline-block"></span>
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <p><strong> About Tutor </strong></p>
                                            <p class="h-92">
                                                {{ $tutor->bio }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 pb-4 start-bg">
                                    <div class="text-center mt-5">
                                        <p class="paragraph-text1">starting from</p>
                                        <p class="dollar-text">
                                            ${{ $tutor->hourly_rate ?? 0 }}
                                        </p>
                                        <p class="paragraph-text1 mb-5" style="line-height: 1;">Per hour</p>
                                        <button class="cencel-btn w-100 mt-2">Massge</button>
                                        <a href="{{ route('student.direct.booking', [$tutor->id]) }}"
                                            class="btn schedule-btn w-100 mt-3">Book class</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
    <!-- end -->
    <script src="{{ asset('assets/js/filterajax.js') }}"></script>
@endsection


@section('scripts')
    <script>
        $(".filteration").change(function() {
            $('#preloaderbody').css('display','block')

            var range = $("#range").val()
            var locat = $("#locat").val()
            var lang = $("#lang").val()
            var gender = $("input[name=optradio]:checked").val()
            var avail = $("#avail").val()

            $.ajax({
                type: 'POST',
                url: "{{ route('find.tutor') }}",
                dataType: "json",
                data: {
                    _token: "{{ csrf_token() }}",
                    range: range,
                    locat: locat,
                    lang: lang,
                    gender: gender,
                    avail: avail
                },
                success: function(data) {
                    console.log(data)
                    $('#preloaderbody').css('display','none')
                    if (data.length > 0) {
                        for (let element of data) {
                            var html = `   <div class="row mb-2">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-2 col-6">
                                                <img src="../assets/images/logo/boy.jpg" alt="" class="round-border">
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <h3>{{ $tutor->fullname }}</h3>
                                                <p class="mb-0"><img src="../assets/images/ico/red-icon.png" alt=""
                                                        class="">
                                                    {{ $tutor->professional->first()->designation ?? '---' }} at
                                                    {{ $tutor->professional->first()->organization ?? '---' }} </p>
                                                <p><img src="../assets/images/ico/location-pro.png" alt="" class="">
                                                    {{ $tutor->city }},
                                                    {{ $tutor->country }}
                                                </p>
                                            </div>
                                            <div class="col-md-4 col-12">
                                                <p>
                                                    <i class="fa fa-star text-yellow"></i>
                                                    <i class="fa fa-star text-yellow"></i>
                                                    <i class="fa fa-star text-yellow"></i>
                                                    <i class="fa fa-star text-yellow"></i> 4.0
                                                    <small class="text-grey">(25 reviews)</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <p><span class="text-green pr-3">Top Ranked</span> <span class="rank_icon"><img
                                                    src="../assets/images/ico/rank.png" alt=""></span> </p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-4">
                                        <p class="mb-2">Subject</p>
                                        <p>
                                            @foreach ($tutor->teach as $subject)
                                                <span class="info-1 info">{{ $subject->first()->subject->name }}</span>
                                            @endforeach
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="mb-2">Languages</p>
                                        <p>
                                            <span class="info-1 info lingo"> {{ $tutor->language }}</span>

                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="mb-2">Education</p>
                                        <p>
                                            @foreach ($tutor->education as $edu)
                                                <span
                                                    class="info-1 info edu d-inline-block"></span>
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <p><strong> About Tutor </strong></p>
                                        <p>
                                            {{ $tutor->bio }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 pb-4 start-bg">
                                <div class="text-center mt-5">
                                    <p class="paragraph-text1">starting from</p>
                                    <p class="dollar-text">
                                        ${{ $tutor->hourly_rate ?? 0 }}
                                    </p>
                                    <p class="paragraph-text1 mb-5" style="line-height: 1;">Per hour</p>
                                    <button class="cencel-btn w-100 mt-5">Massge</button>
                                    <a href="{{ route('student.direct.booking', [$tutor->id]) }}"
                                        class="btn schedule-btn w-100 mt-3">Book class</a>
                                </div>
                            </div>
                        </div>`

                            $("#tutor").html(html);
                        }
                    }
                }
            });
        })
    </script>
@endsection
