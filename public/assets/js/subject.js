// subject listner
$('[data-search]').on('keyup', function () {
    var searchVal = $(this).val();
    var filterItems = $('[data-filter-item]');
  
    if (searchVal != '') {
      filterItems.addClass('hidden');
      $('[data-filter-item][data-filter-name*="' + searchVal.toLowerCase() + '"]').removeClass('hidden');
    } else {
      filterItems.removeClass('hidden');
    }
  });
  // 
  $('#search').keyup(function (){
    $('.cards').removeClass('d-none');
    // $('.cards').addClass('d-one');
    // $('.cards').style.display="none ";
    var filter = $(this).val(); // get the value of the input, which we filter on
    $('.card-deck').find('.cards .card-body h4:not(:contains("'+filter+'"))').parent().parent().addClass('d-none');
  })