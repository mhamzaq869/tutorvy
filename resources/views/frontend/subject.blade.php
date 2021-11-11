@extends('layouts.app')

@section('content')
     <!-- subject section -->

     <div class="text-center text-work-res  mt-5" data-aos="fade-up" data-aos-duration="1000">
        <br />
        <br />
        <br />
        <br />
<<<<<<< HEAD
        <br />
=======
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
        <span class="text-work" style="line-height: 1;">
            <span class="text-how">
                Offering
            </span>
            Subjects
        </span>
        <br />
        <p class="there-text none mt-3">
            There are many variations of passages available, but <br />
            the majority have suffered alteration in some form.
        </p>
        <p class="there-text shows mt-2">
            There are many variations of passages available, but
            the majority have suffered alteration in some form.
        </p>
    </div>
    <div class="container margin-top mt-5 ">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-12 bg-subject bg-subject1">
                <div class="mobile-view-input">
<<<<<<< HEAD
                    <input type="text" class="input-subject" placeholder="Subject category">
                    <input type="submit" class="input-submite input-submite1" value="Search">
=======
                  
                        <select name="" class="input-subject" id="">
                            <option value="">Select Subject</option>

                            @foreach($main_sub as $sub_cat)
                            <option value="{{$sub_cat->id}}" id="defaultOpen_{{$sub_cat->id}}" onclick="getSubSubject({{$sub_cat->id}})">
                                    {{$sub_cat->name}}
                            </option>
                        @endforeach
                        </select>
                        <!-- <input type="text" class="input-subject" placeholder="Subject category"> 
                        <input type="submit" class="input-submite input-submite1" value="Search">-->
               
                   
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
                </div>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="container mt-5">
        <!-- tabs -->
        <div class="row mt-5">
            <div class="col-md-3 col-12 ">
                <div class="tab-mobile tab">
<<<<<<< HEAD
                    <button class="tablinks" id="defaultOpen" onclick="openCity(event, 'London')">
                        ComputerScience
                    </button>
                    <button class="tablinks" onclick="openCity(event, 'Paris')">Engineering</button>
                    <button class="tablinks" onclick="openCity(event, 'ForeignLanguage')">ForeignLanguage</button>
                    <button class="tablinks" onclick="openCity(event, 'Tokyo')">History</button>
                    <button class="tablinks" onclick="openCity(event, 'science')" id="">
                        Science
                    </button>
                    <button class="tablinks" onclick="openCity(event, 'Humanities')">Humanities</button>
                    <button class="tablinks" onclick="openCity(event, 'Professional')">Professional</button>
                    <button class="tablinks" onclick="openCity(event, 'Math')" id="">
                        Math</button>
                    <button class="tablinks" onclick="openCity(event, 'TestPrep')">TestPrep</button>
                </div>
            </div>
            <div class="col-md-9">
                <div id="London" class="tabcontent">
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
=======
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
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="sub-image">
                    <img src="../assets/images/subjetc-image.png" class="w-100" alt="sub-image">
                </div>
                <div class="sub-card text-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class=" mt-5">
                                    <div class="ml-3  ">
                                        <span class="text-how">
                                            Request an
                                            <span class="text-work">
                                                Subject
                                            </span>
                                        </span>
                                        <br />
                                        <span class="there-text">
                                            There are many variations of passages available, but
                                            the majority have suffered alteration in some form.
                                        </span>
                                        <div class="container mt-4">
                                            <div class="row">
<<<<<<< HEAD
                                                <div class="d-flex">
                                                    <div class="input-text text-mobile-sub  pt-3 pb-3 input-subs"
                                                        style="display: flex;">
=======
                                                <div class="col-md-12">
                                                    <div class="input-text text-mobile-sub  pt-3 pb-3 input-subs"
                                                        >
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
                                                        <input type="text" class="card-input ml-3"
                                                            placeholder="Enter your name">
                                                        <input type="text" class="card-input ml-4 mr-3"
                                                            placeholder="Enter your email">
                                                    </div>
                                                </div>
<<<<<<< HEAD
                                                <div class="d-flex">
                                                    <div class="input-text text-mobile-sub input-subs"
                                                        style="display: flex;">
=======
                                                <div class="col-md-12">
                                                    <div class="input-text text-mobile-sub input-subs"
                                                       >
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
                                                        <input type="text" class="card-input ml-3"
                                                            placeholder="Are you a">
                                                        <input type="text" class="card-input ml-4 mr-3"
                                                            placeholder="Subject name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-text input-text1 mt-4"
                                                style="text-align: right;margin-right: 15px;">
                                                <input type="submit" value="Request">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container input-responsive mt-5">
        <div class=" text-center ">
            <span class="text-how">
                Join our
                <span class="text-work">
                    newsletter
                </span>
            </span>
            <br />
            <span class="there-text">
                There are many variations of passages available, but<br />
                the majority have suffered alteration in some form.
            </span>

        </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col align-self-center">
                <div class="input-section text-center">
                    <div class="input-text mt-5 pt-4 input-sub">
                        <input type="text" placeholder="Enter your email" class="inputs">
                        <input type="submit" class="mobile-input inputss" value="Subscribe">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
