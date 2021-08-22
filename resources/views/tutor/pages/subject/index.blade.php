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

    .badge {
        position: absolute;
        right: -28px;
        top: -15px;
        z-index: 9;
    }

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

</style>
@section('content')
    <!-- top Fixed navbar End -->
    <section>
        <div class="content-wrapper " style="overflow: hidden;">
            <div class="container">
                <p class="mr-3 mb-3 heading-first">
                    Subjects
                </p>
            </div>

            @if (Auth::user()->teach)
                <div class="content" style="width: 100%;background-color: #FBFBFB !important;">

                    <div class="container">
                        <!-- subject card -->
                        <div class="container-fluid">
                            <p class="heading-third mt-5">My Subjects</p>
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
                        </div>
                        @if(Auth::user()->assessment->count() != 0)
                        <div class="container-fluid">
                            <p class="heading-first mt-3 ">Pending Subjects</p>
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
                                                            <a href="{{route('tutor.remove.subject',[$teach->subject->id])}}" class="float-right mt-4 text-danger text-decoration-none">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        <!-- Cards -->
                        <div class="container-fluid">
                            <p class="heading-first mt-3 ">Add subjects</p>
                            <input class="ml-3 mr-3 form-control w-25 mb-4 " type="search" placeholder="Type a name" id="search">
                            <div class="row">
                                @foreach ($subjects as $i => $subject)
                                    @if ((Auth::user()->teach[$i]->subject_id ?? null) != $subject->id)
                                        <div class="col-md-3">
                                            <div class="card-deck">
                                                <div class="card h-auto card-shadow p-0">
                                                    <div class="card-body ">
                                                        <span class="badge badge-pill  badge-pending mt-1">New</span>
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <p class="heading-fifth mr-3 pt-2 mb-0 ">
                                                                    {{ $subject->name }}
                                                                </p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <a href="{{ route('tutor.test', [$subject->id]) }}">
                                                                    <p class="view-bookings mb-0">Add</p>
                                                                </a>
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

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    {{ $subjects->links() }}
                                
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
    </section>
@endsection
