@extends('admin.layouts.app')

@section('content')
     <!--section start  -->
    <div class="container-fluid mt-5">
        <div class="row ml-1 mr-1">
            <div class="col-md-6">
                <h1> Activity Logs </h1>
            </div>
            <div class="col-md-6 m-0 p-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-items"><a href="#">Home</a></li>
                        <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page">&gt;</li>
                        <li class="breadcrumb-items m-0 p-0 ml-3 breadcrumb-item-active" aria-current="page"><a
                                href="">Activity Logs</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="card">
            <div class="card-body">                            
                <div class="row ">
                    <div class="col-md-12">
                        <table class="table table-borderless">
                            <thead>
                                <tr class="border-bottom table-margin-top">
                                    <th scope="col"> Sr no.</th>
                                    <th scope="col"> Action </th>
                                    <th scope="col"> User Agent</th>
                                </tr>
                            </thead>
                            <tbody id="datashow">
                                @foreach($activity_logs as $logs)
                                    <tr>
                                        <td class="pt-4">
                                            {{$loop->iteration}}
                                        </td>
                                        <td class="pt-4">
                                            {!! $logs->action_perform !!}
                                        </td>
                                        <td class="pt-4">
                                            {{$logs->user_agent}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

