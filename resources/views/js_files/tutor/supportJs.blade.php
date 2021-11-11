<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        // console.log(Notification.permission  , "notifi")

        // if(Notification.permission == 'denied') {

        //      toastr.warning(`Allow Browser Notification for Realtime updates <br />`, "Warning");               
        //     toastr.options = {
        //         "closeButton": false,
        //         "allowHtml": true,                  
        //         "debug": false,
        //         "newestOnTop": false,
        //         "progressBar": false,
        //         "positionClass": "toast-top-right",
        //         "preventDuplicates": false,
        //         "showDuration": "300",
        //         "hideDuration": "1000",
        //         "timeOut": 0,
        //         "extendedTimeOut": 0,
        //         "showEasing": "swing",
        //         "hideEasing": "linear",
        //         "showMethod": "fadeIn",
        //         "hideMethod": "fadeOut",
        //         "tapToDismiss": false
        //     }

        // }else{
        //     Notification.requestPermission();
        // }
        
    });
    $(document).ready(function() {

        get_all_categories();

        // save support form
        $('.supportForm').submit(function(e) {
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
                success:function(response){
                    if(response.status_code == 200 && response.success == true) {
                        toastr.success(response.message,{
                            position: 'top-end',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 2500
                        });
                        $('.supportModal').modal('hide');
                        $("#subject").val("");
                        $("#message").val("");
                        $(".support_category").val("").trigger('change');
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


    function get_all_categories() {

        $.ajax({
            url: "{{route('tutor.categories')}}",
            type:"GET",
            dataType:'json',
            success:function(response){
                console.log(response);
                if(response.status_code == 200) {

                    var select = `<option value="">  Select Category </option>`;
                    var option = ``;
                    var categories = response.categories;
                    for(var i =0 ; i < categories.length; i++) {

                        option += `<option value="`+categories[i].id+`"> `+categories[i].title+` </option>`;

                    }

                    $(".support_category").html(select + option);

                }

            },
            error:function(e) {
                console.log(e);
            }
        });


    }


    function allowNotification() {
        Notification.requestPermission();
    }

    function notifyMe() {
        // Let's check if the browser supports notifications
        if (!("Notification" in window)) {
            alert("This browser does not support desktop notification");
        }

        // Let's check whether notification permissions have already been granted
        else if (Notification.permission === "granted") {
            // If it's okay let's create a notification
            var notification = new Notification("Hi there!");
        }

        // Otherwise, we need to ask the user for permission
        else if (Notification.permission !== "denied") {
            Notification.requestPermission().then(function (permission) {
            // If the user accepts, let's create a notification
            if (permission === "granted") {
                var notification = new Notification("Hi there!");
            }
            
            });
        }
        else if(Notification.permission == "denied") {
            alert("click");
            // Notification.requestPermission().then(function(permission) { 
            //     console.log(permission , "permission")
            // });
            let a = Notification.requestPermission();
            console.log(a , "a");
            console.log(a.PromiseResult , "a");
        }
        
        // At last, if the user has denied notifications, and you
        // want to be respectful there is no need to bother them any more.
    }
</script>