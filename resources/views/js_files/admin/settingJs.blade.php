
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        

        // admin change password
        $("#changePasswordForm").submit(function(event) {
            event.preventDefault();

            var action = $(this).attr('action');
            var method = $(this).attr('method');
            var form = new FormData(this);

            $.ajax({
                url: action,
                type:method,
                data:form,
                cache: false,
                contentType: false,
                processData: false,
                success:function(response){
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
                    $(".current_password").hide();
                    $(".new_confirm_password").hide();
                    $(".new_password").hide();
                },
                error:function(e) {
                    if(e) {
                        var error = e.responseJSON.errors; 

                        if(error) {
                            $(".current_password").text(error.current_password[0]);
                        }
                        if(error) {
                            $(".new_confirm_password").text(error.new_confirm_password[0]);
                        }
                        if(error) {
                            $(".new_password").text(error.new_password[0]);
                        }
                    }
                    console.log(e)
                }
            });



        })


        // admin system setting 
        $("#systemSettingForm").submit(function(event) {
            event.preventDefault();

            var action = $(this).attr('action');
            var method = $(this).attr('method');
            var form = new FormData(this);

            $.ajax({
                url: action,
                type:method,
                data:form,
                cache: false,
                contentType: false,
                processData: false,
                success:function(response){
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
                    console.log(e)
                }
            });



        })


    });
</script>