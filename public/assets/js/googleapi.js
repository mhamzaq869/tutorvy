//
const xhttp = new XMLHttpRequest();
const select = document.getElementById("countries");
const flag = document.getElementById("flag");

let countries;

xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        countries = JSON.parse(xhttp.responseText);
        assignValues();
        handleCountryChange();
    }
};
// if(xhttp){
//     xhttp.open("GET", "https://  .eu/rest/v2/all", true);
//     xhttp.send();
// }

function assignValues() {
    countries.forEach(country => {
        const option = document.createElement("option");
        option.value = country.alpha2Code;
        option.textContent = country.name;
        select.appendChild(option);
    });
}

function handleCountryChange() {
    const countryData = countries.find(
        country => select.value === country.alpha2Code
    );
    flag.style.backgroundImage = `url(${countryData.flag})`;
}
if (select) {
    select.addEventListener("change", handleCountryChange.bind(this));
}