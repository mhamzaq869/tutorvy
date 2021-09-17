@extends('admin.layouts.app')

@section('content')
<style>
    .header h1 {
        margin-left: 70px;
    }
</style>
<div class="content-wrapper " style="overflow: hidden;">
    <section id="homesection" >
        <!-- dashborad home -->
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="heading-first">
                        Support
                    </h1>
                </div>
                <div class="col-md-6 m-0 p-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-items"><a href="#">Tutorvy</a></li>
                            <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page">&gt;</li>
                            <li class="breadcrumb-items m-0 p-0 ml-3 breadcrumb-item-active" aria-current="page"><a
                                    href="">Support</a>
                            </li>

                        </ol>
                    </nav>
                </div>

            </div>
            <div class="row">
                <div class="col-md-3">
                    <h3 class="heading-first">
                        All tickets
                    </h3>
                </div>
                <div class="col-md-5">
                </div>
                <div class="col-md-4">
                    <a href="{{route('admin.category')}}" class="schedule-btn float-right w-50 text-center">Add new category</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form>
                                        <div class="row border-bottom pb-2 ml-1 -mr-1">
                                            <div class="col-md-11">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="input-serach">
                                                            <input type="text" placeholder="Course name" class="courses-input"
                                                                id="std-email-1" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="input-option">
                                                            <select id="std-support">
                                                                <option>Tutor name</option>
                                                                <option>1</option>
                                                                <option>1</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="input-option">
                                                            <select id="std-support-1">
                                                                <option>Student</option>
                                                                <option>1</option>
                                                                <option>1</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="input-option">
                                                            <select id="std-support-2">
                                                                <option>Subject</option>
                                                                <option>1</option>
                                                                <option>1</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="reset-text mt-2">
                                                            <input type="reset" value="Reset" class="reset-button">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="sort-text">
                                                    <select id="sort-by-home">
                                                        <option value="3" disabled selected>Sort by</option>
                                                        <option value="1">Old to new</option>
                                                        <option value="1">New to old</option>
                                                        <option value="1">Lowest rate</option>
                                                        <option value="1">Highest rate</option>

                                                    </select>
                                                </div>
                                            </div>
                                    </form>
                                    <table class="table table-borderless mt-3">
                                        <thead>
                                            <tr
                                                style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                <th scope="col">
                                                    Ticket no.
                                                </th>
                                                <th scope="col">
                                                    User
                                                </th>
                                                <th scope="col">
                                                    Subject
                                                </th>
                                                <th scope="col">
                                                    Category
                                                </th>
                                                <th scope="col">
                                                    Date
                                                </th>
                                                <th scope="col">
                                                    Answered by
                                                </th>
                                                <th scope="col">Status</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td class="pt-4">
                                                    asdasd1245
                                                </td>
                                                <td class="pt-4">
                                                    Harram Laraib
                                                </td>
                                                <td class="pt-4">
                                                    Chemistry
                                                </td>
                                                <td class="pt-4">
                                                    Payment
                                                </td>
                                                <td class="pt-4">
                                                    12 Sep, 2021
                                                </td>
                                                <td class="pt-4">
                                                    Dansih
                                                </td>
                                                <td class="pt-4">
                                                    <span class="pending-text-1">
                                                        Pending
                                                    </span>
                                                </td>

                                                <td style="text-align: center;">
                                                    <a href="{{route('admin.ticket')}}" class="btn schedule-btn w-100">
                                                        View
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="pt-4">
                                                    asdasd1245
                                                </td>
                                                <td class="pt-4">
                                                    Harram Laraib
                                                </td>
                                                <td class="pt-4">
                                                    Chemistry
                                                </td>
                                                <td class="pt-4">
                                                    Payment
                                                </td>
                                                <td class="pt-4">
                                                    12 Sep, 2021
                                                </td>
                                                <td class="pt-4">
                                                    Dansih
                                                </td>
                                                <td class="pt-4">
                                                    <span class="paid-text-1">
                                                        Answered
                                                    </span>
                                                </td>

                                                <td style="text-align: center;">
                                                    <a href="{{route('admin.ticket')}}" class="btn schedule-btn w-100">
                                                        View
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="pt-4">
                                                    asdasd1245
                                                </td>
                                                <td class="pt-4">
                                                    Harram Laraib
                                                </td>
                                                <td class="pt-4">
                                                    Chemistry
                                                </td>
                                                <td class="pt-4">
                                                    Payment
                                                </td>
                                                <td class="pt-4">
                                                    12 Sep, 2021
                                                </td>
                                                <td class="pt-4">
                                                    Dansih
                                                </td>
                                                <td class="pt-4">
                                                    <span class="pending-text-1">
                                                        Pending
                                                    </span>
                                                </td>

                                                <td style="text-align: center;">
                                                    <a href="{{route('admin.ticket')}}" class="btn schedule-btn w-100">
                                                        View
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pt-4">
                                                    asdasd1245
                                                </td>
                                                <td class="pt-4">
                                                    Harram Laraib
                                                </td>
                                                <td class="pt-4">
                                                    Chemistry
                                                </td>
                                                <td class="pt-4">
                                                    Payment
                                                </td>
                                                <td class="pt-4">
                                                    12 Sep, 2021
                                                </td>
                                                <td class="pt-4">
                                                    Dansih
                                                </td>
                                                <td class="pt-4">
                                                    <span class="pending-text-1">
                                                        Pending
                                                    </span>
                                                </td>

                                                <td style="text-align: center;">
                                                    <a href="{{route('admin.ticket')}}" class="btn schedule-btn w-100">
                                                        View
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pt-4">
                                                    asdasd1245
                                                </td>
                                                <td class="pt-4">
                                                    Harram Laraib
                                                </td>
                                                <td class="pt-4">
                                                    Chemistry
                                                </td>
                                                <td class="pt-4">
                                                    Payment
                                                </td>
                                                <td class="pt-4">
                                                    12 Sep, 2021
                                                </td>
                                                <td class="pt-4">
                                                    Dansih
                                                </td>
                                                <td class="pt-4">
                                                    <span class="pending-text-1">
                                                        Pending
                                                    </span>
                                                </td>

                                                <td style="text-align: center;">
                                                    <a href="{{route('admin.ticket')}}" class="btn schedule-btn w-100">
                                                        View
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pt-4">
                                                    asdasd1245
                                                </td>
                                                <td class="pt-4">
                                                    Harram Laraib
                                                </td>
                                                <td class="pt-4">
                                                    Chemistry
                                                </td>
                                                <td class="pt-4">
                                                    Payment
                                                </td>
                                                <td class="pt-4">
                                                    12 Sep, 2021
                                                </td>
                                                <td class="pt-4">
                                                    Dansih
                                                </td>
                                                <td class="pt-4">
                                                    <span class="pending-text-1">
                                                        Pending
                                                    </span>
                                                </td>

                                                <td style="text-align: center;">
                                                    <a href="{{route('admin.ticket')}}" class="btn schedule-btn w-100">
                                                        View
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="pt-4">
                                                    asdasd1245
                                                </td>
                                                <td class="pt-4">
                                                    Harram Laraib
                                                </td>
                                                <td class="pt-4">
                                                    Chemistry
                                                </td>
                                                <td class="pt-4">
                                                    Payment
                                                </td>
                                                <td class="pt-4">
                                                    12 Sep, 2021
                                                </td>
                                                <td class="pt-4">
                                                    Dansih
                                                </td>
                                                <td class="pt-4">
                                                    <span class="pending-text-1">
                                                        Pending
                                                    </span>
                                                </td>

                                                <td style="text-align: center;">
                                                    <a href="{{route('admin.ticket')}}" class="btn schedule-btn w-100">
                                                        View
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="pt-4">
                                                    asdasd1245
                                                </td>
                                                <td class="pt-4">
                                                    Harram Laraib
                                                </td>
                                                <td class="pt-4">
                                                    Chemistry
                                                </td>
                                                <td class="pt-4">
                                                    Payment
                                                </td>
                                                <td class="pt-4">
                                                    12 Sep, 2021
                                                </td>
                                                <td class="pt-4">
                                                    Dansih
                                                </td>
                                                <td class="pt-4">
                                                    <span class="paid-text-1">
                                                        Paid
                                                    </span>
                                                </td>

                                                <td style="text-align: center;">
                                                    <a href="{{route('admin.ticket')}}" class="btn schedule-btn w-100">
                                                        View
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
    </section>
</div>
@endsection
