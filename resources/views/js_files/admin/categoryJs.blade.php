<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#addNew").hide();

        // save category
        $("#CategoryForm").submit(function() {
            event.preventDefault();

            var action = $(this).attr('action');
            var method = $(this).attr('method');
            var form = new FormData(this);
            var title = $("#title").val() ;

            if( title != "" ) {
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

                            if(response.response == 'Added') {
                                var category = `<div class="row pt-3 pl-3 mt-3" id="row_`+response.id+`">
                                        <div class="col-md-4 row border-bottom m-0 p-0 pb-2">
                                            <span class="paragraph-text mt-1">`+title+`  </span>
                                            <div style="position: absolute;right: 5px;">
                                            <img src="{{asset('admin/assets/img/ico/delete-icon.svg')}}" class="pr-4" onclick="deleteModal(`+response.id+`)" alt="a" height="17px">
                                                <img src="{{asset('admin/assets/img/ico/edit-icon.svg')}}" class="edit_btn" alt="b" height="17px">
                                            </div>
                                        </div>
                                    </div>`;                            
                                $('.all_categories').append(category);
                            }else{
                                $("#title_"+response.id).text(title);
                            }
                        }else{
                            toastr.error(response.message,{
                                position: 'top-end',
                                icon: 'error',
                                showConfirmButton: false,
                                timer: 2500
                            });
                        }
                        $("#title").val("")
                        $(".title_error").text("");
                    },
                    error:function(e) {
                        console.log(e);
                        toastr.error('Something Went wrong',{
                            position: 'top-end',
                            icon: 'error',
                            showConfirmButton: false,
                            timer: 2500
                        });
                    }
                });
            }else{
                $(".title_error").text("This field is required");
            }



        });


        // reset to default

        $("#reset").click(function() {
            $('.title').text("Add New Category")
            $("#addNew").show();
            $("#addCat").hide();

            $("#id").val("");
            $("#title").val("");

            $("#reset").hide();

        });
    })
    $("#addCat").click(function(){
        $('.title').text("Add New Category")
        $("#addNew").show();
        $("#addCat").hide();
    })
    $('.file-attach').on('change', function () {
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $('#custom-file-name').append(fileName);
    })



    // edit category
    function editCategory(id,title) {
        $('.title').text("Edit Category")
        $("#addNew").show();
        $("#addCat").hide();

        $("#id").val(id);
        $("#title").val(title);
        $("#reset").show();
    }
    function deleteModal(id) {
        $("#del_id").val(id);
        $("#deleteModal").modal('show');
    }


    function deleteCategory() {
        var id = $("#del_id").val();

        $.ajax({
            url: "{{route('admin.delete.category')}}",
            type:"POST",
            data:{id:id},
            success:function(response){
                if(response.status_code == 200 && response.success == true) {
                    toastr.success(response.message,{
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 2500
                    });
                    $("#deleteModal").modal('hide');
                    $("#row_"+id).remove();
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
    }

</script>