<script>

  $(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


  });
// Admin Course Script Blade 
$(".c_status").click(function(){
  var id = $(this).attr("val_id");
  var st = $(this).attr("val_st");
  let reason = null;

  if(st == 3){
    reason = $('#c_reject_reason').val();
  }
    if($(this).is(':checked')){
      st = 1;
      // alert(st);
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

              toastr.success(response.message,{
                  position: 'top-end',
                  icon: 'success',
                  showConfirmButton: false,
                  timer: 2500
              }) 

              // if(status == 3){
              //   $('#rejectCourseModal').modal('hide');
              //   setInterval(function(){
              //     window.location.href = "{{ url()->previous() }}";
              //   }, 1500);
              // }else{
              //   setInterval(function(){
              //     window.location.href = "{{ url()->previous() }}";
              //   }, 1500);
              // }
              
              
            }
          },
          error:function(e) {
            toastr.error('Something went wrong',{
                position: 'top-end',
                icon: 'error',
                showConfirmButton: false,
                timer: 2500
            });
          }
      });

    }
    else{
      st=0;
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

              toastr.success(response.message,{
                  position: 'top-end',
                  icon: 'success',
                  showConfirmButton: false,
                  timer: 2500
              }) 

              // if(status == 3){
              //   $('#rejectCourseModal').modal('hide');
              //   setInterval(function(){
              //     window.location.href = "{{ url()->previous() }}";
              //   }, 1500);
              // }else{
              //   setInterval(function(){
              //     window.location.href = "{{ url()->previous() }}";
              //   }, 1500);
              // }
              
              
            }
          },
          error:function(e) {
            toastr.error('Something went wrong',{
                position: 'top-end',
                icon: 'error',
                showConfirmButton: false,
                timer: 2500
            });
          }
      });

    }
})

function deleteCourse(id){
    var id = id;
    var st = 3;
  $("#deleteCourseModal").modal('show');
  $("#Yes").click(function(){
    // alert(id);
    $.ajax({
          url: "{{route('admin.deleteCourse')}}",
          type:"POST",
          data:{
            id:id,
            status:st
          },
          success:function(response){
            console.log(response);
            if(response.status == 200) {
              toastr.success(response.message,{
                  position: 'top-end',
                  icon: 'success',
                  showConfirmButton: false,
                  timer: 2500
              }) 
              $("#deleteCourseModal").modal('hide');
              setInterval(function(){
                  window.location.reload();
                }, 1500);

            }
          },
          error:function(e) {
            toastr.error('Something went wrong',{
                position: 'top-end',
                icon: 'error',
                showConfirmButton: false,
                timer: 2500
            });
          }
      });

  });
}
// function changeCourseStatus(id,st){
//   if($(this).is(':checked')){
//     alert("CHecked");
//   }
//   else{
//     alert("UnCHecked");
//   }
// //  alert(id);
// //  alert(st);
//     let reason = null;

//     if(st == 2){
//       reason = $('#c_reject_reason').val();
//     }

//     $.ajax({
//         url: "{{route('admin.courseStatus')}}",
//         type:"POST",
//         data:{
//           id:id,
//           status:st,
//           reason:reason
//         },
//         success:function(response){
//           // console.log(response);
//           if(response.status == 200) {

//             toastr.success(response.message,{
//                 position: 'top-end',
//                 icon: 'success',
//                 showConfirmButton: false,
//                 timer: 2500
//             }) 

//             if(status == 2){
//               $('#rejectCourseModal').modal('hide');
//               setInterval(function(){
//                 window.location.href = "{{ url()->previous() }}";
//               }, 1500);
//             }else{
//               setInterval(function(){
//                 window.location.href = "{{ url()->previous() }}";
//               }, 1500);
//             }
            
            
//           }
//         },
//     });

// }

</script>