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

</script>