<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorvy</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" ></script> -->
    <!--favicon --->
    <link href="{{ asset('assets/images/ico/side-icons.png') }}" rel="icon">
    <!-- bootstrap link -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/calender.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/chat.css') }}" rel="stylesheet">

    <!-- fonawsome -->
    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">
      <!-- Dropify CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/multiselect.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/dropify.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/countrySelect.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/booking.css')}}">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.2.7/emojionearea.css"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/emojionearea.css')}}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!--Select 2-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Styles -->
   
    @include('tutor.layouts.css')

</head>
<body>
    <div class="wrapper" id="wrapper">
        <!-- side navbar -->
        @include('tutor.layouts.sidebar')
        <!-- seide navbar end -->
        <div class="content" style="width: 100%;background-color: #FBFBFB !important;">
            @include('tutor.layouts.navbar')
            <!-- Main-->
            @yield('content')
            <div class="modal" id="supportModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content pb-3">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 pt-4">
                                        <div class="iconss" style="text-align: center;">
                                            <img src="{{asset('assets/images/ico/support.png')}}" alt="support" class="mb-2" width="80px">
                                            <p
                                                style=" font-size: 24px;color: #00132D;font-family: Poppins;font-weight: 600;margin-top: 10px;">
                                                Support</p>
                                            <p style="font-size: 15px;color: #00132D;font-family: Poppins;font-weight: 400;line-height: 1.4;"
                                                class="ml-5 mr-5">We are here to listen you, please write if you have any problem</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <select name="" class="form-select" id="">
                                            <option > Select Category</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Enter your query here"></textarea>
                                    </div>
                                    <div class="col-md-12 mt-2 text-right">
                                        <button type="button" class="schedule-btn" data-dismiss="modal"
                                        style="width: 130px;">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
     <script src="{{ asset('assets/js/homePage.js') }}"></script>
     <script src="{{ asset('assets/js/clander.js') }}"></script>
     <script src="{{ asset('assets/js/registration.js') }}"></script>
     <script src="{{ asset('assets/js/dropify.js')}}"></script>
     <script src="{{ asset('assets/js/multiselect.js')}}"></script>
     <script src="{{ asset('assets/js/countrySelect.js')}}"></script>
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.2.7/emojionearea.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    

<!-- <script src="{{ asset('assets/js/jquery_ui_multiselector.js')}}"></script> -->

    <!-- @include('js_files.chat') -->
    @yield('scripts')
    @yield('js')
<script>

    $(document).ready(function(){
        // $('.table').DataTable();
     
        
        $(".dropify").dropify();
        $('.js-multiSelect').select2();
        $('.form-select').select2();
        $("#msg").emojioneArea({
                pickerPosition: "top",
                saveEmojisAs:"shortname"
            });

            /* Table Sorting */
            $("th").append('<i class="ml-1 fa fa-sort"></i>');
            $("th:last-child").css("color",'white');

            const getCellValue = (tr, idx) => tr.children[idx].innerText || tr.children[idx].textContent;

            const comparer = (idx, asc) => (a, b) => ((v1, v2) => 
                v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2)
                )(getCellValue(asc ? a : b, idx), getCellValue(asc ? b : a, idx));

            // do the work...
            document.querySelectorAll('th').forEach(th => th.addEventListener('click', (() => {
                const table = th.closest('table');
                Array.from(table.querySelectorAll('tr:nth-child(n+2)'))
                    .sort(comparer(Array.from(th.parentNode.children).indexOf(th), this.asc = !this.asc))
                    .forEach(tr => table.appendChild(tr) );
            })));

            
            /* Table Sorting */
    })
    $("#country_selector").countrySelect({
                defaultCountry: "{{ $user->country_short ?? '' }}",
                preferredCountries: ['ca', 'gb', 'us', 'pk']
            });

            $("#country_selector").on('change', function() {
                var short = $(this).countrySelect("getSelectedCountryData");
                $("#country_short").val(short.iso2);
            });
            function hideCard(){
                    // alert();
                    $(".infoCard").hide('slow');
                };
</script>
</body>
</html>
