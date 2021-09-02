<script>

function acceptBookingRequest(){

    $.ajax({
        url: "{{route('tutor.booking.accept',[$booking->id])}}",
        type:"GET",
       
        success:function(response){
            // console.log(response);
            if(response.status == 200) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Booking Approved Successfully!',
                    showConfirmButton: false,
                    timer: 2500
                })

                $('#approveModel').modal('hide');
                setInterval(function(){
                    window.location.href = "{{ route('tutor.booking') }}";
                }, 1500);
            }
        },
    });

}

</script>