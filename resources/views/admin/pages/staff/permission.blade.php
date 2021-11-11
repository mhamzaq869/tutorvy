@extends('admin.layouts.app')
@section('content')

<div class="container-fluid mt-5">
    <div class="row ml-1 mr-1">
        <div class="col-md-6">
            <h1> Role Permissions </h1>
        </div>
        <div class="col-md-6 m-0 p-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-items"><a href="#">Tutorvy</a></li>
                    <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page">&gt;</li>
                    <li class="breadcrumb-items m-0 p-0 ml-3 breadcrumb-item-active" aria-current="page"><a
                            href="">Staff member</a>
                    </li>

                </ol>
            </nav>
        </div>
    </div>

    <div class="col-12">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    </div>


    <div class="row ml-2">
        <div class="col-md-4 border">

            <form id="permissionForm" method="POST" action="{{route('admin.save.permission')}}">
                @csrf
                <input type="hidden" name="role_id" value="{{$id}}">
                <input type="hidden" name="permission" value="{{count($permissions)}}">

                <div class="row mt-2">
                    <div class="col-6 font-weight-bold"><span> Name </<span></div>
                    <div class="col-6 font-weight-bold"><span  style="float:right"> Action </<span></div>
                </div>
                <hr>
                @if(count($permissions) == 0 )
                    @foreach($sidebar_menus as $menu)
                        <div class="d-flex justify-content-between">
                            <span> {{$menu['title']}} </span>
                            <span>
                                <label class="switch ml-2">
                                    <input type="checkbox" class="s_status" onchange="subMenu('{{ str_replace(' ', '_', strtolower($menu['title'])) }}')" id="{{$menu['title']}}" name="{{$menu['title']}}">
                                    <span class="slider round"></span>
                                </label>  
                            <span>
                        </div>
                        <div id="sub_menu_div_{{ str_replace(' ', '_', strtolower($menu['title'])) }}" class="row border m-2"
                            style="display:none">

                            <label class="switch ml-2">
                                <input type="checkbox" class="sub_status" id="create_{{ str_replace(' ', '_', strtolower($menu['title'])) }}" name="create_{{ str_replace(' ', '_', strtolower($menu['title'])) }}">
                                <span class="slider round"></span>
                            </label> 

                            <label class="switch ml-2">
                                <input type="checkbox" class="sub_status" id="read_{{ str_replace(' ', '_', strtolower($menu['title'])) }}" name="read_{{ str_replace(' ', '_', strtolower($menu['title'])) }}">
                                <span class="slider round"></span>
                            </label> 

                            <label class="switch ml-2">
                                <input type="checkbox" class="sub_status" id="update_{{ str_replace(' ', '_', strtolower($menu['title'])) }}" name="update_{{ str_replace(' ', '_', strtolower($menu['title'])) }}">
                                <span class="slider round"></span>
                            </label> 

                            <label class="switch ml-2">
                                <input type="checkbox" class="sub_status" id="delete_{{ str_replace(' ', '_', strtolower($menu['title'])) }}" name="delete_{{ str_replace(' ', '_', strtolower($menu['title'])) }}">
                                <span class="slider round"></span>
                            </label> 

                        </div>
                    @endforeach
                @else
                @foreach($permissions as $per)
                    <div class="d-flex justify-content-between">
                        <span> {{$per['menu_title']}}</span>
                        <span>
                            @if($per['permission'] == 1)
                                <label class="switch ml-2">
                                    <input type="checkbox" class="s_status" id="{{$per['menu_title']}}" name="{{$per['menu_title']}}" checked>
                                    <span class="slider round"></span>
                                </label>   
                            @else
                                <label class="switch ml-2">
                                    <input type="checkbox" class="s_status" id="{{$per['menu_title']}}" name="{{$per['menu_title']}}">
                                    <span class="slider round"></span>
                                </label>   
                            @endif
                        <span>
                    </div>

                    <div id="sub_menu_div_{{ str_replace(' ', '_', strtolower($per['menu_title'])) }}" class="row border m-2"
                        style="display:none">
                        
                        <label class="switch ml-2">
                            <input type="checkbox" class="sub_status" {{$per['create'] == 1 ? 'checked' : ' '}}   id="create_{{ str_replace(' ', '_', strtolower($per['menu_title'])) }}" name="create_{{ str_replace(' ', '_', strtolower($per['menu_title'])) }}">
                            <span class="slider round"></span>
                        </label> 

                        <label class="switch ml-2">
                            <input type="checkbox" class="sub_status" {{$per['read'] == 1 ? 'checked' : ' '}} id="read_{{ str_replace(' ', '_', strtolower($per['menu_title'])) }}" name="read_{{ str_replace(' ', '_', strtolower($per['menu_title'])) }}">
                            <span class="slider round"></span>
                        </label> 

                        <label class="switch ml-2">
                            <input type="checkbox" class="sub_status" {{$per['update'] == 1 ? 'checked' : ' '}} id="update_{{ str_replace(' ', '_', strtolower($per['menu_title'])) }}" name="update_{{ str_replace(' ', '_', strtolower($per['menu_title'])) }}">
                            <span class="slider round"></span>
                        </label> 

                        <label class="switch ml-2">
                            <input type="checkbox" class="sub_status" {{$per['delete'] == 1 ? 'checked' : ' '}} id="delete_{{ str_replace(' ', '_', strtolower($per['menu_title'])) }}" name="delete_{{ str_replace(' ', '_', strtolower($per['menu_title'])) }}">
                            <span class="slider round"></span>
                        </label> 

                    </div>
                    @endforeach
                @endif


                <button type="submit" style="float:right" class="btn btn-primary mb-3">Save</button>
            </form>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {

        
    });

    function subMenu(value) {
        $("#sub_menu_div_"+value).toggle();
    }
</script>
@endsection