<script>
    $(document).ready(function(){
        $("#addNew").hide();
    })
    $("#addCat").click(function(){
        $("#addNew").show();
        $("#addCat").hide();
    })
    $('.file-attach').on('change', function () {
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $('#custom-file-name').append(fileName);
            })
</script>