@extends('tutor.layouts.app')
<style>
  .chee {
    background-color: transparent !important;
    border-right: 5px solid transparent !important;
    padding-left: 20px;
}
.liner {
    width: 25%  !important;
}
#step_1{
    margin-left:23%;
}
#step_1 span{
    margin-left:34%;
}
#step_2 span{
    margin-left:58%;
}
</style>
@section('content')
 <!-- top Fixed navbar End -->
 <section>

    <div class="container">
        <p id="sidenav-toggles" class="heading-first  mr-3 mb-4 ml-2">
            Bookings
        </p>
    </div>
    <div class="container">
        <div class="row bg-white ml-2 mr-2">
            <div class="col-md-12">
                <div class="board">
                    <ul class="nav nav-tabs">
                        <div class="liner"></div>
                        <li rel-index="0" class="bordr-none active chee" id="step_1">
                            <a href="#step-1" aria-controls="step-1" role="tab" data-toggle="tab">
                                <span>
                                    <img class="mt-3" src="../assets/images/ico/profile-ico.png" alt="img">
                                </span>
                            </a>
                            <p class="register-content">Personal</p>
                        </li>
                        <li rel-index="1" class="bordr-none  chee" id="step_2">
                            <a href="#step-2" aria-controls="step-2" class="disabled" role="tab" data-toggle="tab">
                                <span>
                                    <img class="mt-3" src="../assets/images/ico/profile-ico.png" alt="img">
                                </span>
                            </a>
                            <p class="register-content">Find Tutor</p>
                        </li>
                    </ul>
                </div>
                <div class="tab-content mt-5">
                    <div role="tabpanel" class="border-right tab-pane active" id="step-1">
                        <div class="col-md-12">
                            <p class="heading-third mt-3">Personal information</p>
                            <div class="row mt-5">
                                    <div class="input-text col-md-6">
                                        <select name="institute[]" class="form-select form-select-lg"
                                            aria-label=".form-select-lg example">
                                            <option value="Select SUbject">Select SUbject</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                    <div class="input-text col-md-6 d-block">
                                        <input type="text" class="form-control " name=""
                                            placeholder="Type your Topic" value="">
                                    </div>
                                </div><div class="row mt-3">
                                    <div class="input-text col-md-8">
                                        <input type="text"class="form-control " name=""
                                            placeholder="What is the Question?" value="">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="input-text col-md-12 ">
                                        <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Write Your Answer"></textarea>
                                    </div>
                                </div>
                              <div class="row mt-3">
                                    <div class="  col-md-12">
                                        <label for="" class="col-md-12 pl-0"><b>Upload any attachment if you want</b></label>
                                        <input type="file" class="dropify" name="upload[]" id="" data-default-file="">
                                    </div>
                              </div>
                                <div class="row mt-3">
                                    <div class="input-text col-md-6">
                                        <select name="institute[]" class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example">
                                            <option value="">Class Date</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                    <div class="input-text col-md-6">
                                        <select name="institute[]" class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example">
                                            <option value="">Class Time</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="input-text col-md-6">
                                        <select name="institute[]" class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example">
                                            <option value="">Lesson Duration</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                    <div class="input-text col-md-6">
                                        <select name="institute[]" class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example">
                                            <option value="">Select Location</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="row mt-3">
                                <div class="col-12" >
                                    <!-- <input type="submit"
                                        class="btn btn-registration btn-lg cencel-btn nextBtn pull-right ml-5"
                                        value=" Save for Later"> -->

                                    <button id="step-1-next" type="button"
                                        class="btn btn-lg btn-registration schedule-btn  nextBtn pull-right ml-4 ">
                                        &nbsp; Apply Filters &nbsp;
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane border-right" id="step-2"
                        style="padding-bottom: 100px;background-color: white;">
                        <div class="col-md-12 ">
                            <div class="card">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
