@extends('admin.layouts.app')
<style>
    .modelImg{
        width:220px;
    }
    .tab-content > .active{
        background-color:none !important ;
    }
    #payPalModal .modal-body {
    overflow-y: hidden;
    height: auto;
}
</style>
@section('content')
<!--section start  -->
    <section id="homesection" style="display: flex;z-index: -1;">
        <!-- dashborad home -->
        <div class="container-fluid mt-3">
            <div class="row ml-1 mr-1">
                <div class="col-md-6">
                    <h1 class="animate__animated animate__bounce animate__delay-0.3s">
                        Integration
                    </h1>
                </div>
                <div class="col-md-6 m-0 p-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-items"><a href="#">Tutorvy</a></li>
                            <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page">&gt;</li>
                            <li class="breadcrumb-items m-0 p-0 ml-3 breadcrumb-item-active" aria-current="page"><a
                                    href="">Integration</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button class="btn-general pull-right" data-toggle="modal" data-target="#payPalModal"> With Paypal</button>
                    <button class="btn-general pull-right mr-3 " data-toggle="modal" data-target="#payPalModal"> With Paypal</button>
                </div>
                <div class="col-md-12">
                    <table class="table table-borderless">
                        <thead>
                            <tr class="border-bottom table-margin-top ">
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subjects</th>
                                <th scope="col">Location</th>
                                <th scope="col">Level</th>
                                <th scope="col">Availability </th>
                                <th scope="col">Rate</th>

                                <th scope="col"></th>

                            </tr>
                        </thead>
                        <tbody id="datas">
                            <tr>
                                <td class="">
                                        <img src="{{asset ('admin/assets/img/logo/boy.jpg')}}"  class="tutor-img" alt=""> M Harram Laraib
                                </td>
                                <td class="pt-24">
                                    <span href="#" data-toggle="tooltip"
                                        title="harramlaraib127@gmail.com">har***</span>
                                </td>
                                <td class="pt-24">English</td>
                                <td class="pt-24">Lahore, Punjab Pakistan</td>
                                <td class="pt-24">Advance</td>
                                <td class="pt-24" id="avalibility">8am-8pm</td>
                                <td class="pt-24">$50</td>

                                <td class="pt-3 text-right">
                                    <a href="tutor-manage/request.html" class="cencel-btn btn">
                                        View
                                    </a>
                                </td>
                                <td class="pt-3 text-right">
                                    <button class="schedule-btn" data-toggle="modal"
                                        data-target="#payPalModalCenter">Assign</button>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Modal -->
            <div class="modal fade" id="payPalModal" tabindex="-1" role="dialog" aria-labelledby="payPalModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <img src="{{asset('admin/assets/img/ico/PayPal.png')}}" class=" modelImg p-3" alt="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item w-50 text-center">
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Sandbox</a>
                                        </li>
                                        <li class="nav-item w-50 text-center">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Live</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <form class=" p-3">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Secret Key</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Secret Key">
                                                </div>
                                                    <button type="submit" class="btn btn-primary pull-right">Pay Now</button>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <form class=" p-3">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Secret Key</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Secret Key">
                                                </div>
                                                    <button type="submit" class="btn btn-primary pull-right">Pay Now</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                    </div>
                </div>
            </div>
</section>
@endsection
