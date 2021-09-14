<script>
    $("#payment_setting").click(function(){
        $("#payPalModal").modal("toggle");
        $(".paypalForm")[0].reset();
    })
    $(document).ready(function() {


        $("#paypalSandboxForm").submit(function(event) {
            event.preventDefault();

            var name = $(".paypal").val();
            var client_id = $(".client_id").val();
            var secret_key = $(".secret_key").val();
            var key_type = 0;

            var key = {"client_id" : client_id , "secret_key" : secret_key , "type" : 2}

            var action = $(this).attr('action');
            var method = $(this).attr('method');

            var form_data = {
                name:name,
                key: JSON.stringify(key),
            }
            
            if( $("#paypal_sandbox").is(":checked") ) {
                
                form_data['key_type'] = 2;
            }else{
                form_data['key_type'] = 0;
            }

            console.log( form_data , "form_Data");

            savePaypal(action , method , form_data);


        });

        $("#paypalLiveForm").submit(function(event) {
            event.preventDefault();

            var name = $("#paypal").val();
            var client_id = $("#l_client_id").val();
            var secret_key = $("#l_secret_key").val();
            var key_type = 0;

            var key = {"client_id" : client_id , "secret_key" : secret_key, "type" : 1}

            var action = $(this).attr('action');
            var method = $(this).attr('method');

            var form_data = {
                name:name,
                key: JSON.stringify(key),
            }
            
            if($("#paypal_live").is(":checked")){
                
                form_data['key_type'] = 1;

            }else{
                form_data['key_type'] = 0;
            }

            console.log( form_data , "form_Data23");


            savePaypal(action , method , form_data);


        });

        $("#payment_status").click(function() {
            var status = 0;
            if($("#payment_status").is(":checked")  ) {
                status = 1;
            }else{
                status = 0;
            }

            $.ajax({
                url: "{{url('admin/integration-status')}}",
                type:"POST",
                dataType:'json',
                data:{status:status, name: 'Paypal'},
                success:function(response){
                    console.log(response);
                    if(response.status_code == 200 && response.success == true) {
                        toastr.success(response.message,{
                            position: 'top-end',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 2500
                        });
                    }else{
                        toastr.success(response.message,{
                            position: 'top-end',
                            icon: 'error',
                            showConfirmButton: false,
                            timer: 2500
                        });
                    }
                },
                error:function(e) {
                    console.log(e);
                }
            });
        });

    });

    function savePaypal(action, method , form_data) {
        $.ajax({
            url: action,
            type:method,
            data:form_data,
            success:function(response){
                console.log(response);
                if(response.status_code == 200 && response.success == true) {
                    toastr.success(response.message,{
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 2500
                    });
                    $("#payPalModal").modal('hide');
                    location.reload();
                }else{
                    toastr.success(response.message,{
                        position: 'top-end',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 2500
                    });
                }
            },
            error:function(e) {
                console.log(e);
            }
        });
    }

</script>