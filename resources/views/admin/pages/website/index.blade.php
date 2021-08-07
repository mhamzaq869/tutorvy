@extends('admin.layouts.app')

@section('content')

  <!--section start  -->
  <div class="container-fluid pb-4">
    <a href="">
        <br />
        <h1>Webiste </h1>
    </a>
</div>
<!-- start section -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-4">
            <a href="../cms/cms.html">
                <div class="card-web btn pt-3 pb-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="">
                                    <img src="../assets/img/sidebar/pages.svg" alt="pages" height="80" />
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p class="view-booking text-left"> Last updated 2 weeks ago </span>
                                <h2 class="text-left">Pages</h2>
                                <p class="text-left paragraph-text-1">15 pages
                                </p>
                                <div class="arrow text-right arrow-bg mt-2">
                                    <img src="../assets/img/ico/feather-arrow-left.svg" alt="arrow"
                                        class="mr-2" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="../blog/blog.html">
                <div class="card-web btn pt-3 pb-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="">
                                    <img src="../assets/img/sidebar/blogs.svg" alt="pages" height="80" />
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p class="view-booking text-left"> Last updated 2 weeks ago </span>
                                <h2 class="text-left">Blog</h2>
                                <p class="text-left paragraph-text-1">15 posts
                                </p>
                                <div class="arrow text-right arrow-bg mt-2">
                                    <img src="../assets/img/ico/feather-arrow-left.svg" alt="arrow"
                                        class="mr-2" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="../manu/manu.html">
                <div class="card-web btn pt-3 pb-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="">
                                    <img src="../assets/img/sidebar/menus.svg" alt="pages" height="80" />
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p class="view-booking text-left"> Last updated 2 weeks ago </span>
                                <h2 class="text-left">Menu</h2>
                                <p class="text-left paragraph-text-1">2 menu
                                </p>
                                <div class="arrow text-right arrow-bg mt-2">
                                    <img src="../assets/img/ico/feather-arrow-left.svg" alt="arrow"
                                        class="mr-2" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>
<!-- end section -->

@endsection
