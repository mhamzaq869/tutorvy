<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

$(function() {
    $("#basic_days,#standard_days,#advance_days").multiselect({
    selectedList: 4 // 0-based index
    });
});

var counter = 1;
var counter2 = 1;
var counter3 = 1;
let bs_days_arr = [];

$(".basicMore").click(function() {
    counter++;
    var html = ` <div class="adddivs-1" id="rec_` + counter + `">
                <div class="input-serachs mt-2">
                    <input type="search" name="basic_title[` + counter + `]"  placeholder="Write course outline" />
                </div>
                <textarea class="form-control texteara-s mt-2 pt-2 mb-2"
                name="basic_explain[` + counter + `]" rows="6">Explaine</textarea>
            </div>`

    $('#basicNew').append(html);
});
$(".standardMore").click(function() {
    counter2++;
    var html = ` <div class="adddivs-1" id="rec_` + counter2 + `">
                <div class="input-serachs mt-2">
                    <input type="search" name="standard_title[` + counter2 + `]"  placeholder="Write course outline" />
                </div>
                <textarea class="form-control texteara-s mt-2 pt-2 mb-2"
                name="standard_explain[` + counter2 + `]" rows="6">Explaine</textarea>
            </div>`

    $('#standardNew').append(html);
});
$(".advMore").click(function() {
    counter3++;
    var html = ` <div class="adddivs-1" id="rec_` + counter3 + `">
                <div class="input-serachs mt-2">
                    <input type="search" name="advance_title[` + counter3 + `]"  placeholder="Write course outline" />
                </div>
                <textarea class="form-control texteara-s mt-2 pt-2 mb-2"
                name="advance_explain[` + counter3 + `]" rows="6">Explaine</textarea>
            </div>`

    $('#advNew').append(html);
});

$("#basic_day").on("select2:select", function(e) {
    var value = e.params.data.id;
    // alert(value);

    var text;

    switch(value) {
    case "1":
        text = "Monday";
        break;
    case "2":
        text = "Tuesday";
        break;
    case "3":
        text = "Wednesday";
        break;
    case "4":
        text = "Thursday";
        break;
    case "5":
        text = "Friday";
        break;
    case "6":
        text = "Satureday";
        break;
    case "7":
        text = "Sunday";
        break;
    default:
        text = "---";
    }

    let html = "";
    html += `<div id="bas_` + value + `">
                <span class="heading-forth"> ` + text + `</span>
                <div class="input-serachs mt-2">
                    <input type="txt" name="basic_class_title[` + value + `]" placeholder="Write Class Title" required />
                </div>
                <div class="input-serachs mt-2 mb-2">
                    <input type="txt" name="basic_class_overview[` + value + `]" placeholder="Write Class Overview" required />
                </div>
                <span class="heading-forth"> Timing</span>
                <div class="input-options ">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="basic_class_start_time[` + value + `]" class="form-control texteara-s mt-2 pt-2 mb-2" required  placeholder="From"
                            onfocus="(this.type='time')">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="basic_class_end_time[` + value + `]" class="form-control texteara-s mt-2 pt-2 mb-2" required placeholder="To"
                                onfocus="(this.type='time')">
                        </div>
                    </div>
                </div>
            </div>`;

    $("#extraFields").append(html);

});
$("#basic_day").on("select2:unselect", function(e) {
    var value = e.params.data.id;
    // alert(value);
    $("#bas_" + value).remove();
});


$("#standard_day").on("select2:select", function(e) {
    var value = e.params.data.id;
    // alert(value);

    var text;

    switch(value) {
    case "1":
        text = "Monday";
        break;
    case "2":
        text = "Tuesday";
        break;
    case "3":
        text = "Wednesday";
        break;
    case "4":
        text = "Thursday";
        break;
    case "5":
        text = "Friday";
        break;
    case "6":
        text = "Satureday";
        break;
    case "7":
        text = "Sunday";
        break;
    default:
        text = "---";
    }

    let html = "";
    html += `<div id="standard_` + value + `">
                <span class="heading-forth"> ` + value + `</span>
                <div class="input-serachs mt-2">
                    <input type="txt" name="standard_class_title[` + value + `]" placeholder="Write Class Title" required />
                </div>
                <div class="input-serachs mt-2 mb-2">
                    <input type="txt" name="standard_class_overview[` + value + `]" placeholder="Write Class Overview" required />
                </div>
                <span class="heading-forth"> Timing</span>
                <div class="input-options ">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="standard_class_start_time[` + value + `]" class="form-control texteara-s mt-2 pt-2 mb-2" required  placeholder="From"
                            onfocus="(this.type='time')">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="standard_class_end_time[` + value + `]" class="form-control texteara-s mt-2 pt-2 mb-2" required placeholder="To"
                                onfocus="(this.type='time')">
                        </div>
                    </div>
                </div>
            </div>`;

    $("#standard_extraFields").append(html);

});
$("#standard_day").on("select2:unselect", function(e) {
    var value = e.params.data.id;
    // alert(value);
    $("#standard_" + value).remove();
});


$("#advance_day").on("select2:select", function(e) {
    var value = e.params.data.id;
    // alert(value);

    var text;

    switch(value) {
    case "1":
        text = "Monday";
        break;
    case "2":
        text = "Tuesday";
        break;
    case "3":
        text = "Wednesday";
        break;
    case "4":
        text = "Thursday";
        break;
    case "5":
        text = "Friday";
        break;
    case "6":
        text = "Satureday";
        break;
    case "7":
        text = "Sunday";
        break;
    default:
        text = "---";
    }

    let html = "";
    html += `<div id="advance_` + value + `">
                <span class="heading-forth"> ` + value + `</span>
                <div class="input-serachs mt-2">
                    <input type="txt" name="advance_class_title[` + value + `]" placeholder="Write Class Title" required />
                </div>
                <div class="input-serachs mt-2 mb-2">
                    <input type="txt" name="advance_class_overview[` + value + `]" placeholder="Write Class Overview" required />
                </div>
                <span class="heading-forth"> Timing</span>
                <div class="input-options ">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="advance_class_start_time[` + value + `]" class="form-control texteara-s mt-2 pt-2 mb-2" required  placeholder="From"
                            onfocus="(this.type='time')">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="advance_class_end_time[` + value + `]" class="form-control texteara-s mt-2 pt-2 mb-2" required placeholder="To"
                                onfocus="(this.type='time')">
                        </div>
                    </div>
                </div>
            </div>`;

    $("#advance_extraFields").append(html);

});
$("#advance_day").on("select2:unselect", function(e) {
    var value = e.params.data.id;
    // alert(value);
    $("#advance_" + value).remove();
});

   
</script>

