<script>

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#phone").on('keyup', function(){
            var ter=$(this).val();
            console.log(ter , "phone");
        });

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

            var file =  $('#imageUpload')[0].files[0];
            var form = new FormData(this);


            if( $('#imageUpload')[0].files.length != 0 ) {
                if(Math.round(file.size / (1024 * 1024)) > 2 ) {
                    toastr.error('Please select image size less than 2 MB',{
                        position: 'top-end',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 2500
                    });

                }else{
                    
                    uploadProfile(action , method , form)
                }
               
            }else{
                
                uploadProfile(action , method , form)
            }

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
                beforeSend:function(data) {
                    $("#education_btn").hide();
                    $("#education_loading").show();
                },
                success:function(response){
                    // console.log(response.path);
                    if(response.status_code == 200 && response.success == true) {
                        toastr.success(response.message,{
                            position: 'top-end',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 2500
                        });
                        // console.log(response.path);
                        // var origin   = window.location.origin
                        // $('.profile-img2').attr('src',origin + '/'+ response.path);
                    }else{
                        toastr.error(response.message,{
                            position: 'top-end',
                            icon: 'error',
                            showConfirmButton: false,
                            timer: 2500
                        });
                    }
                },
                complete:function(data) {
                    $("#education_btn").show();
                    $("#education_loading").hide();
                },
                error:function(e) {
                    $("#education_btn").show();
                    $("#education_loading").hide();
                    console.log(e);
                    toastr.error('Something Went Wrong',{
                        position: 'top-end',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 2500
                    });
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
                    console.log(e);
                    toastr.error('Something went wrong',{
                        position: 'top-end',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 2500
                    });
                }
            });
        });

    });

    function uploadProfile(action , method , form) {
        $.ajax({
            url: action,
            type:method,
            data:form,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend:function(data) {
                $("#general_btn").hide();
                $("#general_loading").show();
            },
            success:function(response){
                if(response.status_code == 200 && response.success == true) {
                    toastr.success(response.message,{
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 2500
                    });
                    let img_path = response.path;
                    var origin   = window.location.origin

                    if(img_path != null && img_path != "" ){
                        $('.profile-img').attr('src',origin + '/'+ img_path );
                    }else{
                        $('.profile-img').attr('src', origin + '/assets/images/ico/Square-white.jpg');
                    }
                }else{
                    toastr.error(response.message,{
                        position: 'top-end',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 2500
                    });
                }
            },
            complete:function(data) {
                $("#general_btn").show();
                $("#general_loading").hide();
            },
            error:function(e) {
                console.log(e);
                $("#general_btn").show();
                $("#general_loading").hide();
                toastr.error('Something Went Wrong',{
                    position: 'top-end',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 2500
                });
            }
        });
    }

</script>