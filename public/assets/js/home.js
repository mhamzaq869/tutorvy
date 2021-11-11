<<<<<<< HEAD





=======
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
<<<<<<< HEAD
document.getElementById("defaultOpen").click(); // maybe readd
=======
// document.getElementById("defaultOpen").click(); // maybe readd
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249


$('.js-tilt').tilt({
    glare: true,
    // maxGlare: 15
})

<<<<<<< HEAD
=======

function resetFilter() {
    alert($("#locat").val());
    $(".form-select").val("");
    $(".form-select").select2();
    $("#availabilityAll").checked = true;
    $("#range").val(10);
    $("#any").checked = true;
    $("#rating_filter0").checked = true;

    // $("#locat").select2("val", "");
}
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
