<script type="text/javascript">
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});
  
  function verifyAssessment(id,status){
    let reason = null;
    if(status == 2){
        reason = $('#assess_reject_reason').val();
    }
    $.ajax({
        url: "{{route('admin.verifyAssessment')}}",
        type:"POST",
        data:{
          id:id,
          status:status,
          reason
        },
        beforeSend:function(data) {
          $('.save_btn').hide();
          $('#verfication_loading').show();
        },
        success:function(response){
          // console.log(response);
            if(response.status == 200) {

            $('.reject_asses_modal').modal('hide')

            toastr.success( response.message,{
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: 2500
            })
            setInterval(function(){
                window.location.href = request_;
            }, 1500);
          }
        },
        complete:function(data){
          $('.save_btn').show();
          $('#verfication_loading').hide();
        },
        error:function(e) {
          $('.save_btn').show();
          $('#verfication_loading').hide();
          toastr.error('Something Went Wrong',{
                position: 'top-end',
                icon: 'error',
                showConfirmButton: false,
                timer: 2500
            })
        }
    });

  }


  function verifyTutor(id, status ,assess_status = null) {

    var reason = '';
    if(status == 2 && assess_status == 0){
      $('#tutorAcceptModal').modal('show')
      return false;
    }

    if(status == 3){
      reason = $('#t_reject_reason').val();
    }


    tutorVerification(id, status ,reason)
  }

  // tutor verification
  function tutorVerification(id, status , reason) {
    $.ajax({
        url: "{{route('admin.tutor.verification')}}",
        type:"POST",
        data:{
          id:id,
          status:status,
          reason:reason,
        },
        beforeSend:function(data) {
          $(".save_btn").hide();
          $("#verfication_loading").show();
        },
        success:function(response){

          if(response.status == 200) {

            toastr.success( response.message,{
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: 2500
            }); 

            if(status == 3) {
              $("#tutorRejectModal").modal('hide');
            }

            if(status == 2) {
              $("#verification_btns").hide();
              $("#verified_badge").show();
            }

            setTimeout(() => {
                window.location.href = "{{route('admin.tutor')}}";
            }, 1500);

          }else{

            toastr.error( 'Something Went Wrong',{
                position: 'top-end',
                icon: 'error',
                showConfirmButton: false,
                timer: 2500
            });

          }
        },
        complete:function(data) {
          $(".save_btn").show();
          $("#verfication_loading").hide();
        },
        error:function(e) {
          $(".save_btn").show();
          $("#verfication_loading").hide();
          toastr.error( 'Something Went Wrong',{
                position: 'top-end',
                icon: 'error',
                showConfirmButton: false,
                timer: 2500
            });
        }
    });
  }

  // tutr status
  function changeTutorStatus(id) {

    if ($('#t_status').is(":checked")) {
          status = 2; //  verfied/enabled
    }else{
        status = 3; // Disabled
    }

    $.ajax({
        url: "{{route('admin.tutor.status')}}",
        type:"POST",
        data:{
          id:id,
          status:status,
        },
        success:function(response){

          if(response.status == 200) {

            toastr.success( response.message,{
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: 2500
            }); 
          }else{

            toastr.error( response.message,{
                position: 'top-end',
                icon: 'error',
                showConfirmButton: false,
                timer: 2500
            });

          }
        },
    });
  }


  function showTutorPlans(subject_title , user_id , subject_id) {
    $.ajax({
        url: "{{route('admin.tutor.plans')}}",
        type:"POST",
        data:{
          user_id:user_id,
          subject_id:subject_id,
        },
        success:function(response){

          var data = ``;
          if(response.status_code == 200) {

            for(var i =0; i < response.tutor_plans.length; i++) {

              data +=`
                <div class="row mt-3 ">
                    <div class="col-md-6">
                        <p> `+ (response.tutor_plans[i].experty_title != null ? response.tutor_plans[i].experty_title : '-') +` </p>
                    </div>
                    <div class="text-right col-md-6 ">
                        <p> $`+response.tutor_plans[i].rate+` </p>
                    </div>
                </div>`

            }
            $("#subject_title").text(subject_title);
            $("#show_plans").html(data);
            $("#planModal").modal('show');

          }else{

            toastr.error( response.message,{
                position: 'top-end',
                icon: 'error',
                showConfirmButton: false,
                timer: 2500
            });

          }
        },
    });
   
  }
</script>
