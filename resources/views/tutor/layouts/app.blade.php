<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorvy</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    <!--favicon --->
    <link href="{{ asset('assets/images/ico/side-icons.png') }}" rel="icon">
    <!-- bootstrap link -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/chat.css') }}" rel="stylesheet">
    <!-- fonawsome -->
    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">
      <!-- Dropify CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/multiselect.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/dropify.css')}}" />
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />

    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" />
    <!-- Styles -->
    @include('tutor.layouts.css')

</head>
<body>
    <div class="wrapper" id="wrapper">
        <!-- side navbar -->
        @include('tutor.layouts.sidebar')
        <!-- seide navbar end -->
        <div class="content" style="width: 100%;background-color: #FBFBFB !important;">
            @include('tutor.layouts.navbar')
            <!-- Main-->
            @yield('content')
        <div>

    </div>

     <!-- custom js -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
     <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
     <script src="{{ asset('assets/js/mobile.js') }}"></script>
     <script src="{{ asset('assets/js/history.js') }}"></script>
     <script src="{{ asset('assets/js/subject.js') }}"></script>
     <script src="{{ asset('assets/js/homePage.js') }}"></script>
     <script src="{{ asset('assets/js/clander.js') }}"></script>
     <script src="{{ asset('assets/js/dropify.js')}}"></script>
     <script src="{{ asset('assets/js/multiselect.js')}}"></script>
     <script src="{{ asset('assets/js/course.js')}}"></script>
     <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
     
    <!-- add before </body> -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
     @include('js_files.chat')

<script>
     /*
We need to register the required plugins to do image manipulation and previewing.
*/
FilePond.registerPlugin(
  FilePondPluginImagePreview,
);

// Select the file input and use create() to turn it into a pond
// in this example we pass properties along with the create method
// we could have also put these on the file input element itself
FilePond.create(
	document.querySelector('.filepond'),
	{
	labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
    imagePreviewHeight: 170,
    imageCropAspectRatio: '1:1',
    imageResizeTargetWidth: 200,
    imageResizeTargetHeight: 200,
    stylePanelLayout: 'compact circle',
    styleLoadIndicatorPosition: 'center bottom',
    styleButtonRemoveItemPosition: 'center bottom'
	}
);
      $(document).ready(function(){
        $(".dropify").dropify();
       
    })
</script>
</body>
</html>
