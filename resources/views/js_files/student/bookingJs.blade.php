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
                $("#finish").hide();
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

                    setInterval(function(){
                        window.location.href = "{{ route('student.bookings') }}";
                    }, 1500);

                }
            },
            complete:function(data) {
                $("#finish").show();
                $("#proBtn").hide();
            },
            error:function(e){
                $("#finish").show();
                $("#proBtn").hide();
                toastr.error('Something Went Wrong',{
                    position: 'top-end',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 2500
                });
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


function pay_now(id) {
    // let checkbox = $("#radio-1").val()
    // console.log(checkbox)
    $.ajax({
        url: "{{route('student.book-new')}}",
        type:"post",
        data: {_token:"{{csrf_token()}}",id:id},
        dataType:'json',
        success:function(response){
            var obj = response.booking;
            var comm = response.commission;

            if(response.status_code == 200 && response.success == true) {
                let price_calcualtion = "";

                let class_date = obj.class_date != null ? obj.class_date : '' ;
                let class_time = obj.class_time != null ? obj.class_time : '' ;
                let duration = obj.duration != null ? obj.duration : '' ;
                let price = obj.price != null ? obj.price : '' ;

                let commission = comm.commission != null ? comm.commission : '0' ;
                if(commission == '0' || commission == null ){
                    price_calcualtion = price;
                }
                else{
                    price_calcualtion = (price * commission) / 100;
                }
                let total_price = parseFloat(price) + parseFloat(price_calcualtion);

                $("#scdule_date").text(class_date);
                $("#class_time").text(class_time);
                $("#duration").text(duration + 'Hour(s)');
                $("#price").text('$'+price);
                $("#commission").text('$'+price_calcualtion);
                $("#total_commision").text(commission + '%');
                $("#total_price").text('$'+total_price);

                var origin   = window.location.origin;
                var url = origin + '/student/booking/payment/'+ obj.id;

                $("#payment").attr("action",url)
                let btn = `<input type="submit" class="schedule-btn btn w-30" value="Pay Now" />`;
                $("#show_pay_btn #payment span").html(btn);

                $("#payModel").modal('show');



            }else{

            }


        },
        error:function(e){
            console.log(e);
        }
    });
}

function openPayNow() {
    alert("cliadf");
}


function paymentMethod(value){
    let input = "<input type='hidden' name='paymentMethod' value='"+value+"' />"
    $("#payment #paytype").html(input)
}
</script>
