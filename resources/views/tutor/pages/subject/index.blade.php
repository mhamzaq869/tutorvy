@extends('tutor.layouts.app')
<style>
    .searchBtn {
        position: absolute;
        right: 23px;
        top: 10px;
        color: #00132D;
    }

    .h-auto {
        height: auto !important;
    }

    .appOpt {
        padding-top: 8px;
        /* float: right; */
        padding-left: 12px;
        color: #00132D;
        font-size: 24px;

    }

    /* .badge {
        position: absolute;
        right: -28px;
        top: -15px;
        z-index: 9;
    } */

    .badge-new {
        background: #FAAF3A;
        color: #fff;
    }

    .badge-pending {
        background: #65A5ff;
        color: #fff;

    }

    .badge-approve {
        background: #0ace36b0;

    }

    svg:not(:root) {
    overflow: hidden;
    width: 20px;
    padding-top:3px;
}
.flex-1{
    opacity:0 ;
}

.sub-tab .tablinks{
    font-size:14px;
}
</style>
@section('content')
    <!-- top Fixed navbar End -->
    <section>
        <div class="content-wrapper " style="overflow: hidden;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <p class="mr-3 mb-3 heading-first">
                             Subjects
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-1 ">
                            <div class=" card  bg-toast infoCard">
                                <div class="card-body row">
                                    <div class="col-md-1 text-center">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-11">
                                        <small>
                                            Subject Details to get to know which subjects you can offer and which subjects you have already offered and their status. <a href="#">Learn More</a>

                                        </small>
                                        <a href="#" class="cross"  onclick="hideCard()">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                @if (Auth::user()->teach)
                    <p class="heading-third mb-0">My Subjects</p>
                    <div class="row">
                        @foreach (Auth::user()->teach as $teach)
                            <div class="col-md-3">
                                <div class="card-deck">
                                    <div class="card h-auto card-shadow p-0">
                                        <div class="card-body ">
                                            <span
                                                class="badge badge-pill badge-approve mt-1 text-white">Approved</span>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <p class="heading-fifth mr-3 pt-2 mb-0 ">
                                                        {{ $teach->subject->name }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @if(Auth::user()->assessment->count() != 0)
                        <p class="heading-third mt-3 mb-0">Pending Subjects</p>
                        <div class="row">
                            @foreach (Auth::user()->assessment->where('status',0) as $teach)
                                <div class="col-md-3">
                                    <div class="card-deck">
                                        <div class="card h-auto card-shadow p-0">
                                            <div class="card-body ">
                                                <span
                                                    class="badge badge-pill badge-new mt-1 text-white">Pending</span>
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <p class="heading-fifth mr-3 pt-2 mb-0 ">
                                                            {{ $teach->subject->name }}</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <a href="{{route('tutor.remove.subject',[$teach->subject->id])}}" class="float-right mt-2 text-danger text-decoration-none">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                        <p class="heading-third mt-3">Add subjects</p>

                        <div class="row">
                            <div class="col-md-4">
                                <select name="" class="form-select form-control w-25 " id="">
                                    <option value="">Select Particular Subject</option>
                                    @foreach ($subjects as $i => $subject)
                                        <option value="{{ $subject->id }}" onclick="getSubSubject({{ $subject->id }})">{{ $subject->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2 pt-5">
                                <div class="tab-mobile tab sub-tab">
                                    @foreach($main_sub as $sub_cat)
                                        <button class="tablinks {{($sub_cat->id == 1) ? 'active': ''}}" id="defaultOpen_{{$sub_cat->id}}" onclick="getSubSubject({{$sub_cat->id}})">
                                            {{$sub_cat->name}}
                                        </button>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div id="subjects">
                                    <div id="1">
                                        <div class="row" id="subSubjects">
                                            @foreach ($subjects as $i => $subject)
                                                @if ((Auth::user()->teach[$i]->subject_id ?? null) != $subject->id)
                                                    <div class="col-md-4">
                                                        <div class="card-deck">
                                                            <div class="card h-auto card-shadow p-0">
                                                                <div class="card-body ">
                                                                    <div class="row">
                                                                        <div class="col-md-9">
                                                                            <p class="heading-fifth mr-3 pt-2 mb-0 ">
                                                                                {{ $subject->name }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            @if(Auth::user()->status == 2)
                                                                                <a href="{{ route('tutor.test', [$subject->id]) }}">
                                                                                    <p class="view-bookings mb-0">Add</p>
                                                                                </a>
                                                                            @else
                                                                                <a onclick="showMessage()">
                                                                                    <p class="view-bookings mb-0">Add</p>
                                                                                </a>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                @else
                    <!-- no subject start -->
                    @include('tutor.pages.general.nosubject')
                    <!-- end -->
                @endif
                <div class="line"></div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @include('js_files.tutor.subjectJs')
@endsection
