<script>

function addBalance()
{
    $.ajax({
        url: "{{route('check.default.payment')}}",
        type:"GET",
        success:function(data){
            if(data.success){
                $("#pmnt").html(data.success)
                $('#checkbox1, #checkbox2').attr('disabled','true')
                $('#paymntbtn').attr('type','button')
            }
        },
    });

    $("#payModel").modal('show');
}

</script>
