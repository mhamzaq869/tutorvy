<script>

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // image validation
        $("#imageUpload").on('change', function() {
            var file = this.files[0];

            if (Math.round(file.size / (1024 * 1024)) > 2) { 
                toastr.error('Please select image size less than 2 MB',{
                    position: 'top-end',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 2500
                });
                $("#imageUpload").val(" ");
                return false;
            } else{
                readURL(this);
            }
        });

        // update tutor profile
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

        // update tutor edu record
        $("#tutorEduDocsForm").submit(function(e) {
            e.preventDefault();

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
                beforeSend:function(data) {
                    $("#educational_save").hide();
                    $("#educational_loading").show();
                },
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
                complete:function(data) {
                    $("#educational_save").show();
                    $("#educational_loading").hide();
                },
                error:function(e) {
                    $("#educational_save").show();
                    $("#educational_loading").hide();
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

        // update tutor profession record
        $("#tutorProfessionForm").submit(function(e) {
            e.preventDefault();

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
                beforeSend:function(data) {
                    $("#professinal_btn").hide();
                    $("#professinal_loading").show();
                },
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
                complete:function(data) {
                    $("#professinal_btn").show();
                    $("#professinal_loading").hide();
                },
                error:function(e) {
                    console.log(e);
                    $("#professinal_btn").show();
                    $("#professinal_loading").hide();
                    toastr.error('Something Went Wrong',{
                        position: 'top-end',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 2500
                    });
                }
            });

        });

        // update tutor verfication record
        $("#tutorVerficationForm").submit(function(e) {
            e.preventDefault();

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
                beforeSend:function(data) {
                    $("#verfication_btn").hide();
                    $("#verfication_loading").show();
                },
                success:function(response){
                    if(response.status_code == 200 && response.success == true) {
                        toastr.success(response.message,{
                            position: 'top-end',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 2500
                        });
                        $("#tutorVerficationForm").hide();
                        $("#verfication_msg").show();
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
                    $("#verfication_btn").show();
                    $("#verfication_loading").hide();
                },
                error:function(e) {
                    console.log(e);
                    $("#verfication_btn").show();
                    $("#verfication_loading").hide();
                    toastr.error('Something Went Wrong',{
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
                $("#general_save").hide();
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
                $("#general_save").show();
                $("#general_loading").hide();
            },
            error:function(e) {
                $("#general_save").show();
                $("#general_loading").hide();
                console.log(e);
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