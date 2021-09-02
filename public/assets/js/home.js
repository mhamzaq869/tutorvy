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
// document.getElementById("defaultOpen").click(); // maybe readd


$('.js-tilt').tilt({
    glare: true,
    // maxGlare: 15
})


function resetFilter() {
    alert($("#locat").val());
    $(".form-select").val("");
    $(".form-select").select2();
    document.getElementById("Choose_No").checked = false;
    $("input[type=range]").reset();
    $("input[type=radio]").reset();
    // $("#locat").select2("val", "");
}