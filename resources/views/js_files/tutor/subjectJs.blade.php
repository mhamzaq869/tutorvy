<script>


    function showMessage() {
        var message = 'Your Profile is under verfication process...';
        toastr.error( message,{
                position: 'top-end',
                icon: 'error',
                showConfirmButton: false,
                timer: 2500
            });
    }

</script>