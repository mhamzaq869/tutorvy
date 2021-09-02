<script>

let tutors = '';

(function () {
    var user_language_code = "{{ $user->language ?? 'en-US'}}";
    var option = '';
    for (var language_code in languages_list) {
        var selected = (language_code == user_language_code) ? ' selected' : '';
        option += '<option value="' + language_code + '"' + selected + '>' + languages_list[language_code] + '</option>';
    }
    document.getElementById('languages-list').innerHTML = option;
})();


$('#subjects-list').on("change", function(e) {

    let subject = $("#subjects-list").val();
    let lang = $("#languages-list").val();
    let rating = $("input[name='rating_filter']:checked").val();
    let price = $("#range").val();

    search_tutors(price,subject,lang,rating);
    
});

$('#languages-list').on("change", function(e) {

    let subject = $("#subjects-list").val();
    let lang = $("#languages-list").val();
    let rating = $("input[name='rating_filter']:checked").val();
    let price = $("#range").val();

    search_tutors(price,subject,lang,rating);

});

$('input[type=radio][name=rating_filter]').change(function() {
    let subject = $("#subjects-list").val();
    let lang = $("#languages-list").val();
    let rating = $("input[name='rating_filter']:checked").val();
    let price = $("#range").val();

    search_tutors(price,subject,lang,rating);
    
});

$("#range").change(function() {

    let price = $("#range").val();
    let subject = $("#subjects-list").val();
    let lang = $("#languages-list").val();
    let rating = $("input[name='rating_filter']:checked").val();

    search_tutors(price,subject,lang,rating);

});

function search_tutors(price,subject,lang,rating){

    $.ajax({
        url: "{{ route('student.tutor.filter') }}",
        type: "POST",
        data: {
            subject: subject,
            language: lang,
            rating: rating,
            price : price
        },
        success: function(response) {
            console.log(response);
            if (response.status == 200) {
                tutors = response.tutors;
                list_tutors();
            }
        },
    });

}

function list_tutors(){

    if(tutors.length > 0){

        $('#tutors-list').html('');

        for(var i = 0 ; i<tutors.length ; i++){

            let inst = tutors[i].insti_names.split(",");
            let sub = tutors[i].subject_names.split(",");
            let int_html = '';
            let sub_html = '';
            let rating_html = '';
            let rank_html = '';
            let t_id = tutors[i].id;
            let url = "{{route('student.book-now', ':id')}}";
            url = url.replace(':id', t_id);
            console.log(t_id);
            for(var ins=0 ; ins < inst.length; ins++){ 
                int_html +=` <span class="info-1 info edu">`+inst[ins]+`</span>`;
            }

            for(var s=0 ; s < sub.length; s++){ 
                sub_html +=` <span class="info-1 info">`+sub[s]+`</span>`;
            }

            if(tutors[i].rating == 1){
                rating_html +=  `<i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star "></i>
                                <i class="fa fa-star "></i>
                                <i class="fa fa-star "></i> 1.0
                                <small class="text-grey">(0 reviews)</small>`;
            }
            else if(tutors[i].rating == 2){
                rating_html +=  `<i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star "></i>
                                <i class="fa fa-star "></i>  2.0
                                <small class="text-grey">(0 reviews)</small>`;
            }
            else if(tutors[i].rating == 3){
                rating_html +=  `<i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star "></i>  3.0
                                <small class="text-grey">(0 reviews)</small>`;
            }
            else if(tutors[i].rating == 4){
                rating_html +=  `<i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star text-yellow"></i>  4.0
                                <small class="text-grey">(0 reviews)</small>`;

            }else{
                rating_html +=  `<i class="fa fa-star "></i>
                                <i class="fa fa-star "></i>
                                <i class="fa fa-star "></i>
                                <i class="fa fa-star "></i>  0.0
                                <small class="text-grey">(0 reviews)</small>`;
            }

            if(tutors[i].rank == 1){
                rank_html = `<p class="text-right"><span class="text-green ">Verified</span> <span class="rank_icon"><img src="../assets/images/ico/bluebadge.png" alt=""></span> </p>`;
            }else if(tutors[i].rank == 2){
                rank_html = `<p class="text-right"><span class="text-green ">Emerging</span> <span class="rank_icon"><img src="../assets/images/ico/yellow-rank.png" alt=""></span> </p>`;
            }else if(tutors[i].rank == 3){
                rank_html = `<p class="text-right"><span class="text-green ">Top Rank</span> <span class="rank_icon"><img src="../assets/images/ico/rank.png" alt=""></span> </p>`;
            }
           

            let tutor_Card = `<div class="card">
                                <div class="card-body">
                                    
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-2 col-6">
                                                            <img src="../assets/images/logo/boy.jpg" alt="" class="round-border">
                                                        </div>
                                                        <div class="col-md-5 col-6">
                                                            <h3>`+tutors[i].first_name+ ' ' +tutors[i].last_name+`</h3>
                                                            <p class="mb-0"><img src="../assets/images/ico/red-icon.png" alt="" class="">`+tutors[i].designation+` </p>
                                                            <p class="mb-0"><img src="../assets/images/ico/location-pro.png" alt="" class="">`+tutors[i].city + ',' + tutors[i].country+`</p>
                                                        </div>
                                                        <div class="col-md-4 col-12">
                                                            <p>
                                                                `+rating_html+`
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    `+rank_html+`
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-4">
                                                    
                                                    <p class="mb-2">Subject</p>
                                                    `+sub_html+`
                                                </div>
                                                <div class="col-md-4">
                                                    <p class="mb-2">Languages</p>
                                                    <p>
                                                        <span class="info-1 info lingo">`+tutors[i].lang_short+`</span>
                                                    </p>
                                                </div>
                                                <div class="col-md-4">
                                                <p class="mb-2">Education</p>
                                                    <p>`+
                                                    int_html
                                                    +`</p>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-12 find_tutor">
                                                    <p><strong> About Tutor </strong></p>
                                                    <p class="scrol-about ">
                                                        `+tutors[i].bio+`
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 bg-price text-center">
                                            <div class="row mt-30">
                                                <div class="col-md-12">
                                                    <p>starting from</p>
                                                    <h1 class="f-60">$`+tutors[i].hourly_rate+`</h1>
                                                    <p>per hour</p>
                                                    <button type="button" class=" cencel-btn w-100">
                                                            &nbsp; Message &nbsp;
                                                        </button>
                                                    <button type="button" onclick="location.href = '`+url+`'" class=" btn-general w-100 mt-2" >
                                                            &nbsp; Book Class &nbsp;
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>`;
            
            $('#tutors-list').append(tutor_Card);
        }

    }else{
        let no_rec_html = `<div class="card">
                            <div class="card-body text-center">
                                <img src="{{asset ('assets/images/ico/no-tutor.svg')}}" alt="" width="200">
                                <h1 class="">No Tutor Found For Your Search</h1>
                                <h3  class="">Try a new search for your subject from</h3>
                                    <h3>  our community of tutors.</h3>
                            </div>
                        </div>`;
        $('#tutors-list').html(no_rec_html);
    }

}    

</script>