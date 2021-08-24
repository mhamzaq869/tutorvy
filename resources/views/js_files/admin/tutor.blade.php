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

            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: response.message,
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

function verifyTutor(id,status,assess_status){
    let reason = null;

    if(status == 2 && assess_status == 0){
      $('#tutorAcceptModal').modal('show')
      return false;
    }

    if(status == 3){
      reason = $('#t_reject_reason').val();
    }

    this.changeTutorStatus(id,status,reason);

    // $.ajax({
    //     url: "/admin/tutor/verify-tutor",
    //     type:"POST",
    //     data:{
    //       id:id,
    //       verify:status,
    //       reason
    //     },
    //     success:function(response){
    //       // console.log(response);
    //       if(response.status == 200) {

    //         $('#tutorRejectModal').modal('hide')

    //         Swal.fire({
    //             position: 'top-end',
    //             icon: 'success',
    //             title: response.message,
    //             showConfirmButton: false,
    //             timer: 2500
    //         })
    //         setInterval(function(){
    //             window.location.href = request_;
    //         }, 1500);
    //       }
    //     },
    // });

}

function changeTutorStatus(id,st = null,reason = null){

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
          reason:reason
        },
        success:function(response){
          // console.log(response);
          if(response.status == 200) {

            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: response.message,
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
