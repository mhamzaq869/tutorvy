<<<<<<< HEAD
$( '#add_staff_form' ).on( 'submit', function(e) {
    alert('asd');
    event.preventDefault();
=======
$('#add_staff_form').on('submit', function(e) {
    // alert('asd');
    e.preventDefault();
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249

    let name = $("input[name=name]").val();
    let email = $("input[name=email]").val();
    let password = $("input[name=password]").val();
    let role = $("#role option:selected").val()
<<<<<<< HEAD
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
=======
        // let _token   = $('meta[name="csrf_token"]').attr('content');

    $.ajax({
        url: "/admin/staff/insert",
        type: "POST",
        data: {
            name: name,
            email: email,
            password: password,
            role: role
        },
        success: function(response) {
            // console.log(response);
            if (response.status == 200) {
                toastr.success('Staff Added Successfully!', {
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 2500
                })

                $('.staff_modal').modal('hide')
                location.reload();
            }
        },
    });
});
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
