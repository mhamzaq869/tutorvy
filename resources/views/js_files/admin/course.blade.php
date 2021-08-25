<script>

function changeCourseStatus(id,st){

    let reason = null;
    if(st == 2){
      reason = $('#c_reject_reason').val();
    }

    $.ajax({
        url: "{{route('admin.courseStatus')}}",
        type:"POST",
        data:{
          id:id,
          status:st,
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

            if(status == 2){
              $('#rejectCourseModal').modal('hide');
              setInterval(function(){
                window.location.href = "{{ url()->previous() }}";
              }, 1500);
            }else{
              setInterval(function(){
                window.location.href = "{{ url()->previous() }}";
              }, 1500);
            }
            
            
          }
        },
    });

}

</script>