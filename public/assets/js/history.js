// delete row
jQuery('#master').on('click', function (e) {
    if ($(this).is(':checked', true)) {
        $(".sub_chk").prop('checked', true);
    }
    else {
        $(".sub_chk").prop('checked', false);
    }
});

jQuery('.delete_all').on('click', function (e) {
    var allVals = [];
    $(".sub_chk:checked").each(function () {
        allVals.push($(this).attr('data-id'));
    });
    //alert(allVals.length); return false;  
    if (allVals.length <= 0) {
        alert("Please select row.");
    }
    else {
        //$("#loading").show(); 
        WRN_PROFILE_DELETE = "Are you sure you want to delete this row?";
        var check = confirm(WRN_PROFILE_DELETE);
        if (check == true) {

            //for client side
            $.each(allVals, function (index, value) {
                $('table tr').filter("[data-row-id='" + value + "']").remove();
            });


        }
    }
});

jQuery('.remove-row').on('click', function (e) {
    WRN_PROFILE_DELETE = "Are you sure you want to delete this row?";
    var check = confirm(WRN_PROFILE_DELETE);
    if (check == true) {
        $('table tr').filter("[data-row-id='" + $(this).attr('data-id') + "']").remove();
    }
});
// end

// download pdf
$(function () {

    var specialElementHandlers = {
        '#editor': function (element, renderer) {
            return true;
        }
    };
    $('#cmd').click(function () {
        var doc = new jsPDF();
        doc.fromHTML($('.tab-content1').html(), 15, 15, {
            'width': 100, 'elementHandlers': specialElementHandlers
        });
        doc.save('sample-file.pdf');
    });
});


// 

// history
// $('#test').on('change', function () {
//     //  alert( this.value ); // or $(this).val()
//     if (this.value == "1") {
//         $('#ic td').show();
//         $('#passport td').hide();
//     } else {
//         $('#ic td').hide();
//         $('#passport td').show();
//     }
// });

$('#test').on('change', function () {
    if (this.value == "1") {
        $('#passport').hide();
    } else {

    }
});


