@extends('tutor.layouts.app')

@section('content')
<style>
    .header h1 {
        margin-left: 70px;
    }
</style>
<div class="content-wrapper " style="overflow: hidden;">
    <section id="homesection" >
        <!-- dashborad home -->
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="heading-first">
                        <!-- <a href="#"> < </a> -->
                        {{$ticket->subject}}
                    </h1>
                </div>
                <div class="col-md-6 m-0 p-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-items"><a href="{{route('admin.support')}}">Support</a></li>
                            <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page">&gt;</li>
                            <li class="breadcrumb-items m-0 p-0 ml-3 breadcrumb-item-active" aria-current="page"><a
                                    href="">Ticket</a>
                            </li>

                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="heading-fifth-1">Ticket Message</span>
                                </div>
                                <div class="col-md-12">
                                     {{$ticket->message}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row pt-4 container-bg-1  ml-1 mr-1">
                                <!-- <div class="col-md-8">
                                    <div class="col-md-12 pl-0">
                                        <span class="heading-fifth-1">Ticket Message</span>
                                        <p class="paragraph-text-1 mt-3">
                                            {{$ticket->message}}
                                        </p>
                                    </div>
                                </div> -->
                                <div class="col-md-8">
                                    <div class="col-md-12 pl-0">
                                        <span class="heading-fifth-1">Reply</span>
                                        <!-- <div class="row mt-3 mb-3 ticketChat">
                                            <div class="col-md-12 ">
                                                <div class="sender">
                                                    <small>From Sender Name</small>  
                                                    <p class="mb-0">
                                                        ewwe
                                                    </p>
                                                    <small class="dull pull-right">
                                                        1min ago
                                                    </small>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-md-12 ">
                                                <div class="reciever">
                                                    <small>From You</small>
                                                    <p class="mb-0">
                                                        ewwe
                                                    </p>
                                                    <small class="dull pull-right">
                                                        1min ago
                                                    </small>
                                                </div>
                                               
                                            </div>
                                            <div class="col-md-12 ">
                                                <div class="sender">
                                                    <small>From Sender Name</small>
                                                    <p class="mb-0">
                                                           <img src="http://127.0.0.1:8000/assets/images/ico/Square-white.jpg" class="attachment" alt="">
                                                 
                                                    </p>
                                                    <small class="dull pull-right">
                                                        1min ago
                                                    </small>
                                                </div>
                                               
                                            </div>
                                            <div class="col-md-12 ">
                                                <div class="reciever">
                                                    <small>From You</small>
                                                    <p class="mb-0">
                                                           <img src="http://127.0.0.1:8000/assets/images/ico/Mute-video.png" class="attachment" alt="">
                                                 
                                                    </p>
                                                    <small class="dull pull-right">
                                                        1min ago
                                                    </small>
                                                </div>
                                               
                                            </div>
                                        </div> -->
                                        <div class="row mt-3 mb-3 ticketChat">
                                            @foreach($ticket_replies as $replies)
                                                @if($replies->sender_id != Auth::user()->id)
                                                    <div class="col-md-12 ">
                                                        <div class="sender">
                                                            <small>From {{$replies->sender->name}}</small>  
                                                            <p class="mb-0">
                                                                {{$replies->text}}
                                                            </p>
                                                            <small class="dull pull-right">
                                                                1min ago
                                                            </small>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="col-md-12 ">
                                                        <div class="reciever">
                                                            <small>From You</small>
                                                            <p class="mb-0">
                                                            {{$replies->text}}
                                                            </p>
                                                            <small class="dull pull-right">
                                                                1min ago
                                                            </small>
                                                        </div>
                                                    
                                                    </div>
                                                @endif

                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="container-fluid  m-0 p-0">
                                        <span class="heading-fifth-1 mb-3">Reply</span>
                                        <!-- <form class="form-border ">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea class="textarea-ticket form-control mt-3 p-2" name="" id="" cols="" rows="" placeholder="Your Reply"></textarea>
                                              
                                                    <div class="divided-line"></div>
                                             
                                                </div>
                                            </div>
                                            <div class="row p-1">
                                                <div class="col-md-9 ">
                                                    <input type="file" id="file" class="file-attach">
                                                    <label for="file" class="p-0    ">
                                                        <img src="http://127.0.0.1:8000/admin/assets/img/ico/Repeat-image.png" class="" alt="repeat">
                                                    </label>
                                                    <input type="file" id="file" accept=".jpg,.jpeg,.png" class="file-attach">
                                                    <label for="file" class="p-0    ">
                                                        <img src="http://127.0.0.1:8000/admin/assets/img/ico/metro-attachment.png" class="" style="width:23px;" alt="repeat">
                                                    </label>
                                                    <div id="custom-file-name"></div>
                                                </div>
                                                <div class="col-md-3 text-right">
                                                    <a href="#"> <button class="schedule-btn ">Send</button></a>
                                                </div>
                                            </div>
                                        </form> -->
                                        <form class="form-border" id="formTkt" method="POST" action="{{route('tutor.ticketChat')}}">
                                            <input type="hidden" name="reciever_id" value="{{$admin->id}}">
                                            <input type="hidden" name="sender_id" value="{{$ticket->user_id}}">
                                            <input type="hidden" name="ticket_id" value="{{$ticket->id}}">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea class="textarea-ticket form-control mt-3 p-2" name="text" id="" cols="" rows="" placeholder="Your Reply"></textarea>
                                                    <!-- image upload name -->
                                                    <div class="divided-line"></div>
                                                    <!-- end -->
                                                </div>
                                            </div>
                                            <div class="row p-1">
                                                <div class="col-md-9 ">
                                                    <input type="file" id="file" class="file-attach" />
                                                    <label for="file" class="p-0" >
                                                        <img src="{{asset('admin/assets/img/ico/Repeat-image.png')}}" class="" alt="repeat" />
                                                    </label>
                                                    <input type="file" id="file" accept=".jpg,.jpeg,.png" class="file-attach" />
                                                    <label for="file" class="p-0">
                                                        <img src="{{asset('admin/assets/img/ico/metro-attachment.png')}}" class="" style="width:23px;"
                                                            alt="repeat" />
                                                    </label>
                                                    <div id="custom-file-name"></div>
                                                </div>
                                                <div class="col-md-3 text-right">
                                                 <button class="schedule-btn " type="submit">Send</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-4 rounded border">
                                    <div class="card-1 mt-3">
                                        <div class="row pt-3 mb-3 ml-1 mr-1 border-bottom pb-1">
                                            <div class="col-md-6">
                                                <div class="">
                                                    <span class="heading-fifth">Status</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="">
                                                    <span class="pending-text-1 float-right">
                                                        @if($ticket->status == 0)
                                                            Pending 
                                                        @else
                                                            - 
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pt-3 mb-3 ml-1 mr-1 border-bottom pb-1">
                                            <div class="col-md-6">
                                                <div class="">
                                                    <span class="heading-fifth">Date</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="">
                                                    <span class="paragraph-text-1 float-right"> {{date_format($ticket->created_at,"Y-m-d")}} </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pt-3 mb-3 ml-1 mr-1 border-bottom pb-1">
                                            <div class="col-md-6">
                                                <div class="">
                                                    <span class="heading-fifth">Ticket No </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="">
                                                    <span class="paragraph-text-1 float-right">{{$ticket->ticket_no}} </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pt-3 mb-3 ml-1 mr-1 border-bottom pb-1">
                                            <div class="col-md-6">
                                                <div class="">
                                                    <span class="heading-fifth">Category</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="">
                                                    <span class="paragraph-text-1 float-right">
                                                        @if($ticket->category != null && $ticket->category != "" && $ticket->category != [])
                                                            <span> {{$ticket->category->title}} </span>
                                                        @else
                                                            <span> - </span>
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pt-3 mb-3 ml-1 mr-1 border-bottom pb-2">
                                            <div class="col-md-3">
                                                <div class="">
                                                    @if($ticket->tkt_created_by != null && $ticket->tkt_created_by != "" && $ticket->tkt_created_by != [])
                                                        @if($ticket->tkt_created_by->picture != null)
                                                            <img src="{{asset($ticket->tkt_created_by->picture)}}" style="width: 50px; height: 50px; border-radius: 100%;" alt="asd">
                                                        @else
                                                            <img src="../assets/img/ico/profile-boy.png" alt="asd">
                                                        @endif
                                                    @else
                                                        <img src="../assets/img/ico/profile-boy.png" alt="asd">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="">
                                                    <span class="heading-fifth"> 
                                                        @if($ticket->tkt_created_by != null && $ticket->tkt_created_by != "" && $ticket->tkt_created_by != [])
                                                            <span> {{$ticket->tkt_created_by->first_name}} {{$ticket->tkt_created_by->last_name}} </span>
                                                        @else
                                                            <span> - </span>
                                                        @endif
                                                    </span>
                                                    <p class="paragraph-text">
                                                        @if($ticket->tkt_created_by != null && $ticket->tkt_created_by != "" && $ticket->tkt_created_by != [])
                                                            @if($ticket->tkt_created_by->role == 2)
                                                                <span> Tutor </span>
                                                            @elseif($ticket->tkt_created_by->role == 3)
                                                                <span> Student </span>
                                                            @elseif($ticket->tkt_created_by->role == 4)
                                                                <span> Staff </span>
                                                            @else
                                                                <span> - </span>
                                                            @endif

                                                        @else
                                                            <span> - </span>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal Assign -->
      <div class="modal" id="assignModal" tabindex="-1" role="dialog" aria-labelledby="assignModalTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p>Assgin</p>
                        </div>
                        <div class="modal-body">
                            <div class="input-serach">
                                <input class="w-100" type="search" placeholder="Search members" />
                                <img class="serach-icon" src="../assets/img/ico/Search.png" />
                            </div>
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span class="alex-name"><img src="../assets/img/ico/std-icon.png"
                                                alt="std-icon" /></span>
                                        <span class="pl-2 alex-names">Harram</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <button class="schedule-btn assgin-text" data-toggle="modal"
                                            data-target="#assignModal">Assign</button>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span class="alex-name"><img src="../assets/img/ico/std-icon.png"
                                                alt="std-icon" /></span>
                                        <span class="pl-2 alex-names">Harram</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <button class="schedule-btn assgin-text" data-toggle="modal"
                                            data-target="#assignModal">Assign</button>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span class="alex-name">
                                            <img src="../assets/img/ico/std-icon.png" alt="std-icon" /></span>
                                        <span class="pl-2 alex-names">Harram</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <button class="schedule-btn assgin-text" data-toggle="modal"
                                            data-target="#assignModal">Assign</button>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span class="alex-name"><img src="../assets/img/ico/std-icon.png"
                                                alt="std-icon" /></span>
                                        <span class="pl-2 alex-names">Harram</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <button class="schedule-btn assgin-text" data-toggle="modal"
                                            data-target="#assignModal">Assign</button>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span class="alex-name"><img src="../assets/img/ico/std-icon.png"
                                                alt="std-icon" /></span>
                                        <span class="pl-2 alex-names">Harram</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <button class="schedule-btn assgin-text" data-toggle="modal"
                                            data-target="#assignModal">Assign</button>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span class="alex-name"><img src="../assets/img/ico/std-icon.png"
                                                alt="std-icon" /></span>
                                        <span class="pl-2 alex-names">Harram</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <button class="schedule-btn assgin-text" data-toggle="modal"
                                            data-target="#assignModal">Assign</button>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span class="alex-name"><img src="../assets/img/ico/std-icon.png"
                                                alt="std-icon" /></span>
                                        <span class="pl-2 alex-names">Harram</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <button class="schedule-btn assgin-text" data-toggle="modal"
                                            data-target="#assignModal">Assign</button>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span class="alex-name"><img src="../assets/img/ico/std-icon.png"
                                                alt="std-icon" /></span>
                                        <span class="pl-2 alex-names">Harram</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <button class="schedule-btn assgin-text" data-toggle="modal"
                                            data-target="#assignModal">Assign</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

@endsection
@section('js')
<script>
      $("#formTkt").submit(function(e){
          e.preventDefault();

          var action = $(this).attr('action');
          var method = $(this).attr('method');
           $.ajax({
            url: action,
            type:method,
            data: new FormData( this ),
            cache: false,
            contentType: false,
            processData: false,
            success:function(response){
                // console.log(response);
                if(response.status_code == 200) {
                    toastr.success(response.message,{
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 2500
                    });

                }
                let html = `<div class="col-md-12 ">
                                <div class="reciever">
                                    <small>From You</small>
                                    <p class="mb-0">
                                        `+response.data.text+`
                                    </p>
                                    <small class="dull pull-right">
                                        1min ago
                                    </small>
                                </div>
                            
                            </div>`;
                    $(".ticketChat").append(html);
            },
            error:function(e){
                toastr.error('Something Went Wrong',{
                    position: 'top-end',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 2500
                });
            }
        });
      })
  </script>
@endsection
