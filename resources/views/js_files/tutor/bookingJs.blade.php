<script>

function approveBookingModal(){

    let book_date = "{{$booking->class_date}}";
    let book_time = "{{$booking->class_time}}";
    let book_duration = "{{$booking->class_duration}}";
    let book_price = '{{tutor->hourly_rate}}';

    $('#').show();

}

</script>