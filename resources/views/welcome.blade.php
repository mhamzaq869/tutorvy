@extends('layouts.app')

@section('content')

 <!-- learn more  -->
 <div class="container-fluid learn-more m-0 p-0">
    <div class="row">

        <div class="col-md-6 col-12 main-bg-height div-center">
            <div data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-offset="100"
                data-aos-duration="1000" class="text-sectiom-one">
                <p data-aos="flip-left" class="Learn-text Learn-text-home" style="line-height: 1.2;">
                    More beyond
                    the limitations of
                </p>
                <p class="where-text-home" style="line-height: 0.5;">
                    e-learning
                </p>
                <p class="there-text there-text-main mt-5">
                    There are many variations of passages available, but <br />
                    the majority have suffered alteration in some form.</p>
                <div class=" input-text-button-1 input-text-main mt-4">
                    <a href="{{ url('tutor') }}" class="btn"> For tutor &#8594;
                    </a>
                    <a href="{{ url('student') }}" class="ml-3 btn"> For student &#8594; </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 mt-0 top-home-img" data-aos="fade-left" data-aos-anchor="#example-anchor"
            data-aos-offset="100" data-aos-duration="1000" class="text-sectiom-one">
            <div class="image-section-image ">
                <div class="object">
                </div>
                <div class="tilt tilt-logo ml-3 mr-0" data-tilt data-tilt-glare="true" data-tilt-scale="1.1">
                    <span class="tilt-logo-inner">
                        <img src="assets/images/ico/home-image.svg" alt="home-image"
                            class="home-image w-100 none" />
                        <img src="assets/images/ico/mobile-homeimage.svg" alt="home-image"
                            class="home-image w-100 shows" />
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 main-bg-height-show">
            <div class="container text-sectiom-one text-center">
                <span data-aos="flip-left" class="Learn-text Learn-text-home font-weight800"
                    style="line-height: 1.2;">
                    More beyond
                    the limitation <br /> of
                </span>
                <span class="where-text font-weight800" style="line-height: 0.5;">
                    e-learning
                </span>

                <p class="there-text there-text-main ml-4 mr-4">
                    There are many variations of passages available, but
                    the majority have suffered alteration in some form.</p>
                <div class=" input-text-button-1 input-text-main mt-4">
                    <a href="{{ url('tutor') }}" class="btn"> For tutor &#8594;
                    </a>
                    <a href="{{ url('student') }}" class="ml-3 btn"> For student &#8594; </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- how work -->
<div class="container margin-top" data-aos="fade-up" data-aos-duration="1000" class=" mt-5">
    <br /> <br />
    <div class="row scroll-logos">
        <div class="col-md-1 col-0"></div>
        <div class="col-md-2 col-4 m-0 p-0">
            <img src="assets/images/home/logo-home-1.svg" alt="home1" class="w-100" />
        </div>
        <div class="col-md-2 col-4 m-0 p-0">
            <div>
                <img src="assets/images/home/logo-home-2.svg" alt="home1" class="w-100" />
            </div>
        </div>
        <div class="col-md-2 col-4 m-0 p-0">
            <div class="">
                <img src="assets/images/home/logo-home-3.svg" alt="home1" class="w-100" />
            </div>
        </div>
        <div class="col-md-2 col-4 m-0 p-0">
            <div class="">
                <img src="assets/images/home/logo-home-4.svg" alt="home1" class="w-100" />
            </div>
        </div>
        <div class="col-md-2 col-4 m-0 p-0">
            <div class="">
                <img src="assets/images/home/logo-home-5.svg" alt="home1" class="w-100" />
            </div>
        </div>
        <div class="col-md-1 col-0"></div>
    </div>
    <!-- find tutuor -->
    <div class="col-md-5 mt-5 shows" data-aos="fade-up" data-aos-duration="1000">
        <div class="">
            <div class="tilt tilt-logo" data-tilt data-tilt-glare="true" data-tilt-scale="1.1">
                <span class="tilt-logo-inner">
                    <img src="assets/images/ico/personalize-image.svg" alt="personalize" class="w-100" />
                </span>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3 std-top">
    <br /> <br />
    <div class="row">
        <div class="col-md-7" data-aos="fade-up" data-aos-duration="1000">
            <div class="button-learn" style="position: relative;top: 30px;">
                <a class="btn none w-25">
                    FOR STUDENTS
                </a>
            </div>
            <div class="m-0 p-0 text-sectiom-one mt-5 text-sectiom-one-top text-xs-center">
                <span class="Learn-texts Learn-texts-mobile font-size font-weight800">
                    Your personalized learning
                </span>
                <span class="where-texts where-texts-mobile font-size font-weight800">
                    experience
                </span>
            </div>
            <div class="row mt-4" data-aos-anchor="#example-anchor" data-aos-offset="500"
                data-aos-duration="1000">
                <div class="col-md-6 text-xs-center">
                    <div class="">
                        <span class="number-1 " style="font-size: 60px;opacity: 0.15;">1</span>
                        <span class="number-1 number-3" style="position: relative;left: -27px;top: 10px;">Expert
                            tutors</span>
                        <p class="number-2">There are many variations of passages available, but the
                            majority have suffered alteration in some form.</p>
                    </div>
                </div>
                <div class="col-md-6 text-xs-center">
                    <div class="ml-3">
                        <span class="number-1" style="font-size: 60px;opacity: 0.15;">2</span>
                        <span class="number-1 number-3" style="position: relative;left: -42px;top: 10px;">Learn
                            anytime</span>
                        <p class="number-2">There are many variations of passages available, but the
                            majority have suffered alteration in some form.</p>
                    </div>
                </div>
                <div class="col-md-6 text-xs-center">
                    <div class="">
                        <span class="number-1" style="font-size: 60px;opacity: 0.15;">3</span>
                        <span class="number-1 number-3" style="position: relative;left: -39px;top: 10px;">Expert
                            tutors</span>
                        <p class="number-2">There are many variations of passages available, but the
                            majority have suffered alteration in some form.</p>
                    </div>
                </div>
                <div class="col-md-6 text-xs-center">
                    <div class="ml-3">
                        <span class="number-1" style="font-size: 60px;opacity: 0.15;">4</span>
                        <span class="number-1 number-3" style="position: relative;left: -44px;top: 10px;">Learn
                            anytime</span>
                        <p class="number-2">There are many variations of passages available, but the
                            majority have suffered alteration in some form.</p>
                    </div>
                </div>
                <div class="input-text input-text-main input-text-main-mob mt-4 d-flex"
                    style="position: relative;left: -4px;">
                    <a href="{{ url('student') }}" class="none">
                        <input type="submit" value="Learn more">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-5 mt-5 none" style="height: 400px;" data-aos="fade-up" data-aos-duration="1000">
            <div class="" style="position: relative;top: 30px;">
                <p class="there-text mt-4">
                    There are many variations of passages available, but
                    the majority have suffered alteration in some form.
                </p>
                <div class="tilt tilt-logo" data-tilt data-tilt-glare="true" data-tilt-scale="1.1">
                    <span class="tilt-logo-inner">
                        <img src="assets/images/ico/personalize-image.svg" alt="personalize" class="w-100" />
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end -->
<div class="container mt-5 margin-top-mobile" data-aos="fade-up" data-aos-duration="1000">
    <br />
    <div class="row">
        <div class="col-md-12">
            <div class="bg-section text-center">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mx-auto mt-4">
                                <br />
                                <button class="white-btn btn">For tutors</button>
                                <br />
                                <br />
                                <span data-aos="flip-left"
                                    class="Learn-texts Learn-texts-mobile font-size font-weight800 mt-5">
                                    Teach anytime, get
                                </span>
                                <span class="where-texts where-texts-mobile font-size font-weight800">
                                    best rate
                                </span>
                                <p class="there-text none mt-4">
                                    There are many variations of passages available, but <br />
                                    the majority have suffered alteration in some form.
                                    <br />
                                </p>
                                <div class="container mt-4">
                                    <div class="row">
                                        <div class="col-md-3">

                                        </div>
                                        <div class="col-md-7 col-12 div-center-icons">
                                            <div class="contanier">
                                                <div class="row">
                                                    <div class="col-md-2 col-2">
                                                        <img src="assets/images/ico/book-icon-std.svg"
                                                            alt="book-icon-std" class="book-icons">
                                                        <p class="number-4 mt-3">Find tutor</p>
                                                    </div>
                                                    <div class="col-md-2 col-2 m-0 p-0 mt-2">
                                                        <img src="assets/images/ico/line-icon.png" alt=""
                                                            class="w-100">
                                                    </div>
                                                    <div class="col-md-2 col-2 m-0">
                                                        <img src="assets/images/ico/icon1.png"
                                                            alt="book-icon-std" class="book-icons">
                                                        <p class="number-4 mt-3 m-0 p-0">Take class anytime</p>
                                                    </div>
                                                    <div class="col-md-2 col-2 m-0 p-0 mt-4">
                                                        <img src="assets/images/ico/line-icons.png" alt=""
                                                            class="w-100">
                                                    </div>
                                                    <div class="col-md-2 col-2">
                                                        <img src="assets/images/ico/icon2.png"
                                                            alt="book-icon-std" class="book-icons">
                                                        <p class="number-4 mt-3">Spread knowledge</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-2">
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ url('tutor') }}" class="view-text btn mt-4 pl-3 pr-3">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="mt-3">
                                <img src="assets/images/ico/Group-download.svg" width="100%" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile view -->
<div class="container pb-3 mt-5" data-aos="fade-up" data-aos-duration="1000">
    <div class="why-text text-center">
        <p class="Learn-texts font-size font-weight800 why-text-center">
            Why
            <span class="where-texts where-texts-mobile font-size font-weight800">
                Tutorvy
            </span>
        </p>
        <span class="there-text shows">
            There are many variations of passages available, but
            the majority have suffered alteration in some form.
        </span>
        <span class="there-text none">
            There are many variations of passages available, but<br />
            the majority have suffered alteration in some form.
        </span>
        <br />
    </div>
</div>
<div class="container mt-4" data-aos="fade-up" data-aos-duration="1000">
    <div class="row">
        <div class="col-md-3 pb-5 text-center">
            <div class="text-center">
                <img src="assets/images/tutor.png" alt="tutor">
                <p class="text-expert mt-4">
                    Expert tutors
                </p>
                <span class="there-text mt-0">
                    There are many variations of passages available, but the majority
                </span>
            </div>
        </div>
        <div class="col-md-3 pb-5">
            <div class="text-center">
                <img src="assets/images/clock.png" alt="tutor">
                <p class="text-expert mt-4">
                    Expert tutors
                </p>
                <span class="there-text mt-0">
                    There are many variations of passages available, but the majority
                </span>
            </div>
        </div>
        <div class="col-md-3 pb-5">
            <div class="text-center">
                <img src="assets/images/learning.png" alt="tutor">
                <p class="text-expert mt-4">
                    Expert tutors
                </p>
                <span class="there-text mt-0">
                    There are many variations of passages available, but the majority
                </span>
            </div>
        </div>
        <div class="col-md-3 pb-5">
            <div class="text-center">
                <img src="assets/images/salary.png" alt="tutor">
                <p class="text-expert mt-4">
                    Expert tutors
                </p>
                <span class="there-text mt-0">
                    There are many variations of passages available, but the majority
                </span>
            </div>
        </div>
    </div>
</div>
<hr />
<!-- cover subject -->
<div class="container mt-5 margin-top-mobile" data-aos="fade-up" data-aos-duration="1000">
    <div class=" text-center text-xs-center">
        <p class="Learn-texts  Learn-texts-mobile font-size font-weight800">
            Covering all
            <span class="where-texts where-texts-mobile font-size font-weight800">
                subject
            </span>
        </p>
        <span class="there-text shows mt-0">
            There are many variations of passages available, but
            the majority have suffered alteration in some form.
        </span>
        <span class="there-text none">
            There are many variations of passages available, but<br />
            the majority have suffered alteration in some form.
        </span>
    </div>
    <!-- tabs -->
    <div class="row mt-5">
        <div class="col-md-3 col-12 ">
            <div class="tab-mobile tab">
                @foreach($main_sub as $sub_cat)
                    <button class="tablinks {{($sub_cat->id == 1) ? 'active': ''}}" id="defaultOpen_{{$sub_cat->id}}" onclick="getSubSubject({{$sub_cat->id}})">
                        {{$sub_cat->name}}
                    </button>
                @endforeach
            </div>
        </div>
        <div class="col-md-9">
            <div id="subjects">
                <div id="1">
                    <div class="row book-luli" id="subSubjects">
                        @foreach ($subjects as $i => $subject)
                                <div class="col-md-4">
                                    <a href="#"  class="">
                                        {{ $subject->name }}
                                    </a>        
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="col-md-9">
            <div id="London" class="tabcontent show" style="display: block;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-4 m-0 p-0">
                            <ul class="book-luli">
                                <li>Arabic</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-4">
                            <ul class="book-luli">
                                <li>English</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>German</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-4">
                            <ul class="book-luli">
                                <li>Arabic</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Paris" class="tabcontent">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-4 m-0 p-0">
                            <ul class="book-luli">
                                <li>Arabic</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-4">
                            <ul class="book-luli">
                                <li>English</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>German</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-4">
                            <ul class="book-luli">
                                <li>Arabic</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="ForeignLanguage" class="tabcontent">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-4 m-0 p-0">
                            <ul class="book-luli">
                                <li>Arabic</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-4">
                            <ul class="book-luli">
                                <li>English</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>German</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-4">
                            <ul class="book-luli">
                                <li>Arabic</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Tokyo" class="tabcontent">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-4 m-0 p-0">
                            <ul class="book-luli">
                                <li>Arabic</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-4">
                            <ul class="book-luli">
                                <li>English</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>German</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-4">
                            <ul class="book-luli">
                                <li>Arabic</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div id="science" class="tabcontent">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-4 m-0 p-0">
                            <ul class="book-luli">
                                <li>Arabic</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-4">
                            <ul class="book-luli">
                                <li>English</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>German</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-4">
                            <ul class="book-luli">
                                <li>Arabic</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div id="Humanities" class="tabcontent">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-4 m-0 p-0">
                            <ul class="book-luli">
                                <li>Arabic</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-4">
                            <ul class="book-luli">
                                <li>English</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>German</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-4">
                            <ul class="book-luli">
                                <li>Arabic</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div id="Professional" class="tabcontent">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-4 m-0 p-0">
                            <ul class="book-luli">
                                <li>Arabic</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-4">
                            <ul class="book-luli">
                                <li>English</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>German</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-4">
                            <ul class="book-luli">
                                <li>Arabic</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div id="Math" class="tabcontent">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-4 m-0 p-0">
                            <ul class="book-luli">
                                <li>Arabic</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-4">
                            <ul class="book-luli">
                                <li>English</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>German</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-4">
                            <ul class="book-luli">
                                <li>Arabic</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div id="TestPrep" class="tabcontent">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-4 m-0 p-0">
                            <ul class="book-luli">
                                <li>Arabic</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-4">
                            <ul class="book-luli">
                                <li>English</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>German</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-4">
                            <ul class="book-luli">
                                <li>Arabic</li>
                                <li>Bengali</li>
                                <li>Bulgarian</li>
                                <li>Cantonese</li>
                                <li>Coptic</li>
                                <li>Danish</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                                <li>Macedonian</li>
                                <li>Arabic</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
</div>
<!-- course thought -->
<div class="container-fluid mt-3 std-top">
    <br /> <br />
    <div class="row">
        <div class="col-md-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="text-sectiom-tow">
                <p class="Learn-texts course-text Learn-texts-mobile  font-size font-weight800">
                    Courses taught by
                </p>
                <p class="where-texts course-text Learn-texts-mobile font-size font-weight800"
                    style="line-height: 0.5;">
                    top tutors
                </p>
                <p class="there-text there-text-left mt-4">
                    There are many variations of passages available, but
                    the majority have suffered alteration in some form.</p>
                <div class="input-text-1 input-text-center mt-4">
                    <a href="{{ url('course') }}">
                        <input type="submit" value="View all courses" class="w-50">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-12" data-aos="fade-up" data-aos-duration="1000">
            <div class="container-fluid m-0 p-0">
                <div class="row">
                    <img src="assets/images/ico/Group 11621.svg" class="w-100 courses-image" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile downliad app -->
<div class="container margin-top" data-aos="fade-up" data-aos-duration="1000">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10 mt-5 ">
            <!-- <br /> -->
            <div class="mibile-image pt-4">
                <br />
                <span class="font-weight800 font-size mobile-down">
                    Download
                    <span class="app-text">
                        the app
                    </span>
                </span>

                <p class="there-text none">
                    There are many variations of passages available, but <br />
                    the majority have suffered alteration in some form.
                    <br />
                </p>
                <p class="there-text shows mt-3">
                    There are many variations of passages available, but
                    the majority have suffered alteration in some form.
                    <br />
                </p>
                <!-- <br /> -->
                <div class="btn-socail mt-4">
                    <img class="w-25 ml-5" src="assets/images/g-btn.png" alt="img">
                    <img class="w-25 ml-3" src="assets/images/Apple-btn.png" alt="img">
                </div>
            </div>
            <div class="margin-top-image">
                <img src="assets/images/mobile-image.png" class="w-100 none" alt="icon">
                <img src="assets/images/ico/mobile-advance.svg" class="w-100 shows" alt="icon">
            </div>
        </div>
    </div>
</div>
<!-- our happy -->
<div class="container mt-5" data-aos="fade-up" data-aos-duration="1000">
    <br /><br /><br />
    <div class="row mobile-top-happy ">
        <div class="col-md-6 text-xs-center">
            <span class="Learn-texts Learn-texts-mobile font-size font-weight800">
                Our happy
                <span class="where-texts Learn-texts-mobile font-size font-weight800">
                    users
                </span>
            </span>
        </div>
        <div class="col-md-6">
            <p class="there-text mt-4">
                There are many variations of passages available, but
                the majority have suffered alteration in some form.
            </p>
        </div>
    </div>
    <br />
</div>
<div class="container-fluid mt-5 carousel-hide">
    <div class="container-fluid">
        <div class="row m-0 p-0" style="overflow: hidden;">
            <div class="col-md-4 col-12 mb-3 train ">
                <div class="pt-4 pb-3 bg-card-std" style="background-color: #F9FBFF;">
                    <div class=" ml-4 d-flex ">
                        <img src="assets/images/card-profile.png" height="50px" alt="card-profile">
                        <span class="std-name ml-3">Harram Altaf
                            <p class="std-text">Student</p>
                        </span>
                        <span class="date-year">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            4.0
                        </span>
                    </div>
                    <p class="there-text mt-2 ml-3">
                        It is a long established fact that a reader will be distracted
                        by the readable content.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-3 train ">
                <div class="pt-4 pb-3 bg-card-std" style="background-color: #F9FBFF;">
                    <div class=" ml-4 d-flex ">
                        <img src="assets/images/card-profile.png" height="50px" alt="card-profile">
                        <span class="std-name ml-3">Harram Altaf
                            <p class="std-text">Student</p>
                        </span>
                        <span class="date-year">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            4.0
                        </span>
                    </div>
                    <p class="there-text mt-2 ml-3">
                        It is a long established fact that a reader will be distracted
                        by the readable content.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-3 train">
                <div class="pt-4 pb-3 bg-card-std" style="background-color: #F9FBFF;">
                    <div class=" ml-4 d-flex ">
                        <img src="assets/images/card-profile.png" height="50px" alt="card-profile">
                        <span class="std-name ml-3">Harram Altaf
                            <p class="std-text">Student</p>
                        </span>
                        <span class="date-year">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            4.0
                        </span>
                    </div>
                    <p class="there-text mt-2 ml-3">
                        It is a long established fact that a reader will be distracted
                        by the readable content.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="pages">
        <div class="panes">
            <div>Looping Horizontal Scroll</div>
        </div>
        <div class="panes">
            <div>2</div>
        </div>
        <div class="panes">
            <div>3</div>
        </div>
        <div class="panes">
            <div class="row" style="overflow: hidden;">
                <div class="col-md-4 mb-3">
                    <div class="pt-4 pb-3 bg-card-std" style="background-color: #F9FBFF;">
                        <div class=" ml-4 d-flex ">
                            <img src="assets/images/card-profile.png" height="50px" alt="card-profile">
                            <span class="std-name ml-3">Harram Altaf
                                <p class="std-text">Student</p>
                            </span>
                            <span class="date-year"> 02 March 2021</span>
                        </div>
                        <p class="there-text mt-2 ml-3">
                            It is a long established fact that a reader will <br /> be distracted
                            by the readable content.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-3 ">
                    <div class="pt-4 pb-3 bg-card-std" style="background-color: #F9FBFF;">
                        <div class=" ml-4 d-flex ">
                            <img src="assets/images/card-profile.png" height="50px" alt="card-profile">
                            <span class="std-name ml-3">Harram Altaf
                                <p class="std-text">Student</p>
                            </span>
                            <span class="date-year"> 02 March 2021</span>
                        </div>
                        <p class="there-text mt-2 ml-3">
                            It is a long established fact that a reader will <br /> be distracted
                            by the readable content.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="pt-4 pb-3 bg-card-std" style="background-color: #F9FBFF;">
                        <div class=" ml-4 d-flex ">
                            <img src="assets/images/card-profile.png" height="50px" alt="card-profile">
                            <span class="std-name ml-3">Harram Altaf
                                <p class="std-text">Student</p>
                            </span>
                            <span class="date-year"> 02 March 2021</span>
                        </div>
                        <p class="there-text mt-2 ml-3">
                            It is a long established fact that a reader will <br /> be distracted
                            by the readable content.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="panes ml-4">
            <div>
                <div class="row" style="overflow: hidden;">
                    <div class="col-md-4 mb-3">
                        <div class="pt-4 pb-3 bg-card-std" style="background-color: #F9FBFF;">
                            <div class=" ml-4 d-flex ">
                                <img src="assets/images/card-profile.png" height="50px" alt="card-profile">
                                <span class="std-name ml-3">Harram Altaf
                                    <p class="std-text">Student</p>
                                </span>
                                <span class="date-year"> 02 March 2021</span>
                            </div>
                            <p class="there-text mt-2 ml-3">
                                It is a long established fact that a reader will <br /> be distracted
                                by the readable content.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 ">
                        <div class="pt-4 pb-3 bg-card-std" style="background-color: #F9FBFF;">
                            <div class=" ml-4 d-flex ">
                                <img src="assets/images/card-profile.png" height="50px" alt="card-profile">
                                <span class="std-name ml-3">Harram Altaf
                                    <p class="std-text">Student</p>
                                </span>
                                <span class="date-year"> 02 March 2021</span>
                            </div>
                            <p class="there-text mt-2 ml-3">
                                It is a long established fact that a reader will <br /> be distracted
                                by the readable content.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 ">
                        <div class="pt-4 pb-3 bg-card-std" style="background-color: #F9FBFF;">
                            <div class=" ml-4 d-flex ">
                                <img src="assets/images/card-profile.png" height="50px" alt="card-profile">
                                <span class="std-name ml-3">Harram Altaf
                                    <p class="std-text">Student</p>
                                </span>
                                <span class="date-year"> 02 March 2021</span>
                            </div>
                            <p class="there-text mt-2 ml-3">
                                It is a long established fact that a reader will <br /> be distracted
                                by the readable content.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panes">
            <div>Last</div>
        </div>
        <div class="panes">
            <div>Looping Horizontal Scroll</div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="mx-auto mt-4 input-text">
                <input type="submit" value="Rate us" />
            </div>
        </div>
    </div>
</div>
<hr />
<div class="container-fluid shows">
    <div class="row m-0 p-0 flex-scroll">
        <div class="col-md-4 col-10 mb-3 card-mobile">
            <div class="pt-3 pb-1 bg-card-std" style="background-color: #F9FBFF;">
                <div class=" ml-4 d-flex ">
                    <img src="assets/images/card-profile.png" height="50px" alt="card-profile">
                    <span class="std-name ml-3">Harram Altaf
                        <p class="std-text">Student</p>
                    </span>
                </div>
                <span class="date-year">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    4.0
                </span>
                <p class="there-text mt-2 ml-1 m-4 text-left">
                    It is a long established fact that a reader
                    will be distracted
                    by the readable content.
                </p>
            </div>
        </div>
        <div class="col-md-4 col-10 mb-3 card-mobile">
            <div class="pt-3 pb-1 bg-card-std" style="background-color: #F9FBFF;">
                <div class=" ml-4 d-flex ">
                    <img src="assets/images/card-profile.png" height="50px" alt="card-profile">
                    <span class="std-name ml-3">Harram Altaf
                        <p class="std-text">Student</p>
                    </span>
                </div>
                <span class="date-year">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    4.0
                </span>
                <p class="there-text mt-2 ml-1 m-4 text-left">
                    It is a long established fact that a reader
                    will be distracted
                    by the readable content.
                </p>
            </div>
        </div>
        <div class="col-md-4 col-10 mb-3 card-mobile">
            <div class="pt-3 pb-1 bg-card-std" style="background-color: #F9FBFF;">
                <div class=" ml-4 d-flex ">
                    <img src="assets/images/card-profile.png" height="50px" alt="card-profile">
                    <span class="std-name ml-3">Harram Altaf
                        <p class="std-text">Student</p>
                    </span>
                </div>
                <span class="date-year">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    4.0
                </span>
                <p class="there-text mt-2 ml-1 m-4 text-left">
                    It is a long established fact that a reader
                    will be distracted
                    by the readable content.
                </p>
            </div>
        </div>
        <div class="col-md-4 col-10 mb-3 card-mobile">
            <div class="pt-3 pb-1 bg-card-std" style="background-color: #F9FBFF;">
                <div class=" ml-4 d-flex ">
                    <img src="assets/images/card-profile.png" height="50px" alt="card-profile">
                    <span class="std-name ml-3">Harram Altaf
                        <p class="std-text">Student</p>
                    </span>
                </div>
                <span class="date-year">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    4.0
                </span>
                <p class="there-text mt-2 ml-1 m-4 text-left">
                    It is a long established fact that a reader
                    will be distracted
                    by the readable content.
                </p>
            </div>
        </div>
        <div class="col-md-4 col-10 mb-3 card-mobile">
            <div class="pt-3 pb-1 bg-card-std" style="background-color: #F9FBFF;">
                <div class=" ml-4 d-flex ">
                    <img src="assets/images/card-profile.png" height="50px" alt="card-profile">
                    <span class="std-name ml-3">Harram Altaf
                        <p class="std-text">Student</p>
                    </span>
                </div>
                <span class="date-year">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    4.0
                </span>
                <p class="there-text mt-2 ml-1 m-4 text-left">
                    It is a long established fact that a reader
                    will be distracted
                    by the readable content.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="mx-auto mt-4 input-text">
                <input type="submit" value="Rate us" />
            </div>
        </div>
    </div>
</div>
<!-- why tutor -->
<div class="container mt-5">
    <div class=" text-center ">
        <p class="Learn-texts Learn-texts-mobile  font-size font-weight800">
            Join our
            <span class="where-texts Learn-texts-mobile font-size font-weight800">
                newsletter
            </span>
        </p>
        <p class="there-text none">
            There are many variations of passages available, but <br />
            the majority have suffered alteration in some form.
            <br />
        </p>
        <p class="there-text shows">
            There are many variations of passages available, but
            the majority have suffered alteration in some form.
            <br />
        </p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col align-self-center">
            <div class="input-section text-center">
                <div class="input-text mt-5 input-sub">
                    <input type="text" placeholder="Enter your email" class="inputs">
                    <input type="submit" class="mobile-input inputss" value="Subscribe">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- why tutor end -->

@endsection

