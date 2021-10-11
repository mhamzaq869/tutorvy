@extends('admin.layouts.app')
@section('content')
@php
    $request_ = route ('admin.tutor') ;
@endphp
<div class="container-fluid pb-4">
    <h1 class="heading-first-top mt-5 ">
        <a href="{{ route ('admin.tutor') }}"> < </a> Tutor request </h1>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="text-center pt-5 bg-white">
                @if($tutor->picture != null)
                    <img src="{{asset($tutor->picture)}}" class="round-profile" alt="re" class="w-50">
                @else
                    <img src="{{asset('admin/assets/img/ico/Square-white.jpg')}}" class="round-profile" alt="re" class="w-50">
                @endif
                <h3 class="mt-3 mb-0">{{ $tutor->first_name }} {{ $tutor->last_name }}</h3>
                <p class="heading-fifth mt-2 line-height-1 mb-1">{{$tutor->tagline}}</p>
                @if($tutor->status == 2)
                <h6><span class="badge badge-success mb-3 all-tutor-badge">Verified</span></h6>
                @else
                <div class="pb-5 mt-4" id="verification_btns">
                    <button class="cencel-btn" data-toggle="modal" data-target="#tutorRejectModal" style="width: 110px;">Reject</button>
                    @if($tutor_assessment != null)
                        <button class="schedule-btn save_btn" style="width: 110px;" onclick="verifyTutor(`{{$tutor->id}}`,2,`{{$tutor_assessment->status}}`)">Accept </button>
                        <button type="button" role="button" type="button" id="verfication_loading" disabled class="btn btn-primary" 
                        style="width: 110px;display:none"> Processing </button>
                    @else
                        <button class="schedule-btn save_btn" style="width: 110px;" onclick="verifyTutor(`{{$tutor->id}}`,2)">Accept </button>
                        <button type="button" role="button" type="button" id="verfication_loading" disabled class="btn btn-primary" 
                        style="width: 110px;display:none"> Processing </button>
                    @endif
                </div>

                @endif
                <h6>
                    <span class="badge badge-success mb-3 all-tutor-badge" id="verified_badge" style="display:none">Verified</span>
                    <hr>
                </h6>
                
            </div>
            <div class="card">
                <div class="card-body">
                    <h3>Documents</h3>
                    @if($tutor->status == 0)
                        <span class="statusTag doc_not_sub_status">  Document not Submitted </span>
                    @else
                        @if( count($documents) > 0)
                        <hr>
                            <h6>Document Type</h5>
                            <p class="text-muted small">
                                @if($tutor->type != null)
                                    @if($tutor->type == 1) 
                                        <span>National Identity Card</span>
                                    @elseif($tutor->type == 2)
                                        <span> Driving License </span>
                                    @elseif($tutor->type == 3)
                                        <span> Passport </span>
                                    @else
                                        <span> - </span>
                                    @endif.
                                @else
                                    <span> - </span>
                                @endif
                            </p>

                            <h6> Document Type </h6>
                            <p class="text-muted small">
                                {{ $tutor->cnic_security != null ? $tutor->cnic_security : '-' }}
                            </p>

                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <h6>Document Attachments</h6>
                                </div>
                                @foreach($documents as $document)
                                <div class="col-md-12 mt-2">
                                    <img src="{{asset($document->files)}}"  class="w-100" alt="">
                                </div>
                                @endforeach
                            </div>
                        @else
                            <span class="statusTag doc_not_sub_status">  Document not Submitted </span>
                        @endif
                    @endif
                </div>
            </div>
        </div>
        <!-- Modal verify -->
        <div class="modal fade" id="tutorAcceptModal" tabindex="-1" role="dialog"
            aria-labelledby="tutorAcceptModalTitle" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered" role="document">
                <div class="modal-content modals">
                    <div class="modal-body modal-bodys">
                        <div class="container text-center pb-3 pt-3">
                            <img src=" {{ asset('admin/assets/img/ico/verify-icon.png')}}" alt="verfiy" />
                            <h3 class="mt-3 pb-3">
                                Please verify tutor test to accept request
                            </h3>

                            <button type="button" class="cencel-btn w-25" data-dismiss="modal">Cancel</button>
                             @if($tutor_assessment != null)

                                <a href="{{ route('admin.tutotAssessment',[$tutor_assessment->id]) }}">
                                    <button class="schedule-btn w-25">View</button>
                                </a>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->

        <!-- Modal reject-->
        <div class="modal fade" id="tutorRejectModal" tabindex="-1" role="dialog"
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
                            <textarea class="form-control" rows="5" placeholder="Write reason" id="t_reject_reason" class="reject_reason"> </textarea>
                            <div class="mt-4 d-flex" style="position: absolute;right: 30px;">
                                <button class="cencel-btn w-150 mr-4" data-dismiss="modal">Cancel</button>
                                @if($tutor_assessment != null)
                                <button class="schedule-btn w-150" onclick="verifyTutor(`{{$tutor->id}}`,3,`{{$tutor_assessment->status}}`)">Send</button>
                                @else
                                <button class="schedule-btn w-150" onclick="verifyTutor(`{{$tutor->id}}`,3)">Send</button>
                                @endif
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
                            @if($tutor_assessment != null)
                            <td class="d-flex">
                                <p class="paragraph-text">
                                    {{$tutor_assessment->sub_name}}
                                </p>
                                @if($tutor_assessment->status == 1)
                                    <h6><span class="badge badge-success">Verified</span></h6>
                                @elseif($tutor_assessment->status == 2)
                                    <h6><span class="badge badge-danger">Rejected</span></h6>
                                @else
                                <a href="{{ route('admin.tutotAssessment',[$tutor_assessment->id]) }}" class="view-btn btn">
                                    View
                                </a>
                                @endif
                            @else
                            <td class="d-flex">
                                <p class="paragraph-text">
                                    No Assessment Provided.
                                </p>
                            </td>
                            @endif
                                
                            </td>
                        </tr>
                        <!-- <tr>
                            <th scope="row">
                                <p class="heading-fifth">Experty Level</p>
                            </th>
                            <td class="paragraph-text">
                                    @if($tutor->experty_level == 1)
                                        Pre Elementary School
                                    @elseif($tutor->experty_level == 2)
                                        Elementary School
                                    @elseif($tutor->experty_level == 3)
                                        Secondary School
                                    @elseif($tutor->experty_level == 4)
                                        High School
                                    @elseif($tutor->experty_level == 5)
                                        Post Secondary
                                    @endif
                            </td>
                        </tr> -->
                        <tr>
                            <th scope="row">
                                <p class="heading-fifth">Availability</p>
                            </th>
                            <td class="paragraph-text">---</td>
                        </tr>
                        @if( $tutor->hourly_rate )
                        <tr>
                            <th scope="row">
                                <p class="heading-fifth">Rate per hour</p>
                            </th>
                            <td class="paragraph-text">${{$tutor->hourly_rate}}</td>
                        </tr>
                        @endif
                        <tr>
                            <th scope="row">
                                <p class="heading-fifth">Policies</p>
                            </th>
                            <td class="paragraph-text">
                                @if( $tutor->policies == "on")
                                    On
                                
                                @else($tutor->policies == "off" || $tutor->policies == null)
                                    Off
                                
                                @endif
                                
                                
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <p class="heading-fifth">Email Marketing</p>
                            </th>
                            <td class="paragraph-text">
                                @if( $tutor->email_market == "on")
                                    On
                               
                                @else($tutor->email_market == "off" || $tutor->email_market == null)
                                    Off
                           
                                @endif
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection

<!-- Extra js to perfome function using ajax. -->
@section('js')


<script>
    let request_ = "{{$request_}}";
</script>    
@include('js_files.admin.tutor')
@endsection
