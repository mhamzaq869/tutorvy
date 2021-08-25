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
var counter = 0;
$("#basic_day").change(function() {

    var ter = $(this).val();
    if (bs_days_arr.length == 0 && ter.length == 1) {
        bs_days_arr.push(ter);
    } else if (ter.length != null && ter.length > 1) {

        for (var i = 0; i <= ter.length; i++) {
            bs_days_arr = 'sad,asda'.split()
            console.log('bs' + bs_days_arr)
            console.log('ter' + ter)
            index = bs_days_arr.indexOf(ter[i]);
            console.log(index)
            if (index == -1) {
                bs_days_arr.push(ter[i]);
            }
        }

    }
    // alert(bs_days_arr[1]);

    console.log(ter[counter]);
    let html = "";
    html += `<div id="` + ter[counter] + `">
                <span class="heading-forth"> ` + ter[counter] + `</span>
                <div class="input-serachs mt-2">
                    <input type="txt" name="course_title" placeholder="Write Class Title" />
                </div>
                <div class="input-serachs mt-2 mb-2">
                    <input type="txt" name="course_title" placeholder="Write Class Overview" />
                </div>
                <span class="heading-forth"> Timing</span>
                <div class="input-options ">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="basic_start_time" class="form-control texteara-s mt-2 pt-2 mb-2"  placeholder="From"
                            onfocus="(this.type='time')">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="basic_end_time" class="form-control texteara-s mt-2 pt-2 mb-2" placeholder="To"
                                onfocus="(this.type='time')">
                        </div>
                    </div>
                </div>
            </div>`;

    // $("#extraFields").append(html);

    // alert(ter[counter]);
    counter++;
})

$("#basic_day option").click(function(e) {

    var all = $("#basic_day :selected").map(function() {
        alert(this.value);

    }).get(); // all selected value

    if (all.indexOf(this.value) != -1) { // check the condition your selecting or unselected  option
        alert(this.value); // current selected element
    }

});