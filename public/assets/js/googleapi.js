$('.extra-fields-customer').click(function () {
  $('.customer_records').clone().appendTo('.customer_records_dynamic');
  $('.customer_records_dynamic .customer_records').addClass('single remove');
  $('.single .extra-fields-customer').remove();
  $('.single').append('<a href="#" class="remove-field btn-remove-customer">Remove Fields</a>');
  $('.customer_records_dynamic > .single').attr("class", "remove");

  $('.customer_records_dynamic input').each(function () {
    var count = 0;
    var fieldname = $(this).attr("name");
    $(this).attr('name', fieldname + count);
    count++;
  });

});

$(document).on('click', '.remove-field', function (e) {
  $(this).parent('.remove').remove();
  e.preventDefault();
});


// 

$('.wrapper').on('click', '.remove', function () {
  $('.remove').closest('.wrapper').find('.element').not(':first').last().remove();
});
$('.wrapper').on('click', '.clone', function () {
  $('.clone').closest('.wrapper').find('.element').first().clone().appendTo('.results');
});
//   
$('.wrapper1').on('click', '.removes', function () {
  $('.removes').closest('.wrapper1').find('.element').not(':first').last().remove();
});
$('.wrapper1').on('click', '.clone1', function () {
  $('.clone1').closest('.wrapper1').find('.element1').first().clone().appendTo('.results1');
});


// 
const xhttp = new XMLHttpRequest();
const select = document.getElementById("countries");
const flag = document.getElementById("flag");

let countries;

xhttp.onreadystatechange = function () {
  if (this.readyState == 4 && this.status == 200) {
    countries = JSON.parse(xhttp.responseText);
    assignValues();
    handleCountryChange();
  }
};
xhttp.open("GET", "https://  .eu/rest/v2/all", true);
xhttp.send();

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

select.addEventListener("change", handleCountryChange.bind(this));
