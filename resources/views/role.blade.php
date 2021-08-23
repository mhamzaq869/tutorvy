@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row " style="margin-top:6rem;">
        <div class="col-md-2"></div>
        <div class="col-md-4 " >

            <div class="card">
                <div class="card-body text-center">
                    <img src="../assets/images/ico/add-new.png" alt="">
                    <button class="view-text">
                        Continue As a Tutor
                    </button>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <img src="../assets/images/ico/add-new.png" alt="">
                    <button class="view-text">
                        Continue As a Student
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection
