<script type="text/javascript">
/* Booking Insert */

$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



    var date = new Date();
    $("#current_date").val(date);
})

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
                    toastr.success(response.message,{
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 2500
                    });

                    setInterval(function(){
                        window.location.href = "{{ route('student.bookings') }}";
                    }, 1500);

                } else if(response.status == 400) {
                        toastr.error(response.message,{
                        position: 'top-end',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 2500
                    });

                    setInterval(function(){}, 1500);
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
    $.ajax({
        url: "{{route('student.book-new')}}",
        type:"post",
        data: {_token:"{{csrf_token()}}",id:id},
        dataType:'json',
        beforeSend:function(data) {
            $('#pay_now_btn_'+id).hide();
            $('#pay_now_loader_'+id).show();
        },
        success:function(response){
            var obj = response.booking;
            var comm = response.commission;

            if(response.status_code == 200 && response.success == true) {
                let price_calcualtion = "";

                let class_date = obj.class_date != null ? obj.class_date : '' ;
                let class_times = obj.class_time != null ? obj.class_time : '' ;
                let class_time = tConvert (class_times);
                let duration = obj.duration != null ? obj.duration : '' ;
                let price = obj.price != null ? obj.price : '' ;

                var commission = '0';

                if(comm != null && comm != "" && comm != []) {

                    commission = comm.commission != null ? comm.commission : '0' ;

                }else{
                    commission = '0';
                }

                // let commission = comm.commission != null ? comm.commission : '0' ;
                if(commission == '0' || commission == null ){
                    price_calcualtion = '0';
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
        complete:function(data) {
            $('#pay_now_btn_'+id).show();
            $('#pay_now_loader_'+id).hide();
        },
        error:function(e){
            console.log(e);
            $('#pay_now_btn_'+id).show();
            $('#pay_now_loader_'+id).hide();
            toastr.error('Something went wrong',{
                position: 'top-end',
                icon: 'error',
                showConfirmButton: false,
                timer: 2500
            });
        }
    });
}

function openPayNow() {
    alert("cliadf");
}

function tConvert (time) {
  // Check correct time format and split into components
  time = time.toString ().match (/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];

  if (time.length > 1) { // If time format correct
    time = time.slice (1);  // Remove full string match value
    time[5] = +time[0] < 12 ? 'AM' : 'PM'; // Set AM/PM
    time[0] = +time[0] % 12 || 12; // Adjust hours
  }
  return time.join (''); // return adjusted time or original string
}

let val = $('input[name="paytype"]:checked').val();

if(val){
    let input = "<input type='hidden' name='paymentMethod' value='"+val+"' />"
    $("#payment #paytype").html(input)
}

function paymentMethod(value){

    let input = "<input type='hidden' name='paymentMethod' value='"+value+"' />"
    $("#payment #paytype").html(input)
}


</script>
