@extends('tutor.layouts.app')

@section('content')
    <style>
        .chatLeft:hover {
            text-decoration: none;
        }

        .w-100 {
            width: 100%;
        }

        .rightChatIcon {
            font-size: 25px;
            padding-left: 9px;
            padding-top: 9px;
            padding-right: 19px;
            color: #00132D;
        }

        .rightChatIcon:hover {
            text-decoration: none;
        }

        .f-19 {
            font-size: 19px;
        }

        .sendRight {
            right: 28px;
            position: absolute;
            top: 8px;
            color: #00132D;
            font-size: 20px;
        }

        .sendLeft {
            left: 48px;
            position: absolute;
            z-index: 3;
            color: #00132D;
        }

        .sendLeft i {
            font-size: 19px;
        }

        .chatArea {
            height: 365px;
            padding-left: 0px;
            padding-right: 0;
            overflow-y: scroll;
        }

        .headIcon {
            font-size: 28px;
            padding-top: 4px;
            padding-left: 16px;
            color: #00132D;
            font-weight: 400;
        }

        .activate {
            background: #fff;
        }

        .sender {
            float: right;
        }

        .reciever p,
        .sender p {
            width: 219px;
            border: 1px solid #6EAAFF;
            border-radius: 5px;
            padding: 5px;
        }

        .reciever p:hover,
        .sender p:hover {
            cursor: pointer;
        }

        .recDull {
            position: absolute;
            left: 34%;
            color: #BCC0C7;
        }

        .dull {
            position: absolute;
            right: 2%;
            color: #BCC0C7;
        }

        .chatTime {
            float: right;
            font-size: 12px;
        }

        .line-box2 {
            border-bottom: 1px solid #D6DBE2;
            margin-bottom: 10px;
        }

        .textMenu2 {
            color: #00132D;
            position: absolute;
            top: 28%;
            left: 45%;
            display: none;
        }

        .textMenu {
            color: #00132D;
            position: absolute;
            top: 28%;
            right: 45%;
        }

        .textMenu2 i,
        .textMenu i {
            font-size: 22px;
        }

        .search-box-icon {
            color: #00132D;
            font-size: 22px;
        }

        .activeDot {
            width: 14px;
            border: 2px solid #fff;
            position: relative;
            height: 14px;
            right: 9px;
            top: 39px;
            background: green;
            border-radius: 50%;
        }

        .offlice {
            background: gray !important;
        }

        .emojionearea.emojionearea-inline>.emojionearea-button {
            left: 3px !important;
        }

        .emojionearea.emojionearea-inline>.emojionearea-editor {
            height: 32px;
            min-height: 20px;
            overflow: hidden;
            white-space: nowrap;
            position: absolute;
            top: 0;
            left: 93px;
            right: 24px;
            padding: 6px 0;
        }

        .emojionearea .emojionearea-picker.emojionearea-picker-position-top {

            left: 5px;
            /* top: -10px; */
        }

    </style>

    <div class="content content-wrapper " style="width: 100%;background-color: #FBFBFB !important;">
        <div class="container-fluid">
            <p class="heading-first ml-4 ">Inbox</p>
            <div id="react"></div>
            <div class="row">
                <div class="col-md-12 mb-1 ">
                    <div class=" card  bg-toast infoCard">


                        <div class="card-body row">
                            <div class="col-md-1 text-center">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-11 pl-0">
                                <small>
                                    ` Connect with your students to know more about their requirements <a href="#">Learn
                                        More</a>

                                </small>
                                <a href="#" class="cross" onclick="hideCard()">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="background-color: #F2F3F4;">
                    <div class="box-main pt-3 pb-3">
                        <div class="input-box">
                            <input type="" placeholder="Search messeges">
                            <a href="#">
                                <i class="fa fa-search search-box-icon"></i>
                                <!-- <img src="../assets/img/ico/Search.png" class="search-box-icon"> -->
                            </a>
                        </div>
                        <div class="line-box"></div>
                        @foreach ($students as $student)
                            <a href="#" class="chatLeft" id="chatClient_1"
                                onclick="selectUser(`{{ $student->id }}`)">
                                <!-- <a href="#" class="chatLeft" id="chatClient_1" > -->
                                <div class="container-fluid m-0 p-0 img-chats">
                                    <img src="{{ asset('admin/assets/img/logo/harram.jpg') }}" class="leftImg ml-1">
                                    <span class="activeDot" id="activeDot_{{ $student->id }}"></span>
                                    <div class="img-chat w-100">

                                        <div class="row">
                                            <div class="col-9">
                                                <p class="name-client">{{ $student->first_name }}
                                                    {{ $student->last_name }}</p>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="time-chat">11:25</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <p class="massage-client" id="recent_msg_{{ $student->id }}">It is a long
                                                    distae... </p>

                                            </div>
                                            <div class="col-md-3">
                                                <span class="dot pl-2 " id="unseen_msg_cnt_{{ $student->id }}">2
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>

                </div>
                <div class="col-md-9  chatSet" style="">
                    <nav class="chatHead navbars navbar-light bg-white m-0 p-0 pl-3 pr-3 row">
                        <div class="col-md-6 col-6">
                            <a class="navbar-brand pb-0" href="#">
                                <div class="container-fluid m-0 p-0 img-chats">

                                    <img src="{{ asset('admin/assets/img/logo/harram.jpg') }}">

                                    <div class="img-chat">
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="name-client">Harram Laraib </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="massage-client" style="position: relative;top: -5px;">Online
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-6 pt-3 text-right">
                            <input type="hidden" class="col-sm-9 form-control ">

                            <a href="#">
                                <i class="fa fa-search headIcon"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-ellipsis-v headIcon"></i>
                            </a>
                        </div>
                    </nav>
                    <div class="line-box2"></div>

                    <div class="row chatArea p-5 bg-white" id="chatArea">


                    </div>
                    <div class="container-fluid mb-3">
                        <div class="search-type ">
                            <div class="row">
                                <div class="col-md-2 col-4">
                                </div>
                                <div class="col-md-10">
                                    <span class="text-muted" id="typingUser"></span>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-12 col-8">

                                    <form id="chat_form" action="{{ route('store.text') }}">
                                        <a href="" class="sendLeft" type="button">
                                            <i class="fa fa-paperclip rightChatIcon"></i>
                                        </a>
                                        <input type="search" id="msg" class="w-100" alt="message"
                                            onKeyUp="sendTypingEvent()">
                                        <a href="" class="sendRight" type="submit">
                                            <i class="fa fa-paper-plane f-19"></i>
                                        </a>
                                    </form>
                                    <!-- <img src="../assets/img/ico/Icon material-send.png" style="position: relative;left: -35px;height: 25px;margin-top: 10px;"> -->
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="col-md-9 chatDefault">
                    <img src="http://www.tutorvy.com/assets/images/comming/coming-soon.png" alt="">
                </div>
            </div>

        </div>
    </div>

@endsection
