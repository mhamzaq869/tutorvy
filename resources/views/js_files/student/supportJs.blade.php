<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

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


    function get_all_categories() {

        $.ajax({
            url: "{{route('student.categories')}}",
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
</script>