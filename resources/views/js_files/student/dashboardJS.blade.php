<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
})


function favourite_tutor(id,type) {

var status = '';
if($("#favorite_start_"+id).hasClass("fa fa-star text-yellow")) {
    $("#favorite_start_"+id).removeClass("text-yellow");
    status = 'un_fav';
}else{
    $("#favorite_start_"+id).addClass("text-yellow");
    status = 'fav';
}

$.ajax({
    url: "{{ route('student.fav.tutor') }}",
    type: "POST",
    data: {id:id,status:status},
    success: function(response) {
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
    error:function(e){
        console.log(e);
        toastr.error('Something went wrong',{
            position: 'top-end',
            icon: 'error',
            showConfirmButton: false,
            timer: 2500
        });
    }
});
}
</script>