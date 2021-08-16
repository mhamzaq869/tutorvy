var counter = 0;
var counter2 = 0;
var counter3 = 0;
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