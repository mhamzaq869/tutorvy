var input = document.getElementById('search-location');
var options = {
    types: ['(cities)']
};

var autocomplete = new google.maps.places.Autocomplete(input, options);

$(input).on('input', function () {
    var str = input.value;
    var prefix = '';
    if (str.indexOf(prefix) == 0) {
        console.log(input.value);
    } else {
        if (prefix.indexOf(str) >= 0) {
            input.value = prefix;
        } else {
            input.value = prefix + str;
        }
    }

});

google.maps.event.addListener(autocomplete, 'place_changed', function () {
    var place = autocomplete.getPlace();
    // var lat = place.geometry.location.lat();
    // var long = place.geometry.location.lng();
    // alert(lat + ", " + long);
    var location = place.name;
    $("#search-location").val(location);
});
