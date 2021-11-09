@extends(Auth::user()->role == 2 ? 'tutor.layouts.app' : 'student.layouts.app' )

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
            width: 217px;
            border: 1px solid #6EAAFF;
            border-radius: 5px;
            padding: 5px;
        }

        .reciever p:hover,
        .sender p:hover {
            cursor: pointer;
        }

        .recDull {
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

        .offline {
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
        #chatList{
            cursor: pointer;
        }
        .chatActive{
            background-color: #FFFFFF;
            border-radius: 8px;
        }
    </style>

    <div class="content content-wrapper " style="width: 100%;background-color: #FBFBFB !important;" id="app">
        <div class="container-fluid">
            <p class="heading-first ml-4 ">Inbox</p>
            <chat-app :user="{{Auth::user()}}"></chat-app>
        </div>
    </div>

@endsection

