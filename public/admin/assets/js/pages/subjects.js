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
                toastr.success('Subject Added Successfully!', {
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 2500
                })
                $('#new_subject_model').modal('hide');
                location.reload();
            }
        },
    });
});


function editSubject(id) {
    // alert("In");
    let tre = $(".sub-name_" + id + " ").text();
    alert(tre);

    $("#edit_subject_name").val(tre);
    $("#edit_id").val(id);
    $('#edit-subject-model').modal('show');
}
$("#edit_subject_form").submit(function(e) {

    e.preventDefault();
    let name = $("#edit_subject_name").val();
    let id = $("#edit_id").val();
    let category_id = $("#edit_subject_cat_id").val();
    alert(category_id);
    $.ajax({
        url: "/admin/subject/update-subject",
        type: "POST",
        data: {
            id: id,
            name: name,
            category_id: category_id,
        },
        success: function(response) {
            // console.log(response);
            if (response.status == 200) {
                toastr.success('Subject Updated Successfully!', {
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 2500
                })

                $('#edit-subject-model').modal('hide')
                location.reload();
            }
        },
    });
})


function delSubject(id) {

    $('#delete-subject').modal('show');
    $("#Yes").click(function() {
        // alert("Delete");
        $.ajax({
            url: "/admin/subject/delete-subject",
            type: "POST",
            data: {
                id: id
            },
            success: function(response) {
                // console.log(response);
                if (response.status == 200) {
                    toastr.success('Subject Deleted Successfully!', {
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 2500
                    })

                    $('#delete-subject').modal('hide')
                    location.reload();
                }
            },
        });
    })
}