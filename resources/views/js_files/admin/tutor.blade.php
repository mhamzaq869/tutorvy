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

    if(status == 1 && assess_status == 0){
      $('#tutorAcceptModal').modal('show')
      return false;
    }

    if(status == 2){
      reason = $('#t_reject_reason').val();
    }


    $.ajax({
        url: "/admin/tutor/verify-tutor",
        type:"POST",
        data:{
          id:id,
          verify:status,
          reason
        },
        success:function(response){
          // console.log(response);
          if(response.status == 200) {

            $('#tutorRejectModal').modal('hide')

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

function changeTutorStatus(id){

    var status = 0;

    if ($('#t_status').is(":checked"))
    {
        status = 1;
    }

    $.ajax({
        url: "{{route('admin.tutorStatus')}}",
        type:"POST",
        data:{
          id:id,
          status:status
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
            
          }
        },
    });

}
</script>
