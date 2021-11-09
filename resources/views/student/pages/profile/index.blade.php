@extends('student.layouts.app')
<link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">
<style>
    .card {
        height: 100% !important;
    }

    .chee {
        background-color: transparent !important;
        border-right: 5px solid transparent !important;
    }

    .proPic {
        border-radius: 50%;
        border: 1px solid #1173FF;
    }

    .dropdown-menu .show {
        transform: translate3d(130px, 43px, 0px) !important;
    }

    .dropdown-item {
        display: block;
        width: 100%;
        padding: 3px 15px;
        clear: both;
        font-weight: 400;
        color: #212529;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
    }


    .avatar-upload {
        position: relative;
        max-width: 205px;
    }

    .avatar-upload .avatar-edit {
        position: absolute;
        right: 34px;
        z-index: 1;
        top: 10px;
    }

    .avatar-upload .avatar-edit input {
        display: none;
    }

    .avatar-upload .avatar-edit input+label {
        display: inline-block;
        width: 34px;
        height: 34px;
        margin-bottom: 0;
        border-radius: 100%;
        background: #FFFFFF;
        border: 1px solid transparent;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        font-weight: normal;
        transition: all .2s ease-in-out;
        padding: 8px 17px;
    }

    .avatar-upload .avatar-edit input+label:hover {
        background: #f1f1f1;
        border-color: #d6d6d6;
    }

    .avatar-upload .avatar-edit input+label:after {
        content: "\f040";
        font-family: 'FontAwesome';
        color: #757575;
        position: absolute;
        top: 4px;
        left: 0;
        right: 0;
        text-align: center;
        margin: auto;
    }

    .avatar-upload .avatar-preview {
        width: 192px;
        height: 192px;
        position: relative;
        border-radius: 100%;
        border: 6px solid #F8F8F8;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
    }

    .avatar-upload .avatar-preview>div {
        width: 100%;
        height: 100%;
        border-radius: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .nav {
        width: auto !important;
        padding: 0 !important;
        margin-left: 0 !important;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #007bff !important;
        border-bottom: 0;
    }

    .nav-pills .nav-link:hover {
        background-color: #E2F0FF !important;
        color: #007bff;
    }

    #v-pills-Verification .dropify-wrapper {
        height: 86px !important;
    }

    .passport {
        display: none;
    }

    .license {
        display: none;
    }

</style>

<link rel="stylesheet" href="{{ asset('assets/css/yearpicker.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/countrySelect.css') }}">

@section('content')
    <section>
        <div class="content-wrapper " style="overflow: hidden;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="heading-first">Edit Profile</h1>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-General-tab" data-toggle="pill"
                                        href="#v-pills-General" role="tab" aria-controls="v-pills-General"
                                        aria-selected="true">General</a>
                                    <a class="nav-link" id="v-pills-Education-tab" data-toggle="pill"
                                        href="#v-pills-Education" role="tab" aria-controls="v-pills-Education"
                                        aria-selected="false">Education</a>
                                    <!-- <a class="nav-link" id="v-pills-Verification-tab" data-toggle="pill" href="#v-pills-Verification"
                                        role="tab" aria-controls="v-pills-Verification" aria-selected="false">Verification</a> -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12 mb-1 ">
                                <div class=" card  bg-toast infoCard">


                                    <div class="card-body row">
                                        <div class="col-md-1 text-center">
                                            <i class="fa fa-info" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-md-11 pl-0">
                                            <small>
                                                Keep updating your profile to get verified and attract more students by
                                                other unvarified tutors. <a href="#">Learn More</a>
                                            </small>
                                            <a href="#" class="cross" onclick="hideCard()">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="v-pills-tabContent chang_photo">

                                    <div class="tab-pane fade show active chee" id="v-pills-General" role="tabpanel"
                                        aria-labelledby="v-pills-General-tab">
                                        @if (Session::has('message'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                {{ Session::get('message') }}
                                            </div>
                                        @endif
                                        <form action="{{ route('student.profile.update') }}" method="Post"
                                            enctype="multipart/form-data" id="personal">
                                            <div class="row">
                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                <div class="col-md-12">
                                                    <h1>Change Photo</h1>
                                                </div>
                                                <div class="col-md-12 ">

                                                    <div class="avatar-upload my-4">
                                                        <div class="avatar-edit">
                                                            <input type='file' name="filepond" id="imageUpload"
                                                                accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload"></label>
                                                        </div>
                                                        <div class="avatar-preview">
                                                            @if (Auth::user()->picture != null)
                                                                <div id="imagePreview"
                                                                    style="background-image: url('{{ asset(Auth::user()->picture) }}');">
                                                                </div>
                                                            @else
                                                                <div id="imagePreview"
                                                                    style="background-image: url({{ asset('assets/images/ico/porfile-main.png') }});">
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleName">First Name</label>
                                                        <input type="text" name="first_name" class="form-control"
                                                            value="{{ Auth::user()->first_name }}" id="exampleName"
                                                            aria-describedby="emailHelp" required="required"
                                                            placeholder="First Name" style="text-transform: capitalize;">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleName">Last Name</label>
                                                        <input type="text" name="last_name" class="form-control"
                                                            value="{{ Auth::user()->last_name }}" id="exampleName"
                                                            aria-describedby="emailHelp" required="required"
                                                            placeholder="Last Name" style="text-transform: capitalize;">
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <p class="heading-fifth">Date of Birth</p>
                                                </div>

                                                <!-- date of birth dropdown -->
                                                <div class="col-md-4">
                                                    <select class="form-select form-select-lg w-100" id="day" name="day"
                                                        required="required">
                                                        @for ($i = 0; $i <= 31; $i++)
                                                            <option value="{{ $i }}" @if (Auth::user()->day == $i) selected @endif>
                                                                {{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <!--  -->
                                                <div class="col-md-4">
                                                    <select class="form-select form-select-lg w-100" name="month"
                                                        aria-label=".form-select-lg example" required="required">
                                                        <option value="Jan" @if (Auth::user()->month == 'Jan') selected @endif>January</option>
                                                        <option value="Feb" @if (Auth::user()->month == 'Feb') selected @endif>February</option>
                                                        <option value="Mar" @if (Auth::user()->month == 'Mar') selected @endif>March</option>
                                                        <option value="Apr" @if (Auth::user()->month == 'Apr') selected @endif>April</option>
                                                        <option value="May" @if (Auth::user()->month == 'May') selected @endif>May</option>
                                                        <option value="Jun" @if (Auth::user()->month == 'Jun') selected @endif>June</option>
                                                        <option value="Jul" @if (Auth::user()->month == 'Jul') selected @endif>July</option>
                                                        <option value="Aug" @if (Auth::user()->month == 'Aug') selected @endif>August</option>
                                                        <option value="Sep" @if (Auth::user()->month == 'Sep') selected @endif>September</option>
                                                        <option value="Oct" @if (Auth::user()->month == 'Oct') selected @endif>October</option>
                                                        <option value="Nov" @if (Auth::user()->month == 'Nov') selected @endif>November</option>
                                                        <option value="Dec" @if (Auth::user()->month == 'Dec') selected @endif>December</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="" name="year" class=" yearpicker form-control"
                                                        placeholder="Year" id="year" required="required">
                                                </div>



                                                <div class="col-md-12 my-3">
                                                    <input id="phone" name="phone" type="tel"
                                                        value="{{ Auth::user()->phone ?? '' }}" required="required"
                                                        placeholder="+1425632****">

                                                </div>


                                                <!-- city dropdwon -->

                                                <div class="input-text col-md-6">

                                                    <input id="myInput" type="" name="city" placeholder="City"
                                                        value="{{ Auth::user()->city ?? '' }}" required="required">

                                                </div>
                                                <div class="input-text col-md-6 w-100">

                                                    <input id="country_selector" name="country" onchange="university()"
                                                        type="" required="required">
                                                    <input id="country_short" value="{{ Auth::user()->country_short }}"
                                                        name="country_short" type="" hidden>
                                                    <label for="country_selector" style="display:none;">Select a country
                                                        here...</label>

                                                </div>

                                                <div class="container mt-3">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="" name="language" id="lang" hidden>
                                                            <select class="form-select form-select-lg mb-3 w-100"
                                                                id="languages-list" name="lang_short"
                                                                onchange="langshort(this)" required="required">
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <select class="form-select form-select-lg mb-3 w-100"
                                                                aria-label=".form-select-lg example" name="gender"
                                                                required="required">
                                                                <option value="" selected disabled>Gender</option>
                                                                <option value="male" @if (Auth::user()->gender == 'male') selected @endif>Male</option>
                                                                <option value="female" @if (Auth::user()->gender == 'female') selected @endif>Female
                                                                </option>
                                                                <option value="other" @if (Auth::user()->gender == 'other') selected @endif>Other
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="container form-group mt-3"></div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleText">About</label>
                                                        <textarea class="form-control" name="bio"
                                                            id="exampleFormControlTextarea1" rows="5"
                                                            placeholder="Write about yourself..."
                                                            required="required">{{ Auth::user()->bio ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="schedule-btn" id="general_btn"
                                                        style="width: 180px;float:right;font-size: 14px;" type="submit">Save
                                                        Changes</button>
                                                    <button type="button" role="button" type="button" id="general_loading"
                                                        disabled class="btn btn-primary mb-4 mr-2"
                                                        style="width: 180px;float:right;display:none">
                                                        <i class="fa fa-circle-o-notch fa-spin fa-1x fa-fw"></i> <span
                                                            class="sr-only">Loading...</span> Processing </button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade chee" id="v-pills-Education" role="tabpanel"
                                        aria-labelledby="v-pills-Education-tab">
                                        <form action="{{ route('student.education.update') }}" method="Post"
                                            enctype="multipart/form-data" id="studentEducationForm">
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h1>Education</h1>
                                                </div>
                                            </div>

                                            <div class="row mt-3">

                                                <div class="input-text col-md-6">
                                                    <select name="student_level"
                                                        class="form-select form-select-lg mb-3 w-100">
                                                        <option value="" disabled selected>Which grade you are in?</option>
                                                        <option value="1"
                                                            {{ Auth::user()->experty_level == 1 ? 'selected' : '' }}>Pre
                                                            Elementary School</option>
                                                        <option value="2"
                                                            {{ Auth::user()->experty_level == 2 ? 'selected' : '' }}>
                                                            Elementary School</option>
                                                        <option value="3"
                                                            {{ Auth::user()->experty_level == 3 ? 'selected' : '' }}>
                                                            Secondary School</option>
                                                        <option value="4"
                                                            {{ Auth::user()->experty_level == 4 ? 'selected' : '' }}>High
                                                            School</option>
                                                        <option value="5"
                                                            {{ Auth::user()->experty_level == 5 ? 'selected' : '' }}> Post
                                                            Secondary</option>

                                                    </select>
                                                </div>

                                                <div class="mt-3 col-md-12">
                                                    <p> <strong>What subject do you need help with?</strong> </p>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <select name="std_subj"
                                                                class="form-select form-select-lg mb-3 w-100">
                                                                <option value="" disabled selected>Main Subject</option>
                                                                @foreach ($subject_cat as $subject)
                                                                    <option value="{{ $subject->id }}"
                                                                        {{ Auth::user()->std_subj == $subject->id ? 'selected' : '' }}>
                                                                        {{ $subject->name }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <select name="std_learn"
                                                                class="form-select form-select-lg mb-3 w-100">
                                                                <option value="" disabled selected>Sub-Subject</option>
                                                                @foreach ($subjects as $subject)
                                                                    <option value="{{ $subject->id }}"
                                                                        {{ Auth::user()->std_learn == $subject->id ? 'selected' : '' }}>
                                                                        {{ $subject->name }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <button class="schedule-btn" id="education_btn"
                                                        style="width: 180px;float:right;font-size: 14px;" type="submit"
                                                        name="personal">Save Changes</button>
                                                    <button type="button" role="button" type="button" id="education_loading"
                                                        disabled class="btn btn-primary mb-4 mr-2"
                                                        style="width: 180px;float:right;display:none">
                                                        <i class="fa fa-circle-o-notch fa-spin fa-1x fa-fw"></i> <span
                                                            class="sr-only">Loading...</span> Processing </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
    <script src="{{ asset('assets/js/intlTelInput.js') }}"></script>
    <script src="{{ asset('assets/js/registration.js') }}"></script>
    <script src="{{ asset('assets/js/languages.js') }}"></script>
    <script src="{{ asset('assets/js/yearpicker.js') }}"></script>
    <script src="{{ asset('assets/js/googleapi.js') }}"></script>
    <script src="{{ asset('assets/js/countrySelect.js') }}"></script>
    @include('js_files.student.profileJs')
    <script>
        $(document).ready(function() {
            $("#year").yearpicker({
                year: {{ Auth::user()->year ?? '1990' }},
                startYear: 1950,
                endYear: 2050,
            });

        });

        $("#country_selector").countrySelect({
            defaultCountry: "{{ Auth::user()->country_short ?? '' }}",
            preferredCountries: ['ca', 'gb', 'us', 'pk']
        });

        $("#country_selector").on('change', function() {
            var short = $(this).countrySelect("getSelectedCountryData");
            $("#country_short").val(short.iso2);
        });

        var input = document.getElementById("phone");
        window.intlTelInput(input, {
            utilsScript: "{{ asset('assets/js/utils.js') }}",
        });
        // var languages_list = {...};
        (function() {
            var user_language_code = "{{ Auth::user()->language ?? 'en-US' }}";
            var option = '';
            option += '<option value="" selected disabled>Select Language</option>';
            for (var language_code in languages_list) {
                var selected = (language_code == user_language_code) ? ' selected' : '';
                option += '<option value="' + language_code + '"' + selected + '>' + languages_list[language_code] +
                    '</option>';
            }
            document.getElementById('languages-list').innerHTML = option;
        })();



        function checkLevel(opt) {
            var level = opt.options[opt.selectedIndex].getAttribute('level');
            var teach_levels = document.getElementById("levels").options;

            for (var i = 0; i < teach_levels.length; i++) {
                if (level >= teach_levels[i].value) {

                    for (var j = 0; j < i; j++) {
                        $("#levels").html("<option value='" + teach_levels[i].value + "'>" + teach_levels[i].innerHTML +
                            "</option>");
                    }
                }
            }
        }

        function langshort(opt) {
            var val = opt.options[opt.selectedIndex].innerHTML;
            $("#lang").val(val)
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);

                    $('.profile-img').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#edu2").click(function() {
            $("#edu").submit();
        });

        $('.extra-fields-customer').click(function() {
            count_field = document.querySelectorAll(".customer_records").length;

            var html = `<div class=" customer_records mt-5" id="record_` + count_field + `">
            <div class="row">
                <div class="input-text col-md-6">
                    <select name="degree[` + count_field + `]" onchange="checkLevel(this)" onchange="checkLevel(this)" class="form-select form-select-lg mb-3">
                        <option  selected="">Degree</option>
                        @foreach ($degrees as $degree)
                            <option value="{{ $degree->id }}">{{ $degree->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-text col-md-6">
                    <select name="major[` + count_field + `]" class="form-select form-select-lg mb-3">
                        <option value="0" selected="">Major</option>
                        @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="row mt-3">
                <div class="input-text col-md-6">

                    <input type="hidden" name="institute[` + count_field + `]" id="inst_id_` + count_field + `" value="">

                    <input class="form-control bs-autocomplete" id="ac-demo"
                        placeholder="University"
                        data-source="demo_source.php"
                        data-hidden_field_id="city-code" data-item_id="id"
                        data-item_label="name" autocomplete="off">

                </div>
                <div class="input-text col-md-6">
                    <input type="date" name="graduate_year[` + count_field + `]" class=" yearpicker form-control" id="grad-yea">
                </div>

                </div>`;
            $('.customer_records_dynamic').append(html);
            $('.dropify').dropify();
            // $(".form-select").select2();
            (function() {
                "use strict";
                var cities = @json($institutes);

                $('.bs-autocomplete').each(function() {
                    var _this = $(this),
                        _data = _this.data(),
                        _hidden_field = $('#' + _data.hidden_field_id);

                    _this.after(
                            '<div class="bs-autocomplete-feedback form-control-feedback"><div class="loader">Loading...</div></div>'
                        )
                        .parent('.form-group').addClass('has-feedback');

                    var feedback_icon = _this.next('.bs-autocomplete-feedback');
                    feedback_icon.hide();

                    _this.autocomplete({
                            minLength: 2,
                            autoFocus: true,

                            source: function(request, response) {
                                var _regexp = new RegExp(request.term, 'i');
                                var data = cities.filter(function(item) {
                                    return item.name.match(_regexp);
                                });
                                response(data);
                            },

                            search: function() {
                                feedback_icon.show();
                                _hidden_field.val('');
                            },

                            response: function() {
                                feedback_icon.hide();
                            },

                            focus: function(event, ui) {
                                _this.val(ui.item[_data.item_label]);
                                event.preventDefault();
                            },

                            select: function(event, ui) {
                                _this.val(ui.item[_data.item_label]);
                                _hidden_field.val(ui.item[_data.item_id]);
                                event.preventDefault();
                                $("#inst_id_" + count_field + "").val(ui.item.id)
                                console.log(event)
                            }
                        })
                        .data('ui-autocomplete')._renderItem = function(ul, item) {
                            return $('<li></li>')
                                .data("item.autocomplete", item)
                                .append('<a>' + item[_data.item_label] + '</a>')
                                .appendTo(ul);
                        };
                    // end autocomplete
                });
            })();
        });
    </script>
@endsection
