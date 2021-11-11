<script>


    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // open paypal modal
        $("#payment_setting").click(function(){
            $("#payPalModal").modal("toggle");
            $(".paypalForm")[0].reset();
        })

        // open google modal
        $("#google_maps").click(function() {

            $("#googleModal").modal('show');
            $("#google_api_key").val("");
        });


        // paypal sandbox
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

        // paypal live
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

        // enable integration status
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
                        toastr.error(response.message,{
                            position: 'top-end',
                            icon: 'error',
                            showConfirmButton: false,
                            timer: 2500
                        });
                    }
                },
                error:function(e) {
                    console.log(e);
                    toastr.error(response.message,{
                        position: 'top-end',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 2500
                    });
                }
            });
        });



        // google api key verification
        $("#verify").click(function() {

            var google_api_key = $("#google_api_key").val();

            if(google_api_key != "") {

                var script = "https://maps.googleapis.com/maps/api/js?key=" + google_api_key;
                console.log(script , "script");

                $.getScript(script).done(function(script, textStatus) {

                    if (typeof google === 'object' && typeof google.maps === 'object') {
                        console.log(google , "msg")
                        if(textStatus == 'success') {
                            initMap('google',google_api_key);
                        }
                        // initMap('google',google_api_key);
                        // setTimeout(function() {
                        //     if ($('#google_verification').val() == '1') {
                        //         initMap();
                        //     }
                        // }, 8000);

                    }
                }).fail(function(jqxhr, settings, exception) {

                    toastr.error('Field to Verify!',{
                        position: 'top-end',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 2500
                    });
                    // return false;
                });


            }else{
                toastr.error('Please provide API KEY for verification',{
                    position: 'top-end',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 2500
                });
            }


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
                    toastr.error(response.message,{
                        position: 'top-end',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 2500
                    });
                }
            },
            error:function(e) {
                console.log(e);
                toastr.error(response.message,{
                    position: 'top-end',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 2500
                });
            }
        });
    }

    function initMap(name, api_key) {
       
        $.ajax({
            type: "POST",
            url: "{{url('admin/verify-integration')}}",
            data: {name:name, api_key:api_key},
            dataType: 'json',
            cache: false,
            success: function(data) {
                toastr.success(data.message,{
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 2500
                });

                $("#googleModal").modal('hide');
            },
            failure: function(errMsg) {
                console.log(errMsg);
                toastr.error(response.message,{
                    position: 'top-end',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 2500
                });
            }
        });
    }

</script>