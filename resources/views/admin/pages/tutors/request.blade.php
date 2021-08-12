@extends('admin.layouts.app')
@section('content')

<div class="container-fluid pb-4">
    <h1 class="heading-first-top mt-5 ">
        <a href="{{ route ('admin.tutor') }}"> < </a> Tutor request </h1>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="text-center pt-5 bg-white">
                <img src="{{asset('/assets/images/ico/hom-profile.png')}}" alt="re" class="w-50">
                <h3 class="mt-3 mb-0">{{ $tutor->first_name }} {{ $tutor->last_name }}</h3>
                <p class="heading-fifth mt-2 line-height-1">Tutor</p>
                <hr />
                <div class="pb-5 mt-4">
                    <button class="cencel-btn" data-toggle="modal" data-target="#exampleModalCenterss"
                        style="width: 110px;">Reject</button>
                    <button class="schedule-btn" data-toggle="modal" data-target="#exampleModalCenter"
                        style="width: 110px;">Accpet</button>
                </div>
            </div>
        </div>
        <!-- Modal verify -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered" role="document">
                <div class="modal-content modals">
                    <div class="modal-body modal-bodys">
                        <div class="container text-center pb-3 pt-3">
                            <img src=" {{ asset('admin/assets/img/ico/verify-icon.png')}}" alt="verfiy" />
                            <h3 class="mt-3 pb-3">
                                Please verify tutor test to accept request
                            </h3>

                            <button type="button" class="cencel-btn w-25" data-dismiss="modal">Cencel</button>
                            <a href="./test.html">
                                <button class="schedule-btn w-25">View</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->

        <!-- Modal reject-->
        <div class="modal fade" id="exampleModalCenterss" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body  modal-bodys" style="height: 450px;">
                        <div class="container text-center pb-3 pt-3">
                            <img src="{{ asset('/admin/assets/img/ico/cross-icon.png')}}" alt="verfiy" />
                            <h3 class="mt-3 ">
                                Why are you rejecting tutor?
                            </h3>
                            <p class="paragraph-text">
                                Write allegation that why are you rejecting tutor
                            </p>
                            <textarea class="form-control" rows="5" placeholder="Write reason"></textarea>
                            <div class="mt-4 d-flex" style="position: absolute;right: 30px;">
                                <button class="cencel-btn w-150 mr-4" data-dismiss="modal">Cencel</button>
                                <button class="schedule-btn w-150">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 bg-white border-right">
            <div class="mt-4 ml-3">
                <table class="table">

                    <tbody class="th">
                        <tr>
                            <th scope="row">
                                <p class="heading-fifth">Email address</p>
                            </th>
                            <td class="view-bookings float-left">{{$tutor->email}}</td>
                        </tr>
                        <!-- <tr>
                            <th scope="row">
                                <p class="heading-fifth">Password</p>
                            </th>
                            <td class="paragraph-text">password1245</td>
                        </tr> -->
                        <tr>
                            <th scope="row">
                                <p class="heading-fifth">Date of birth</p>
                            </th>
                            <td class="paragraph-text">{{ $tutor->dob }}</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <p class="heading-fifth">Phone number</p>
                            </th>
                            <td class="paragraph-text">{{ $tutor->phone }}</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <p class="heading-fifth">City</p>
                            </th>
                            <td class="paragraph-text">{{ $tutor->city }}</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <p class="heading-fifth">Country</p>
                            </th>
                            <td class="paragraph-text">{{ $tutor->country }}</td>
                        </tr>
                        <tr>
                            @if($tutor->type == 'cnic')
                                <th scope="row">
                                    <p class="heading-fifth">ID card number</p>
                                </th>
                                <td class="d-flex">
                                    <p class="paragraph-text">
                                        123-456-789-0
                                    </p>
                                    <a href="" class="view-btn btn">Vierfy</a>
                                </td>
                            @elseif($tutor->type == 'security')
                                <th scope="row">
                                    <p class="heading-fifth">Social Security Number</p>
                                </th>
                                <td class="d-flex">
                                    <p class="paragraph-text">
                                        123-456-789-0
                                    </p>
                                    <a href="" class="view-btn btn">Vierfy</a>
                                </td>
                            
                            @endif
                            
                        </tr>
                        <tr>
                            <th scope="row">
                                <p class="heading-fifth">Languages</p>
                            </th>
                            <td class="paragraph-text">English, Spinsh</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <p class="heading-fifth">Gender</p>
                            </th>
                            <td class="paragraph-text">{{ $tutor->gender }}</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <p class="heading-fifth">About tutor</p>
                            </th>
                            <td class="paragraph-text">{{ $tutor->bio }}</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <p class="heading-fifth">Education</p>
                            </th>
                            <td class="paragraph-text">Bachelor of Graphic Design form University of Toronto
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <p class="heading-fifth">Subject</p>
                            </th>
                            <td class="d-flex">
                                <p class="paragraph-text">
                                    {{$tutor->userdetail->subjects}}
                                </p>
                                <a href="{{ route('admin.tutotAssessment',[$tutor->id,$tutor->userdetail->teach]) }}" class="view-btn btn">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <p class="heading-fifth">Student level</p>
                            </th>
                            <td class="paragraph-text">{{$tutor->userdetail->std_level}}</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <p class="heading-fifth">Availability</p>
                            </th>
                            <td class="paragraph-text">---</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <p class="heading-fifth">Rate per hour</p>
                            </th>
                            <td class="paragraph-text">{{$tutor->userdetail->hourly_rate}}$</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection