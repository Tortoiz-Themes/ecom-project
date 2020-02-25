<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>Laravel</title>
        <!--- Font Icon -->
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- Plugins css -->
        <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">

        <!-- Theme Style -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <!-- Modernizr js -->
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    </head>
    <body>
        <div id="app">
            <router-view></router-view>
        </div>
        <script src="/js/app.js"></script>
        <!-- jQuery js -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <!-- Bootstrap js -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <!-- Popper js -->
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <!-- Owl carousel js -->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <!-- Masonary js -->
        <script src="{{ asset('assets/js/masonary.min.js') }}"></script>
        <!-- Trackpad Scroll js -->
        <script src="{{ asset('assets/js/jquery.trackpad-scroll-emulator.min.js') }}"></script>
        <!-- Sticky ResizeSensor js -->
        <script src="{{ asset('assets/js/ResizeSensor.min.js') }}"></script>
        <!-- Sticky Sidebar js -->
        <script src="{{ asset('assets/js/theia-sticky-sidebar.min.js') }}"></script>
        <!-- Sticky Youtube Video js -->
        <script src="{{ asset('assets/js/youtube-video.js') }}"></script>
        <!-- Sticky Wan Spinner js -->
        <script src="{{ asset('assets/js/wan-spinner.js') }}"></script>
        <!-- Rater js -->
        <script src="{{ asset('assets/js/rater.min.js') }}"></script>
        <!-- Tabs Steps js -->
        <script src="{{ asset('assets/js/jquery-steps.min.js') }}"></script>
        <!-- Range Slider js -->
        <script src="{{ asset('assets/js/rangeslider.min.js') }}"></script>
        <!-- Kinetic js -->
        <script src="{{ asset('assets/js/kinetic.js') }}"></script>
        <!-- Final Countdown js -->
        <script src="{{ asset('assets/js/jquery.final-countdown.min.js') }}"></script>
        <!-- datetimepicker js -->
        <script src="{{ asset('assets/js/jquery.datetimepicker.full.min.js') }}"></script>
        <!-- Validate js -->
        <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
        <!-- Plugin js -->
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <!-- Google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_8C7p0Ws2gUu7wo0b6pK9Qu7LuzX2iWY&amp;libraries=places&amp;"></script>
        <!-- Markerclusterer js -->
        <script src="{{ asset('assets/js/markerclusterer.js') }}"></script>
        <!-- Maps js -->
        <script src="{{ asset('assets/js/maps.js') }}"></script>
        <!-- Infobox js -->
        <script src="{{ asset('assets/js/infobox.min.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
