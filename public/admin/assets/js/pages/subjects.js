$('#add_subject_form').on('submit', function(e) {
    // alert('asd');
    e.preventDefault();

    let name = $("#subject_name").val();
    let sub_cat = $("#subject_category").val();
    // let _token   = $('meta[name="csrf_token"]').attr('content');

    $.ajax({
        url: "/admin/subject/insert-subject",
        type: "POST",
        data: {
            name: name,
            category_id: sub_cat,
        },
        success: function(response) {
            // console.log(response);
            if (response.status == 200) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Subject Added Successfully!',
                    showConfirmButton: false,
                    timer: 2500
                })
                $('#new_subject_model').modal('hide');
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
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Role Deleted Successfully!',
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

function editSubject(id) {
    // alert("In");
    let tre = $(".alex-name_" + id + " ").text();
    let name = tre;
    $("#edit_subject_name").val(tre);
    $("#edit_id").val(id);
    $("#edit_subject_cat_id").val(id);
    $('#edit-subject-model').modal('show');
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
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Role Updated Successfully!',
                    showConfirmButton: false,
                    timer: 2500
                })

                $('#edit-role').modal('hide')
                location.reload();
            }
        },
    });
})