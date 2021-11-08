<script>

$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

let tutors = '';

$('#subjects-list').on("change", function(e) {

    let subject = $("#subjects-list").val();
    let lang = $("#languages-list").val();
    let rating = $("input[name='rating_filter']:checked").val();
    let gender = $("input[name='gender']:checked").val();
    let price = $("#range").val();
    let location = $("#location").val();

    search_tutors(price,subject,lang,rating,location ,gender);

});

$('#languages-list').on("change", function(e) {

    let subject = $("#subjects-list").val();
    let lang = $("#languages-list").val();
    let rating = $("input[name='rating_filter']:checked").val();
    let price = $("#range").val();
    let location = $("#location").val();
    let gender = $("input[name='gender']:checked").val();

    search_tutors(price,subject,lang,rating,location ,gender);

});

$('input[type=radio][name=rating_filter]').change(function() {
    let subject = $("#subjects-list").val();
    let lang = $("#languages-list").val();
    let rating = $("input[name='rating_filter']:checked").val();
    let price = $("#range").val();
    let location = $("#location").val();
    let gender = $("input[name='gender']:checked").val();

    search_tutors(price,subject,lang,rating,location ,gender);

});

$("#range").change(function() {

    let price = $("#range").val();
    let subject = $("#subjects-list").val();
    let lang = $("#languages-list").val();
    let rating = $("input[name='rating_filter']:checked").val();
    let location = $("#location").val();
    let gender = $("input[name='gender']:checked").val();

    search_tutors(price,subject,lang,rating,location ,gender);

});

$("#location").change(function() {

    let price = $("#range").val();
    let subject = $("#subjects-list").val();
    let lang = $("#languages-list").val();
    let rating = $("input[name='rating_filter']:checked").val();
    let location = $("#location").val();
    let gender = $("input[name='gender']:checked").val();

    search_tutors(price,subject,lang,rating,location ,gender);

});

$('input[type=radio][name=gender]').change(function() {
    let price = $("#range").val();
    let subject = $("#subjects-list").val();
    let lang = $("#languages-list").val();
    let rating = $("input[name='rating_filter']:checked").val();
    let location = $("#location").val();
    var gender = $(this).val();
    search_tutors(price,subject,lang,rating,location ,gender);

});

function search_tutors(price,subject,lang,rating,location, gender){

    $.ajax({
        url: "{{ route('student.tutor.filter') }}",
        type: "POST",
        data: {
            subject: subject,
            language: lang,
            rating: rating,
            price : price,
            location:location,
            gender: gender,
        },
        success: function(response) {
            console.log(response);
            if (response.status == 200) {
                tutors = response.tutors;
                list_tutors();
            }
        },
        error:function(e) {
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

function list_tutors(){
    let noTut
    if(tutors.length > 0){

        $('#tutors-list').html('');
        noTut = ` <h3  class="mb-0  mt-4"> `+tutors.length+`  Tutors Available</h3>`;
        $('#number-booking').html(noTut);
        for(var i = 0 ; i<tutors.length ; i++){
            let inst ;
            let sub;
            let int_html = '';
            let sub_html = '';
            let rating_html = '';
            let rank_html = '';
            let t_id = tutors[i].id;
            let url = "{{route('student.book-now', ':id')}}";
            url = url.replace(':id', t_id);
            let url2 = "{{route('student.tutor.show', ':id')}}";
            url2 = url2.replace(':id', t_id);
            console.log(t_id);
            if(tutors[i].insti_names !=null ){
                inst=  tutors[i].insti_names.split(",");
                for(var ins=0 ; ins < inst.length; ins++){
                    int_html +=` <span class="info-1 info edu">`+inst[ins]+`</span>`;
                }
            }
            // console.log(tutors[i].subject_names);

            if(tutors[i].subject_names !=null ){
                sub = tutors[i].subject_names.split(",");
                var ter = sub.length;
                var one = 1;
                var eq = ter - one;
                if(sub.length>1){
                // console.log(sub);

                    for(var s=0 ; s < 1; s++){
                        sub_html +=` <span class="info-1 info">`+sub[s]+`</span>
                        <small>
                            <a href="`+url2+`" class="text-dark decoration-none">
                                +`+eq+` Other
                            </a>
                        </small>`;
                    }
                }
                else if(sub.length==1){
                    for(var s=0 ; s < 1; s++){
                    sub_html +=` <span class="info-1 info">`+sub[s]+`</span>`;   }
                }
            }
                let tutBio = '';
                let tut = tutors[i].bio;
                let poli = tut.length;

                if(poli > 200){
                    tutBio +=`<p> `+tut.substr(0, 200)+`..... <a href="`+url2+`"> Read more </a></p>`
                }
                else{
                    tutBio +=`<p>`+tutors[i].bio+`</p>`
                }







            if(tutors[i].rating == 1){
                rating_html +=  `<i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star "></i>
                                <i class="fa fa-star "></i>
                                <i class="fa fa-star "></i>
                                <i class="fa fa-star "></i> 1.0
                                <small class="text-grey">(0 reviews)</small>`;
            }
            else if(tutors[i].rating == 2){
                rating_html +=  `<i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star "></i>
                                <i class="fa fa-star "></i>
                                <i class="fa fa-star "></i>  2.0
                                <small class="text-grey">(0 reviews)</small>`;
            }
            else if(tutors[i].rating == 3){
                rating_html +=  `<i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star "></i>
                                <i class="fa fa-star "></i>  3.0
                                <small class="text-grey">(0 reviews)</small>`;
            }
            else if(tutors[i].rating == 4){
                rating_html +=  `<i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star "></i>  4.0
                                <small class="text-grey">(0 reviews)</small>`;

            }else if(tutors[i].rating == 5){
                rating_html +=  `<i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star text-yellow"></i>
                                <i class="fa fa-star text-yellow"></i>  5.0
                                <small class="text-grey">(0 reviews)</small>`;

            }else{
                rating_html +=  `<i class="fa fa-star "></i>
                                <i class="fa fa-star "></i>
                                <i class="fa fa-star "></i>
                                <i class="fa fa-star "></i>
                                <i class="fa fa-star "></i>  0.0
                                <small class="text-grey">(0 reviews)</small>`;
            }

            if(tutors[i].rank == 1){
                rank_html = `<p class="text-right"><span class="text-green ">New</span> <span class="rank_icon"><img src="../assets/images/ico/bluebadge.png" alt=""></span> </p>`;
            }else if(tutors[i].rank == 2){
                rank_html = `<p class="text-right"><span class="text-green ">Emerging</span> <span class="rank_icon"><img src="../assets/images/ico/yellow-rank.png" alt=""></span> </p>`;
            }else if(tutors[i].rank == 3){
                rank_html = `<p class="text-right"><span class="text-green ">Top Rank</span> <span class="rank_icon"><img src="../assets/images/ico/rank.png" alt=""></span> </p>`;
            }
            let img = ``;
            if(tutors[i].picture != null){
                console.log(tutors[i].picture)
                img = `<img src="{{asset('`+tutors[i].picture+`')}}" alt="" class="profile-img " style="height:70px;width:70px;"`;
            }else{
                img = `<img src="../assets/images/ico/Square-white.jpg" alt="" class="profile-img " style="height:70px;width:70px;">`;
            }

            var fav_btn = `
                <a type="button" onclick="favourite_tutor(`+tutors[i].id+`,'fav')" class="fav" title="Favourite">
                    <i class="fa fa-star" id="favorite_start_`+tutors[i].id+`"></i>
                </a>`;

            var un_fav_btn = `
                <a type="button" onclick="favourite_tutor(`+tutors[i].id+`,'un_fav')" class="fav" title="Favourite">
                    <i class="fa fa-star text-yellow" id="favorite_start_`+tutors[i].id+`"></i>
                </a>`;

            let tutor_Card = `<div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="row">
                                                        <div class="col-md-2 col-6 pr-0 div-center">
                                                            <a href="`+url2+`">
                                                                `+img+`
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4 col-6 pr-0">
                                                            <a href="`+url2+`" class="decoration-none">
                                                                <h3 class="mb-0">`+tutors[i].first_name+ ' ' +tutors[i].last_name+`</h3>
                                                            </a>
                                                            <p class="mb-0"><img src="../assets/images/ico/red-icon.png" alt="" class="">`+tutors[i].designation+` </p>
                                                            <p class="mb-0"><img src="../assets/images/ico/location-pro.png" alt="" class="">`+tutors[i].city + ',' + tutors[i].country+`</p>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <p class="mb-0">
                                                                `+rating_html+`
                                                            </p>
                                                            <p class="mb-0"> <small> 3 hours tutoring in (this subject) </small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    `+rank_html+`
                                                </div>
                                            </div>
                                            <div class="row mt-3">
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
                                                    `+tutBio+`
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 bg-price text-center">
                                            <div class="row mt-30">
                                                `+ (tutors[i].is_favourite != null && tutors[i].is_favourite != "" ? un_fav_btn : fav_btn) +`

                                                <div class="col-md-12">
                                                    <p>starting from</p>
                                                    <h1 class="f-60">$`+ (tutors[i].hourly_rate != null ? tutors[i].hourly_rate : '0') +`</h1>
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
        noTut = ` <h3  class="mb-0  mt-4">  0 Tutor Available</h3>`
        $('#number-booking').html(noTut);
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


function star(){
    // alert("D");
    $(".fa-star").addClass("text-yellow");
}

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


function chat(id){
    var url = "{{url('student/contact/tutor')}}"+'/'+id
    window.location.href = url
}
</script>
