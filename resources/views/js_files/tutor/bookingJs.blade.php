<script>

$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

function acceptBookingRequest(){

    $.ajax({
        url: "{{route('tutor.booking.accept',[$booking->id])}}",
        type:"GET",
        beforeSend:function(data) {
            $("#approve_button").hide();
            $("#approve_loading").show();
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
                setInterval(function(){
                    window.location.href = "{{ route('tutor.booking') }}";
                }, 1500);
            }
        },
        complete:function(data) {
            $("#approve_button").show();
            $("#approve_loading").hide();
        },
        error:function(e) {
            $("#approve_button").hide();
            $("#approve_loading").show();
            toastr.error('Something went wrong',{
                position: 'top-end',
                icon: 'error',
                showConfirmButton: false,
                timer: 2500
            });
        }
    });

}

function hideCard() {
    $(".successCard").hide('slow');
}

</script>
