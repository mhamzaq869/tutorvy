<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TutorVy</title>
    <!-- <link href="./images/logo/logo.png" rel="icon"> -->
    <!-- cs -->
    <!-- <link href="../css/style.css" rel="stylesheet"> -->

    <!-- bootstrap start -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- bootstrap end -->
    <!-- fontawsome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <!-- css -->
    <link href="{{asset('assets/css/tutor-asset.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/subject.css')}}" rel="stylesheet">
<style>
    .card_test{
        margin-left: 300px;
        margin-right: 300px;
        box-shadow: 0 16px 16px -22px #777;
        border: #00000005;border-radius: 8px;
    }
    /* tooltip */

    .tooltip-inner {
        max-width: 236px !important;
        font-size: 12px;
        background: #00132D !important;
        border: 1px solid #00132D !important;
        color: white;
        border: 1px solid #737373;
        text-align: left;
    }


    /*  */
</style>
</head>

<body style="background-color: #FBFBFB;">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="logo text-center mt-5 mb-5">
                    <img src="{{asset('assets/images/logo/logo.png')}}" alt="logo">
                </div>
                <div class="card_test mb-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h3>Select the levels for this subject</h3>
                                </div>
                            </div>
                            <form action="{{route('tutor.assessment')}}" id="subjectForm" method="post" id="form">
                            <div class="row mt-3">
                                <div class="pt-3 col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="preElementary" id="preElementary">
                                        <label class="custom-control-label" for="preElementary">Pre-Elementary School <i class="fa fa-question-circle"  data-toggle="tooltip" data-placement="top" title="It is composed of the preparatory levels such as nursery, pre-kinder and kinder school" aria-hidden="true"></i></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="preCheck" >
                                            <div class="input-group mt-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" id="preElementary_rate" name="preElementary_rate" placeholder="Rate per hour in USD ($)">
                                               
                                            </div>
                                    </div>
                                </div>
                                <div class="pt-3 col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="elementary" id="elementary">
                                        <label class="custom-control-label" for="elementary">Elementary School <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Elementary education is often preceded  for children age 3 to 5 or 6"  aria-hidden="true"></i>
</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="eleCheck">
                                            <div class="input-group mt-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" id="elementary_rate" name="elementary_rate" placeholder="Rate per hour in USD ($)">
                                               
                                            </div>
                                        <!-- <input type="text" class="form-control mt-2" id="elementary_rate" name="elementary_rate" placeholder="Rate per hour in USD ($)"> -->
                                    </div>
                                </div>
                                <div class="pt-3 col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="secondary" id="secondary">
                                        <label class="custom-control-label" for="secondary">Secondary School <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="A school intermediate between elementary school and college"  aria-hidden="true"></i>
</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="secCheck">
                                            <div class="input-group mt-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" id="secondary_rate" name="secondary_rate" placeholder="Rate per hour in USD ($)">
                                                
                                            </div>
                                        <!-- <input type="text" class="form-control mt-2" id="secondary_rate" name="secondary_rate" placeholder="Rate per hour in USD ($)"> -->
                                    </div>
                                </div>
                                <div class="pt-3 col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="highSchool"  id="highSchool">
                                        <label class="custom-control-label" for="highSchool">High School <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Serving students approximately 13 (or 14 or 15) through 18 years of age"  aria-hidden="true"></i>
</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="highCheck">
                                            <div class="input-group mt-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" id="highSchool_rate" name="highSchool_rate" placeholder="Rate per hour in USD ($)">
                                               
                                            </div>
                                        <!-- <input type="text" class="form-control mt-2" id="highSchool_rate" name="highSchool_rate" placeholder="Rate per hour in USD ($)"> -->
                                    </div>
                                </div>
                                <div class="pt-3 col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="postSec"  id="postSec">
                                        <label class="custom-control-label" for="postSec">Post Secondary School <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Post secondary education includes universities and colleges, as well as trade and vocational schools"  aria-hidden="true"></i>
</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="postCheck">
                                            <div class="input-group mt-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" id="postSec_rate" name="postSec_rate" placeholder="Rate per hour in USD ($)">
                                               
                                            </div>
                                        <!-- <input type="text" class="form-control mt-2" id="postSec_rate" name="postSec_rate" placeholder="Rate per hour in USD ($)"> -->
                                    </div>
                                </div>

                            </div>
                            <!-- <div class="row mt-3">     
                                <div class="col-md-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="pre-elementary">
                                        <label class="custom-control-label" for="pre-elementary">Pre Elementary</label>
                                    </div>
                                    <div id="check mt-2">
                                        <input type="text" class="form-control mt-2" placeholder="Price in USD ($)">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="elementary">
                                                <label class="custom-control-label" for="elementary">Elementary</label>
                                            </div>
                                            <div id="check mt-2">
                                                <input type="text" class="form-control mt-2" placeholder="Price in USD ($)">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="secondary">
                                                <label class="custom-control-label" for="secondary">Secondary</label>
                                            </div>
                                            <div id="check mt-2">
                                                <input type="text" class="form-control mt-2" placeholder="Price in USD ($)">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="high-school">
                                                <label class="custom-control-label" for="high-school">High School</label>
                                            </div>
                                            <div id="check mt-2">
                                                <input type="text" class="form-control mt-2" placeholder="Price in USD ($)">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="post-sec">
                                                <label class="custom-control-label" for="post-sec">Post Secondary</label>
                                            </div>
                                            <div id="check mt-2">
                                                <input type="text" class="form-control mt-2" placeholder="Price in USD ($)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="card card_test mb-5"
                    style="">
                    <div class="container mt-4 ">
                        <p class="heading-third ml-5">
                            Write down 3 questions and their awnsers in your words
                        </p>
                        <p class="heading-sixth keep-res ml-5">
                            Keep in mind, we will analyze you by your questions and answers so, write <br /> good and
                            challenging questions. Best of luck
                        </p>
                        <p class="view-bookings float-left ml-5">
                            Learn how to write effective questions and answers.
                        </p>
                    </div>
                    
                        <input type="hidden" name="subject" value="{{$id}}">
                        <div class="container">
                            <div class="input-test ml-5 mr-5 mb-0">
                                <br />
                                <input type="" name="question_1" class="form-control" required placeholder="Question1" required>

                            </div>
                            <div class="input-answer ml-5 mr-5 mb-0">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"></label>
                                    <textarea class="form-control" name="answer_1" placeholder="Answers"
                                        rows="10" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="input-test ml-5 mr-5 mb-0">
                                <br />
                                <input type="" name="question_2" class="form-control" placeholder="Question2" required>

                            </div>
                            <div class="input-answer ml-5 mr-5 mb-0">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"></label>
                                    <textarea class="form-control" name="answer_2" placeholder="Answers"
                                        rows="10" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="input-test ml-5 mr-5 mb-0">
                                <br />
                                <input type="" name="question_3" class="form-control" placeholder="Question3" required>

                            </div>
                            <div class="input-answer ml-5 mr-5 mb-0">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"></label>
                                    <textarea class="form-control" name="answer_3" placeholder="Answers"
                                        rows="10" required></textarea>
                                </div>
                            </div>
                            <button type="submit" class="schedule-btn mb-4 mt-4" id="saveBtn" style="width: 100px;float: right;margin-right: 50px;" > Submit </button>

                            <button type="button" role="button" type="button" id="proBtn" disabled class="btn btn-primary mb-4 mt-4 mr-2" style="float: right;margin-right: 50px; display:none" >
                                <i class="fas fa-circle-notch fa-spin"></i> Processing </button>
                            


                        </div>
                    </form>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">

                            <div class="modal-body">
                                <div class="testsubmit-image text-center">
                                    <img class="mt-4" src="{{asset('assets/images/ico/submit-test.png')}}">
                                    <p class="text-center heading-third mt-5" style="line-height: 0.5;">
                                            Your Questionnaire Submitted Successfully

                                    </p>
                                    <p class="text-center paragraph-line">
                                        We will get to you soon with your <br /> results within 24 hours
                                    </p>
                                    <a href="{{route('tutor.subject')}}" type="button" id="test" class="schedule-btn mb-5"
                                            style="width: 180px;">Go to dashboard
                                    </button>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
        <!-- jquery  -->
        <script src="{{ asset('/admin/assets/js/jquery.js ')}}"></script>
    <script src="{{ asset('/admin/assets/js/jquery-ui.js')}}"></script>
      <!-- bootstrap 4 javascript -->
    <script src="{{ asset('/admin/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('/admin/assets/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function(){
            $(function () {
                    $('[data-toggle="tooltip"]').tooltip()
                    })
            $("#preCheck").hide('slow');
            $("#eleCheck").hide('slow');
            $("#secCheck").hide('slow');
            $("#highCheck").hide('slow');
            $("#postCheck").hide('slow');

            $('#subjectForm').submit(function(e) {
                e.preventDefault();

                var form = new FormData(this);
                var action = $(this).attr('action');
                var method = $(this).attr('method');
                
                var level_check = $( "input:checked" ).length;
                if(level_check == 0) {
                    toastr.error('Please Select atleast One Subject Level',{
                        position: 'top-end',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 2500
                    });
                }else{

                    if( $("#preElementary").prop('checked') ) {
                        if($("#preElementary_rate").val().length == 0) {
                            toastr.error('Pre Elementary Subject Rate is Required',{
                                position: 'top-end',
                                icon: 'error',
                                showConfirmButton: false,
                                timer: 2500
                            });
                        return false;    
                        }
                    }

                    if( $("#elementary").prop('checked') ) {
                        if($("#elementary_rate").val().length == 0) {
                            toastr.error('Elementary Subject Rate is Required',{
                                position: 'top-end',
                                icon: 'error',
                                showConfirmButton: false,
                                timer: 2500
                            });
                        return false;    
                        }
                    }

                    if( $("#secondary").prop('checked') ) {
                        if($("#secondary_rate").val().length == 0) {
                            toastr.error('Secondary Subject Rate is Required',{
                                position: 'top-end',
                                icon: 'error',
                                showConfirmButton: false,
                                timer: 2500
                            });
                        return false;    
                        }
                    }

                    if( $("#highSchool").prop('checked') ) {
                        if($("#highSchool_rate").val().length == 0) {
                            toastr.error('High School Subject Rate is Required',{
                                position: 'top-end',
                                icon: 'error',
                                showConfirmButton: false,
                                timer: 2500
                            });
                        return false;    
                        }
                    }

                    if( $("#postSec").prop('checked') ) {
                        if($("#postSec_rate").val().length == 0) {
                            toastr.error('Post Secondary Subject Rate is Required',{
                                position: 'top-end',
                                icon: 'error',
                                showConfirmButton: false,
                                timer: 2500
                            });
                        return false;    
                        }
                    }

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: action,
                        type:method,
                        data:form,
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend:function(data) {
                            $("#saveBtn").hide();
                            $("#proBtn").show();
                        },
                        success:function(response){
                            if(response.status_code == 200 && response.success == true) {

                                $("#exampleModalCenter").modal('show');

                            }else{
                                toastr.error(response.message,{
                                    position: 'top-end',
                                    icon: 'error',
                                    showConfirmButton: false,
                                    timer: 2500
                                });
                            }
                        },
                        complete:function(data) {
                            $("#saveBtn").show();
                            $("#proBtn").hide();
                        },
                        error:function(e) {
                            console.log(e);
                            $("#saveBtn").show();
                            $("#proBtn").hide();
                        }
                    });
                }

            })


        })

       $("#preElementary").change(function(){
            if($('#preElementary').is(':checked'))
                {
                $("#preCheck").show('slow');
               
                }
                else{
                $("#preCheck").hide('slow');
               
            }
       })
       $("#elementary").change(function(){
            if($('#elementary').is(':checked'))
                {
                $("#eleCheck").show('slow');
               
                }
                else{
                $("#eleCheck").hide('slow');
               
            }
       })
       $("#secondary").change(function(){
            if($('#secondary').is(':checked'))
                {
                $("#secCheck").show('slow');
               
                }
                else{
                $("#secCheck").hide('slow');
               
            }
       })
       $("#highSchool").change(function(){
            if($('#highSchool').is(':checked'))
                {
                $("#highCheck").show('slow');
               
                }
                else{
                $("#highCheck").hide('slow');
               
            }
       })
       $("#postSec").change(function(){
            if($('#postSec').is(':checked'))
                {
                $("#postCheck").show('slow');
               
                }
                else{
                $("#postCheck").hide('slow');
               
            }
       })
       
    //    function checkExpertyLevel() {

    //         var level_check = $( "input:checked" ).length;
    //         if(level_check == 0) {
    //             alert('Please Select atleast One Level');
    //         }else{
    //             $("#exampleModalCenter").modal('show');
    //         }

    //    }
    </script>
</body>
</html>
