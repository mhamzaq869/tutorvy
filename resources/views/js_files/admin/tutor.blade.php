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

function verifyTutor(id,status,assess_status = null){
    let reason = null;
    let is_new = null;
    if(assess_status == null && status == 2){
      toastr.success('No Assessment Provided.',{
          position: 'top-end',
          icon: 'warning',
          showConfirmButton: false,
          timer: 2500
      }) 
      return false;
    }

    if(status == 2 && assess_status == 0){
      $('#tutorAcceptModal').modal('show')
      return false;
    }

    if(status == 3){
      reason = $('#t_reject_reason').val();
    }

    if(status == 2){
      is_new = 1;
    }

    this.changeTutorStatus(id,status,reason,is_new);

}

function changeTutorStatus(id,st = null,reason = null,is_new = null){

    var status ;
    if(st == null){
      if ($('#t_status').is(":checked"))
      {
          status = 2; //  Enabled
      }else{
          status = 0; // Disabled
      }
    }else{
      status = st;
    }

    $.ajax({
        url: "{{route('admin.tutorStatus')}}",
        type:"POST",
        data:{
          id:id,
          status:status,
          reason:reason,
          is_new:is_new
        },
        success:function(response){
          // console.log(response);
          if(response.status == 200) {

            toastr.success( response.message,{
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: 2500
            }) 

            if(status == 3){
              $('#tutorRejectModal').modal('hide');
              setInterval(function(){
                window.location.href = request_;
              }, 1500);
            }else{
              setInterval(function(){
                window.location.href = request_;
              }, 1500);
            }
            
            
          }
        },
    });

}
</script>
