$('#add_role_form').on('submit', function(e) {
    // alert('asd');
    e.preventDefault();

    let name = $("input[name=role_name]").val();
    // let _token   = $('meta[name="csrf_token"]').attr('content');

    $.ajax({
        url: "/admin/role/insert-role",
        type: "POST",
        data: {
            name: name
        },
        success: function(response) {
            // console.log(response);
            if (response.status == 200) {
                toastr.success('Role Added Successfully!', {
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 2500
                })
                $('.role_modal').modal('hide')
                $("#add_role_form")[0].reset();
                location.reload();
            }
        },
    });
});

function delRole(id) {

    $('#delete-role').modal('show');
    $("#Yes").click(function() {
        // alert("Delete");
        $.ajax({
            url: "/admin/role/delete-role",
            type: "POST",
            data: {
                id: id
            },
            success: function(response) {
                // console.log(response);
                if (response.status == 200) {
                    toastr.success('Role Deleted Successfully!', {
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 2500
                    })

                    $('#delete-role').modal('hide')
                    location.reload();
                }
            },
        });
    })
}

function editRole(id) {
    // alert("In");
    let tre = $(".alex-name_" + id + " ").text();
    let name = tre;
    $("#edit_name").val(tre);
    $("#edit_id").val(id);
    $('#edit-role').modal('show');
}
$("#edit_role_form").submit(function(e) {

    e.preventDefault();
    let name = $("#edit_name").val();
    let id = $("#edit_id").val();
    $.ajax({
        url: "/admin/role/update-role",
        type: "POST",
        data: {
            id: id,
            name: name,
        },
        success: function(response) {
            // console.log(response);
            if (response.status == 200) {
                toastr.success('Role Updated Successfully!', {
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 2500
                })

                $('#edit-role').modal('hide')
                location.reload();
            }
        },
    });
})