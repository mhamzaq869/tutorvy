let storage = window.localStorage


function personal() {
    storage.setItem('first_name',$("#first_name").val())
    storage.setItem('last_name',$("#last_name").val())
    storage.setItem('email',$("#email").val())
    storage.setItem('password',$("#password").val())
    storage.setItem('day',$("#day").val())
    storage.setItem('month',$("#month").val())
    storage.setItem('year',$("#year").val())
    storage.setItem('phone',$("#phone").val())
    storage.setItem('city',$("#city").val())
    storage.setItem('country',$("#country_selector").val())
    storage.setItem('country_short',$("#country_short").val())
    storage.setItem('selection',$("#selection").val())
    storage.setItem('language',$("#languages-list").val())
    storage.setItem('gender',$("#gender").val())
    storage.setItem('bio',$("#bio").val())

}


var degrees = []
var subjects = []
var institutes = []
var gradyears = []
var uploads = []



//educaton
$("#addfield, education").on('click', function (){

    // personal()
    var degree = document.querySelectorAll('#degree');
    var subject = document.querySelectorAll('#subject');
    var institute = document.querySelectorAll('#institute');
    var gradyear = document.querySelectorAll('#grad-yea');
    var upload = document.querySelectorAll('#upload');

    degree.forEach((de) => {degrees.push(de.value)});
    subject.forEach((sub) => {subjects.push(sub.value)});
    institute.forEach((inst) => {institutes.push(inst.value)});
    gradyear.forEach((gryr) => {gradyears.push(gryr.value)});
    upload.forEach((up) => {uploads.push(up.value)});
});



function education()
{
 //educaton
    degree.forEach((de) => {degrees.push(de.value)});
    subject.forEach((sub) => {subjects.push(sub.value)});
    institute.forEach((inst) => {institutes.push(inst.value)});
    gradyear.forEach((gryr) => {gradyears.push(gryr.value)});
    upload.forEach((up) => {uploads.push(up.value)});

 storage.setItem('degree',JSON.stringify(degrees))
 storage.setItem('subject',JSON.stringify(subjects))
 storage.setItem('institute',JSON.stringify(institutes))
 storage.setItem('gradyear',JSON.stringify(gradyears))
 storage.setItem('upload',JSON.stringify(uploads))


}

//parse data
var deg = JSON.parse(storage.getItem('degree'));
var eduhtml = $('.customer_records')
for(var i= 0; i<deg.length-1; i++){

    eduhtml.clone().appendTo('.customer_records_dynamic');
}

$(document).ready(function(){
    if(storage.getItem("first_name")){
      $('#first_name').val(storage.getItem("first_name"));
    }

    if(storage.getItem("last_name")){
        $('#last_name').val(storage.getItem("last_name"));
    }

    if(storage.getItem("email")){
        $('#email').val(storage.getItem("email"));
    }
    if(storage.getItem("first_name")){
        $('#password').val(storage.getItem("password"));
    }
    if(storage.getItem("first_name")){
        $('#day').val(storage.getItem("day"));
    }
    if(storage.getItem("month")){
        $('#month').val(storage.getItem("month"));
    }
    if(storage.getItem("year")){
        $('#year').val(storage.getItem("year"));
    }
    if(storage.getItem("phone")){
        $('#phone').val(storage.getItem("phone"));
    }
    if(storage.getItem("city")){
        $('#city').val(storage.getItem("city"));
    }
    if(storage.getItem("country")){
        $('#country').val(storage.getItem("country"));
    }
    if(storage.getItem("country_short")){
        $('#country_short').val(storage.getItem("country_short"));
    }
    if(storage.getItem("language")){
        $('#selection').val(storage.getItem("selection"));
    }
    if(storage.getItem("gender")){
        $('#gender').val(storage.getItem("gender"));
    }
    if(storage.getItem("bio")){
        $('#bio').val(storage.getItem("bio"));
    }



});
