@extends('admin.layouts.app')
@section('content')
  <!--section start  -->
  <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        < Classes </h1>
                </div>

            </div>
        </div>
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="ml-4">All classes</h3>
                </div>

            </div>
        </div>
        <!-- tutor request bookings  table start-->

        <div class="container-fluid ">
            <div class="row pt-4 mt-3 ml-1 mr-1 container-bg">
                <div class="col-md-12">
                    <form>
                        <div class="row border-bottom pb-3">
                            <div class="col-md-2">
                                <div class="input-option">
                                    <select id="std-level">
                                        <option selected disabled>Student Level</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advance</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="input-option ml-1">
                                    <select id="availability-id">
                                        <option>Availability</option>
                                        <option>1</option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="input-option ml-1">
                                    <select id="rate-number">
                                        <option selected disabled>Rate</option>
                                        <option>Less than $5</option>
                                        <option>$6 - $10 </option>
                                        <option>$11 - $14 </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="input-option ml-1">
                                    <select id="varified-id">
                                        <option selected disabled>Varified by</option>
                                        <option>Harram Laraib</option>
                                        <option>Harram Laraib</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="reset-text mt-2">
                                    <input type="reset" value="Reset" class="reset-button">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Student Name</th>
                                        <th scope="col">Rate</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Class duration</th>
                                        <th scope="col">Payment Status</th>
                                        <th scope="col">Review </th>
                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pt-4">
                                            Harram Laraib
                                        </td>
                                        <td class="pt-4">50$</td>
                                        <td class="pt-4">30 june 2021</td>
                                        <td class="pt-4">08am-09pm</td>
                                        <td class="pt-4">
                                            <span class="pending-text-1">Pending</span>
                                        </td>
                                        <td class="pt-4">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="">4.0</span>
                                        </td>

                                        <td class="pt-3">
                                            <a href="" class="btn schedule-btn w-100">
                                                View class details
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pt-4">
                                            Harram Laraib
                                        </td>
                                        <td class="pt-4">50$</td>
                                        <td class="pt-4">30 june 2021</td>
                                        <td class="pt-4">08am-09pm</td>
                                        <td class="pt-4">
                                            <span class="pending-text-1">Pending</span>
                                        </td>
                                        <td class="pt-4">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="">4.0</span>
                                        </td>

                                        <td class="pt-3">
                                            <a href="" class="btn schedule-btn w-100">
                                                View class details
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pt-4">
                                            Harram Laraib
                                        </td>
                                        <td class="pt-4">50$</td>
                                        <td class="pt-4">30 june 2021</td>
                                        <td class="pt-4">08am-09pm</td>
                                        <td class="pt-4">
                                            <span class="pending-text-1">Pending</span>
                                        </td>
                                        <td class="pt-4">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="">4.0</span>
                                        </td>

                                        <td class="pt-3">
                                            <a href="" class="btn schedule-btn w-100">
                                                View class details
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pt-4">
                                            Harram Laraib
                                        </td>
                                        <td class="pt-4">50$</td>
                                        <td class="pt-4">30 june 2021</td>
                                        <td class="pt-4">08am-09pm</td>
                                        <td class="pt-4">
                                            <span class="pending-text-1">Pending</span>
                                        </td>
                                        <td class="pt-4">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="">4.0</span>
                                        </td>

                                        <td class="pt-3">
                                            <a href="" class="btn schedule-btn w-100">
                                                View class details
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pt-4">
                                            Harram Laraib
                                        </td>
                                        <td class="pt-4">50$</td>
                                        <td class="pt-4">30 june 2021</td>
                                        <td class="pt-4">08am-09pm</td>
                                        <td class="pt-4">
                                            <span class="pending-text-1">Pending</span>
                                        </td>
                                        <td class="pt-4">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="">4.0</span>
                                        </td>

                                        <td class="pt-3">
                                            <a href="" class="btn schedule-btn w-100">
                                                View class details
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pt-4">
                            Harram Laraib
                                        </td>
                                        <td class="pt-4">50$</td>
                                        <td class="pt-4">30 june 2021</td>
                                        <td class="pt-4">08am-09pm</td>
                                        <td class="pt-4">
                                            <span class="pending-text-1">Pending</span>
                                        </td>
                                        <td class="pt-4">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="">4.0</span>
                                        </td>

                                        <td class="pt-3">
                                            <a href="" class="btn schedule-btn w-100">
                                                View class details
                                            </a>
                                        </td>
                                    </tr>     <tr>
                                        <td class="pt-4">
                            Harram Laraib
                                        </td>
                                        <td class="pt-4">50$</td>
                                        <td class="pt-4">30 june 2021</td>
                                        <td class="pt-4">08am-09pm</td>
                                        <td class="pt-4">
                                            <span class="pending-text-1">Pending</span>
                                        </td>
                                        <td class="pt-4">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="">4.0</span>
                                        </td>

                                        <td class="pt-3">
                                            <a href="" class="btn schedule-btn w-100">
                                                View class details
                                            </a>
                                        </td>
                                    </tr>     <tr>
                                        <td class="pt-4">
                            Harram Laraib
                                        </td>
                                        <td class="pt-4">50$</td>
                                        <td class="pt-4">30 june 2021</td>
                                        <td class="pt-4">08am-09pm</td>
                                        <td class="pt-4">
                                            <span class="pending-text-1">Pending</span>
                                        </td>
                                        <td class="pt-4">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="">4.0</span>
                                        </td>

                                        <td class="pt-3">
                                            <a href="" class="btn schedule-btn w-100">
                                                View class details
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <nav aria-label="Page navigation" class="mt-4">
                <ul class="pagination bg-white pagination-example-1">
                    <li class="page-item">
                        <a class="page-link" href="#" tabindex="-1">
                            <img src="{{ asset('/admin/assets/img/ico/arrow-left-1.png')}}" alt="image" />
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link page-link-1" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                        
                            <img src="{{ asset('/admin/assets/img/ico/arrow-right-1.png')}}" alt="image" />
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- end table -->

@endsection
