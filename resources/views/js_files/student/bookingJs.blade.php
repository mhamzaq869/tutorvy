<script type="text/javascript">
/* Booking Insert */

$( '#book_tutor_form' ).on( 'submit', function(e) {
    event.preventDefault();

    $('#tutor_id').val("{{$t_id ?? '' }}");
    // let _token   = $('meta[name="csrf_token"]').attr('content');

    $.ajax({
      url: "{{route('student.booked.tutor')}}",
      type:"POST",
      data:new FormData( this ),
      cache: false,
      contentType: false,
      processData: false,
      success:function(response){
        // console.log(response);
        if(response.status == 200) {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Booking Added Successfully!',
                showConfirmButton: false,
                timer: 2500
            })

            setInterval(function(){
                window.location.href = "{{ route('student.bookings') }}";
            }, 1500);

        }
      },
     });
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

// show tutor plans

</script>