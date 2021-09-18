<script type="text/javascript">

function verifyAssessment(id,status){
    let reason = null;
    if(status == 2){
        reason = $('#assess_reject_reason').val();
    }
    $.ajax({
        url: "/admin/tutor/verify-assessment",
        type:"POST",
        data:{
          id:id,
          status:status,
          reason
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
</script>
