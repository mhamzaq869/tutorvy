<script type="text/javascript">

$( '#add_staff_form' ).on( 'submit', function(e) {
    alert('asd');
    event.preventDefault();

    let name = $("input[name=name]").val();
    let email = $("input[name=email]").val();
    let password = $("input[name=password]").val();
    let role = $("#role option:selected").val()
    // let _token   = $('meta[name="csrf_token"]').attr('content');

    $.ajax({
      url: "/admin/staff/insert",
      type:"POST",
      data:{
        name:name,
        email:email,
        password:password,
        role:role
      },
      success:function(response){
        // console.log(response);
        if(response.status == 200) {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Staff Added Successfully!',
                showConfirmButton: false,
                timer: 2500
            })

            $('.staff_modal').modal('hide')
            $("#add_staff_form")[0].reset();
        }
      },
     });
});
$('#add_role_form').on('submit', function(e) {
    // alert('asd');
    e.preventDefault();

    let name = $("input[name=name]").val();
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
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Role Added Successfully!',
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

function editRole(id) {
    // alert("In");
    let tre = $(".alex-name_" + id + " ").text();
    // alert(tre);
    $("#edit_name").val(tre);
    $('#edit-role').modal('show');
    $("#edit_noe").click(function(){
        $.ajax({
            url: "/admin/role/update-role",
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
</script>