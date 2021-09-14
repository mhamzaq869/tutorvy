<script>

    $(document).ready(function() {

        $("#selection").on('change', function(){
        var ter=$(this).val();
            if(ter == 3){
                $(".passport").css("display","block");
                $(".id").css("display","none");
                $(".license").css("display","none");
            }
            else if(ter == 1){
                $(".passport").css("display","none");
                $(".id").css("display","block");
                $(".license").css("display","none");

                }
            else if(ter == 2){
                $(".passport").css("display","none");
                $(".id").css("display","none");
                $(".license").css("display","block");
            }
        });

        $("#imageUpload").on('change', function() {
            var file = this.files[0];

            if (Math.round(file.size / (1024 * 1024)) > 2) { 
                toastr.error('Please select image size less than 2 MB',{
                    position: 'top-end',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 2500
                });
                return false;
            } else{
                readURL(this);
            }
        });

        // update profile
        $("#personal").submit(function(e) {
            e.preventDefault();

            var action = $(this).attr('action');
            var method = $(this).attr('method');

            $.ajax({
                url: action,
                type:method,
                data:new FormData( this ),
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

        });


        // update student education record
        $("#studentEducationForm").submit(function(e) {
            e.preventDefault();

            var action = $(this).attr('action');
            var method = $(this).attr('method');

            $.ajax({
                url: action,
                type:method,
                data:new FormData( this ),
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

        });

        // student verification update
        $("#studentVerificationForm").submit(function(e) {
            e.preventDefault();

            var action = $(this).attr('action');
            var method = $(this).attr('method');

            $.ajax({
                url: action,
                type:method,
                data:new FormData( this ),
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
                        setTimeout(() => {
                            location.reload();
                        }, 1200);
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
        });

    });

</script>