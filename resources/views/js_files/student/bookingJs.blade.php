<script type="text/javascript">
/* Booking Insert */

$( '#book_tutor_form' ).on( 'submit', function(e) {
    event.preventDefault();

    $('#tutor_id').val("{{$t_id ?? '' }}");
    // let _token   = $('meta[name="csrf_token"]').attr('content');
    var tutor_subjects = $("#tutor_subjects").val();

    if(tutor_subjects != "Select Subject") {
        $.ajax({
            url: "{{route('student.booked.tutor')}}",
            type:"POST",
            data:new FormData( this ),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend:function(data) {
                $("#saveBtn").hide();
                $("#proBtn").show();
            },
            success:function(response){
                // console.log(response);
                if(response.status == 200) {
                    toastr.success('Booking Added Successfully!',{
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 2500
                    });

                    // setInterval(function(){
                    //     window.location.href = "{{ route('student.bookings') }}";
                    // }, 1500);

                }
            },
            complete:function(data) {
                $("#saveBtn").show();
                $("#proBtn").hide();
            },
            error:function(e){
                $("#saveBtn").show();
                $("#proBtn").hide();
            }
        });
    }else{
        toastr.error('Subject Field is required',{
            position: 'top-end',
            icon: 'error',
            showConfirmButton: false,
            timer: 2500
        });
    }


});

// 
$(document).ready(function() {


    $("#tutor_subjects").on('change', function() {
        var subject_id = $(this).val();
        var user_id =  $('#tutor_subjects option:selected').attr('data');

        if(subject_id != 'Select Subject') {
            $.ajax({
                url: "{{route('student.tutor.plans')}}",
                type:"POST",
                data:{
                    user_id:user_id,
                    subject_id:subject_id,
                },
                success:function(data){

                    var options = ``;

                    for(var i = 0; i< data.tutor_plans.length; i++) {
                        options += `<option value="`+data.tutor_plans[i].rate+`"> 
                                <div class="d-flex justify-content-between">
                                    <span> `+data.tutor_plans[i].experty_title+` </span> -- 
                                    <span> ($`+data.tutor_plans[i].rate+`) </span>
                                </div>
                            </option>`;
                    }

                    $("#subject_plans").html(options);
                    console.log(data);
                },
            });
        }
    });
})



function openPayNowModal(id) {
    $("#payModel").modal('show');
    
}
function payNow(id){

    $.ajax({
            url: "{{route('student.book-new')}}",
            type:"post",
            data: {id:id},
            success:function(response){
                // console.log(response);
                if(response.status == 200) {
                   

                }
            },
            complete:function(data) {
              
            },
            error:function(e){
               alert();
            }
        });
}

// show tutor plans

</script>