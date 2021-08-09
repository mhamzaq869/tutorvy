@extends('tutor.layouts.app')

@section('content')
<section>
    <div class="container">
        <p class="heading-first mb-4 ml-3">
            Settings
        </p>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'tab1')"
                            id="defaultOpen">General</button>
                        <button class="tablinks" onclick="openCity(event, 'tab2')">Security</button>
                        <button class="tablinks" onclick="openCity(event, 'tab3')">Privacy</button>
                        <button class="tablinks" onclick="openCity(event, 'tab4')">Account</button>
                        <button class="tablinks" onclick="openCity(event, 'tab5')">Account</button>
                    </div>
                </div>
                <div class="col-md-9 bg-color">

                    <div class="settings-data">
                        <div id="tab1" class="tabcontent">
                            <div class='container'>
                                <div class="col-md-12">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade  " id="v-pills-home" role="tabpanel"
                                            aria-labelledby="v-pills-home-tab">1</div>
                                        <div class="bg-white tab-pane fade show active" id="v-pills-profile"
                                            role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            <div class="container">
                                                <p class="heading-third">Security</p>
                                                <p class="heading-forth">Change password</p>

                                            </div>

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-6">

                                                        <label>Password</label>
                                                        <div class="form-group pass_show">
                                                            <input type="password" value="" class="form-control"
                                                                placeholder=" ***********">
                                                        </div>
                                                        <label>New Password</label>
                                                        <div class="form-group pass_show">
                                                            <input type="password" value="" class="form-control"
                                                                placeholder="***********">
                                                        </div>
                                                        <label class="heading-fifth">Re-enter new
                                                            password</label>
                                                        <div class="form-group pass_show">
                                                            <input type="password" value="" class="form-control"
                                                                placeholder="***********">
                                                        </div>
                                                        <div class="float-right">
                                                            <button class="schedule-btn">Save changes</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                            aria-labelledby="v-pills-messages-tab">3</div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                            aria-labelledby="v-pills-settings-tab">4</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div id="tab2" class="tabcontent">
                            <h3>Security</h3>
                        </div>
                        <div id="tab3" class="tabcontent">
                            <h3>Privacy</h3>
                        </div>
                        <div id="tab4" class="tabcontent">
                            <h3>Account</h3>
                        </div>
                        <div id="tab5" class="tabcontent">
                            <h3>Tokyo</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>

</section>

@endsection
