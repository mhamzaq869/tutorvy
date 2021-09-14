<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorvy</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <script src="{{ asset('js/app.js') }}" ></script> -->

    <!-- Scripts -->
    <!--favicon --->
    <link href="{{ asset('assets/images/ico/side-icons.png') }}" rel="icon">
    <!-- bootstrap link -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <!-- fonawsome -->
    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/calender.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/countrySelect.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/dropify.css')}}" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<!--Plugin CSS file with desired skin-->
<link rel="stylesheet" href="{{ asset('assets/css/ion.rangeSlider.css')}}"/>
    
    <!-- Styles -->
    @include('student.layouts.css')
</head>
<body>
    <div class="wrapper" id="wrapper">
        <!-- side navbar -->
        @include('student.layouts.sidebar')
        <!-- seide navbar end -->
        <div class="content" style="width: 100%;background-color: #FBFBFB !important;">
            @include('student.layouts.navbar')
            <!-- Main-->
            @yield('content')
        <div>

    </div>
     <!-- custom js -->
     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>
     <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
     <script src="{{ asset('assets/js/mobile.js') }}"></script>
     <script src="{{ asset('assets/js/history.js') }}"></script>
     <script src="{{ asset('assets/js/subject.js') }}"></script>
     <script src="{{ asset('assets/js/languages.js') }}"></script>

     <script src="{{ asset('assets/js/homePage.js') }}"></script>
     <script src="{{ asset('assets/js/clander.js') }}"></script>
     <script src="{{ asset('assets/js/registration.js') }}"></script>
     <script src="{{ asset('assets/js/dropify.js')}}"></script>
     <script src="{{ asset('assets/js/multiselect.js')}}"></script>
     <script src="{{ asset('assets/js/countrySelect.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <!--Plugin JavaScript file-->
        <script src="{{ asset('assets/js/ion.rangeSlider.js')}}"></script>
            
     @yield('scripts')
     <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
      
    $(document).ready(function(){
        $(".dropify").dropify();
        $('.js-multiSelect').select2();
        $('.accSelect2').select2();
        $('.form-select').select2();
        // $("#year").yearpicker({
        //         year: {{$user->year ?? '1990'}},
        //         startYear: 1950,
        //         endYear: 2050,
        //     });
            $(".js-range-slider").ionRangeSlider({
            type: "double",
            min: 0,
            max: 1000,
            from: 200,
            to: 500,
            grid: true,
            prefix: "$"
        });
        $(".age-range-slider").ionRangeSlider({
            type: "double",
            min: 18,
            max: 70,
            from: 18,
            to: 70,
            grid: true,
        });
        
    })
    $("#country_selector").countrySelect({
                defaultCountry: "{{ $user->country_short ?? '' }}",
                preferredCountries: ['ca', 'gb', 'us', 'pk']
            });

            $("#country_selector").on('change', function() {
                var short = $(this).countrySelect("getSelectedCountryData");
                $("#country_short").val(short.iso2);
            });



for(var i=1; i<=31; i++){
   $("#day").append("<option value='"+i+"'"+ (i=={{$user->day ?? 1}} ? 'selected' : '')+">"+i+"</option>");
}

$("#country_selector").countrySelect({
   defaultCountry: "{{$user->country_short ?? ''}}",
   preferredCountries: ['ca', 'gb', 'us', 'pk']
});

$("#country_selector").on('change', function(){
  var short = $(this).countrySelect("getSelectedCountryData");
  $("#country_short").val(short.iso2);
});


// var languages_list = {...};
(function () {
   var user_language_code = "{{ $user->language ?? 'en-US'}}";
   var option = '';
   for (var language_code in languages_list) {
       var selected = (language_code == user_language_code) ? ' selected' : '';
       option += '<option value="' + language_code + '"' + selected + '>' + languages_list[language_code] + '</option>';
   }
   document.getElementById('languages-list').innerHTML = option;
})();

$("#register").validate({
   rules: {
       // compound rule
       email: {
           required: true,
           email: true,
           remote: {
                   url: "{{route('available.email')}}",
                   type: "post",
                   data: {
                       _token: function() {
                           return "{{csrf_token()}}"
                       },
                   }
               }
       },
       password: {
           required: true,
       },
       first_name: {
           required:true
       },
       last_name: {
           required:true
       },

   },
   messages: {
       email: {
           required: "We need your email address to contact you",
           email: "Your email address must be in the format of name@domain.com"
       }
   }
});

function langshort(opt){
   var val = opt.options[opt.selectedIndex].innerHTML;
   $("#lang").val(val)
}
function hideCard(){
    // alert();
    $(".infoCard").hide('slow');
};
</script>

</body>
</html>
