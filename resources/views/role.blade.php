@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('register.role')}}" method="get">
            @csrf
            <div class="row " style="margin-top:6rem;">
                <div class="col-md-2"></div>
                <div class="col-md-4 ">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="../assets/images/ico/add-new.png" alt="">
                            <button type="submit" name="tutor" class="view-text">
                                Continue As a Tutor
                            </button>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="../assets/images/ico/add-new.png" alt="">
                            <input type="submit" name="student" class="view-text" value="Continue As a Student" />
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </form>
    </div>
@endsection
